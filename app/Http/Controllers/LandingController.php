<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use App\Models\Pillar;
use App\Models\SiteSetting;
use App\Models\Testimonial;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class LandingController extends Controller
{
    public function index(): View
    {
        $settings = SiteSetting::allKeyed();

        $pillars = Pillar::query()
            ->where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        $testimonials = Testimonial::query()
            ->where('is_featured', true)
            ->orderBy('sort_order')
            ->get();

        return view('home', compact('settings', 'pillars', 'testimonials'));
    }

    public function pillar(string $slug): View
    {
        $settings = SiteSetting::allKeyed();

        $pillar = Pillar::query()
            ->where('slug', $slug)
            ->where('is_active', true)
            ->firstOrFail();

        $pillars = Pillar::query()
            ->where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        $testimonials = Testimonial::query()
            ->where('is_featured', true)
            ->orderByRaw("CASE WHEN pillar_slug = ? THEN 0 ELSE 1 END", [$slug])
            ->orderBy('sort_order')
            ->get();

        return view('pillar', compact('settings', 'pillar', 'pillars', 'testimonials'));
    }

    public function about(): View
    {
        $settings = SiteSetting::allKeyed();
        $pillars = Pillar::query()->where('is_active', true)->orderBy('sort_order')->get();
        $testimonials = Testimonial::query()->where('is_featured', true)->orderBy('sort_order')->get();

        return view('about', compact('settings', 'pillars', 'testimonials'));
    }

    public function contact(Request $request): View
    {
        $settings = SiteSetting::allKeyed();
        $pillars = Pillar::query()->where('is_active', true)->orderBy('sort_order')->get();
        $selectedPillar = $request->query('pilar', 'integral');

        return view('contact', compact('settings', 'pillars', 'selectedPillar'));
    }

    public function gracias(): View
    {
        $settings = SiteSetting::allKeyed();
        $pillars = Pillar::query()->where('is_active', true)->orderBy('sort_order')->get();

        return view('gracias', compact('settings', 'pillars'));
    }

    public function storeLead(Request $request): JsonResponse|RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:120'],
            'last_name' => ['nullable', 'string', 'max:120'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['nullable', 'string', 'max:50'],
            'company' => ['nullable', 'string', 'max:160'],
            'pillar_interest' => ['nullable', 'string', 'max:60'],
            'source_page' => ['nullable', 'string', 'max:60'],
            'message' => ['nullable', 'string', 'max:2000'],
        ]);

        $lead = Lead::create([
            'name' => $validated['name'],
            'last_name' => $validated['last_name'] ?? null,
            'email' => $validated['email'],
            'phone' => $validated['phone'] ?? null,
            'company' => $validated['company'] ?? null,
            'pillar_interest' => $validated['pillar_interest'] ?? 'integral',
            'source_page' => $validated['source_page'] ?? 'home',
            'message' => $validated['message'] ?? 'Solicitud de Sesión Estratégica / Diagnóstico desde el formulario de contacto.',
            'status' => 'nuevo',
        ]);

        if ($request->expectsJson()) {
            return response()->json([
                'success' => true,
                'lead_id' => $lead->id,
                'redirect_url' => route('gracias'),
                'message' => '¡Gracias! Hemos recibido tus datos. Nuestro equipo estratégico te contactará a la brevedad para tu sesión de diagnóstico.',
            ]);
        }

        return redirect()->route('gracias')->with('contact_success', '¡Gracias! Hemos recibido tu solicitud y te contactaremos muy pronto.');
    }
}
