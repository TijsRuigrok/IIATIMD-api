<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AndroidUser extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'android_users';
    public $timestamps = false;
}
