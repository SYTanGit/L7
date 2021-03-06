<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Profile;
use App\Post;

class ReviewsController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        //  $profile = Profile::where('user_id', $user->id)->first();
        //    $profiles = \App\Profile::where('user_id', $user->id)->get();
        //    $profilescount = \App\Profile::where('user_id', $user->id)->count();

        $profiles = Profile::all();
        $profilescount = \App\Profile::all()->count();

        //   $posts = \App\Post::where('user_id', $user->id)->orderBy('created_at', 'desc')->get();
        //  $postscount = \App\Post::where('user_id', $user->id)->count();


        $posts = Post::all();
        $postscount = \App\Post::all()->count();

        return view('reviews.r_index', [
            'user' => $user,
            //    'profile' => $profile,
            'posts' => $posts,
            'postscount' => $postscount,
            'profiles' => $profiles,
            'profilescount' => $profilescount
        ]);
    }

    public function create()
    {
        return view('profile.create');
    }

    public function store()
    {
        $data = request()->validate([
            'description' => 'required',
            'profilepic' => ['required', 'image'],
        ]);

        $user = Auth::user();
        $profile = new Profile();
        $imagePath = request('profilepic')->store('uploads', 'public');

        $profile->user_id = $user->id;
        $profile->description = request('description');
        $profile->image = $imagePath;
        $saved = $profile->save();

        if ($saved) {
            return redirect('/profile');
        }
    }

    public function edit()
    {
        $user = Auth::user();
        $profile = Profile::where('user_id', $user->id)->first();
        return view('profile.edit', [
            'profile' => $profile
        ]);
    }

    public function update()
    {
        $data = request()->validate([
            'description' => 'required',
            'profilepic' => 'image',
        ]);

        $user = Auth::user();
        $profile = Profile::where('user_id', $user->id)->first();

        $profile->description = request('description');
        if (request()->has('profilepic')) {
            $imagePath = request('profilepic')->store('uploads', 'public');
            $profile->image = $imagePath;
        }

        $updated = $profile->save();

        if ($updated) {
            return redirect('/profile');
        }
    }
}
