<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dzukou extends Model
{
    protected $table = 'dzukous';
    public $primaryKey = 'id';
    public $timestamps = true;
}
