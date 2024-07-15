<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\Factory;
use Database\Factories\PostCadreFactory;

class Cadre extends Model
{
    use HasFactory;

    protected static function newFactory(): Factory
    {
        return PostCadreFactory::new();
    }
}
