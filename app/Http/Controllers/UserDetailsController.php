<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\UserDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UserDetailsController extends Controller
{
    public function userDetails(Request $request)
    {
        // return 'okay';
        $request->merge([
            'uid' => uniqid(),
        ]);

        // return $request['uid'];

        $data = $request->validate([
            'uid' => ['unique:App\Models\UserDetails'],
            'full_name' => ['required'],
            'club_name' => ['required'],
            'shirt_size' => ['required'],
            'dietary_needs' => ['nullable'],
            'golf_handicap' => ['nullable'],
            'preferred_travel_time' => ['nullable'],
            'emergency_contact' => ['nullable']
        ]);

        $data = $request->all();
        $user = UserDetails::create($data);


        // $token = $user->createToken('auth_token')->plainTextToken;

        return [
            'status' => 'Success'
        ];
    }
}
