<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index(){
        $user = auth()->user();
        return view('profile.index',[
            'title' => 'Profile',
            'active' => 'profile',
            'user' => $user
        ]);
    }

}
