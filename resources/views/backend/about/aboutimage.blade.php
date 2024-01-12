@extends('layouts.dashboard')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-8 m-auto">
            <div class="card bg-secondary">
                <div class="card-header">
                    <h3 class="text text-center">About Image</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('aboutimage.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Current Image</label>
                            <br>
                            <img style="height: 200px; width: 400px;" src="{{ asset('uploads/about') }}/{{ $about->first()->image }}" alt="">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Upload Image</label>
                            <input type="file" class="form-control bg-dark" name="aboutimage" id="aboutimage" >
                            @error('aboutimage')
                                <strong class="text text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="mb-3 text-center">
                            <button type="submit" class="btn btn-dark ">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
