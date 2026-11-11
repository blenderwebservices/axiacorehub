<?php

namespace App\Filament\Resources\SiteSettings;

use App\Filament\Resources\SiteSettings\Pages\ManageSiteSettings;
use App\Models\SiteSetting;
use BackedEnum;
use Filament\Actions\EditAction;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use UnitEnum;

class SiteSettingResource extends Resource
{
    protected static ?string $model = SiteSetting::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedAdjustmentsHorizontal;

    protected static ?string $navigationLabel = 'Contenido y Activos CRO';

    protected static ?string $modelLabel = 'Bloque de Contenido';

    protected static ?string $pluralModelLabel = 'Contenido y Activos CRO';

    protected static string|UnitEnum|null $navigationGroup = 'Arquitectura CRO';

    protected static ?int $navigationSort = 4;

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('label')
                    ->label('Sección / Campo')
                    ->required(),
                TextInput::make('key')
                    ->label('Clave Interna')
                    ->disabled()
                    ->dehydrated(false),
                Textarea::make('value')
                    ->label('Contenido o URL de Imagen')
                    ->rows(4)
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('group')
                    ->label('Sección')
                    ->badge()
                    ->color('primary')
                    ->sortable(),
                TextColumn::make('label')
                    ->label('Elemento CRO')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('value')
                    ->label('Valor Actual')
                    ->limit(80)
                    ->searchable(),
            ])
            ->recordActions([
                EditAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => ManageSiteSettings::route('/'),
        ];
    }
}
