<!-- SECCIÓN DE FORMULARIO DE CONTACTO CRO (Reemplaza todos los enlaces a Calendly) -->
<section id="contacto" class="py-20 lg:py-24 bg-axia-light border-t border-slate-200 scroll-mt-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">

            <!-- Columna Izquierda: Propuesta de Valor de la Sesión Estratégica -->
            <div class="lg:col-span-5 space-y-6">
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-white border border-slate-200 text-axia-blue text-xs font-heading font-bold uppercase tracking-wider shadow-sm">
                    <span class="w-2 h-2 rounded-full bg-axia-orange"></span>
                    <span>Sesión Estratégica sin Costo</span>
                </div>

                <h2 class="text-3xl sm:text-4xl font-heading font-extrabold text-slate-900 leading-tight">
                    {{ $settings['cta_final_title'] ?? 'Comienza tu Transformación Hoy' }}
                </h2>

                <p class="text-lg text-slate-700 leading-relaxed">
                    {{ $settings['cta_final_subtitle'] ?? 'Únete a nosotros en el viaje hacia el éxito auténtico. Estamos aquí para ayudarte a construir un futuro brillante.' }}
                </p>

                <div class="bg-white rounded-2xl p-6 border border-slate-200/90 shadow-sm space-y-4">
                    <h3 class="font-heading font-bold text-slate-900 text-base">
                        ¿Qué obtendrás al completar este formulario?
                    </h3>
                    <ul class="space-y-3 text-sm text-slate-700">
                        <li class="flex items-start gap-3">
                            <span class="mt-0.5 w-5 h-5 rounded-full bg-axia-blueLight text-axia-blue flex items-center justify-center font-bold shrink-0">1</span>
                            <span><strong>Diagnóstico de 30 minutos:</strong> Analizaremos tu reto principal operativo, comercial o de talento sin compromiso.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="mt-0.5 w-5 h-5 rounded-full bg-axia-orangeLight text-axia-orange flex items-center justify-center font-bold shrink-0">2</span>
                            <span><strong>Mapa de Ruta Claro:</strong> Te llevarás al menos una idea accionable para implementar de inmediato en tu organización.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="mt-0.5 w-5 h-5 rounded-full bg-axia-greenLight text-axia-green flex items-center justify-center font-bold shrink-0">3</span>
                            <span><strong>Alineación Integral:</strong> Procesos que funcionan (Evoluciona), crecimiento predecible (Conecta) y propósito que inspira (Trasciende).</span>
                        </li>
                    </ul>
                </div>

                <!-- Mini Tarjeta con Imagen de Cierre Original (hombre-de-negocios1920x1080-op.jpg) -->
                <div class="flex items-center gap-4 bg-white p-4 rounded-2xl border border-slate-200 shadow-sm">
                    <img src="{{ $settings['hero_secondary_image_url'] ?? '/wp-content/uploads/2025/07/hombre-de-negocios1920x1080-op.jpg' }}"
                         alt="Comienza tu Transformación Hoy - AxiaCore Hub"
                         class="w-20 h-16 rounded-xl object-cover shrink-0 border border-slate-100">
                    <div>
                        <p class="font-heading font-bold text-slate-900 text-sm">El Equipo de AxiaCore Hub</p>
                        <p class="text-xs text-slate-600">Somos el Hub donde la estrategia se encuentra con el alma. Respuesta en menos de 24 horas hábiles.</p>
                    </div>
                </div>
            </div>

            <!-- Columna Derecha: Formulario de Contacto Estilizado en Tema Claro -->
            <div id="formulario" class="lg:col-span-7 bg-white rounded-3xl p-8 sm:p-10 border border-slate-200 shadow-xl shadow-slate-200/60">
                <div class="mb-6">
                    <h3 class="text-2xl font-heading font-bold text-slate-900">
                        {{ $settings['contact_form_title'] ?? 'Llena este formulario y te contactaremos' }}
                    </h3>
                    <p class="text-sm text-slate-600 mt-1">
                        {{ $settings['contact_form_subtitle'] ?? 'Completa tus datos para agendar tu Sesión Estratégica o Diagnóstico Gratuito.' }}
                    </p>
                </div>

                @if(session('contact_success'))
                    <div class="mb-6 p-4 rounded-xl bg-emerald-50 border border-emerald-300 text-emerald-900 text-sm font-medium">
                        ✓ {{ session('contact_success') }}
                    </div>
                @endif

                <form id="axia-contact-form" action="{{ route('contact.store') }}" method="POST" class="space-y-5">
                    @csrf
                    <input type="hidden" name="source_page" value="{{ $sourcePage ?? 'home' }}">

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                        <div>
                            <label for="contact_name" class="block text-sm font-semibold text-slate-800 mb-1.5">
                                Nombre <span class="text-red-600">*</span>
                            </label>
                            <input type="text"
                                   id="contact_name"
                                   name="name"
                                   required
                                   placeholder="Tu nombre"
                                   class="w-full rounded-xl border border-slate-300 bg-slate-50/60 px-4 py-3 text-slate-900 placeholder-slate-400 focus:bg-white focus:border-axia-blue focus:ring-2 focus:ring-axia-blue/20 outline-none transition">
                        </div>

                        <div>
                            <label for="contact_last_name" class="block text-sm font-semibold text-slate-800 mb-1.5">
                                Apellidos
                            </label>
                            <input type="text"
                                   id="contact_last_name"
                                   name="last_name"
                                   placeholder="Tus apellidos"
                                   class="w-full rounded-xl border border-slate-300 bg-slate-50/60 px-4 py-3 text-slate-900 placeholder-slate-400 focus:bg-white focus:border-axia-blue focus:ring-2 focus:ring-axia-blue/20 outline-none transition">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                        <div>
                            <label for="contact_email" class="block text-sm font-semibold text-slate-800 mb-1.5">
                                Correo electrónico <span class="text-red-600">*</span>
                            </label>
                            <input type="email"
                                   id="contact_email"
                                   name="email"
                                   required
                                   placeholder="nombre@empresa.com"
                                   class="w-full rounded-xl border border-slate-300 bg-slate-50/60 px-4 py-3 text-slate-900 placeholder-slate-400 focus:bg-white focus:border-axia-blue focus:ring-2 focus:ring-axia-blue/20 outline-none transition">
                        </div>

                        <div>
                            <label for="contact_phone" class="block text-sm font-semibold text-slate-800 mb-1.5">
                                Teléfono / WhatsApp
                            </label>
                            <input type="tel"
                                   id="contact_phone"
                                   name="phone"
                                   placeholder="+52 55 1234 5678"
                                   class="w-full rounded-xl border border-slate-300 bg-slate-50/60 px-4 py-3 text-slate-900 placeholder-slate-400 focus:bg-white focus:border-axia-blue focus:ring-2 focus:ring-axia-blue/20 outline-none transition">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                        <div>
                            <label for="contact_company" class="block text-sm font-semibold text-slate-800 mb-1.5">
                                Empresa u Organización
                            </label>
                            <input type="text"
                                   id="contact_company"
                                   name="company"
                                   placeholder="Nombre de tu empresa"
                                   class="w-full rounded-xl border border-slate-300 bg-slate-50/60 px-4 py-3 text-slate-900 placeholder-slate-400 focus:bg-white focus:border-axia-blue focus:ring-2 focus:ring-axia-blue/20 outline-none transition">
                        </div>

                        <div>
                            <label for="pillar_interest" class="block text-sm font-semibold text-slate-800 mb-1.5">
                                Enfoque de tu Sesión / Diagnóstico
                            </label>
                            @php
                                $defaultPillar = $selectedPillar ?? ($currentPillarSlug ?? 'integral');
                            @endphp
                            <select id="pillar_interest"
                                    name="pillar_interest"
                                    class="w-full rounded-xl border border-slate-300 bg-slate-50/60 px-4 py-3 text-slate-900 focus:bg-white focus:border-axia-blue focus:ring-2 focus:ring-axia-blue/20 outline-none transition">
                                <option value="integral" {{ $defaultPillar === 'integral' ? 'selected' : '' }}>Diagnóstico Integral (Los 3 Pilares)</option>
                                <option value="evoluciona" {{ $defaultPillar === 'evoluciona' ? 'selected' : '' }}>Evoluciona · Procesos y Operaciones Ágiles</option>
                                <option value="conecta" {{ $defaultPillar === 'conecta' ? 'selected' : '' }}>Conecta · Ecosistema de Marketing y Ventas</option>
                                <option value="trasciende" {{ $defaultPillar === 'trasciende' ? 'selected' : '' }}>Trasciende · Brújula de Valores y Talento</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <label for="contact_message" class="block text-sm font-semibold text-slate-800 mb-1.5">
                            Comentario o mensaje
                        </label>
                        <textarea id="contact_message"
                                  name="message"
                                  rows="4"
                                  placeholder="Cuéntanos brevemente cuál es tu principal reto actual (caos operativo, ventas estancadas, alineación de talento...)"
                                  class="w-full rounded-xl border border-slate-300 bg-slate-50/60 px-4 py-3 text-slate-900 placeholder-slate-400 focus:bg-white focus:border-axia-blue focus:ring-2 focus:ring-axia-blue/20 outline-none transition"></textarea>
                    </div>

                    <button type="submit"
                            class="w-full btn-axia-primary py-4 px-6 rounded-xl text-base flex items-center justify-center gap-2 cursor-pointer">
                        <span>Enviar y Solicitar Sesión Estratégica</span>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </button>

                    <div id="contact-form-feedback" class="hidden"></div>

                    <p class="text-xs text-center text-slate-500">
                        🔒 Tus datos están protegidos. Sin spam ni compromisos forzosos.
                    </p>
                </form>
            </div>

        </div>
    </div>
</section>

