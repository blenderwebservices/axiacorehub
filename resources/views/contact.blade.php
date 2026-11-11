@extends('layouts.public')

@section('title', 'Contacto - AxiaCore Hub | Llena este formulario y te contactaremos')

@section('content')

    <section class="py-12 bg-slate-50 border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-3">
            <span class="inline-block px-3.5 py-1 rounded-full bg-white border border-slate-200 text-axia-blue text-xs font-heading font-bold uppercase tracking-wider">
                Atención Estratégica Directa
            </span>
            <h1 class="text-3xl sm:text-4xl font-heading font-extrabold text-slate-900">
                Llena este formulario y te contactaremos
            </h1>
            <p class="text-slate-600 max-w-2xl mx-auto">
                Comencemos a materializar tu visión. Selecciona el pilar de tu interés y agenda tu sesión estratégica o diagnóstico gratuito directamente con nuestro equipo.
            </p>
        </div>
    </section>

    @include('partials.contact-section', ['sourcePage' => 'contact', 'selectedPillar' => $selectedPillar ?? 'integral'])

@endsection

