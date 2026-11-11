<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    protected $fillable = [
        'name',
        'last_name',
        'email',
        'phone',
        'company',
        'pillar_interest',
        'source_page',
        'message',
        'status',
    ];

    public function getFullNameAttribute(): string
    {
        return trim("{$this->name} {$this->last_name}");
    }
}
