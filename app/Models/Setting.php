<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table = 'setting';

    // public $timestamps = false;

    protected $fillable = [
        'id',
        'name',
        'number',
    ];

    protected $hidden = [
        'user_id'
    ];

}