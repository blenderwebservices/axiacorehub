@extends('layouts.public')

@section('title', 'Nosotros - AxiaCore Hub | Donde la Estrategia se Encuentra con el Alma')

@section('content')

    <!-- HERO NOSOTROS (ABOUT) -->
    <section class="py-16 lg:py-24 bg-gradient-to-b from-slate-50 to-white border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">

                <div class="lg:col-span-6 space-y-6">
                    <span class="inline-block px-3.5 py-1 rounded-full bg-axia-blueLight text-axia-blue text-xs font-heading font-bold uppercase tracking-wider">
                        El Equipo de AxiaCore Hub
                    </span>

                    <h1 class="text-4xl sm:text-5xl font-heading font-extrabold text-slate-900 leading-tight">
                        Somos el Hub donde la estrategia se encuentra con el alma.
                    </h1>

                    <p class="text-lg text-slate-700 leading-relaxed">
                        Construimos junto contigo un ecosistema de crecimiento consciente, alineando tus procesos, tu mercado y tu propósito.
                    </p>

                    <p class="text-base text-slate-600 leading-relaxed">
                        Te ayudamos a evolucionar con eficiencia, conectar con autenticidad y trascender con impacto.
                    </p>

                    <div class="p-6 rounded-2xl bg-slate-50 border-l-4 border-axia-orange">
                        <p class="font-medium text-slate-800">
                            Te asistimos y contribuimos a desarrollar los 3 pilares que toda empresa necesita: Procesos que funcionan, crecimiento sostenible y propósito que inspira.
                        </p>
                    </div>

                    <div class="pt-2">
                        <a href="#contacto"
                           data-select-pillar="integral"
                           class="btn-axia-primary px-8 py-4 rounded-xl text-base inline-flex items-center gap-2">
                            <span>Agendemos una reunión</span>
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </a>
                    </div>
                </div>

                <div class="lg:col-span-6 space-y-4">
                    <div class="bg-white p-3 rounded-3xl border border-slate-200 shadow-lg">
                        <img src="{{ $settings['about_pizarron_image'] ?? '/wp-content/uploads/2025/08/pizarron.webp' }}"
                             alt="Pizarrón Estratégico AxiaCore Hub"
                             class="w-full h-80 sm:h-96 object-cover rounded-2xl">
                    </div>
                    <div class="bg-white p-3 rounded-3xl border border-slate-200 shadow-md">
                        <img src="{{ $settings['about_banner_image'] ?? '/wp-content/uploads/2025/08/casa-pastoverde-1980x1020op.webp' }}"
                             alt="Cultura y Propósito AxiaCore Hub"
                             class="w-full h-56 object-cover rounded-2xl">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- RESUMEN DE LOS 3 PILARES EN NOSOTROS -->
    <section class="py-20 bg-white border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-12">
                <h2 class="text-3xl font-heading font-extrabold text-slate-900">
                    Nuestros 3 Pilares de Transformación
                </h2>
                <p class="text-slate-600 mt-2">
                    Un viaje de madurez organizacional diseñado para dar claridad, tracción y legado.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach($pillars as $pillar)
                    <div class="bg-slate-50 rounded-3xl p-7 border border-slate-200 flex flex-col justify-between space-y-5">
                        <div class="space-y-4">
                            <img src="{{ $pillar->card_image_url }}"
                                 alt="{{ $pillar->name }}"
                                 class="w-full h-48 object-cover rounded-2xl border border-slate-200">
                            <h3 class="text-2xl font-heading font-bold text-slate-900">{{ $pillar->name }}</h3>
                            <p class="text-sm text-slate-600 leading-relaxed">{{ $pillar->short_description }}</p>
                        </div>
                        <a href="{{ url('/' . $pillar->slug) }}" class="text-sm font-heading font-bold text-axia-blue hover:underline">
                            Explorar {{ $pillar->name }} →
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- CONTÁCTANOS ("Y Comencemos a materializar tu visión") -->
    @include('partials.contact-section', ['sourcePage' => 'about', 'selectedPillar' => 'integral'])

@endsection

