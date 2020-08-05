<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gebruiker extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'gebruiker';
    public $timestamps = false;
}
