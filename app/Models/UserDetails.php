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
        'first_name',
        'surname',
        'tel',
        'email',
        'shirt_size',
        'dietary_needs',
        'handicap_id',
        'golf_club',
        'handicap_index',
        'emergency_contact_name',
        'emergency_contact'
    ];

}
