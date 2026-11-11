@extends('layouts.public', ['currentPillarSlug' => $pillar->slug])

@section('title', $pillar->name . ' - AxiaCore Hub | ' . $pillar->hero_title)
@section('meta_description', $pillar->hero_description)

@section('content')

    <!-- 1. HERO DEL PILAR (Estilo Claro de Alto Contraste) -->
    <section class="relative overflow-hidden bg-gradient-to-b from-slate-50 via-white to-white pt-12 pb-20 lg:pt-20 lg:pb-24 border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">

                <div class="lg:col-span-7 space-y-6">
                    <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-axia-blueLight border border-axia-blue/20 text-axia-blue text-xs sm:text-sm font-heading font-bold">
                        <span>{{ $pillar->kicker }}</span>
                    </div>

                    @if($pillar->hero_subtitle)
                        <p class="text-xl sm:text-2xl font-heading font-bold text-axia-orange">
                            {{ $pillar->hero_subtitle }}
                        </p>
                    @endif

                    <h1 class="text-4xl sm:text-5xl font-heading font-extrabold text-slate-900 leading-tight">
                        {{ $pillar->hero_title }}
                    </h1>

                    <p class="text-lg text-slate-700 leading-relaxed max-w-2xl">
                        {{ $pillar->hero_description }}
                    </p>

                    <div class="pt-2 flex flex-col sm:flex-row items-stretch sm:items-center gap-4">
                        <a href="#contacto"
                           data-select-pillar="{{ $pillar->slug }}"
                           class="btn-axia-primary px-8 py-4 rounded-xl text-base inline-flex items-center justify-center gap-3">
                            <span>{{ $pillar->hero_cta_text }}</span>
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </a>

                        <a href="#metodo"
                           class="btn-axia-outline px-7 py-4 rounded-xl text-base inline-flex items-center justify-center">
                            Ver Metodología
                        </a>
                    </div>
                </div>

                <div class="lg:col-span-5">
                    <div class="bg-white p-3 rounded-3xl border border-slate-200 shadow-xl">
                        <img src="{{ $pillar->hero_image_url ?: $pillar->card_image_url }}"
                             alt="{{ $pillar->hero_title }}"
                             class="w-full h-[340px] sm:h-[380px] object-cover rounded-2xl">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 2. VALIDACIÓN INMEDIATA / PRUEBA SOCIAL DEL PILAR -->
    <section class="py-14 bg-axia-light border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-center text-xl sm:text-2xl font-heading font-bold text-slate-900 mb-8">
                {{ $pillar->social_proof_title }}
            </h2>

            @if(!empty($pillar->partner_logos))
                <div class="bg-white rounded-2xl p-6 sm:p-8 border border-slate-200 shadow-sm flex flex-wrap items-center justify-center gap-8 sm:gap-12">
                    @foreach($pillar->partner_logos as $logo)
                        <div class="flex items-center justify-center p-2">
                            <img src="{{ $logo['url'] }}"
                                 alt="{{ $logo['name'] }}"
                                 class="h-12 sm:h-14 w-auto object-contain">
                        </div>
                    @endforeach
                </div>
            @elseif($pillar->slug === 'trasciende')
                <!-- Métricas de Validación Axiológica (Pilar Trasciende) -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="bg-white p-7 rounded-2xl border border-slate-200 shadow-sm text-center space-y-2">
                        <p class="text-3xl font-heading font-extrabold text-axia-blue">93% de Precisión Predictiva</p>
                        <p class="text-sm text-slate-600">Nuestra base axiológica supera a las pruebas psicológicas tradicionales.</p>
                    </div>
                    <div class="bg-white p-7 rounded-2xl border border-slate-200 shadow-sm text-center space-y-2">
                        <p class="text-2xl font-heading font-extrabold text-axia-orange">Utilizado por Empresas Globales</p>
                        <p class="text-sm text-slate-600">Desde PyMEs hasta corporativos como BIMBO han confiado en esta metodología.</p>
                    </div>
                    <div class="bg-white p-7 rounded-2xl border border-slate-200 shadow-sm text-center space-y-2">
                        <p class="text-2xl font-heading font-extrabold text-axia-green">Ciencia, no Opinión</p>
                        <p class="text-sm text-slate-600">Basado en la matemática transfinita y la axiología formal.</p>
                    </div>
                </div>
            @endif
        </div>
    </section>

    <!-- 3. AGITACIÓN DEL DOLOR DEL PILAR -->
    <section class="py-20 lg:py-24 bg-white border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-14 space-y-3">
                <span class="inline-block px-3.5 py-1 rounded-full bg-red-50 text-red-700 border border-red-200 text-xs font-heading font-bold uppercase tracking-wider">
                    Diagnóstico de Fricciones
                </span>
                <h2 class="text-3xl sm:text-4xl font-heading font-extrabold text-slate-900">
                    {{ $pillar->pain_section_title }}
                </h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-{{ count($pillar->pain_points ?? []) === 4 ? '2 lg:grid-cols-4' : '3' }} gap-8">
                @foreach($pillar->pain_points ?? [] as $pain)
                    <div class="bg-slate-50 rounded-3xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-md transition flex flex-col">
                        @if(!empty($pain['image_url']))
                            <div class="aspect-square w-full overflow-hidden bg-white">
                                <img src="{{ $pain['image_url'] }}"
                                     alt="{{ $pain['title'] }}"
                                     class="w-full h-full object-cover">
                            </div>
                        @endif
                        <div class="p-6 space-y-2.5 flex-1">
                            <h3 class="text-xl font-heading font-bold text-slate-900">
                                {{ $pain['title'] }}
                            </h3>
                            <p class="text-sm text-slate-600 leading-relaxed">
                                {{ $pain['description'] }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- 4. PRESENTACIÓN DE LA SOLUCIÓN Y METODOLOGÍA -->
    <section id="metodo" class="py-20 lg:py-24 bg-axia-light border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-14 space-y-3">
                <span class="inline-block px-3.5 py-1 rounded-full bg-white border border-slate-200 text-axia-blue text-xs font-heading font-bold uppercase tracking-wider">
                    El Puente hacia la Claridad
                </span>
                <h2 class="text-3xl sm:text-4xl font-heading font-extrabold text-slate-900">
                    {{ $pillar->method_section_title }}
                </h2>
                @if($pillar->method_section_subtitle)
                    <p class="text-lg text-slate-600">
                        {{ $pillar->method_section_subtitle }}
                    </p>
                @endif
            </div>

            @if($pillar->method_banner_url)
                <div class="mb-12 bg-white p-4 rounded-3xl border border-slate-200 shadow-sm max-w-4xl mx-auto">
                    <img src="{{ $pillar->method_banner_url }}"
                         alt="{{ $pillar->method_section_title }}"
                         class="w-full max-h-96 object-contain rounded-2xl mx-auto">
                </div>
            @endif

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach($pillar->method_steps ?? [] as $index => $step)
                    <div class="bg-white rounded-2xl p-6 border border-slate-200 shadow-sm flex flex-col justify-between space-y-4">
                        <div class="space-y-4">
                            <div class="flex items-center justify-between">
                                @if(!empty($step['image_url']))
                                    <img src="{{ $step['image_url'] }}"
                                         alt="{{ $step['title'] }}"
                                         class="w-16 h-16 rounded-2xl object-cover border border-slate-100 bg-slate-50">
                                @endif
                                <span class="text-2xl font-heading font-extrabold text-slate-300">0{{ $index + 1 }}</span>
                            </div>
                            <h3 class="text-lg font-heading font-bold text-slate-900">
                                {{ $step['title'] }}
                            </h3>
                            <p class="text-sm text-slate-600 leading-relaxed">
                                {{ $step['description'] }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- 5. TESTIMONIOS DE CLIENTES -->
    <section class="py-20 bg-white border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-12">
                <span class="text-xs font-heading font-bold uppercase tracking-wider text-axia-orange">La Voz de Nuestros Clientes</span>
                <h2 class="text-3xl font-heading font-extrabold text-slate-900 mt-1">
                    Lo que Nuestros Clientes opinan
                </h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl mx-auto">
                @foreach($testimonials->take(2) as $testimonial)
                    <div class="bg-slate-50 rounded-3xl p-8 border border-slate-200 shadow-sm flex flex-col justify-between space-y-6">
                        <div class="space-y-3">
                            <div class="text-amber-500 text-base tracking-widest">★★★★★</div>
                            <p class="text-slate-700 text-base italic leading-relaxed">
                                “{{ $testimonial->content }}”
                            </p>
                        </div>
                        <div class="flex items-center gap-4 pt-4 border-t border-slate-200/80">
                            @if($testimonial->avatar_url)
                                <img src="{{ $testimonial->avatar_url }}"
                                     alt="{{ $testimonial->author_name }}"
                                     class="w-12 h-12 rounded-full object-cover border border-slate-300">
                            @endif
                            <div>
                                <h3 class="font-heading font-bold text-slate-900 text-sm">{{ $testimonial->author_name }}</h3>
                                <p class="text-xs text-slate-600">{{ $testimonial->author_role }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- 6. CTA SECUNDARIO DE REFUERZO -->
    <section class="py-16 bg-axia-blueLight/60 border-b border-slate-200">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-6">
            <h2 class="text-2xl sm:text-3xl font-heading font-extrabold text-slate-900">
                {{ $pillar->secondary_cta_title }}
            </h2>
            <p class="text-base sm:text-lg text-slate-700 leading-relaxed">
                {{ $pillar->secondary_cta_text }}
            </p>
            <div>
                <a href="#contacto"
                   data-select-pillar="{{ $pillar->slug }}"
                   class="btn-axia-primary px-8 py-4 rounded-xl text-base inline-flex items-center gap-2">
                    <span>{{ $pillar->secondary_cta_button }}</span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>
        </div>
    </section>

    <!-- 7. PREGUNTAS FRECUENTES (FAQ) DEL PILAR -->
    @if(!empty($pillar->faqs))
        <section class="py-20 bg-white border-b border-slate-200">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <span class="text-xs font-heading font-bold uppercase tracking-wider text-axia-blue">Resolvemos tus Dudas</span>
                    <h2 class="text-3xl font-heading font-extrabold text-slate-900 mt-1">
                        Preguntas Frecuentes (FAQ)
                    </h2>
                </div>

                <div class="space-y-4">
                    @foreach($pillar->faqs as $faq)
                        <div class="bg-slate-50 rounded-2xl p-6 border border-slate-200">
                            <h3 class="text-lg font-heading font-bold text-slate-900 mb-2">
                                {{ $faq['question'] }}
                            </h3>
                            <p class="text-slate-700 text-sm sm:text-base leading-relaxed">
                                {{ $faq['answer'] }}
                            </p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    <!-- 8. FORMULARIO DE CONTACTO INTEGRADO (Reemplazo de Calendly) -->
    @include('partials.contact-section', ['sourcePage' => $pillar->slug, 'selectedPillar' => $pillar->slug])

@endsection

