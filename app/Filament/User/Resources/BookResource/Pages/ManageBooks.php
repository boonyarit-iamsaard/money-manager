<?php

namespace App\Filament\User\Resources\BookResource\Pages;

use App\Filament\User\Resources\BookResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ManageRecords;
use Illuminate\Support\Str;

class ManageBooks extends ManageRecords
{
    protected static string $resource = BookResource::class;

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
