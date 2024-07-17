<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class CustomProduct extends Model
{

    public function cadre(): BelongsTo
    {
        return $this->BelongTo(Cadre::class);
    }
    public function roue(): BelongsTo
    {
        return $this->BelongsTo(Roue::class);
    }

    public function guidon(): BelongsTo
    {
        return $this->BelongsTo(Guidon::class);
    }

    public function moyendepropulsion(): BelongsTo
    {
        return $this->BelongsTo(MoyenDePropulsion::class);
    }
    public function pedale(): BelongsTo
    {
        return $this->BelongsTo(Pedale::class);
    }
    public function poignier(): BelongsTo
    {
        return $this->BelongsTo(Poignier::class);
    }
    public function portebagage(): BelongsTo
    {
        return $this->BelongsTo(PorteBagage::class);
    }

    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }

    use HasFactory;
}
