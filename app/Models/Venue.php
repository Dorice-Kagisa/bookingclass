<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
    use HasFactory;

    protected $table = 'venues';
    public $timestamps = true;

   

    protected $fillable = [
        'venue_name',
        'capacity',
        'state',
        'location',
        'news',
        
    ];
}
