<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class AdminController extends Controller
{
    public function debug()
    {
        dd(public_path());
    }

    public function regNewAdmin(Request $request)
    {
        $userData = $request->all();

        $validator = Validator::make($userData, [
            'email' => 'required|email:rfc,dns,filter',
        ]);

        if($validator->fails()) {
            return redirect(route('reg-page'))
                ->withErrors($validator)
                ->withInput();
        }

        $user = new User();
        $user->nickname = $userData['nickname'];   //Agent Helper  | Game Master||
        $user->email = $userData['email'];
        $user->about = 'Слежу за твоим поведением';
        $user->password = bcrypt('adminPass17');
        $user->picture_url = 'images/users/default_pic.png';
        $user->role = $userData['role'];

        $user->save();

        $user->identifier = $userData['nickname'].'#'.$user->id;

        $user->save();

        return redirect(route('auth-page'));
    }
}
