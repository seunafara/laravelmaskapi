<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facemask extends Model
{
    //
    public $fillable = [
        'name', 'price', 'in_stock', 'image_url', 'mask_name', 'sold_by'
    ];
}
