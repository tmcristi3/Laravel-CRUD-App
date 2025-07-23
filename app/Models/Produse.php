<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produse extends Model
{

    protected $table = 'products';

    protected $fillable = [
        'name',
        'quantity',
        'price',
        'description',
        'user_id'
    ];
}
