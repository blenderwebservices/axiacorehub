# Auditoría y Refactorización CRO — AxiaCore Hub (`https://axiacorehub.com`)

## 1. Diagnóstico del Sitio Actual en WordPress

Al inspeccionar `https://axiacorehub.com` tras el cambio de plantilla en WordPress (Astra + Elementor + GutenKit / PopupBuilder), se detectaron las siguientes fallas críticas de visibilidad y conversión:

1. **Hojas de estilo rotas (`HTTP 404 Not Found`)**:
   - Los archivos generados por Elementor (`wp-content/uploads/elementor/css/post-6.css`, `post-7.css`) devuelven error `404`.
   - Esto dejó las secciones sin estructura de grilla, con imágenes desproporcionadas (`contain-intrinsic-size: 3000px 1500px`) y bloques donde el texto blanco (`--ast-global-color-4: #FFFFFF`) se superpone sobre fondos claros, haciendo ilegible la propuesta de valor.
2. **Textos internos de redacción y placeholders expuestos al usuario**:
   - En `/evoluciona/`, `/conecta/` y `/trasciende/` quedaron expuestos encabezados `<h2>` internos del guion de copywriting:
     - `Sección 2/8: La Prueba Social (Validación Inmediata)`
     - `Sección 3/8: Agitación del Dolor (El "Sí, esos somos nosotros")`
     - `Sección 4/8: Presentación de la Solución (El Puente)`
     - `Sección 5/8: El Testimonio (La Voz del Héroe)`
     - `Sección 6/8: CTA secundario (Refuerzo emocional)`
     - `Sección 7/8: FAQ (Preguntas Frecuentes)`
     - `Sección 8/8: Footer emocional (Crear resonancia y cierres suaves)`
   - Además, quedaron textos de plantilla en inglés sin editar (`WELCOME TO OUR WEBSITE`, `Social Icons Style 06 - Display social icons set horizontally...`, `As Featured In...`) y enlaces rotos apuntando a `https://library.elementor.com/local-services-wireframe-1/contact/`.
3. **Fuga de conversión hacia Calendly externo**:
   - Los botones principales enviaban al visitante fuera del dominio hacia `https://calendly.com/santillan-hector/sesion-de-valoracion`, perdiendo trazabilidad de leads cuando el usuario no completaba la reserva externa.

---

## 2. Decisiones de Refactorización CRO y Estilo Claro

1. **Sistema Visual en Estilo Claro de Alto Contraste**:
   - **Fondo primario**: `#FFFFFF` y `#F4F6F9` (gris azulado claro corporativo) para máxima limpieza visual.
   - **Texto primario**: `#1E293B` / `#0F172A` sobre fondos claros (contraste AAA).
   - **Colores de marca preservados**:
     - Azul corporativo (`#1E5799`): Confianza, estructura y pilar *Evoluciona*.
     - Naranja de acción (`#F7941E`): Botones CTA principales y pilar *Conecta*.
     - Verde crecimiento (`#7DB942`): Indicadores de validación y pilar *Trasciende*.
   - **Tipografías**: `Montserrat` (encabezados ejecutivos) + `IBM Plex Sans` (lectura fluida).
2. **Sustitución de Calendly por Formulario de Contacto Integrado**:
   - Todos los CTAs (`Agendar Sesión Estratégica`, `Agendar mi Sesión de Diagnóstico`, `Agendar Diagnóstico del Ecosistema`, `Agendar Diagnóstico de Talento`, `Agendar mi Diagnóstico Gratuito`) ahora dirigen al formulario de contacto (`#contacto` / `/contact#formulario`).
   - Al hacer clic en el CTA de un pilar específico, el formulario preselecciona automáticamente dicho pilar (`Evoluciona`, `Conecta`, `Trasciende` o `Diagnóstico Integral`) y registra el lead directamente en **FilamentPHP**.
3. **Conservación Íntegra de Contenido e Imágenes**:
   - Se mantuvieron todas las imágenes originales de `wp-content/uploads/2025/07/` y `2025/08/`, además de respaldarlas localmente en `public/wp-content/uploads/` con fallback automático.

