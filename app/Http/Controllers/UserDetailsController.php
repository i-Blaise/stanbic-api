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
            'first_name' => ['required'],
            'surname' => ['required'],
            'tel' => ['required'],
            'email' => ['required'],
            'shirt_size' => ['required'],
            'dietary_needs' => ['nullable'],
            'handicap_id' => ['nullable'],
            'golf_club' => ['nullable'],
            'handicap_index' => ['nullable'],
            'emergency_contact_name' => ['nullable'],
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
