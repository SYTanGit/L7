<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Profile;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {


        $user = Auth::user();
        $profile = Profile::where('user_id', $user->id)->first();
        $profiles = \App\Profile::where('user_id', $user->id)->get();
        $profilescount = \App\Profile::where('user_id', $user->id)->count();
        //$posts = \App\Post::where('user_id', $user->id)->orderBy('created_at', 'desc')->get();
        //$postscount = \App\Post::where('user_id', $user->id)->count();

        return view('welcome', [
            'user' => $user,
            'profile' => $profile,
            //'posts' => $posts,
            //'postscount' => $postscount,
            'profiles' => $profiles,
            'profilescount' => $profilescount
        ]);

        //return view('welcome');
        //return view('home');
        //return redirect('/profile');
    }
}
