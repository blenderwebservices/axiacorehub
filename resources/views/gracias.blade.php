@extends('layouts.public')

@section('title', 'Gracias - AxiaCore Hub')

@section('content')

    <section class="py-24 lg:py-32 bg-gradient-to-b from-slate-50 to-white">
        <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-6">
            <div class="w-20 h-20 rounded-full bg-emerald-100 text-emerald-700 flex items-center justify-center mx-auto text-3xl font-bold shadow-sm">
                ✓
            </div>

            <h1 class="text-4xl font-heading font-extrabold text-slate-900">
                ¡Gracias por contactarnos!
            </h1>

            <p class="text-lg text-slate-600 leading-relaxed">
                Hemos recibido tus datos correctamente. Un consultor estratégico de <strong>AxiaCore Hub</strong> se pondrá en contacto contigo en menos de 24 horas hábiles para tu Sesión de Diagnóstico.
            </p>

            <div class="pt-4 flex flex-wrap items-center justify-center gap-4">
                <a href="{{ route('home') }}" class="btn-axia-blue px-7 py-3.5 rounded-xl text-sm">
                    Volver al Inicio
                </a>
                <a href="{{ route('pillar.evoluciona') }}" class="btn-axia-outline px-6 py-3.5 rounded-xl text-sm">
                    Explorar Pilares
                </a>
            </div>
        </div>
    </section>

@endsection

