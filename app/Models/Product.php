<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
    public $timestamps = true;

    protected $fillable = ["name", "description", "price", "image", 'categorie_id'];


    public function categorie(): BelongsTo
    {
        return $this->BelongsTo(Categorie::class);
    }
}
