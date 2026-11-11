<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('site_settings', function (Blueprint $table) {
            $table->id();
            $table->string('key')->unique();
            $table->string('group')->default('general');
            $table->string('label');
            $table->text('value')->nullable();
            $table->timestamps();
        });

        Schema::create('pillars', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('kicker')->nullable();
            $table->text('short_description');
            $table->string('cta_label')->default('Descubre');
            $table->string('card_image_url')->nullable();
            $table->string('hero_title');
            $table->string('hero_subtitle')->nullable();
            $table->text('hero_description')->nullable();
            $table->string('hero_cta_text')->default('Solicitar Diagnóstico');
            $table->string('hero_image_url')->nullable();
            $table->string('social_proof_title')->nullable();
            $table->json('partner_logos')->nullable();
            $table->string('pain_section_title')->nullable();
            $table->json('pain_points')->nullable();
            $table->string('method_section_title')->nullable();
            $table->string('method_section_subtitle')->nullable();
            $table->string('method_banner_url')->nullable();
            $table->json('method_steps')->nullable();
            $table->string('secondary_cta_title')->nullable();
            $table->text('secondary_cta_text')->nullable();
            $table->string('secondary_cta_button')->default('Solicitar mi Diagnóstico Gratuito');
            $table->json('faqs')->nullable();
            $table->string('accent_color')->default('#1e5799');
            $table->boolean('is_active')->default(true);
            $table->unsignedInteger('sort_order')->default(0);
            $table->timestamps();
        });

        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();
            $table->string('author_name');
            $table->string('author_role')->nullable();
            $table->string('company_url')->nullable();
            $table->text('content');
            $table->string('avatar_url')->nullable();
            $table->string('company_logo_url')->nullable();
            $table->string('pillar_slug')->nullable();
            $table->unsignedTinyInteger('rating')->default(5);
            $table->boolean('is_featured')->default(true);
            $table->unsignedInteger('sort_order')->default(0);
            $table->timestamps();
        });

        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('last_name')->nullable();
            $table->string('email');
            $table->string('phone')->nullable();
            $table->string('company')->nullable();
            $table->string('pillar_interest')->default('integral');
            $table->string('source_page')->default('home');
            $table->text('message')->nullable();
            $table->string('status')->default('nuevo');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('leads');
        Schema::dropIfExists('testimonials');
        Schema::dropIfExists('pillars');
        Schema::dropIfExists('site_settings');
    }
};

