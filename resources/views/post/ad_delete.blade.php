@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-4"></div>
            <div class="col-4">

                    <form action="{{ route('post.destroy') }}" enctype="multipart/form-data" method="post">
                    @csrf

                    <div class="form-group row">
                        <label for="delete">Delete Post ID</label>
                        <input class="form-control" type="delete" name="postID" id="delete">
                    </div>
           
        <div class="col-4"></div>

               <div class="form-group row">
                        <button type="submit" onclick="myFunction()" class="btn btn-primary">Delete!</button>
                        
          <script> function myFunction() {   alert("Deleted Post!");} </script>
                        
                            
                </form>

                
                        
                    </div>     

                    <p class="row pt-3">
 <div class="row pt-0"><a href="/reviews/r_index" class="btn btn-primary">Return to Reviews Listing Page</a></div>   </p> 
    </div>


           {{-- <div class="row pt-5">
    <!--      <div class=" m-b-md"> -->
                @foreach($posts as $post) 
       <!--     <div class="col-12 mb-5"> -->
                   <div class="col-12">
            <strong>Post ID :</strong> {{$post->id}}, <strong>Company Reviewed :</strong> {{$post->company_reviewed}}, <strong> Rating : </strong> {{$post->rating}}, <strong> Review : </strong> {{$post->caption}}
                   

                </div> 

         @endforeach 

        </div> --}}


        <div class="col-4"></div>

        <div class="col-12">
       


        </div>
        </div>
</div>
        
       
    
</div>
@endsection
