<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;
use App\Profile;


class PostController extends Controller
{

    public function index()
    {
        //  $user = Auth::user();
        //  $profile = Profile::where('user_id', $user->id)->first();
        //    $profiles = \App\Profile::where('user_id', $user->id)->get();
        //    $profilescount = \App\Profile::where('user_id', $user->id)->count();

        //  $profiles = Profile::all();
        //  $profilescount = \App\Profile::all()->count();

        //   $posts = \App\Post::where('user_id', $user->id)->orderBy('created_at', 'desc')->get();
        //  $postscount = \App\Post::where('user_id', $user->id)->count();


        $posts = Post::all();
        $postscount = \App\Post::all()->count();

        return view('post.ad_delete', [
            //     'user' => $user,
            //    'profile' => $profile,
            'posts' => $posts,
            'postscount' => $postscount,
            //    'profiles' => $profiles,
            //   'profilescount' => $profilescount
        ]);
    }

    public function create()
    {
        //To check whether user is Auth, before routing to post create page
        if (Auth::check()) {
            return view('post.create');
        } else {
            return redirect('/login');
        }
    }

    public function store()
    {


        // The user is logged in...


        $data = request()->validate([
            'company_reviewed' => 'required',
            'rating' => 'required',
            'caption' => 'required',
            //    'postpic' => ['required', 'image'],
        ]);


        $user = Auth::user();
        $profile = new Post();
        //    $imagePath = request('postpic')->store('uploads', 'public');

        $profile->company_reviewed = request('company_reviewed');
        $profile->user_id = $user->id;
        $profile->caption = request('caption');
        $profile->rating = request('rating');
        //    $profile->image = $imagePath;
        $saved = $profile->save();

        if ($saved) {
            return redirect('/reviews/r_index');
        }
    }

    public function show($postID)
    {
        $post = Post::where('id', $postID)->first();
        $user = Auth::user();

        return view('post.show', [
            'post' => $post,
            'user' => $user
        ]);
    }

    public function destroy()
    {
        $data = request()->validate([
            'postID' => 'required',

            //    'postpic' => ['required', 'image'],
        ]);

        $postID = request('postID');
        // return ($postID);
        $post = Post::where('id', $postID)->first();

        $post->delete();
        //return view('reviews.r_index');
        return view('post.ad_delete');
        //Post::delete([$postID]);



        //  return redirect()->route('users.index');
    }

    public function chooseDestroy()
    {
        //Post::delete([$postID]);
        //echo ("User Record deleted successfully.");
        return view('post.ad_delete');
    }
}
