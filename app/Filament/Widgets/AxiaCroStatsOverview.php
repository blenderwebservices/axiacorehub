<?php

namespace App\Filament\Widgets;

use App\Models\Lead;
use App\Models\Pillar;
use App\Models\SiteSetting;
use App\Models\Testimonial;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class AxiaCroStatsOverview extends BaseWidget
{
    protected static ?int $sort = 1;

    protected function getStats(): array
    {
        $totalLeads = Lead::count();
        $newLeads = Lead::where('status', 'nuevo')->count();
        $activePillars = Pillar::where('is_active', true)->count();
        $testimonialsCount = Testimonial::where('is_featured', true)->count();
        $settingsCount = SiteSetting::count();

        return [
            Stat::make('Solicitudes de Contacto / Diagnóstico', (string) $totalLeads)
                ->description("{$newLeads} nuevas (reemplazo directo de Calendly)")
                ->color('primary'),
            Stat::make('Pilares Estratégicos Activos', (string) $activePillars)
                ->description('Evoluciona · Conecta · Trasciende')
                ->color('success'),
            Stat::make('Testimonios Social Proof', (string) $testimonialsCount)
                ->description("{$settingsCount} bloques CRO configurados en tema claro")
                ->color('warning'),
        ];
    }
}

