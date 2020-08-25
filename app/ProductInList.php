<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductInList extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'products_in_list';
    public $timestamps = false;
}
