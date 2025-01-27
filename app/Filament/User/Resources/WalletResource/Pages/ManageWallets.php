<?php

namespace App\Filament\User\Resources\WalletResource\Pages;

use App\Filament\User\Resources\WalletResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ManageRecords;
use Illuminate\Support\Str;

class ManageWallets extends ManageRecords
{
    protected static string $resource = WalletResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()
                ->createAnother(false)
                ->mutateFormDataUsing(function (array $data): array {
                    $data['slug'] = Str::slug($data['name']);
                    $data['user_id'] = auth()->id();

                    return $data;
                })
                ->modalWidth('md'),
        ];
    }
}
