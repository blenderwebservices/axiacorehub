<?php

namespace App\Filament\Resources\Testimonials;

use App\Filament\Resources\Testimonials\Pages\ManageTestimonials;
use App\Models\Testimonial;
use BackedEnum;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\Select;
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

class TestimonialResource extends Resource
{
    protected static ?string $model = Testimonial::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedChatBubbleBottomCenterText;

    protected static ?string $navigationLabel = 'Testimonios (Social Proof)';

    protected static ?string $modelLabel = 'Testimonio';

    protected static ?string $pluralModelLabel = 'Testimonios de Clientes';

    protected static string|UnitEnum|null $navigationGroup = 'Arquitectura CRO';

    protected static ?int $navigationSort = 3;

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('author_name')
                    ->label('Nombre del Cliente / Directivo')
                    ->required()
                    ->maxLength(140),
                TextInput::make('author_role')
                    ->label('Cargo y Empresa')
                    ->placeholder('Ej. Director Ejecutivo, ALCESPA')
                    ->maxLength(180),
                TextInput::make('company_url')
                    ->label('Sitio Web del Cliente')
                    ->url()
                    ->maxLength(255),
                Select::make('pillar_slug')
                    ->label('Pilar Relacionado')
                    ->options([
                        'home' => 'Destacado Principal (Home)',
                        'evoluciona' => 'Pilar 1: Evoluciona',
                        'conecta' => 'Pilar 2: Conecta',
                        'trasciende' => 'Pilar 3: Trasciende',
                    ])
                    ->default('home')
                    ->required(),
                TextInput::make('avatar_url')
                    ->label('URL Foto / Avatar (axiacorehub.com)')
                    ->url()
                    ->columnSpanFull(),
                TextInput::make('company_logo_url')
                    ->label('URL Logo de Empresa (axiacorehub.com)')
                    ->url()
                    ->columnSpanFull(),
                Textarea::make('content')
                    ->label('Testimonio Completo')
                    ->required()
                    ->rows(4)
                    ->columnSpanFull(),
                Select::make('rating')
                    ->label('Calificación')
                    ->options([
                        5 => '★★★★★ (5 Estrellas)',
                        4 => '★★★★☆ (4 Estrellas)',
                    ])
                    ->default(5)
                    ->required(),
                TextInput::make('sort_order')
                    ->label('Orden')
                    ->numeric()
                    ->default(1),
                Toggle::make('is_featured')
                    ->label('Visible en el Sitio')
                    ->default(true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('avatar_url')
                    ->label('Avatar')
                    ->circular(),
                TextColumn::make('author_name')
                    ->label('Cliente')
                    ->searchable()
                    ->sortable()
                    ->description(fn (Testimonial $record): string => (string) $record->author_role),
                TextColumn::make('pillar_slug')
                    ->label('Pilar')
                    ->badge()
                    ->color('primary'),
                TextColumn::make('content')
                    ->label('Testimonio')
                    ->limit(65),
                ToggleColumn::make('is_featured')
                    ->label('Visible'),
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
            'index' => ManageTestimonials::route('/'),
        ];
    }
}
