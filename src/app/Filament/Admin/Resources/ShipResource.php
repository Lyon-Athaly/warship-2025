<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\ShipResource\Pages;
use App\Filament\Admin\Resources\ShipResource\RelationManagers;
use App\Models\Ship;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ShipResource extends Resource
{
    protected static ?string $model = Ship::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('type_id')
                    ->relationship('type', 'name')
                    ->required(),
                Forms\Components\Select::make('dock_id')
                    ->relationship('dock', 'name')
                    ->required(),
                Forms\Components\Select::make('nation_id')
                    ->relationship('nation', 'name')
                    ->required(),
                Forms\Components\Select::make('hull_number')
                    ->label('Hull Number')
                    ->required(),
                Forms\Components\TextInput::make('built_year'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('type.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('dock.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('nation.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('hull_number')
                    ->label('Hull Number')
                    ->numeric()
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('built_year'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListShips::route('/'),
            'create' => Pages\CreateShip::route('/create'),
            'edit' => Pages\EditShip::route('/{record}/edit'),
        ];
    }
}
