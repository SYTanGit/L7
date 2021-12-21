@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-4"></div>
            <div class="col-4">

<div class="row pt-5">
    <div class="col-12">
             {{-- <div class="pt-0"><a href="/reviews/r_index" class="btn btn-primary">I am a reviewer & would like to skip this!</a></div>    --}}


        </div>

        </div>
                <form action="{{ route('profile.store') }}" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="form-group row">
                        <label for="description">What is your company/avatar name?</label>
                        <input class="form-control" type="text" name="company_name" id="company_name">
                    </div>

                    <div class="form-group row">
                        <label for="description">What is you freaking good in?</label>
                        <input class="form-control" type="text" name="description" id="description">
                    </div>

                    <div class="form-group row">
                        <label for="profilepic">Post a Cleaning Freak Picture!</label>
                        <input type="file" name="profilepic" id="profilepic">
                    </div>

                    <div class="form-group row">
                        <button type="submit" class="btn btn-primary">Create profile</button>
                    </div>                                  
                </form>
            </div>
        <div class="col-4"></div>
    </div>
</div>
@endsection
