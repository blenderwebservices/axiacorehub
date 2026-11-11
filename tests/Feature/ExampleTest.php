<?php

namespace Tests\Feature;

use App\Models\User;
use Database\Seeders\DatabaseSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    public function test_axiacorehub_cro_pages_and_filament_panel_render_properly(): void
    {
        $this->seed(DatabaseSeeder::class);

        // 1. Home page renders with original content, original images, light theme, and NO Calendly links
        $home = $this->get('/');
        $home->assertStatus(200);
        $home->assertSee('Construyamos Puentes hacia el Éxito');
        $home->assertSee('Caos operativo');
        $home->assertSee('Ventas estancadas');
        $home->assertSee('Baja rentabilidad');
        $home->assertSee('Potenciando tu Crecimiento Sostenible');
        $home->assertSee('Evoluciona');
        $home->assertSee('Conecta');
        $home->assertSee('Trasciende');
        $home->assertSee('La Historia Detrás de AxiaCore Hub');
        $home->assertSee('Sergio Espinoza Espinosa');
        $home->assertSee('/wp-content/uploads/2025/07/IMAGOTIPO-300x105-Photoroom.png');
        $home->assertSee('/wp-content/uploads/2025/07/Caos-operativo-1020x1020-1.png');
        $home->assertDontSee('calendly.com');
        $home->assertSee('#contacto');

        // 2. Pillar pages (/evoluciona, /conecta, /trasciende) and /about and /contact render properly
        $evoluciona = $this->get('/evoluciona');
        $evoluciona->assertStatus(200)
            ->assertSee('Deja de Buscar la Bolita')
            ->assertDontSee('calendly.com');

        $conecta = $this->get('/conecta');
        $conecta->assertStatus(200)
            ->assertSee('Escoge un Socio de Crecimiento')
            ->assertDontSee('calendly.com');

        $trasciende = $this->get('/trasciende');
        $trasciende->assertStatus(200)
            ->assertSee('Contrata, Lidera y Construye Equipos con Claridad')
            ->assertDontSee('calendly.com');

        $this->get('/about')->assertStatus(200)->assertSee('Somos el Hub donde la estrategia se encuentra con el alma.');
        $this->get('/contact')->assertStatus(200)->assertSee('Llena este formulario y te contactaremos');
        $this->get('/gracias')->assertStatus(200)->assertSee('¡Gracias por contactarnos!');

        // 3. Contact form submission (replacing Calendly) stores Lead in Filament DB
        $leadResponse = $this->postJson('/contact', [
            'name' => 'Héctor',
            'last_name' => 'Santillán',
            'email' => 'prospecto@empresa.mx',
            'phone' => '+52 55 1122 3344',
            'company' => 'Empresa Demo S.A.',
            'pillar_interest' => 'evoluciona',
            'source_page' => 'home',
            'message' => 'Queremos agendar sesión estratégica para optimizar procesos.',
        ]);

        $leadResponse->assertStatus(200)
            ->assertJson(['success' => true]);

        $this->assertDatabaseHas('leads', [
            'email' => 'prospecto@empresa.mx',
            'pillar_interest' => 'evoluciona',
        ]);

        // 4. Filament v5 Admin Panel resources render with HTTP 200
        $admin = User::where('email', 'admin@axiacorehub.com')->firstOrFail();

        $this->actingAs($admin)->get('/admin')->assertStatus(200);
        $this->actingAs($admin)->get('/admin/pillars')->assertStatus(200);
        $this->actingAs($admin)->get('/admin/leads')->assertStatus(200);
        $this->actingAs($admin)->get('/admin/testimonials')->assertStatus(200);
        $this->actingAs($admin)->get('/admin/site-settings')->assertStatus(200);
    }
}
