<?php

namespace Database\Seeders;

use App\Models\Lead;
use App\Models\Pillar;
use App\Models\SiteSetting;
use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@axiacorehub.com'],
            [
                'name' => 'Admin AxiaCore Hub',
                'password' => Hash::make('password'),
                'email_verified_at' => now(),
            ]
        );

        $settings = [
            // Branding
            [
                'key' => 'brand_name',
                'group' => 'branding',
                'label' => 'Nombre de la Marca',
                'value' => 'AxiaCore Hub',
            ],
            [
                'key' => 'brand_tagline',
                'group' => 'branding',
                'label' => 'Eslogan Oficial',
                'value' => 'Evoluciona. Conecta. Trasciende.',
            ],
            [
                'key' => 'brand_logo_url',
                'group' => 'branding',
                'label' => 'Imagotipo Principal (axiacorehub.com)',
                'value' => '/wp-content/uploads/2025/07/IMAGOTIPO-300x105-Photoroom.png',
            ],
            [
                'key' => 'brand_isotipo_url',
                'group' => 'branding',
                'label' => 'Isotipo Oficial (axiacorehub.com)',
                'value' => '/wp-content/uploads/2025/07/ISOTIPO-final-v0-250912-512x512-Photoroom-300x300.png',
            ],
            [
                'key' => 'announcement_bar',
                'group' => 'cro_header',
                'label' => 'Barra Superior de Valor CRO',
                'value' => 'Diagnóstico Organizacional sin Costo · Alinea Procesos, Mercado y Propósito para un Crecimiento Sostenible',
            ],

            // Hero Home
            [
                'key' => 'hero_kicker',
                'group' => 'hero',
                'label' => 'Kicker Superior Hero',
                'value' => 'Evoluciona · Conecta · Trasciende',
            ],
            [
                'key' => 'hero_title',
                'group' => 'hero',
                'label' => 'Título Principal Hero (H1)',
                'value' => 'Construyamos Puentes hacia el Éxito',
            ],
            [
                'key' => 'hero_subtitle',
                'group' => 'hero',
                'label' => 'Subtítulo Hero (H4)',
                'value' => 'Transformamos tu organización alineando procesos, mercado y propósito para un crecimiento auténtico y sostenible.',
            ],
            [
                'key' => 'hero_cta_text',
                'group' => 'hero',
                'label' => 'Texto CTA Principal (Dirige a Formulario de Contacto)',
                'value' => 'Agendar Sesión Estratégica',
            ],
            [
                'key' => 'hero_image_url',
                'group' => 'hero',
                'label' => 'Imagen Principal Hero (axiacorehub.com)',
                'value' => '/wp-content/uploads/2025/07/gente-de-negocios-dandose-la-mano.webp',
            ],
            [
                'key' => 'hero_secondary_image_url',
                'group' => 'hero',
                'label' => 'Imagen Cierre Transformación (axiacorehub.com)',
                'value' => '/wp-content/uploads/2025/07/hombre-de-negocios1920x1080-op.jpg',
            ],

            // Pain Points Home ("Tu realidad es ....")
            [
                'key' => 'reality_heading',
                'group' => 'pain_points',
                'label' => 'Encabezado Sección Dolor (Home)',
                'value' => 'Tu realidad es...',
            ],
            [
                'key' => 'reality_subheading',
                'group' => 'pain_points',
                'label' => 'Subtítulo Transición Operación',
                'value' => 'Imagina una operación que fluye y un crecimiento predecible.',
            ],
            [
                'key' => 'pain_1_title',
                'group' => 'pain_points',
                'label' => 'Dolor 1 - Título',
                'value' => 'Caos operativo',
            ],
            [
                'key' => 'pain_1_question',
                'group' => 'pain_points',
                'label' => 'Dolor 1 - Pregunta Clave',
                'value' => '¿Tu equipo vive apagando fuegos en lugar de construir soluciones?',
            ],
            [
                'key' => 'pain_1_desc',
                'group' => 'pain_points',
                'label' => 'Dolor 1 - Descripción',
                'value' => 'Cuando los procesos no están alineados, cada día se convierte en una batalla contra el desorden. AxiaCore Hub te ayuda a recuperar el control con sistemas integrados que eliminan la fricción, automatizan tareas clave y devuelven la claridad operativa. Menos caos, más enfoque.',
            ],
            [
                'key' => 'pain_1_image',
                'group' => 'pain_points',
                'label' => 'Dolor 1 - Imagen',
                'value' => '/wp-content/uploads/2025/07/Caos-operativo-1020x1020-1.png',
            ],
            [
                'key' => 'pain_2_title',
                'group' => 'pain_points',
                'label' => 'Dolor 2 - Título',
                'value' => 'Ventas estancadas',
            ],
            [
                'key' => 'pain_2_question',
                'group' => 'pain_points',
                'label' => 'Dolor 2 - Pregunta Clave',
                'value' => '¿Tu producto / servicio no logra conectar con el mercado?',
            ],
            [
                'key' => 'pain_2_desc',
                'group' => 'pain_points',
                'label' => 'Dolor 2 - Descripción',
                'value' => 'Las ventas no se mueven cuando la propuesta no emociona o el canal no está optimizado. Con AxiaCore Hub, transformamos tu narrativa comercial, afinamos tu embudo de conversión y activamos estrategias que despiertan interés real. Porque vender no es insistir, es conectar.',
            ],
            [
                'key' => 'pain_2_image',
                'group' => 'pain_points',
                'label' => 'Dolor 2 - Imagen',
                'value' => '/wp-content/uploads/2025/07/retrato-de-una-adicta-las-compras-femenina-sonando-1020x1020-1.jpg',
            ],
            [
                'key' => 'pain_3_title',
                'group' => 'pain_points',
                'label' => 'Dolor 3 - Título',
                'value' => 'Baja rentabilidad',
            ],
            [
                'key' => 'pain_3_question',
                'group' => 'pain_points',
                'label' => 'Dolor 3 - Pregunta Clave',
                'value' => '¿Trabajas intensamente, pero los números no reflejan tu esfuerzo?',
            ],
            [
                'key' => 'pain_3_desc',
                'group' => 'pain_points',
                'label' => 'Dolor 3 - Descripción',
                'value' => 'La rentabilidad no depende solo de vender más, sino de operar mejor. AxiaCore Hub identifica fugas invisibles, optimiza recursos y te ayuda a construir un modelo sostenible. Menos desgaste, más retorno.',
            ],
            [
                'key' => 'pain_3_image',
                'group' => 'pain_points',
                'label' => 'Dolor 3 - Imagen',
                'value' => '/wp-content/uploads/2025/07/Baja-rentabilidad-1020x1020-1.png',
            ],

            // Pillars Intro Home
            [
                'key' => 'pillars_heading',
                'group' => 'pillars',
                'label' => 'Título Sección Pilares',
                'value' => 'Potenciando tu Crecimiento Sostenible',
            ],
            [
                'key' => 'pillars_subheading',
                'group' => 'pillars',
                'label' => 'Subtítulo Sección Pilares',
                'value' => 'Descubre nuestras soluciones integrales que alinean procesos, mercado y propósito para un éxito auténtico y duradero.',
            ],

            // Story Behind AxiaCore Hub
            [
                'key' => 'story_title',
                'group' => 'story',
                'label' => 'Título Historia',
                'value' => 'La Historia Detrás de AxiaCore Hub',
            ],
            [
                'key' => 'story_p1',
                'group' => 'story',
                'label' => 'Historia Párrafo 1',
                'value' => 'Con años de experiencia en la transformación organizacional, AxiaCore Hub se especializa en catalizar el crecimiento sostenible de empresas a través de un viaje de madurez organizacional.',
            ],
            [
                'key' => 'story_p2',
                'group' => 'story',
                'label' => 'Historia Párrafo 2',
                'value' => 'Te asistimos y contribuimos a desarrollar los 3 pilares que toda empresa necesita: Procesos que funcionan, crecimiento sostenible y propósito que inspira.',
            ],
            [
                'key' => 'story_image',
                'group' => 'story',
                'label' => 'Imagen Historia',
                'value' => '/wp-content/uploads/2025/07/manos-en-la-computadora-portatil-800x1200op.jpg',
            ],
            [
                'key' => 'about_pizarron_image',
                'group' => 'story',
                'label' => 'Imagen Nosotros Pizarrón',
                'value' => '/wp-content/uploads/2025/08/pizarron.webp',
            ],
            [
                'key' => 'about_banner_image',
                'group' => 'story',
                'label' => 'Imagen Nosotros Casa Pastoverde',
                'value' => '/wp-content/uploads/2025/08/casa-pastoverde-1980x1020op.webp',
            ],

            // Strategies Home
            [
                'key' => 'strategies_heading',
                'group' => 'strategies',
                'label' => 'Título Estrategias',
                'value' => 'Estrategias que Transforman y Conectan con tu Visión',
            ],
            [
                'key' => 'strategies_subheading',
                'group' => 'strategies',
                'label' => 'Subtítulo Estrategias',
                'value' => 'Nuestro enfoque integral combina eficiencia, autenticidad y propósito, creando un sistema de crecimiento sostenible que redefine el éxito empresarial.',
            ],
            [
                'key' => 'strategy_1_title',
                'group' => 'strategies',
                'label' => 'Estrategia 1 - Título',
                'value' => 'Crecimiento Consciente',
            ],
            [
                'key' => 'strategy_1_desc',
                'group' => 'strategies',
                'label' => 'Estrategia 1 - Descripción',
                'value' => 'Te ayudamos a construir un ecosistema que no solo crece, sino que lo hace con un enfoque en crear una relación que valoren tanto los clientes y prospectos, garantizando un futuro sostenible.',
            ],
            [
                'key' => 'strategy_1_image',
                'group' => 'strategies',
                'label' => 'Estrategia 1 - Imagen',
                'value' => '/wp-content/uploads/2025/07/vista-del-aula-futurista-1080x1080op.jpg',
            ],
            [
                'key' => 'strategy_2_title',
                'group' => 'strategies',
                'label' => 'Estrategia 2 - Título',
                'value' => 'Estrategia Integral',
            ],
            [
                'key' => 'strategy_2_desc',
                'group' => 'strategies',
                'label' => 'Estrategia 2 - Descripción',
                'value' => 'Integramos procesos, mercado y propósito para crear una estrategia que no solo es efectiva, sino que también está en sintonía con los valores de tu organización. Motivamos y habilitamos a las organizaciones que buscan trascender, contribuyendo claramente a la sociedad.',
            ],
            [
                'key' => 'strategy_2_image',
                'group' => 'strategies',
                'label' => 'Estrategia 2 - Imagen',
                'value' => '/wp-content/uploads/2025/07/concepto-de-negocios-con-bloques-de-madera-1080x1080-1.jpg',
            ],

            // CTA Final & Contact Form
            [
                'key' => 'cta_final_title',
                'group' => 'contact',
                'label' => 'Título Cierre de Conversión',
                'value' => 'Comienza tu Transformación Hoy',
            ],
            [
                'key' => 'cta_final_subtitle',
                'group' => 'contact',
                'label' => 'Subtítulo Cierre de Conversión',
                'value' => 'Únete a nosotros en el viaje hacia el éxito auténtico. Estamos aquí para ayudarte a construir un futuro brillante.',
            ],
            [
                'key' => 'contact_form_title',
                'group' => 'contact',
                'label' => 'Título Formulario de Contacto',
                'value' => 'Llena este formulario y te contactaremos',
            ],
            [
                'key' => 'contact_form_subtitle',
                'group' => 'contact',
                'label' => 'Subtítulo Formulario de Contacto',
                'value' => 'Solicita tu Sesión Estratégica o Diagnóstico Gratuito de 30 minutos. Analizaremos tu reto principal y te compartiremos una hoja de ruta accionable sin costo ni compromiso.',
            ],
        ];

        foreach ($settings as $setting) {
            SiteSetting::updateOrCreate(['key' => $setting['key']], $setting);
        }

        // 3 Core Pillars (Evoluciona, Conecta, Trasciende) with full original content & images
        $pillars = [
            [
                'name' => 'Evoluciona',
                'slug' => 'evoluciona',
                'kicker' => 'Pilar 01 · Operaciones y Procesos Ágiles',
                'short_description' => 'Construimos una base operativa robusta. Optimizamos tus procesos y eliminamos el caos, brindándote control y agilidad en tu organización.',
                'cta_label' => 'Aprende',
                'card_image_url' => '/wp-content/uploads/2025/07/flechas-de-papel-en-colores-1080x1080op.jpg',
                'hero_title' => 'Deja de Buscar la Bolita',
                'hero_subtitle' => 'Dale a tu Operación la Visibilidad y el Control que Merece',
                'hero_description' => 'Implementamos sistemas de procesos ágiles y visuales en semanas, no meses. Transforma el caos de los Excels en una operación que fluye, lista para escalar.',
                'hero_cta_text' => 'Agendar mi Sesión de Diagnóstico',
                'hero_image_url' => '/wp-content/uploads/2025/07/Hero-Del-Caos-Al-Orden-19020x1080-16-9-2.png',
                'social_proof_title' => 'Somos Partners Certificados de las Mejores Herramientas para PyMEs',
                'partner_logos' => [
                    ['name' => 'Geest', 'url' => '/wp-content/uploads/2025/07/logo-geest-1195x510-1.png'],
                    ['name' => 'Odoo', 'url' => '/wp-content/uploads/2025/07/Odoo_logo_rgb.svg-680x510-1.png'],
                    ['name' => 'n8n', 'url' => '/wp-content/uploads/2025/07/n8nio-510x510-1.png'],
                    ['name' => 'Power Automate', 'url' => '/wp-content/uploads/2025/07/Logo-Power-Automate-622x510-1.png'],
                    ['name' => 'Zapier', 'url' => '/wp-content/uploads/2025/07/Zapier-520x510-1.png'],
                ],
                'pain_section_title' => '¿Tu día a día se ve así?',
                'pain_points' => [
                    [
                        'title' => 'Procesos Manuales Ineficientes',
                        'description' => 'Vives ahogado en hojas de cálculo interminables, correos que se pierden y mensajes de WhatsApp que nadie puede rastrear.',
                        'image_url' => '/wp-content/uploads/2025/07/nudo.cuerdas.1020x1020.png',
                    ],
                    [
                        'title' => 'Falta de Visibilidad Real',
                        'description' => 'Nadie en el equipo sabe el estatus real de una orden de producción sin tener que preguntar a tres personas distintas.',
                        'image_url' => '/wp-content/uploads/2025/07/Problemas-de-visibilidad-en-el-Negocior-1020x1020-1.png',
                    ],
                    [
                        'title' => 'Crecimiento Frenado',
                        'description' => 'Quieres crecer y tomar más pedidos, pero sabes que tu operación actual no lo soportaría y el caos solo aumentaría.',
                        'image_url' => '/wp-content/uploads/2025/07/Square-image-hyper-1020x1020-1.png',
                    ],
                ],
                'method_section_title' => 'Nuestro Método: De la Escucha Profunda a la Autonomía Total',
                'method_section_subtitle' => 'Transformamos la complejidad operativa en flujos simples, medibles y escalables en semanas.',
                'method_banner_url' => null,
                'method_steps' => [
                    [
                        'title' => 'Diagnóstico y Escucha',
                        'description' => 'Antes de proponer, nos sumergimos en tu operación para entender tus retos únicos.',
                        'image_url' => '/wp-content/uploads/2025/07/Diagnostico-y-Escucha.png',
                    ],
                    [
                        'title' => 'Diseño Ágil del Proceso',
                        'description' => 'Mapeamos y diseñamos un flujo de trabajo visual, simple y a la medida de tu equipo.',
                        'image_url' => '/wp-content/uploads/2025/07/Diseno-Agil-del-Proceso.png',
                    ],
                    [
                        'title' => 'Implementación Rápida',
                        'description' => 'Configuramos la tecnología y ponemos a andar tu nuevo proceso en cuestión de semanas.',
                        'image_url' => '/wp-content/uploads/2025/07/Implementacion-Rapida.png',
                    ],
                    [
                        'title' => 'Capacitación y Empoderamiento',
                        'description' => 'Formamos a tu equipo para que sean dueños del proceso y no dependan de nosotros.',
                        'image_url' => '/wp-content/uploads/2025/07/Capacitacion-y-Empoderamiento.png',
                    ],
                ],
                'secondary_cta_title' => '¿No estás seguro/a si esto es para ti?',
                'secondary_cta_text' => 'Una sesión de diagnóstico de 30 minutos es la forma más inteligente de descubrirlo. No es un pitch de ventas. Es una sesión de consultoría gratuita donde analizaremos tu reto principal y te daremos, como mínimo, una idea accionable que podrás implementar de inmediato. Sin costo. Sin compromiso.',
                'secondary_cta_button' => 'Agendar mi Sesión Gratuita',
                'faqs' => [
                    [
                        'question' => '¿Cuánto tiempo tarda la implementación?',
                        'answer' => 'Nuestro enfoque ágil nos permite tener la primera versión de tu proceso optimizado funcionando en 2 a 4 semanas.',
                    ],
                    [
                        'question' => '¿Qué necesito para empezar?',
                        'answer' => 'Solo una cosa: la voluntad de mejorar. El primer paso es solicitar tu sesión de diagnóstico gratuita en nuestro formulario de contacto. Nosotros nos encargamos del resto.',
                    ],
                    [
                        'question' => '¿Esto es un ERP?',
                        'answer' => 'No. Es mucho más simple y enfocado. A diferencia de un ERP complejo, nos centramos en resolver tus problemas operativos más urgentes de forma rápida y visual, sin la necesidad de un proyecto de meses.',
                    ],
                ],
                'accent_color' => '#1e5799',
                'is_active' => true,
                'sort_order' => 1,
            ],
            [
                'name' => 'Conecta',
                'slug' => 'conecta',
                'kicker' => 'Pilar 02 · Ecosistema de Marketing Digital y Ventas',
                'short_description' => 'Activamos tu motor de crecimiento. Creamos un ecosistema que te conecta con clientes que valoran lo que ofreces, haciendo latir el corazón de tu empresa.',
                'cta_label' => 'Conoce',
                'card_image_url' => '/wp-content/uploads/2025/07/Conecta-1080x1080op.jpg',
                'hero_title' => 'Escoge un Socio de Crecimiento',
                'hero_subtitle' => 'Deja de Contratar Agencias',
                'hero_description' => 'Nos integramos a tu equipo para diseñar, construir y operar el Ecosistema de Marketing Digital que transforma tus esfuerzos aislados en un motor de ventas consistente y predecible.',
                'hero_cta_text' => 'Agendar Diagnóstico del Ecosistema',
                'hero_image_url' => '/wp-content/uploads/2025/07/Hero-Conecta-1980x1020op-1.png',
                'social_proof_title' => 'Integramos las Herramientas que ya Conoces y Amas',
                'partner_logos' => [
                    ['name' => 'WordPress', 'url' => '/wp-content/uploads/2025/07/WP-256x256-1.png'],
                    ['name' => 'Mautic', 'url' => '/wp-content/uploads/2025/07/Mautic-977x256-1.png'],
                    ['name' => 'Google', 'url' => '/wp-content/uploads/2025/07/Google-752x256-1.png'],
                    ['name' => 'Meta', 'url' => '/wp-content/uploads/2025/07/meta-457x256-1.png'],
                    ['name' => 'X', 'url' => '/wp-content/uploads/2025/07/x-256x256-1.jpeg'],
                    ['name' => 'LinkedIn', 'url' => '/wp-content/uploads/2025/07/Linkedin-256x256-1.png'],
                    ['name' => 'Kommo CRM', 'url' => '/wp-content/uploads/2025/07/kommo-azul-1-512x256-1.webp'],
                    ['name' => 'WhatsApp', 'url' => '/wp-content/uploads/2025/07/WhatsApp-256x256-1.jpeg'],
                    ['name' => 'Messenger', 'url' => '/wp-content/uploads/2025/07/Messenger-256x256-1.jpeg'],
                    ['name' => 'Twilio', 'url' => '/wp-content/uploads/2025/07/Twilio-813x256-1.png'],
                ],
                'pain_section_title' => '¿Te suena familiar esta frustración?',
                'pain_points' => [
                    [
                        'title' => 'Agencias que no Entienden',
                        'description' => 'Pagas una iguala mensual pero la agencia no entiende tu negocio, no se integra con tu equipo y sus reportes son vanidosos, no de resultados.',
                        'image_url' => '/wp-content/uploads/2025/07/Frustracion-1024x1024op.png',
                    ],
                    [
                        'title' => 'Herramientas Desconectadas',
                        'description' => 'Tu web, tu CRM y tus campañas de email viven en islas separadas. Los datos no fluyen y las oportunidades se pierden en el abismo digital.',
                        'image_url' => '/wp-content/uploads/2025/07/Piezas-de-rompecabez-1024x1024-1.png',
                    ],
                    [
                        'title' => 'Inversión sin Retorno Claro',
                        'description' => 'Inviertes en anuncios y contenido, pero no tienes una forma clara de medir qué funciona, qué no, y cómo cada peso se traduce en ventas.',
                        'image_url' => '/wp-content/uploads/2025/07/Un-grifo-goteando-1024x1024-1.png',
                    ],
                ],
                'method_section_title' => 'Nuestro Modelo: Tu Equipo de Crecimiento Externo',
                'method_section_subtitle' => 'No somos una agencia, somos tu CMO, analista y growth hacker en uno. Nos integramos a tu equipo para ejecutar un proceso probado:',
                'method_banner_url' => '/wp-content/uploads/2025/07/Un-diagrama-de-flujo-generico-1024x1024-1.png',
                'method_steps' => [
                    [
                        'title' => 'Diagnóstico y Estrategia',
                        'description' => 'Diagnóstico y Estrategia para definir tus metas comerciales y los indicadores reales de negocio.',
                        'image_url' => '/wp-content/uploads/2025/07/Diagnostico-y-Escucha.png',
                    ],
                    [
                        'title' => 'Construcción de tu Ecosistema',
                        'description' => 'Construcción de tu Ecosistema para conectar tus herramientas (Web, CRM, Automatización y WhatsApp).',
                        'image_url' => '/wp-content/uploads/2025/07/Diseno-Agil-del-Proceso.png',
                    ],
                    [
                        'title' => 'Ejecución de Experimentos',
                        'description' => 'Ejecución de Experimentos para generar, calificar y nutrir leads con alta intención de compra.',
                        'image_url' => '/wp-content/uploads/2025/07/Implementacion-Rapida.png',
                    ],
                    [
                        'title' => 'Optimización Continua',
                        'description' => 'Optimización Continua para maximizar tu retorno de inversión y escalar los canales rentables.',
                        'image_url' => '/wp-content/uploads/2025/07/Capacitacion-y-Empoderamiento.png',
                    ],
                ],
                'secondary_cta_title' => '¿Cuánto cuesta construir un motor de crecimiento?',
                'secondary_cta_text' => 'Menos de lo que crees, y mucho menos de lo que estás perdiendo en oportunidades fugadas. El primer paso es una sesión de diagnóstico de tu ecosistema digital actual. Analizaremos tus herramientas, tu proceso y te daremos un mapa de ruta claro. Sin costo. Sin compromiso.',
                'secondary_cta_button' => 'Agendar mi Diagnóstico Gratuito',
                'faqs' => [
                    [
                        'question' => '¿Esto es solo otra agencia de marketing?',
                        'answer' => 'No. Las agencias ejecutan tareas. Nosotros, como tu Growth Partner, construimos y operamos tu sistema de crecimiento completo, integrando estrategia, tecnología y ejecución.',
                    ],
                    [
                        'question' => '¿En cuánto tiempo veré resultados?',
                        'answer' => 'Aunque el crecimiento sostenible es un maratón, verás los primeros "quick wins" (como un aumento en leads cualificados) en los primeros 30 a 60 días, una vez que el ecosistema esté activo.',
                    ],
                    [
                        'question' => '¿Tengo que cambiar mi CRM actual?',
                        'answer' => 'No necesariamente. Nuestro ecosistema es flexible. Técnicamente es posible integrarnos con las herramientas que ya usas, extendiendo nuestro ecosistema o reemplazando el componente equivalente, siempre y cuando se pueda integrar.',
                    ],
                ],
                'accent_color' => '#f7941e',
                'is_active' => true,
                'sort_order' => 2,
            ],
            [
                'name' => 'Trasciende',
                'slug' => 'trasciende',
                'kicker' => 'Pilar 03 · Brújula de Valores y Talento Consciente',
                'short_description' => 'Alineamos tu crecimiento con tu visión. Usamos nuestra Brújula de Valores para mapear tu cultura y talento, liderando con propósito y legado.',
                'cta_label' => 'Descubre',
                'card_image_url' => '/wp-content/uploads/2025/07/grupo-de-amigos-reunidos-1080x1080op.jpg',
                'hero_title' => 'Contrata, Lidera y Construye Equipos con Claridad',
                'hero_subtitle' => 'Deja de Adivinar',
                'hero_description' => 'Utiliza nuestro diagnóstico "Brújula de Valores" para tomar decisiones de talento basadas en datos profundos y alinear a tu gente con el alma de tu empresa.',
                'hero_cta_text' => 'Agendar Diagnóstico de Talento',
                'hero_image_url' => '/wp-content/uploads/2025/07/Hero-image-1980x1020op.webp',
                'social_proof_title' => 'Una Metodología Confiable y Validada (93% Precisión · Empresas como BIMBO · Axiología Formal)',
                'partner_logos' => [],
                'pain_section_title' => 'El Alto Costo de la Desalineación',
                'pain_points' => [
                    [
                        'title' => 'Contrataciones Fallidas',
                        'description' => 'El riesgo de contratar a alguien que no encaja con la cultura y que se irá en menos de un año.',
                        'image_url' => '/wp-content/uploads/2025/07/generate-a-square-h-op.webp',
                    ],
                    [
                        'title' => 'Equipos con Baja Moral',
                        'description' => 'La frustración y la baja productividad de equipos con conflictos internos y alta rotación.',
                        'image_url' => '/wp-content/uploads/2025/07/Icono-de-bateria-baj-op.webp',
                    ],
                    [
                        'title' => 'Líderes que no Inspiran',
                        'description' => 'La dificultad de promover al talento correcto y el impacto de un liderazgo sin propósito claro.',
                        'image_url' => '/wp-content/uploads/2025/07/Brujula-rota-en-alta-op.webp',
                    ],
                    [
                        'title' => 'Incertidumbre en la Sucesión',
                        'description' => 'El peligro de no tener un plan claro para la continuidad del negocio familiar o corporativo.',
                        'image_url' => '/wp-content/uploads/2025/07/square-high-resolut-op.webp',
                    ],
                ],
                'method_section_title' => 'Nuestro Ecosistema de Talento Consciente',
                'method_section_subtitle' => '93% de Precisión Predictiva · Basado en la matemática transfinita y la axiología formal.',
                'method_banner_url' => '/wp-content/uploads/2025/07/A-conceptual-high-r-19080x1020-op.webp',
                'method_steps' => [
                    [
                        'title' => 'Selección de Alto Impacto',
                        'description' => 'Reduce el Riesgo: Compara el perfil de valores de tus candidatos con el ADN del puesto y la cultura.',
                        'image_url' => '/wp-content/uploads/2025/07/Seleccion-alto-impacto-op.webp',
                    ],
                    [
                        'title' => 'Cohesión de Equipos',
                        'description' => 'Construye Sinergia: Mapeamos las fortalezas y fricciones de tu equipo para potenciar la colaboración.',
                        'image_url' => '/wp-content/uploads/2025/07/Cohesion-de-equipo-op.webp',
                    ],
                    [
                        'title' => 'Desarrollo de Liderazgo',
                        'description' => 'Prepara el Futuro: Identificamos y desarrollamos el potencial de tus futuros líderes.',
                        'image_url' => '/wp-content/uploads/2025/07/Liderazgo-op.webp',
                    ],
                    [
                        'title' => 'Diagnóstico Cultural',
                        'description' => 'Mide lo Intangible: Obtén una radiografía de la salud de tu organización y cumple con la NOM-035.',
                        'image_url' => '/wp-content/uploads/2025/07/Diagnostico-Cultural-op.webp',
                    ],
                ],
                'secondary_cta_title' => 'Sabiduría Accionable, no un Simple Reporte',
                'secondary_cta_text' => 'No entregamos un reporte psicométrico para que se archive en un cajón. Te acompañamos en una sesión de diagnóstico profundo para traducir los datos en decisiones que transforman personas y negocios. El valor no está en la herramienta, está en la claridad que obtienes.',
                'secondary_cta_button' => 'Agendar mi Diagnóstico Gratuito',
                'faqs' => [
                    [
                        'question' => '¿En qué se diferencia esto de un test DISC o Myers-Briggs?',
                        'answer' => 'Esas excelentes herramientas miden la personalidad y el comportamiento. Nuestra "Brújula de Valores" mide algo más profundo: tu capacidad de juicio y tu sistema de valores. Te dice el "porqué" detrás del "cómo" actúas.',
                    ],
                    [
                        'question' => '¿Qué tan rápido puedo tener resultados?',
                        'answer' => 'La evaluación en línea toma unos 20-30 minutos. Una vez completada, podemos agendar tu sesión de devolución de resultados en los siguientes 2-3 días hábiles.',
                    ],
                    [
                        'question' => '¿Se puede aplicar a toda mi organización?',
                        'answer' => 'Sí. Ofrecemos paquetes para individuos, equipos y diagnósticos culturales para toda la organización, siempre garantizando la confidencialidad de los resultados individuales.',
                    ],
                ],
                'accent_color' => '#7db942',
                'is_active' => true,
                'sort_order' => 3,
            ],
        ];

        foreach ($pillars as $pillar) {
            Pillar::updateOrCreate(['slug' => $pillar['slug']], $pillar);
        }

        // Testimonials from Home, Evoluciona, Conecta, and Trasciende
        $testimonials = [
            [
                'author_name' => 'Sergio Espinoza Espinosa',
                'author_role' => 'Director Ejecutivo, ALCESPA',
                'company_url' => 'https://alcespa.cl/',
                'content' => 'Contar con el apoyo de AxiaCore Hub ha sido un antes y un después para nuestra organización. El desarrollo de nuestro sitio web alcespa.cl no solo potenció nuestra presencia digital, sino que también logró comunicar con claridad nuestra misión y valores. El enfoque integral que nos brindaron superó nuestras expectativas: pasamos de tener una identidad dispersa a consolidarnos como una institución confiable y profesional. Gracias a su visión estratégica y sensibilidad con lo humano, estamos creciendo en dirección a lo que siempre soñamos, pero no sabíamos cómo alcanzar.',
                'avatar_url' => '/wp-content/uploads/2025/07/47.png',
                'company_logo_url' => '/wp-content/uploads/2025/07/Logo-ALCE-SPA-1087x500-1.png',
                'pillar_slug' => 'home',
                'rating' => 5,
                'is_featured' => true,
                'sort_order' => 1,
            ],
            [
                'author_name' => 'Laura Torres',
                'author_role' => 'CEO, TechLogistics de México',
                'company_url' => null,
                'content' => 'La "Brújula de Valores" de AxiaCore Hub cambió las reglas del juego para nosotros. Pasamos de contrataciones basadas en la intuición a decisiones estratégicas. La calidad de nuestro liderazgo y la cohesión de nuestros equipos han mejorado dramáticamente. No es un gasto en RRHH, es una inversión en el alma de la empresa.',
                'avatar_url' => '/wp-content/uploads/2025/07/9.png',
                'company_logo_url' => null,
                'pillar_slug' => 'trasciende',
                'rating' => 5,
                'is_featured' => true,
                'sort_order' => 2,
            ],
            [
                'author_name' => 'Aurora Canales',
                'author_role' => 'Líder de Red · aceitesbioterra.com – Chile',
                'company_url' => 'https://aceitesbioterra.com',
                'content' => 'Mi red de Fuxion y Doterra necesitaba algo más que visibilidad digital. AxiaCore Hub creó una plataforma que atrae, capacita y empodera a cada nuevo integrante. El crecimiento ha sido claro y humano.',
                'avatar_url' => '/wp-content/uploads/2025/07/63.png',
                'company_logo_url' => null,
                'pillar_slug' => 'conecta',
                'rating' => 5,
                'is_featured' => true,
                'sort_order' => 3,
            ],
            [
                'author_name' => 'Sergio Espinoza',
                'author_role' => 'Gerente General, Alcespa.cl – Chile',
                'company_url' => 'https://alcespa.cl/',
                'content' => 'AxiaCore Hub transformó nuestro caótico proceso de cotización manual en un sistema digital ágil y profesional. Nos devolvió el control y la paz mental para enfocarnos en crecer.',
                'avatar_url' => '/wp-content/uploads/2025/07/47.png',
                'company_logo_url' => '/wp-content/uploads/2025/07/Logo-ALCE-SPA-1087x500-1.png',
                'pillar_slug' => 'evoluciona',
                'rating' => 5,
                'is_featured' => true,
                'sort_order' => 4,
            ],
        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::updateOrCreate(
                [
                    'author_name' => $testimonial['author_name'],
                    'pillar_slug' => $testimonial['pillar_slug'],
                ],
                $testimonial
            );
        }

        // Sample Leads captured via the Contact Form (replacing Calendly)
        $leads = [
            [
                'name' => 'Carlos',
                'last_name' => 'Mendoza',
                'email' => 'cmendoza@industrialnorte.mx',
                'phone' => '+52 81 2345 6789',
                'company' => 'Grupo Industrial del Norte',
                'pillar_interest' => 'evoluciona',
                'source_page' => 'evoluciona',
                'message' => 'Buscamos automatizar el seguimiento de órdenes de producción que hoy llevamos en Excel y WhatsApp.',
                'status' => 'en_diagnostico',
            ],
            [
                'name' => 'Mariana',
                'last_name' => 'Villalobos',
                'email' => 'mariana@biohidratacion.cl',
                'phone' => '+56 9 8765 4321',
                'company' => 'BioHidratación Latam',
                'pillar_interest' => 'conecta',
                'source_page' => 'conecta',
                'message' => 'Queremos integrar nuestro CRM Kommo con campañas de Google y WhatsApp para mejorar conversión.',
                'status' => 'nuevo',
            ],
            [
                'name' => 'Roberto',
                'last_name' => 'Garza',
                'email' => 'rgarza@corporativogarza.com',
                'phone' => '+52 55 9182 7364',
                'company' => 'Corporativo Garza & Asociados',
                'pillar_interest' => 'trasciende',
                'source_page' => 'trasciende',
                'message' => 'Interesados en aplicar la Brújula de Valores para nuestro comité directivo y plan de sucesión.',
                'status' => 'propuesta_enviada',
            ],
        ];

        foreach ($leads as $lead) {
            Lead::updateOrCreate(['email' => $lead['email']], $lead);
        }
    }
}
