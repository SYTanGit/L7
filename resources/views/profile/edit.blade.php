@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-4"></div>
            <div class="col-4">
                <form action="/profile/{{$profile->id}}/update" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="form-group row">
                        <label for="description">What is your company freaking good in?</label>
                        <input class="form-control" type="text" name="description" id="description" value="{{ $profile->description }}">
                    </div>

                    <div class="form-group row">
                        <label for="profilepic">Post a Cleaning Freak Picture!</label>
                        <input type="file" name="profilepic" id="profilepic">
                    </div>

                    <div class="form-group row">
                        <button type="submit" class="btn btn-primary">Update profile</button>
                    </div>                                  
                </form>
            </div>
        <div class="col-4"></div>
    </div>
</div>
@endsection
