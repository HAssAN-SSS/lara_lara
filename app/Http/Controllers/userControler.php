<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class userControler extends Controller
{
    public function welcom() {
        return view('home');
    }

    public function inscrire(Request $request) {
        $lasInputs = $request->validate(
            [
                'nombre' => ['required', 'min:1' , 'max:20' ,Rule::unique('users','nombre')],
                'lnombre' => ['required', 'min:1' , 'max:20'],
                'email' => ['required' , 'email'],
                'password' => ['required', 'min:1','max:6','confirmed']

            ]
        );
        User::create($lasInputs);
        return $lasInputs['password'];
    }
}
