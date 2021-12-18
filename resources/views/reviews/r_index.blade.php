@extends('layouts.app')

@section('content')


<div class="container">

          <!-- Company List  -->
 
          <div class=" m-b-md">
                   <h2><strong>Check Out {{$profilescount}}</strong> Cleaning Freaks Reviews!</h2>
                   
                </div>


        <div class="row pt-5">
        @foreach($profiles as $profile)
            <div class="col-4 mb-5">
            
                    <img src="/storage/{{$profile->image}}" class="w-100 animate__animated animate__wobble">
                    <div class="pt-2"><a href="/post/create" class="btn btn-primary">Check Out Reviews!</a></div>   
                </a>
            </div>
            @endforeach
        </div>

        </div>
       



    
</div>
@endsection