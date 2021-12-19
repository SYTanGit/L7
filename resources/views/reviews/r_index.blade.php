@extends('layouts.app')

@section('content')


<div class="container">

          <!-- Company List  -->
                <h2>Check Out <strong> {{$profilescount}}</strong> Cleaning Freaks Reviews!</h2>
                
                  <div class="row pt-5">
    <!--      <div class=" m-b-md"> -->
                @foreach($profiles as $profile) 
            <div class="col-4 mb-5">

            
            <p><strong>Company : </strong> {{$profile->company_name}}  ,    <strong> What is Freaking Good? : </strong> {{$profile->description}}</p>
                <img src="/storage/{{$profile->image}}" class="w-100 animate__animated animate__wobble">
              
            </div>
 
           @endforeach 

                     <div class="row pt-5">
    <!--      <div class=" m-b-md"> -->
                @foreach($posts as $post) 
       <!--     <div class="col-12 mb-5"> -->
                   <div class="col-12">
            <strong>Company Reviewed :</strong> {{$post->company_reviewed}}, <strong> Rating : </strong> {{$post->rating}}, <strong> Review : </strong> {{$post->caption}}
                   

                </div>


         @endforeach 

        <div class="row pt-5">

        <div class="col-12">
             <div class="pt-0"><a href="/post/create" class="btn btn-primary">Create a Review!</a></div>   


        </div>
       



    
</div>
@endsection