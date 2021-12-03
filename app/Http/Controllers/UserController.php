<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserFilter;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function registration(Request $request)
    {
        $userData = $request->all();

        $validator = Validator::make($userData, [
            'nickname' => 'required|max:14|alpha_num',
            'email' => 'required|email:rfc,dns,filter|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);

        if($validator->fails()) {
            return redirect(route('reg-page'))
                ->withErrors($validator)
                ->withInput();
        }

        $user = new User();
        $user->nickname = $userData['nickname'];
        $user->email = $userData['email'];
        $user->about = 'Пользователь еще не рассказал о себе';
        $user->password = bcrypt($userData['password']);
        $user->picture_url = 'images/users/default_pic.png';
        $user->role = 0;

        $user->save();

        $user->identifier = $userData['nickname'].'#'.$user->id;

        $user->save();

        return redirect(route('auth-page'));
    }

    public function auth(Request $request)
    {
        $userInfo=$request->only('email','password');

        $validator= Validator::make($userInfo, [
            'email'=>'required|email:rfc,filter',
            'password'=>'required',
        ]);

        if ($validator->fails())
        {
            return redirect(route('auth-page'))
                ->withErrors($validator)
                ->withInput();
        }

        if (Auth::attempt($userInfo)) {
            return redirect('/');
        }

        return redirect(route('auth-page'))
            ->withErrors(['auth_error'=>'Email или пароль введены некорректно'])
            ->withInput();
    }

    public function logout() {
        Auth::logout();
        return redirect('/');
    }

}
