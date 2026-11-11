<!DOCTYPE html>
<html lang="es" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'AxiaCore Hub | Evoluciona. Conecta. Trasciende.')</title>
    <meta name="description" content="@yield('meta_description', $settings['hero_subtitle'] ?? '¿Tu equipo vive apagando fuegos en lugar de construir soluciones? Transformamos tu organización alineando procesos, mercado y propósito.')">

    <!-- Tailwind CSS CDN + AxiaCore Hub Light Theme Design Tokens -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        axia: {
                            white: '#ffffff',
                            light: '#f4f6f9',
                            surface: '#f8fafc',
                            blue: '#1e5799',
                            blueDark: '#153e6e',
                            blueLight: '#e8f1fb',
                            orange: '#f7941e',
                            orangeHover: '#e07d08',
                            orangeLight: '#fff4e5',
                            green: '#7db942',
                            greenLight: '#eef7e6',
                            slate: '#1e293b',
                            charcoal: '#333333',
                            muted: '#475569',
                        }
                    },
                    fontFamily: {
                        heading: ['"Montserrat"', 'system-ui', 'sans-serif'],
                        sans: ['"IBM Plex Sans"', 'system-ui', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    <!-- Tipografías Oficiales de AxiaCore Hub: Montserrat + IBM Plex Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Montserrat:wght@600;700;800&display=swap" rel="stylesheet">

    <style>
        :root {
            --axia-blue: #1e5799;
            --axia-orange: #f7941e;
            --axia-green: #7db942;
            --axia-text: #1e293b;
            --axia-bg-light: #f4f6f9;
        }

        body {
            font-family: 'IBM Plex Sans', sans-serif;
            background-color: #ffffff;
            color: #1e293b;
            line-height: 1.7;
        }

        h1, h2, h3, h4, h5, h6, .font-heading {
            font-family: 'Montserrat', sans-serif;
            letter-spacing: -0.02em;
        }

        .btn-axia-primary {
            background-color: #f7941e;
            color: #ffffff;
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            transition: all 0.25s ease;
            box-shadow: 0 8px 20px -4px rgba(247, 148, 30, 0.4);
        }

        .btn-axia-primary:hover {
            background-color: #e07d08;
            color: #ffffff;
            transform: translateY(-2px);
            box-shadow: 0 12px 26px -4px rgba(247, 148, 30, 0.52);
        }

        .btn-axia-blue {
            background-color: #1e5799;
            color: #ffffff;
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            transition: all 0.25s ease;
            box-shadow: 0 8px 20px -4px rgba(30, 87, 153, 0.3);
        }

        .btn-axia-blue:hover {
            background-color: #153e6e;
            color: #ffffff;
            transform: translateY(-2px);
        }

        .btn-axia-outline {
            border: 2px solid #1e5799;
            color: #1e5799;
            background-color: #ffffff;
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            transition: all 0.25s ease;
        }

        .btn-axia-outline:hover {
            background-color: #1e5799;
            color: #ffffff;
            transform: translateY(-2px);
        }

        .bg-grid-light {
            background-image: radial-gradient(#cbd5e1 1px, transparent 1px);
            background-size: 24px 24px;
        }
    </style>
</head>

<body class="bg-white text-slate-800 antialiased selection:bg-axia-blue/15 selection:text-axia-blue">

    <!-- TOP BAR CRO (Contraste Claro y Propuesta de Valor Directa) -->
    <div class="bg-axia-blue text-white text-xs sm:text-sm py-2.5 px-4 border-b border-axia-blueDark">
        <div class="max-w-7xl mx-auto flex flex-col sm:flex-row items-center justify-between gap-2 text-center sm:text-left">
            <p class="font-medium flex items-center justify-center sm:justify-start gap-2">
                <span class="inline-block w-2 h-2 rounded-full bg-axia-green animate-pulse"></span>
                <span>{{ $settings['announcement_bar'] ?? 'Diagnóstico Organizacional sin Costo · Alinea Procesos, Mercado y Propósito' }}</span>
            </p>
            <a href="#contacto" class="inline-flex items-center gap-1.5 font-heading font-bold text-amber-300 hover:text-white underline underline-offset-4 transition">
                <span>Ir al Formulario de Contacto</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
        </div>
    </div>

    <!-- HEADER STICKY EN ESTILO CLARO (Alta Visibilidad) -->
    <header class="sticky top-0 z-50 bg-white/95 backdrop-blur-md border-b border-slate-200/80 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between gap-4">
            <!-- Logo Oficial de AxiaCore Hub -->
            <a href="{{ route('home') }}" class="flex items-center gap-3 shrink-0 group" aria-label="AxiaCore Hub Home">
                <img src="{{ $settings['brand_logo_url'] ?? '/wp-content/uploads/2025/07/IMAGOTIPO-300x105-Photoroom.png' }}"
                     alt="AxiaCore Hub"
                     class="h-11 sm:h-12 w-auto object-contain transition group-hover:scale-[1.02]">
            </a>

            <!-- Navegación Desktop enfocada en los 3 Pilares + Nosotros + Contacto -->
            <nav class="hidden lg:flex items-center gap-7 text-sm font-medium text-slate-700" aria-label="Navegación Principal">
                <a href="{{ route('home') }}" class="hover:text-axia-blue transition {{ request()->routeIs('home') ? 'text-axia-blue font-bold' : '' }}">
                    Inicio
                </a>
                <a href="{{ route('pillar.evoluciona') }}" class="hover:text-axia-blue transition flex items-center gap-1.5 {{ request()->routeIs('pillar.evoluciona') ? 'text-axia-blue font-bold' : '' }}">
                    <span class="w-2 h-2 rounded-full bg-axia-blue"></span>
                    <span>1. Evoluciona</span>
                </a>
                <a href="{{ route('pillar.conecta') }}" class="hover:text-axia-orange transition flex items-center gap-1.5 {{ request()->routeIs('pillar.conecta') ? 'text-axia-orange font-bold' : '' }}">
                    <span class="w-2 h-2 rounded-full bg-axia-orange"></span>
                    <span>2. Conecta</span>
                </a>
                <a href="{{ route('pillar.trasciende') }}" class="hover:text-axia-green transition flex items-center gap-1.5 {{ request()->routeIs('pillar.trasciende') ? 'text-axia-green font-bold' : '' }}">
                    <span class="w-2 h-2 rounded-full bg-axia-green"></span>
                    <span>3. Trasciende</span>
                </a>
                <a href="{{ route('about') }}" class="hover:text-axia-blue transition {{ request()->routeIs('about') ? 'text-axia-blue font-bold' : '' }}">
                    Nosotros
                </a>
                <a href="{{ route('contact') }}" class="hover:text-axia-blue transition {{ request()->routeIs('contact') ? 'text-axia-blue font-bold' : '' }}">
                    Contacto
                </a>
            </nav>

            <!-- CTA Primario (Antes Calendly -> Ahora Enlace Directo al Formulario de Contacto) -->
            <div class="flex items-center gap-3">
                <a href="#contacto"
                   data-select-pillar="{{ $currentPillarSlug ?? 'integral' }}"
                   class="btn-axia-primary px-5 py-2.5 rounded-xl text-xs sm:text-sm inline-flex items-center gap-2">
                    <span>{{ $settings['hero_cta_text'] ?? 'Agendar Sesión Estratégica' }}</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </a>

                <!-- Botón Menú Móvil -->
                <button type="button" id="mobile-menu-toggle" class="lg:hidden p-2 rounded-lg border border-slate-200 text-slate-700 hover:bg-slate-100" aria-label="Abrir menú">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                </button>
            </div>
        </div>

        <!-- Menú Móvil Claro -->
        <div id="mobile-menu" class="hidden lg:hidden bg-white border-t border-slate-200 px-6 py-4 space-y-3 shadow-lg">
            <a href="{{ route('home') }}" class="block py-2 text-slate-800 font-medium hover:text-axia-blue">Inicio</a>
            <a href="{{ route('pillar.evoluciona') }}" class="block py-2 text-slate-800 font-medium hover:text-axia-blue">1. Evoluciona (Procesos y Operaciones)</a>
            <a href="{{ route('pillar.conecta') }}" class="block py-2 text-slate-800 font-medium hover:text-axia-orange">2. Conecta (Marketing y Ventas)</a>
            <a href="{{ route('pillar.trasciende') }}" class="block py-2 text-slate-800 font-medium hover:text-axia-green">3. Trasciende (Brújula de Valores y Talento)</a>
            <a href="{{ route('about') }}" class="block py-2 text-slate-800 font-medium hover:text-axia-blue">Nosotros</a>
            <a href="{{ route('contact') }}" class="block py-2 text-axia-blue font-bold">Formulario de Contacto</a>
        </div>
    </header>

    <!-- CONTENIDO PRINCIPAL -->
    <main>
        @yield('content')
    </main>

    <!-- FOOTER CLARO DE ALTA LEGIBILIDAD -->
    <footer class="bg-slate-50 border-t border-slate-200 pt-16 pb-12 text-slate-600">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-10 pb-12 border-b border-slate-200">
                <!-- Columna Marca -->
                <div class="lg:col-span-5 space-y-4">
                    <a href="{{ route('home') }}" class="inline-block">
                        <img src="{{ $settings['brand_logo_url'] ?? '/wp-content/uploads/2025/07/IMAGOTIPO-300x105-Photoroom.png' }}"
                             alt="AxiaCore Hub"
                             class="h-12 w-auto object-contain">
                    </a>
                    <p class="text-slate-900 font-heading font-bold text-lg">
                        {{ $settings['brand_tagline'] ?? 'Evoluciona. Conecta. Trasciende.' }}
                    </p>
                    <p class="text-slate-600 text-sm leading-relaxed max-w-md">
                        Construimos junto contigo un ecosistema de crecimiento consciente, alineando tus procesos, tu mercado y tu propósito para lograr un éxito auténtico y duradero.
                    </p>
                </div>

                <!-- Columna 3 Pilares -->
                <div class="lg:col-span-3 space-y-3">
                    <h3 class="font-heading font-bold text-slate-900 text-sm uppercase tracking-wider">Nuestros 3 Pilares</h3>
                    <ul class="space-y-2.5 text-sm">
                        <li>
                            <a href="{{ route('pillar.evoluciona') }}" class="hover:text-axia-blue transition flex items-center gap-2">
                                <span class="w-1.5 h-1.5 rounded-full bg-axia-blue"></span>
                                <span>Evoluciona · Procesos Ágiles</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('pillar.conecta') }}" class="hover:text-axia-orange transition flex items-center gap-2">
                                <span class="w-1.5 h-1.5 rounded-full bg-axia-orange"></span>
                                <span>Conecta · Growth Marketing</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('pillar.trasciende') }}" class="hover:text-axia-green transition flex items-center gap-2">
                                <span class="w-1.5 h-1.5 rounded-full bg-axia-green"></span>
                                <span>Trasciende · Brújula de Valores</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Columna Enlaces y Contacto Directo -->
                <div class="lg:col-span-4 space-y-3">
                    <h3 class="font-heading font-bold text-slate-900 text-sm uppercase tracking-wider">Navegación y Diagnóstico</h3>
                    <ul class="space-y-2.5 text-sm">
                        <li><a href="{{ route('home') }}" class="hover:text-axia-blue transition">Inicio</a></li>
                        <li><a href="{{ route('about') }}" class="hover:text-axia-blue transition">La Historia Detrás de AxiaCore Hub</a></li>
                        <li><a href="{{ route('contact') }}#formulario" class="text-axia-blue font-semibold hover:underline">Formulario de Contacto (Sesión Estratégica)</a></li>
                        <li><a href="/admin" class="text-slate-500 hover:text-axia-blue transition">Panel Administrativo (FilamentPHP)</a></li>
                    </ul>
                </div>
            </div>

            <div class="pt-8 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-slate-500">
                <p>© {{ date('Y') }} AxiaCore Hub. Todos los derechos reservados. Arquitectura optimizada para Conversión (CRO) en Estilo Claro.</p>
                <div class="flex items-center gap-4">
                    <a href="{{ route('contact') }}#formulario" class="font-semibold text-axia-blue hover:underline">Solicitar Diagnóstico Gratuito</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- SCRIPTS INTERACTIVOS CRO -->
    <script>
        // Fallback automático a copia local en /wp-content/uploads/ si el servidor remoto de WP no responde
        window.addEventListener('error', (event) => {
            const target = event.target;
            if (target && target.tagName === 'IMG' && target.src && target.src.startsWith('/wp-content/uploads/')) {
                if (!target.dataset.localFallbackTried) {
                    target.dataset.localFallbackTried = '1';
                    target.src = target.src.replace('/wp-content/uploads/', '/wp-content/uploads/');
                }
            }
        }, true);

        document.addEventListener('DOMContentLoaded', () => {
            // Menú móvil
            const mobileBtn = document.getElementById('mobile-menu-toggle');
            const mobileMenu = document.getElementById('mobile-menu');
            if (mobileBtn && mobileMenu) {
                mobileBtn.addEventListener('click', () => {
                    mobileMenu.classList.toggle('hidden');
                });
            }

            // Preselección de Pilar al hacer clic en cualquier CTA que apunte a #contacto
            document.querySelectorAll('a[href="#contacto"], a[href*="#formulario"]').forEach(link => {
                link.addEventListener('click', (e) => {
                    const targetForm = document.getElementById('contacto') || document.getElementById('formulario');
                    const pillarAttr = link.getAttribute('data-select-pillar');
                    const selectEl = document.getElementById('pillar_interest');

                    if (pillarAttr && selectEl) {
                        selectEl.value = pillarAttr;
                    }

                    if (targetForm) {
                        e.preventDefault();
                        targetForm.scrollIntoView({ behavior: 'smooth', block: 'start' });
                        const nameInput = document.getElementById('contact_name');
                        if (nameInput) {
                            setTimeout(() => nameInput.focus({ preventScroll: true }), 500);
                        }
                    }
                });
            });

            // Envío asíncrono (AJAX + Fallback nativo) del Formulario de Contacto CRO
            const contactForm = document.getElementById('axia-contact-form');
            if (contactForm) {
                contactForm.addEventListener('submit', async (e) => {
                    e.preventDefault();
                    const submitBtn = contactForm.querySelector('button[type="submit"]');
                    const feedbackBox = document.getElementById('contact-form-feedback');
                    const originalBtnHtml = submitBtn.innerHTML;

                    submitBtn.disabled = true;
                    submitBtn.innerHTML = '<span>Enviando solicitud...</span>';

                    try {
                        const formData = new FormData(contactForm);
                        const response = await fetch(contactForm.action, {
                            method: 'POST',
                            headers: {
                                'Accept': 'application/json',
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                            },
                            body: formData
                        });

                        const result = await response.json();

                        if (response.ok && result.success) {
                            feedbackBox.className = 'mt-4 p-4 rounded-xl bg-emerald-50 border border-emerald-300 text-emerald-900 text-sm font-medium';
                            feedbackBox.innerHTML = '✓ ' + result.message;
                            feedbackBox.classList.remove('hidden');
                            contactForm.reset();
                        } else {
                            throw new Error(result.message || 'Verifica los campos obligatorios.');
                        }
                    } catch (err) {
                        feedbackBox.className = 'mt-4 p-4 rounded-xl bg-red-50 border border-red-300 text-red-800 text-sm font-medium';
                        feedbackBox.innerHTML = 'Por favor verifica tu nombre y correo electrónico e inténtalo nuevamente.';
                        feedbackBox.classList.remove('hidden');
                    } finally {
                        submitBtn.disabled = false;
                        submitBtn.innerHTML = originalBtnHtml;
                    }
                });
            }
        });
    </script>
</body>

</html>

