<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index($user)
    {
       $user = User::findOrFail($user);
       $posts = auth()->user()->timeline();

        return view('profiles.index', [
            'user' => $user,
            'posts' => $posts,

        ]);
    }
}
