<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nomina extends Model
{
    protected $fillable=[
        'user_id',
        'dias_laborados',
        'horas_extras'
    ];
}
