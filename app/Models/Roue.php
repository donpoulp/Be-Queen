<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\Factory;
use Database\Factories\PostRoueFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Roue extends Model
{
    use HasFactory;

    protected static function newFactory(): Factory
    {
        return PostRoueFactory::new();
    }
    public function customProducts(): HasMany
    {
        return $this->hasMany(CustomProduct::class);
    }
}
