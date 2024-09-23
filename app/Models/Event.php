<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'categoty',
        'banner',
        'title',
        'dsescription',
        'place',
        'date',
        'starting_time',
        'ending_time'
    ];
}
