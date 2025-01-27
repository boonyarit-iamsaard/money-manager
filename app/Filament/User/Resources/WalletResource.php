<?php

namespace App\Filament\User\Resources;

use App\Filament\User\Resources\WalletResource\Pages\ManageWallets;
use App\Models\Wallet;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;

class WalletResource extends Resource
{
    protected static ?string $model = Wallet::class;

    protected static ?string $navigationIcon = 'heroicon-o-wallet';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->required()
                    ->minLength(3)
                    ->maxLength(20)
                    ->validationMessages([
                        // TODO: improve error messages
                        'required' => 'Please enter a wallet name.',
                    ])
                    ->columnSpanFull(),
                Select::make('book_id')
                    ->options(function () {
                        return BookResource::getEloquentQuery()
                            ->where('user_id', auth()->id())
                            ->pluck('name', 'id');
                    })
                    ->required()
                    ->validationMessages([
                        'required' => 'Please select a book.',
                    ])
                    ->native(false)
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable(),
                TextColumn::make('book.name')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->modifyQueryUsing(function (Builder $query) {
                $query->where('user_id', auth()->id());
            })
            ->filters([
                //
            ])
            ->actions([
                EditAction::make()
                    ->mutateFormDataUsing(function (array $data): array {
                        $data['slug'] = Str::slug($data['name']);

                        return $data;
                    })
                    ->modalWidth('md'),
                DeleteAction::make(),
            ])
            ->bulkActions([
                //
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => ManageWallets::route('/'),
        ];
    }
}
