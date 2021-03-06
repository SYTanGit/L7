@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-7">
       
            <img class="" width="70%" src="/storage/{{ $profile->image}}">
      
        </div>

        <div class="col-3 pt-3">
            <h3>{{$user->name}}</h3>
  
            
                <div class="pt-3">{{$profile->description}}</div>
                <a href="/profile/edit" class="pt-3">Edit your profile!</a>

                <div>
                 <a href="/reviews/r_index" class="pt-10">Check out reviews!</a> </div>
        </div>


        {{-- <div class="col-2 pt-3">
        @if($user->name == 'A')
            <a href="/post/ad_delete" class="pt-3 animate__animated animate__wobble">Secret Admin Link!</a>
        @endif
        </div> --}}

        <!--
        <div class="col-3"></div>
        <div class="col-2 pt-3">
        @if($profile != null)
            <img class="" width="70%" src="/storage/{{ $profile->image}}">
        @endif
        </div>
        <div class="col-7 pt-3">
            <h3>{{$user->name}}</h3>
            <span><strong>{{$postscount}}</strong> posts</span>
            @if($profile != null)
                <div class="pt-3">{{$profile->description}}</div>
                <a href="/profile/edit" class="pt-3">Update your profile!</a>
            @else
                <div><a href="/profile/create" class="pt-3">Create your profile!</a></div>
            @endif
            <div class="pt-2"><a href="/post/create" class="btn btn-primary">Add a post!</a></div>            
        </div>
    </div>



 <!--   <div class="row pt-5">  
        {{-- @foreach($posts as $post)
            <div class="col-4 mb-5">
                <a href="/post/{{$post->id}}">
                    <img src="/storage/{{$post->image}}" class="w-100">
                    
                </a>

               

            </div>
        @endforeach --}}
  </div>  -->

   
</div>
@endsection