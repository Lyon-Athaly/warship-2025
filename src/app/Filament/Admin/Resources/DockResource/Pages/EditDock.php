<?php

namespace App\Filament\Admin\Resources\DockResource\Pages;

use App\Filament\Admin\Resources\DockResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDock extends EditRecord
{
    protected static string $resource = DockResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
