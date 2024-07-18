<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    /**
     * Get the comments for the blog post.
     */

    /**
     * The table associated with the model.
     *
     * @var string
     */

    protected $table = 'users';

    protected $fillable = ["first_name","last_name", "email", "password","civility","adress","city","phone_number"];




    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }
}

