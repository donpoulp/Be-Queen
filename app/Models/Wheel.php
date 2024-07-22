<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\Factory;
use Database\Factories\PostWheelFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Wheel extends Model
{
    use HasFactory;

    protected static function newFactory(): Factory
    {
        return PostWheelFactory::new();
    }
    public function customProducts(): HasMany
    {
        return $this->hasMany(CustomProduct::class);
    }
}
