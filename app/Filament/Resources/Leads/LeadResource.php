<?php

namespace App\Filament\Resources\Leads;

use App\Filament\Resources\Leads\Pages\ManageLeads;
use App\Models\Lead;
use BackedEnum;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use UnitEnum;

class LeadResource extends Resource
{
    protected static ?string $model = Lead::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedUserGroup;

    protected static ?string $navigationLabel = 'Solicitudes de Contacto (Leads)';

    protected static ?string $modelLabel = 'Solicitud de Contacto';

    protected static ?string $pluralModelLabel = 'Solicitudes de Contacto y Diagnóstico';

    protected static string|UnitEnum|null $navigationGroup = 'Arquitectura CRO';

    protected static ?int $navigationSort = 2;

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Nombre')
                    ->required()
                    ->maxLength(120),
                TextInput::make('last_name')
                    ->label('Apellidos')
                    ->maxLength(120),
                TextInput::make('email')
                    ->label('Correo Electrónico')
                    ->email()
                    ->required()
                    ->maxLength(255),
                TextInput::make('phone')
                    ->label('Teléfono / WhatsApp')
                    ->maxLength(50),
                TextInput::make('company')
                    ->label('Empresa / Organización')
                    ->maxLength(160),
                Select::make('pillar_interest')
                    ->label('Pilar de Interés')
                    ->options([
                        'integral' => 'Sesión Estratégica Integral (3 Pilares)',
                        'evoluciona' => 'Evoluciona · Procesos y Operaciones Ágiles',
                        'conecta' => 'Conecta · Ecosistema de Marketing y Ventas',
                        'trasciende' => 'Trasciende · Brújula de Valores y Talento',
                    ])
                    ->default('integral')
                    ->required(),
                Select::make('source_page')
                    ->label('Página de Origen')
                    ->options([
                        'home' => 'Home Principal',
                        'evoluciona' => 'Página Evoluciona',
                        'conecta' => 'Página Conecta',
                        'trasciende' => 'Página Trasciende',
                        'about' => 'Página Nosotros (About)',
                        'contact' => 'Página de Contacto Directo',
                    ])
                    ->default('home')
                    ->required(),
                Select::make('status')
                    ->label('Estado del Diagnóstico')
                    ->options([
                        'nuevo' => 'Nuevo (Por Contactar)',
                        'en_diagnostico' => 'En Sesión de Diagnóstico',
                        'propuesta_enviada' => 'Propuesta Enviada',
                        'cerrado' => 'Cliente Activo / Cerrado',
                    ])
                    ->default('nuevo')
                    ->required(),
                Textarea::make('message')
                    ->label('Comentario o Mensaje del Prospecto')
                    ->rows(3)
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Nombre Completo')
                    ->formatStateUsing(fn (Lead $record): string => trim("{$record->name} {$record->last_name}"))
                    ->searchable(['name', 'last_name'])
                    ->sortable(),
                TextColumn::make('email')
                    ->label('Correo Electrónico')
                    ->searchable()
                    ->copyable(),
                TextColumn::make('company')
                    ->label('Empresa')
                    ->searchable()
                    ->placeholder('—'),
                TextColumn::make('pillar_interest')
                    ->label('Pilar Solicitado')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'evoluciona' => 'primary',
                        'conecta' => 'warning',
                        'trasciende' => 'success',
                        default => 'info',
                    }),
                TextColumn::make('status')
                    ->label('Estado')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'cerrado' => 'success',
                        'propuesta_enviada' => 'info',
                        'en_diagnostico' => 'primary',
                        default => 'warning',
                    }),
                TextColumn::make('created_at')
                    ->label('Fecha Solicitud')
                    ->dateTime('d/m/Y H:i')
                    ->sortable(),
            ])
            ->defaultSort('created_at', 'desc')
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
            'index' => ManageLeads::route('/'),
        ];
    }
}
