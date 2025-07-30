<?php

namespace App\Filament\Admin\Resources\NationResource\Pages;

use App\Filament\Admin\Resources\NationResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListNations extends ListRecords
{
    protected static string $resource = NationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
