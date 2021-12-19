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
                        <button type="submit" class="btn btn-primary">Delete!</button>
                    </div>                                  
                </form>
    </div>
</div>
@endsection
