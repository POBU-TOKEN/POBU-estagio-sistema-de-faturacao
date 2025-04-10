<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva_on extends Model{
    use HasFactory;

    protected $casts = [
        'items' => 'array',
    ];


    // protected $dates = [
    //     'check_out_date',
    //     'was_born'
    // ];

    // protected $check_out_date = ['date'];
    // protected $was_born = ['date'];
}
