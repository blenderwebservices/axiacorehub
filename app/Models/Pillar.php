<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pillar extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'kicker',
        'short_description',
        'cta_label',
        'card_image_url',
        'hero_title',
        'hero_subtitle',
        'hero_description',
        'hero_cta_text',
        'hero_image_url',
        'social_proof_title',
        'partner_logos',
        'pain_section_title',
        'pain_points',
        'method_section_title',
        'method_section_subtitle',
        'method_banner_url',
        'method_steps',
        'secondary_cta_title',
        'secondary_cta_text',
        'secondary_cta_button',
        'faqs',
        'accent_color',
        'is_active',
        'sort_order',
    ];

    protected function casts(): array
    {
        return [
            'partner_logos' => 'array',
            'pain_points' => 'array',
            'method_steps' => 'array',
            'faqs' => 'array',
            'is_active' => 'boolean',
            'sort_order' => 'integer',
        ];
    }
}

