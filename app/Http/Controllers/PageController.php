<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function teams()
    {
        return view('teams');
    }

    public function auth()
    {
        return view('auth');
    }

    public function registration()
    {
        return view('registration');
    }

    public function profile($id = null)
    {
        if($id == null)
        {
            $id = Auth::user()->id;
        }
        return view('profile', ['id' => $id]);
    }
}
