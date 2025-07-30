<?php

namespace App\Filament\Admin\Widgets;

use App\Models\Ship;
use App\Models\Type;
use App\Models\Dock;
use App\Models\Nation;
use Filament\Widgets\Widget;

class Overview extends Widget
{
    protected static string $view = 'filament.admin.widgets.overview';

    protected function getViewData(): array
    {
        return [
            'ships' => Ship::count(),
            'types' => Type::count(),
            'docks' => Dock::count(),
            'nations' => Nation::count(),
        ];
    }
}
