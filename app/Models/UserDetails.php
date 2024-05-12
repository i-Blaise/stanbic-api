<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetails extends Model
{
    use HasApiTokens, HasFactory;




    protected $fillable = [
        'uid',
        'full_name',
        'club_name',
        'shirt_size',
        'dietary_needs',
        'golf_handicap',
        'preferred_travel_time',
        'emergency_contact'
    ];

}
