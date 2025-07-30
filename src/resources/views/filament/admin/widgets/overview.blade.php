<x-filament::widget>
    <x-filament::card>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <div class="text-center">
                <div class="text-lg font-bold">{{ $ships }}</div>
                <div class="text-sm text-gray-500">Ships</div>
            </div>
            <div class="text-center">
                <div class="text-lg font-bold">{{ $types }}</div>
                <div class="text-sm text-gray-500">Types</div>
            </div>
            <div class="text-center">
                <div class="text-lg font-bold">{{ $docks }}</div>
                <div class="text-sm text-gray-500">Docks</div>
            </div>
            <div class="text-center">
                <div class="text-lg font-bold">{{ $nations }}</div>
                <div class="text-sm text-gray-500">Nations</div>
            </div>
        </div>
    </x-filament::card>
</x-filament::widget>

