@extends('layouts.dashboard')
@section('content')
<div class="container">
    <div class="row ">
        <div class="col-lg-5">
            <div class="card bg-secondary">
                <div class="card-header">
                    <h3>Profile Information</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('profile.update') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="from-label">Name</label>
                            <input type="text" id="name" class="form-control" name="name" value="{{ Auth::user()->name }}">
                            @error('name')
                                <strong class="text text-danger"> {{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="from-label">Email</label>
                            <input type="email" id="email" class="form-control" name="email" value="{{ Auth::user()->email }}">
                            @error('email')
                                <strong class="text text-danger"> {{ $message }}</strong>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="" class="from-label">Current Password</label>
                            <input type="password" id="current_password" class="form-control" name="current_password">
                            @if (session('currentpassword_notmatch'))
                                <strong class="text text-danger">{{ session('currentpassword_notmatch') }}</strong>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="" class="from-label">New Password</label>
                            <input type="password" id="new_password" class="form-control" name="new_password">
                            @error('new_password')
                                <strong class="text text-danger">{{$message}}</strong>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="" class="from-label">Confirm Password</label>
                            <input type="password" id="confirm_password" class="form-control" name="confirm_password">
                            @if (session('confirmpassword_notmatch'))
                                <strong class="text text-danger">{{ session('confirmpassword_notmatch') }}</strong>
                            @endif
                        </div>
                        <div class=" pb-4 mb-4 text-center">
                            <button type="submit" class="btn btn-dark text-light">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card bg-secondary">
                <div class="card-header">

                        <h3 class="text-center">Profile Image</h3>

                </div>
                <div class="card-body">
                        <form class="table table-striped" action="{{ route('profileimage.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="profile_image"> Profile Image</label>
                                <input type="file" name="profile_image" class="form-control bg-dark" accept="image/*" onchange="loadFile(event)" >
                                <p><img id="output" width="200" /></p>
                                @error('profile_image')
                                    <strong class="text text-danger"> {{ $message }}</strong>
                                @enderror
                            </div>
                            <div class="mb-3 text-center">
                                <button class="btn btn-dark text-light text-center">Update</button>
                            </div>
                        </form>

                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var loadFile = function(event) {
        var image = document.getElementById('output');
        image.src = URL.createObjectURL(event.target.files[0]);
    };
    </script>
@endsection
