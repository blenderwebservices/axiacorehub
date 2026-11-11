<?php

namespace App\Filament\Resources\Pillars;

use App\Filament\Resources\Pillars\Pages\ManagePillars;
use App\Models\Pillar;
use BackedEnum;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;
use UnitEnum;

class PillarResource extends Resource
{
    protected static ?string $model = Pillar::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedSquares2x2;

    protected static ?string $navigationLabel = 'Pilares (Evoluciona, Conecta, Trasciende)';

    protected static ?string $modelLabel = 'Pilar Estratégico';

    protected static ?string $pluralModelLabel = 'Pilares Estratégicos';

    protected static string|UnitEnum|null $navigationGroup = 'Arquitectura CRO';

    protected static ?int $navigationSort = 1;

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Nombre del Pilar')
                    ->required()
                    ->maxLength(120),
                TextInput::make('slug')
                    ->label('Slug (URL)')
                    ->required()
                    ->maxLength(120),
                TextInput::make('kicker')
                    ->label('Subtítulo Kicker')
                    ->maxLength(255),
                TextInput::make('cta_label')
                    ->label('Texto Botón Tarjeta Home')
                    ->default('Descubre')
                    ->required(),
                Textarea::make('short_description')
                    ->label('Resumen en Tarjeta Home')
                    ->required()
                    ->rows(2)
                    ->columnSpanFull(),
                TextInput::make('card_image_url')
                    ->label('Imagen Tarjeta Home (URL original)')
                    ->url()
                    ->columnSpanFull(),
                TextInput::make('hero_title')
                    ->label('Título Hero de la Página del Pilar')
                    ->required()
                    ->maxLength(255),
                TextInput::make('hero_subtitle')
                    ->label('Subtítulo Hero de la Página')
                    ->maxLength(255),
                Textarea::make('hero_description')
                    ->label('Descripción Hero de la Página')
                    ->rows(3)
                    ->columnSpanFull(),
                TextInput::make('hero_cta_text')
                    ->label('Texto CTA Hero (Dirige al Formulario de Contacto)')
                    ->default('Agendar mi Sesión de Diagnóstico')
                    ->required(),
                TextInput::make('hero_image_url')
                    ->label('Imagen Hero de la Página (URL original)')
                    ->url()
                    ->columnSpanFull(),
                TextInput::make('pain_section_title')
                    ->label('Título Sección de Dolores')
                    ->maxLength(255),
                TextInput::make('method_section_title')
                    ->label('Título Sección de Metodología')
                    ->maxLength(255),
                TextInput::make('secondary_cta_title')
                    ->label('Título CTA Secundario')
                    ->maxLength(255),
                Textarea::make('secondary_cta_text')
                    ->label('Texto CTA Secundario')
                    ->rows(2)
                    ->columnSpanFull(),
                TextInput::make('accent_color')
                    ->label('Color Acento Hex')
                    ->default('#1e5799'),
                TextInput::make('sort_order')
                    ->label('Orden')
                    ->numeric()
                    ->default(1),
                Toggle::make('is_active')
                    ->label('Pilar Activo')
                    ->default(true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('card_image_url')
                    ->label('Imagen')
                    ->square(),
                TextColumn::make('name')
                    ->label('Pilar')
                    ->searchable()
                    ->sortable()
                    ->description(fn (Pillar $record): string => $record->short_description),
                TextColumn::make('slug')
                    ->label('Ruta')
                    ->badge()
                    ->formatStateUsing(fn (string $state): string => "/{$state}")
                    ->color('primary'),
                TextColumn::make('hero_cta_text')
                    ->label('CTA hacia Contacto')
                    ->badge()
                    ->color('warning'),
                ToggleColumn::make('is_active')
                    ->label('Activo'),
            ])
            ->defaultSort('sort_order')
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => ManagePillars::route('/'),
        ];
    }
}

