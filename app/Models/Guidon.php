<?php

namespace App\Models;

use App\Models\CustomProduct;
use Illuminate\Database\Eloquent\Model;
use Database\Factories\PostGuidonFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Guidon extends Model
{
    use HasFactory;

    protected static function newFactory(): Factory
    {
        return PostGuidonFactory::new();
    }
    public function customProducts(): HasMany
    {
        return $this->hasMany(CustomProduct::class);
    }
}
