<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maw extends Model
{
    protected $table = 'mawleads';
    public $primaryKey = 'id';
    public $timestamps = true;
}
