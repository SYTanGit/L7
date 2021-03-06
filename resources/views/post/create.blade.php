@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-4"></div>
            <div class="col-4">
                <form action="{{ route('post.store') }}" enctype="multipart/form-data" method="post">
                    @csrf

                    <div class="form-group row">
                        <label for="company_reviewed">Company Under Review</label>
                        <input class="form-control" type="company_reviewed" name="company_reviewed" id="company_reviewed">
                    </div>

                    <div class="form-group row">
                        <label for="rating">Review Rating</label>
                        <input class="form-control" type="integer" name="rating" id="rating">
                    </div>

                    <div class="form-group row">
                        <label for="caption">Your Review</label>
                        <input class="form-control" type="text" name="caption" id="caption">
                    </div>

            <!--        <div class="form-group row">
                        <label for="postpic">Post picture</label>
                        <input type="file" name="postpic" id="postpic">
                    </div> -->

                    <div class="form-group row">
                        <button type="submit" class="btn btn-primary">Post!</button>
                    </div>                                  
                </form>
            </div>
        <div class="col-4"></div>
    </div>
</div>
@endsection
