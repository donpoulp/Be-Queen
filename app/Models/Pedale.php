<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\Factory;
use Database\Factories\PostPedaleFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pedale extends Model
{
    use HasFactory;

    protected static function newFactory(): Factory
    {
        return PostPedaleFactory::new();
    }
    public function customProducts(): HasMany
    {
        return $this->hasMany(CustomProduct::class);
    }
}
