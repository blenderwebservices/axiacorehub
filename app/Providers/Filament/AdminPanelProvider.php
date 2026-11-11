<?php

namespace App\Providers\Filament;

use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Navigation\NavigationItem;
use Filament\Pages\Dashboard;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Widgets\AccountWidget;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\PreventRequestForgery;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Support\HtmlString;
use Illuminate\View\Middleware\ShareErrorsFromSession;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->brandName('AxiaCore Hub')
            ->brandLogo(fn () => new HtmlString('
                <div style="display:flex;align-items:center;gap:10px;">
                    <img src="/wp-content/uploads/2025/07/IMAGOTIPO-300x105-Photoroom.png" alt="AxiaCore Hub" style="height:36px;width:auto;object-fit:contain;" />
                </div>
            '))
            ->font('IBM Plex Sans')
            ->colors([
                'primary' => Color::hex('#1e5799'),
                'gray' => Color::Slate,
                'info' => Color::hex('#046bd2'),
                'success' => Color::hex('#7db942'),
                'warning' => Color::hex('#f7941e'),
                'danger' => Color::hex('#cf2e2e'),
            ])
            ->navigationItems([
                NavigationItem::make('Ver Home CRO')
                    ->url('/', shouldOpenInNewTab: true)
                    ->icon('heroicon-o-globe-alt')
                    ->group('Vista Pública')
                    ->sort(90),
                NavigationItem::make('Pilar 1: Evoluciona')
                    ->url('/evoluciona', shouldOpenInNewTab: true)
                    ->icon('heroicon-o-cog-6-tooth')
                    ->group('Vista Pública')
                    ->sort(91),
                NavigationItem::make('Pilar 2: Conecta')
                    ->url('/conecta', shouldOpenInNewTab: true)
                    ->icon('heroicon-o-bolt')
                    ->group('Vista Pública')
                    ->sort(92),
                NavigationItem::make('Pilar 3: Trasciende')
                    ->url('/trasciende', shouldOpenInNewTab: true)
                    ->icon('heroicon-o-sparkles')
                    ->group('Vista Pública')
                    ->sort(93),
                NavigationItem::make('Formulario de Contacto')
                    ->url('/contact', shouldOpenInNewTab: true)
                    ->icon('heroicon-o-envelope')
                    ->group('Vista Pública')
                    ->sort(94),
            ])
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\Filament\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\Filament\Pages')
            ->pages([
                Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\Filament\Widgets')
            ->widgets([
                AccountWidget::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                PreventRequestForgery::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ]);
    }
}
