<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Hospede extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'check_out_date',
        'was_born'
    ];

    public function user(){
        return $this->belongsTo(user::class);
    }
}
