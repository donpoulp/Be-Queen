<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'products';

    protected $primaryKey = 'id';


    protected $fillable = ["name", "description", "price", "image"];

    public function orders(): BelongsToMany
    {
        return $this->belongsToMany(Order::class, 'order_products');
    }
}
