<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inbound_facture extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'name',
        'unit',
        'quantitiy',
        'created_date'
    ];
}
