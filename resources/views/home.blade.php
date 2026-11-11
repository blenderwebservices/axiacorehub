@extends('layouts.public')

@section('title', 'Home - AxiaCore Hub | Evoluciona. Conecta. Trasciende.')
@section('meta_description', '¿Tu equipo vive apagando fuegos en lugar de construir soluciones? Transformamos tu organización alineando procesos, mercado y propósito para un crecimiento auténtico y sostenible.')

@section('content')

    <!-- 1. HERO SECTION CRO EN ESTILO CLARO (Alta Visibilidad y Claridad Ejecutiva) -->
    <section class="relative overflow-hidden bg-gradient-to-b from-slate-50 via-white to-white pt-12 pb-20 lg:pt-20 lg:pb-28 border-b border-slate-200/80">
        <div class="absolute inset-0 bg-grid-light opacity-50 pointer-events-none"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-10 items-center">

                <!-- Copy Principal Hero -->
                <div class="lg:col-span-7 space-y-6">
                    <div class="inline-flex items-center gap-2.5 px-4 py-1.5 rounded-full bg-axia-blueLight border border-axia-blue/20 text-axia-blue text-xs sm:text-sm font-heading font-bold tracking-wide">
                        <img src="{{ $settings['brand_isotipo_url'] ?? '/wp-content/uploads/2025/07/ISOTIPO-final-v0-250912-512x512-Photoroom-300x300.png' }}"
                             alt="Isotipo AxiaCore Hub"
                             class="w-5 h-5 object-contain">
                        <span>{{ $settings['hero_kicker'] ?? 'Evoluciona · Conecta · Trasciende' }}</span>
                    </div>

                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-heading font-extrabold text-slate-900 leading-[1.12]">
                        {{ $settings['hero_title'] ?? 'Construyamos Puentes hacia el Éxito' }}
                    </h1>

                    <h2 class="text-lg sm:text-xl text-slate-700 font-normal leading-relaxed max-w-2xl">
                        {{ $settings['hero_subtitle'] ?? 'Transformamos tu organización alineando procesos, mercado y propósito para un crecimiento auténtico y sostenible.' }}
                    </h2>

                    <!-- CTAs (Reemplazo de Calendly por Formulario de Contacto) -->
                    <div class="pt-2 flex flex-col sm:flex-row items-stretch sm:items-center gap-4">
                        <a href="#contacto"
                           data-select-pillar="integral"
                           class="btn-axia-primary px-8 py-4 rounded-xl text-base inline-flex items-center justify-center gap-3">
                            <span>{{ $settings['hero_cta_text'] ?? 'Agendar Sesión Estratégica' }}</span>
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </a>

                        <a href="#soluciones-pilares"
                           class="btn-axia-outline px-7 py-4 rounded-xl text-base inline-flex items-center justify-center gap-2">
                            <span>Explorar los 3 Pilares</span>
                        </a>
                    </div>

                    <!-- Micro-Prueba Social de Confianza -->
                    <div class="pt-4 grid grid-cols-3 gap-4 border-t border-slate-200 max-w-xl">
                        <div>
                            <p class="font-heading font-extrabold text-xl sm:text-2xl text-axia-blue">2–4 sem</p>
                            <p class="text-xs text-slate-600">Procesos ágiles listos para operar</p>
                        </div>
                        <div>
                            <p class="font-heading font-extrabold text-xl sm:text-2xl text-axia-orange">30–60 días</p>
                            <p class="text-xs text-slate-600">Primeros quick wins en leads</p>
                        </div>
                        <div>
                            <p class="font-heading font-extrabold text-xl sm:text-2xl text-axia-green">93%</p>
                            <p class="text-xs text-slate-600">Precisión en Brújula de Valores</p>
                        </div>
                    </div>
                </div>

                <!-- Composición Visual Hero con las Imágenes Actuales -->
                <div class="lg:col-span-5 relative">
                    <div class="relative rounded-3xl overflow-hidden bg-white p-3 border border-slate-200 shadow-2xl shadow-slate-200/80">
                        <img src="{{ $settings['hero_image_url'] ?? '/wp-content/uploads/2025/07/gente-de-negocios-dandose-la-mano.webp' }}"
                             alt="Construyamos Puentes hacia el Éxito - AxiaCore Hub"
                             class="w-full h-[340px] sm:h-[400px] object-cover rounded-2xl">

                        <!-- Tarjeta Flotante Clara -->
                        <div class="mt-3 bg-slate-50 rounded-2xl p-4 border border-slate-200/80 flex items-center gap-4">
                            <img src="{{ $settings['hero_secondary_image_url'] ?? '/wp-content/uploads/2025/07/hombre-de-negocios1920x1080-op.jpg' }}"
                                 alt="Alianza Estratégica AxiaCore Hub"
                                 class="w-16 h-16 rounded-xl object-cover shrink-0 border border-white shadow-sm">
                            <div>
                                <p class="text-xs font-heading font-bold uppercase tracking-wider text-axia-blue">Viaje de Madurez Organizacional</p>
                                <p class="text-sm font-semibold text-slate-900 mt-0.5">Procesos que funcionan, crecimiento sostenible y propósito que inspira.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 2. AGITACIÓN DEL DOLOR ("Tu realidad es ....") EN ESTILO CLARO -->
    <section id="realidad" class="py-20 lg:py-24 bg-axia-light border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="text-center max-w-3xl mx-auto mb-14 space-y-3">
                <span class="inline-block px-3.5 py-1 rounded-full bg-white border border-slate-200 text-axia-blue text-xs font-heading font-bold uppercase tracking-wider">
                    Diagnóstico de Realidad Operativa y Comercial
                </span>
                <h2 class="text-3xl sm:text-4xl font-heading font-extrabold text-slate-900">
                    {{ $settings['reality_heading'] ?? 'Tu realidad es ....' }}
                </h2>
                <p class="text-lg text-slate-600">
                    Identifica cuál de estos síntomas está frenando hoy la rentabilidad y tranquilidad de tu organización.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Dolor 1: Caos operativo -->
                <article class="bg-white rounded-3xl overflow-hidden border border-slate-200/90 shadow-md hover:shadow-xl transition flex flex-col">
                    <div class="aspect-square w-full overflow-hidden bg-slate-100 relative">
                        <img src="{{ $settings['pain_1_image'] ?? '/wp-content/uploads/2025/07/Caos-operativo-1020x1020-1.png' }}"
                             alt="{{ $settings['pain_1_title'] ?? 'Caos operativo' }}"
                             class="w-full h-full object-cover hover:scale-105 transition duration-500">
                        <span class="absolute top-4 left-4 bg-white/95 backdrop-blur px-3 py-1 rounded-full text-xs font-heading font-bold text-axia-blue border border-slate-200 shadow-sm">
                            01 · Operación
                        </span>
                    </div>
                    <div class="p-7 flex-1 flex flex-col justify-between space-y-4">
                        <div class="space-y-3">
                            <h3 class="text-2xl font-heading font-bold text-slate-900">
                                {{ $settings['pain_1_title'] ?? 'Caos operativo' }}
                            </h3>
                            <p class="font-semibold text-axia-blue text-sm leading-snug">
                                {{ $settings['pain_1_question'] ?? '¿Tu equipo vive apagando fuegos en lugar de construir soluciones?' }}
                            </p>
                            <p class="text-slate-600 text-sm leading-relaxed">
                                {{ $settings['pain_1_desc'] ?? 'Cuando los procesos no están alineados, cada día se convierte en una batalla contra el desorden. AxiaCore Hub te ayuda a recuperar el control con sistemas integrados que eliminan la fricción, automatizan tareas clave y devuelven la claridad operativa. Menos caos, más enfoque.' }}
                            </p>
                        </div>
                        <div class="pt-3 border-t border-slate-100">
                            <a href="#contacto" data-select-pillar="evoluciona" class="inline-flex items-center gap-1.5 text-sm font-heading font-bold text-axia-blue hover:text-axia-orange transition">
                                <span>Resolver caos operativo</span>
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                            </a>
                        </div>
                    </div>
                </article>

                <!-- Dolor 2: Ventas estancadas -->
                <article class="bg-white rounded-3xl overflow-hidden border border-slate-200/90 shadow-md hover:shadow-xl transition flex flex-col">
                    <div class="aspect-square w-full overflow-hidden bg-slate-100 relative">
                        <img src="{{ $settings['pain_2_image'] ?? '/wp-content/uploads/2025/07/retrato-de-una-adicta-las-compras-femenina-sonando-1020x1020-1.jpg' }}"
                             alt="{{ $settings['pain_2_title'] ?? 'Ventas estancadas' }}"
                             class="w-full h-full object-cover hover:scale-105 transition duration-500">
                        <span class="absolute top-4 left-4 bg-white/95 backdrop-blur px-3 py-1 rounded-full text-xs font-heading font-bold text-axia-orange border border-slate-200 shadow-sm">
                            02 · Mercado
                        </span>
                    </div>
                    <div class="p-7 flex-1 flex flex-col justify-between space-y-4">
                        <div class="space-y-3">
                            <h3 class="text-2xl font-heading font-bold text-slate-900">
                                {{ $settings['pain_2_title'] ?? 'Ventas estancadas' }}
                            </h3>
                            <p class="font-semibold text-axia-orange text-sm leading-snug">
                                {{ $settings['pain_2_question'] ?? '¿Tu producto / servicio no logra conectar con el mercado?' }}
                            </p>
                            <p class="text-slate-600 text-sm leading-relaxed">
                                {{ $settings['pain_2_desc'] ?? 'Las ventas no se mueven cuando la propuesta no emociona o el canal no está optimizado. Con AxiaCore Hub, transformamos tu narrativa comercial, afinamos tu embudo de conversión y activamos estrategias que despiertan interés real. Porque vender no es insistir, es conectar.' }}
                            </p>
                        </div>
                        <div class="pt-3 border-t border-slate-100">
                            <a href="#contacto" data-select-pillar="conecta" class="inline-flex items-center gap-1.5 text-sm font-heading font-bold text-axia-orange hover:text-axia-blue transition">
                                <span>Activar motor comercial</span>
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                            </a>
                        </div>
                    </div>
                </article>

                <!-- Dolor 3: Baja rentabilidad -->
                <article class="bg-white rounded-3xl overflow-hidden border border-slate-200/90 shadow-md hover:shadow-xl transition flex flex-col">
                    <div class="aspect-square w-full overflow-hidden bg-slate-100 relative">
                        <img src="{{ $settings['pain_3_image'] ?? '/wp-content/uploads/2025/07/Baja-rentabilidad-1020x1020-1.png' }}"
                             alt="{{ $settings['pain_3_title'] ?? 'Baja rentabilidad' }}"
                             class="w-full h-full object-cover hover:scale-105 transition duration-500">
                        <span class="absolute top-4 left-4 bg-white/95 backdrop-blur px-3 py-1 rounded-full text-xs font-heading font-bold text-axia-green border border-slate-200 shadow-sm">
                            03 · Rentabilidad y Cultura
                        </span>
                    </div>
                    <div class="p-7 flex-1 flex flex-col justify-between space-y-4">
                        <div class="space-y-3">
                            <h3 class="text-2xl font-heading font-bold text-slate-900">
                                {{ $settings['pain_3_title'] ?? 'Baja rentabilidad' }}
                            </h3>
                            <p class="font-semibold text-emerald-700 text-sm leading-snug">
                                {{ $settings['pain_3_question'] ?? '¿Trabajas intensamente, pero los números no reflejan tu esfuerzo?' }}
                            </p>
                            <p class="text-slate-600 text-sm leading-relaxed">
                                {{ $settings['pain_3_desc'] ?? 'La rentabilidad no depende solo de vender más, sino de operar mejor. AxiaCore Hub identifica fugas invisibles, optimiza recursos y te ayuda a construir un modelo sostenible. Menos desgaste, más retorno.' }}
                            </p>
                        </div>
                        <div class="pt-3 border-t border-slate-100">
                            <a href="#contacto" data-select-pillar="trasciende" class="inline-flex items-center gap-1.5 text-sm font-heading font-bold text-emerald-700 hover:text-axia-blue transition">
                                <span>Optimizar rentabilidad</span>
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                            </a>
                        </div>
                    </div>
                </article>
            </div>

            <!-- Franja Puente CRO -->
            <div class="mt-12 bg-white rounded-2xl p-6 sm:p-8 border border-slate-200 shadow-sm flex flex-col md:flex-row items-center justify-between gap-6">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 rounded-2xl bg-axia-blueLight text-axia-blue flex items-center justify-center shrink-0 font-heading font-extrabold text-xl">
                        ✓
                    </div>
                    <h3 class="text-xl sm:text-2xl font-heading font-bold text-slate-900">
                        {{ $settings['reality_subheading'] ?? 'Imagina una operación que fluye y un crecimiento predecible.' }}
                    </h3>
                </div>
                <a href="#contacto" data-select-pillar="integral" class="btn-axia-primary px-6 py-3.5 rounded-xl text-sm shrink-0">
                    Solicitar Diagnóstico en Contacto
                </a>
            </div>

        </div>
    </section>

    <!-- 3. SOLUCIONES INTEGRALES: LOS 3 PILARES (Evoluciona, Conecta, Trasciende) -->
    <section id="soluciones-pilares" class="py-20 lg:py-28 bg-white border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="text-center max-w-3xl mx-auto mb-16 space-y-4">
                <span class="inline-block px-3.5 py-1 rounded-full bg-axia-blueLight text-axia-blue text-xs font-heading font-bold uppercase tracking-wider">
                    Arquitectura de Transformación
                </span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-heading font-extrabold text-slate-900">
                    {{ $settings['pillars_heading'] ?? 'Potenciando tu Crecimiento Sostenible' }}
                </h2>
                <p class="text-lg text-slate-600">
                    {{ $settings['pillars_subheading'] ?? 'Descubre nuestras soluciones integrales que alinean procesos, mercado y propósito para un éxito auténtico y duradero.' }}
                </p>
            </div>

            <!-- 3 Tarjetas Principales de Pilares con sus Imágenes Originales -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                @foreach($pillars as $pillar)
                    <div class="bg-slate-50 rounded-3xl overflow-hidden border-2 {{ $loop->iteration === 2 ? 'border-axia-orange shadow-xl' : 'border-slate-200 shadow-md' }} hover:shadow-xl transition flex flex-col">
                        <div class="aspect-square w-full overflow-hidden bg-white relative">
                            <img src="{{ $pillar->card_image_url }}"
                                 alt="{{ $pillar->name }} - AxiaCore Hub"
                                 class="w-full h-full object-cover hover:scale-105 transition duration-500">
                            <div class="absolute top-4 left-4 bg-white/95 backdrop-blur px-3.5 py-1.5 rounded-full text-xs font-heading font-bold text-slate-900 border border-slate-200 shadow-sm">
                                {{ $pillar->kicker }}
                            </div>
                        </div>

                        <div class="p-8 flex-1 flex flex-col justify-between space-y-6 bg-white">
                            <div class="space-y-3">
                                <h3 class="text-2xl sm:text-3xl font-heading font-extrabold text-slate-900">
                                    {{ $pillar->name }}
                                </h3>
                                <p class="text-slate-600 text-base leading-relaxed">
                                    {{ $pillar->short_description }}
                                </p>
                            </div>

                            <div class="pt-4 border-t border-slate-100 flex flex-col sm:flex-row items-stretch sm:items-center justify-between gap-3">
                                <a href="{{ url('/' . $pillar->slug) }}"
                                   class="btn-axia-outline px-5 py-2.5 rounded-xl text-sm text-center inline-flex items-center justify-center gap-2">
                                    <span>{{ $pillar->cta_label }} más sobre {{ $pillar->name }}</span>
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                                </a>

                                <a href="#contacto"
                                   data-select-pillar="{{ $pillar->slug }}"
                                   class="text-xs font-heading font-bold text-axia-blue hover:text-axia-orange text-center py-2 px-3">
                                    Solicitar Diagnóstico →
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- EXPLORADOR INTERACTIVO DE CONTENIDO DE LOS 3 PILARES (CRO In-Page Experience) -->
            <div class="mt-20 bg-axia-light rounded-3xl p-6 sm:p-10 border border-slate-200">
                <div class="flex flex-col md:flex-row items-start md:items-center justify-between gap-4 pb-8 border-b border-slate-200">
                    <div>
                        <span class="text-xs font-heading font-bold uppercase tracking-wider text-axia-blue">Radiografía de Soluciones</span>
                        <h3 class="text-2xl font-heading font-extrabold text-slate-900 mt-1">
                            Explora a fondo cómo funciona cada Pilar
                        </h3>
                    </div>

                    <!-- Botones de Pestañas -->
                    <div class="flex flex-wrap gap-2" role="tablist">
                        @foreach($pillars as $pillar)
                            <button type="button"
                                    data-pillar-tab="{{ $pillar->slug }}"
                                    class="pillar-tab-btn px-5 py-2.5 rounded-xl font-heading font-bold text-sm transition cursor-pointer {{ $loop->first ? 'bg-axia-blue text-white shadow-sm' : 'bg-white text-slate-700 border border-slate-200 hover:bg-slate-100' }}">
                                {{ $loop->iteration }}. {{ $pillar->name }}
                            </button>
                        @endforeach
                    </div>
                </div>

                @foreach($pillars as $pillar)
                    <div id="pillar-panel-{{ $pillar->slug }}" class="pillar-tab-panel {{ $loop->first ? '' : 'hidden' }} pt-8 space-y-10">
                        <!-- Resumen Hero del Pilar -->
                        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center bg-white p-6 sm:p-8 rounded-2xl border border-slate-200 shadow-sm">
                            <div class="lg:col-span-7 space-y-4">
                                <span class="inline-block px-3 py-1 rounded-full bg-slate-100 text-slate-800 text-xs font-heading font-bold">
                                    {{ $pillar->hero_subtitle }}
                                </span>
                                <h4 class="text-2xl sm:text-3xl font-heading font-extrabold text-slate-900">
                                    {{ $pillar->hero_title }}
                                </h4>
                                <p class="text-slate-600 leading-relaxed">
                                    {{ $pillar->hero_description }}
                                </p>
                                <div class="pt-2 flex flex-wrap gap-3">
                                    <a href="#contacto"
                                       data-select-pillar="{{ $pillar->slug }}"
                                       class="btn-axia-primary px-6 py-3 rounded-xl text-sm inline-flex items-center gap-2">
                                        <span>{{ $pillar->hero_cta_text }}</span>
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                                    </a>
                                    <a href="{{ url('/' . $pillar->slug) }}"
                                       class="btn-axia-outline px-5 py-3 rounded-xl text-sm">
                                        Ver página completa de {{ $pillar->name }}
                                    </a>
                                </div>
                            </div>
                            <div class="lg:col-span-5">
                                @if($pillar->hero_image_url)
                                    <img src="{{ $pillar->hero_image_url }}"
                                         alt="{{ $pillar->hero_title }}"
                                         class="w-full h-64 object-cover rounded-xl border border-slate-200">
                                @endif
                            </div>
                        </div>

                        <!-- Logos de Herramientas / Partners del Pilar -->
                        @if(!empty($pillar->partner_logos))
                            <div class="bg-white p-6 rounded-2xl border border-slate-200">
                                <p class="text-center text-xs font-heading font-bold uppercase tracking-wider text-slate-500 mb-5">
                                    {{ $pillar->social_proof_title }}
                                </p>
                                <div class="flex flex-wrap items-center justify-center gap-6 sm:gap-10">
                                    @foreach($pillar->partner_logos as $logo)
                                        <img src="{{ $logo['url'] }}"
                                             alt="{{ $logo['name'] }}"
                                             class="h-10 sm:h-12 w-auto object-contain">
                                    @endforeach
                                </div>
                            </div>
                        @endif

                        <!-- Metodología de 4 Pasos del Pilar -->
                        <div>
                            <h5 class="text-xl font-heading font-bold text-slate-900 mb-4">
                                {{ $pillar->method_section_title }}
                            </h5>
                            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
                                @foreach($pillar->method_steps ?? [] as $step)
                                    <div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-sm flex flex-col justify-between">
                                        <div>
                                            @if(!empty($step['image_url']))
                                                <img src="{{ $step['image_url'] }}"
                                                     alt="{{ $step['title'] }}"
                                                     class="w-14 h-14 rounded-xl object-contain mb-4 bg-slate-50 p-1.5 border border-slate-100">
                                            @endif
                                            <h6 class="font-heading font-bold text-slate-900 text-base mb-1.5">
                                                {{ $step['title'] }}
                                            </h6>
                                            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                                                {{ $step['description'] }}
                                            </p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>

    <!-- 4. LA HISTORIA DETRÁS DE AXIACORE HUB -->
    <section id="historia" class="py-20 lg:py-24 bg-axia-light border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">

                <div class="lg:col-span-5">
                    <div class="relative bg-white p-3 rounded-3xl border border-slate-200 shadow-lg">
                        <img src="{{ $settings['story_image'] ?? '/wp-content/uploads/2025/07/manos-en-la-computadora-portatil-800x1200op.jpg' }}"
                             alt="La Historia Detrás de AxiaCore Hub"
                             class="w-full h-[420px] sm:h-[480px] object-cover rounded-2xl">
                    </div>
                </div>

                <div class="lg:col-span-7 space-y-6">
                    <span class="inline-block px-3.5 py-1 rounded-full bg-white border border-slate-200 text-axia-blue text-xs font-heading font-bold uppercase tracking-wider">
                        Nuestra Esencia
                    </span>

                    <h2 class="text-3xl sm:text-4xl font-heading font-extrabold text-slate-900">
                        {{ $settings['story_title'] ?? 'La Historia Detrás de AxiaCore Hub' }}
                    </h2>

                    <p class="text-lg text-slate-700 leading-relaxed">
                        {{ $settings['story_p1'] ?? 'Con años de experiencia en la transformación organizacional, AxiaCore Hub se especializa en catalizar el crecimiento sostenible de empresas a través de un viaje de madurez organizacional.' }}
                    </p>

                    <div class="p-6 rounded-2xl bg-white border-l-4 border-axia-blue shadow-sm">
                        <p class="text-base font-medium text-slate-800">
                            {{ $settings['story_p2'] ?? 'Te asistimos y contribuimos a desarrollar los 3 pilares que toda empresa necesita: Procesos que funcionan, crecimiento sostenible y propósito que inspira.' }}
                        </p>
                    </div>

                    <div class="pt-2 flex flex-wrap items-center gap-4">
                        <a href="#contacto"
                           data-select-pillar="integral"
                           class="btn-axia-primary px-7 py-3.5 rounded-xl text-sm inline-flex items-center gap-2">
                            <span>{{ $settings['hero_cta_text'] ?? 'Agendar Sesión Estratégica' }}</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </a>
                        <a href="{{ route('about') }}" class="text-sm font-heading font-bold text-axia-blue hover:underline">
                            Conocer más sobre nuestro equipo →
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 5. PRUEBA SOCIAL Y TESTIMONIOS ("Nuestros clientes opinan") -->
    <section id="testimonios" class="py-20 lg:py-24 bg-white border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="text-center max-w-3xl mx-auto mb-14 space-y-3">
                <span class="inline-block px-3.5 py-1 rounded-full bg-axia-orangeLight text-axia-orange text-xs font-heading font-bold uppercase tracking-wider">
                    Casos de Éxito Verificados
                </span>
                <h2 class="text-3xl sm:text-4xl font-heading font-extrabold text-slate-900">
                    Nuestros clientes opinan
                </h2>
                <p class="text-slate-600 text-base">
                    Resultados tangibles en claridad operativa, presencia digital y cohesión de liderazgo.
                </p>
            </div>

            @php
                $featuredAlcespa = $testimonials->firstWhere('pillar_slug', 'home') ?? $testimonials->first();
                $otherTestimonials = $testimonials->where('id', '!==', optional($featuredAlcespa)->id);
            @endphp

            <!-- Caso Destacado Principal: ALCESPA -->
            @if($featuredAlcespa)
                <div class="bg-slate-50 rounded-3xl p-8 sm:p-10 border border-slate-200 shadow-md mb-10">
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                        <div class="lg:col-span-4 flex flex-col items-center lg:items-start text-center lg:text-left space-y-4 border-b lg:border-b-0 lg:border-r border-slate-200 pb-6 lg:pb-0 lg:pr-8">
                            @if($featuredAlcespa->company_logo_url)
                                <img src="{{ $featuredAlcespa->company_logo_url }}"
                                     alt="{{ $featuredAlcespa->author_name }} - Logo"
                                     class="h-16 w-auto object-contain bg-white p-2 rounded-xl border border-slate-200">
                            @endif
                            <div class="flex items-center gap-3">
                                @if($featuredAlcespa->avatar_url)
                                    <img src="{{ $featuredAlcespa->avatar_url }}"
                                         alt="{{ $featuredAlcespa->author_name }}"
                                         class="w-12 h-12 rounded-full object-cover border border-slate-300">
                                @endif
                                <div>
                                    <h3 class="font-heading font-bold text-slate-900 text-base">
                                        {{ $featuredAlcespa->author_name }}
                                    </h3>
                                    <p class="text-xs text-slate-600">{{ $featuredAlcespa->author_role }}</p>
                                    @if($featuredAlcespa->company_url)
                                        <a href="{{ $featuredAlcespa->company_url }}" target="_blank" rel="noopener" class="text-xs font-bold text-axia-blue hover:underline">
                                            alcespa.cl ↗
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="lg:col-span-8 space-y-4">
                            <div class="text-amber-500 text-lg tracking-widest">★★★★★</div>
                            <blockquote class="text-slate-800 text-base sm:text-lg italic leading-relaxed">
                                “{{ $featuredAlcespa->content }}”
                            </blockquote>
                        </div>
                    </div>
                </div>
            @endif

            <!-- Grid de Testimonios por Pilar -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @foreach($otherTestimonials as $testimonial)
                    <div class="bg-white rounded-2xl p-6 border border-slate-200 shadow-sm flex flex-col justify-between space-y-5">
                        <div class="space-y-3">
                            <div class="flex items-center justify-between">
                                <span class="text-amber-500 text-sm tracking-widest">★★★★★</span>
                                <span class="px-2.5 py-0.5 rounded-full text-xs font-heading font-bold bg-slate-100 text-slate-700 capitalize">
                                    {{ $testimonial->pillar_slug }}
                                </span>
                            </div>
                            <p class="text-slate-700 text-sm leading-relaxed italic">
                                “{{ $testimonial->content }}”
                            </p>
                        </div>

                        <div class="flex items-center gap-3 pt-4 border-t border-slate-100">
                            @if($testimonial->avatar_url)
                                <img src="{{ $testimonial->avatar_url }}"
                                     alt="{{ $testimonial->author_name }}"
                                     class="w-11 h-11 rounded-full object-cover border border-slate-200">
                            @endif
                            <div>
                                <h4 class="font-heading font-bold text-slate-900 text-sm">{{ $testimonial->author_name }}</h4>
                                <p class="text-xs text-slate-500">{{ $testimonial->author_role }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>

    <!-- 6. ESTRATEGIAS QUE TRANSFORMAN Y CONECTAN CON TU VISIÓN -->
    <section id="estrategias" class="py-20 lg:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="text-center max-w-3xl mx-auto mb-16 space-y-4">
                <span class="inline-block px-3.5 py-1 rounded-full bg-axia-greenLight text-emerald-800 text-xs font-heading font-bold uppercase tracking-wider">
                    Visión de Largo Plazo
                </span>
                <h2 class="text-3xl sm:text-4xl font-heading font-extrabold text-slate-900">
                    {{ $settings['strategies_heading'] ?? 'Estrategias que Transforman y Conectan con tu Visión' }}
                </h2>
                <p class="text-lg text-slate-600">
                    {{ $settings['strategies_subheading'] ?? 'Nuestro enfoque integral combina eficiencia, autenticidad y propósito, creando un sistema de crecimiento sostenible que redefine el éxito empresarial.' }}
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
                <!-- Estrategia 1: Crecimiento Consciente -->
                <div class="bg-slate-50 rounded-3xl overflow-hidden border border-slate-200 shadow-sm flex flex-col sm:flex-row">
                    <div class="sm:w-2/5 shrink-0 bg-slate-100">
                        <img src="{{ $settings['strategy_1_image'] ?? '/wp-content/uploads/2025/07/vista-del-aula-futurista-1080x1080op.jpg' }}"
                             alt="{{ $settings['strategy_1_title'] ?? 'Crecimiento Consciente' }}"
                             class="w-full h-64 sm:h-full object-cover">
                    </div>
                    <div class="p-7 sm:p-8 flex flex-col justify-between space-y-5">
                        <div class="space-y-3">
                            <h3 class="text-2xl font-heading font-bold text-slate-900">
                                {{ $settings['strategy_1_title'] ?? 'Crecimiento Consciente' }}
                            </h3>
                            <p class="text-slate-600 text-sm leading-relaxed">
                                {{ $settings['strategy_1_desc'] ?? 'Te ayudamos a construir un ecosistema que no solo crece, sino que lo hace con un enfoque en crear una relación que valoren tanto los clientes y prospectos, garantizando un futuro sostenible.' }}
                            </p>
                        </div>
                        <div>
                            <a href="#contacto"
                               data-select-pillar="conecta"
                               class="btn-axia-blue px-5 py-3 rounded-xl text-xs sm:text-sm inline-flex items-center gap-2">
                                <span>{{ $settings['hero_cta_text'] ?? 'Agendar Sesión Estratégica' }}</span>
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Estrategia 2: Estrategia Integral -->
                <div class="bg-slate-50 rounded-3xl overflow-hidden border border-slate-200 shadow-sm flex flex-col sm:flex-row">
                    <div class="sm:w-2/5 shrink-0 bg-slate-100">
                        <img src="{{ $settings['strategy_2_image'] ?? '/wp-content/uploads/2025/07/concepto-de-negocios-con-bloques-de-madera-1080x1080-1.jpg' }}"
                             alt="{{ $settings['strategy_2_title'] ?? 'Estrategia Integral' }}"
                             class="w-full h-64 sm:h-full object-cover">
                    </div>
                    <div class="p-7 sm:p-8 flex flex-col justify-between space-y-5">
                        <div class="space-y-3">
                            <h3 class="text-2xl font-heading font-bold text-slate-900">
                                {{ $settings['strategy_2_title'] ?? 'Estrategia Integral' }}
                            </h3>
                            <p class="text-slate-600 text-sm leading-relaxed">
                                {{ $settings['strategy_2_desc'] ?? 'Integramos procesos, mercado y propósito para crear una estrategia que no solo es efectiva, sino que también está en sintonía con los valores de tu organización. Motivamos y habilitamos a las organizaciones que buscan trascender, contribuyendo claramente a la sociedad.' }}
                            </p>
                        </div>
                        <div>
                            <a href="#contacto"
                               data-select-pillar="integral"
                               class="btn-axia-blue px-5 py-3 rounded-xl text-xs sm:text-sm inline-flex items-center gap-2">
                                <span>{{ $settings['hero_cta_text'] ?? 'Agendar Sesión Estratégica' }}</span>
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- 7. FORMULARIO DE CONTACTO INTEGRADO (Reemplazo de Calendly) -->
    @include('partials.contact-section', ['sourcePage' => 'home', 'selectedPillar' => 'integral'])

    <!-- Script de Pestañas Interactivas de Pilares -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const tabButtons = document.querySelectorAll('.pillar-tab-btn');
            const tabPanels = document.querySelectorAll('.pillar-tab-panel');

            tabButtons.forEach(btn => {
                btn.addEventListener('click', () => {
                    const targetSlug = btn.getAttribute('data-pillar-tab');

                    tabButtons.forEach(b => {
                        b.className = 'pillar-tab-btn px-5 py-2.5 rounded-xl font-heading font-bold text-sm transition cursor-pointer bg-white text-slate-700 border border-slate-200 hover:bg-slate-100';
                    });
                    btn.className = 'pillar-tab-btn px-5 py-2.5 rounded-xl font-heading font-bold text-sm transition cursor-pointer bg-axia-blue text-white shadow-sm';

                    tabPanels.forEach(panel => {
                        if (panel.id === 'pillar-panel-' + targetSlug) {
                            panel.classList.remove('hidden');
                        } else {
                            panel.classList.add('hidden');
                        }
                    });
                });
            });
        });
    </script>

@endsection

