<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'f_name',
        'l_name',
        'time',
        'date',
        'guest_Num',
    ];
    public $timestamps = false;
}
