<?php

namespace App\Filament\Admin\Resources\NationResource\Pages;

use App\Filament\Admin\Resources\NationResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditNation extends EditRecord
{
    protected static string $resource = NationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
