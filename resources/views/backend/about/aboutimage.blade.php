@extends('layouts.dashboard')
@section('content')
           <!-- div Start -->
           <div class="container-fluid  pt-4 px-4">
            <div class="row  g-4">
                <div class=" d-flex justify-content-center ">
                    <div class="bg-secondary col-lg-6   rounded h-100 p-4">
                        <h3 class="text ">About Image</h3>

                        <form action="{{ route('aboutimage.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="" class="form-label">Current Image</label>
                                <br>
                                <img  style="height: 200px; width: 300px;" src="{{ asset('uploads/about') }}/{{ $about->first()->image }}" alt="">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Upload Image</label>
                                <input type="file" class="form-control bg-dark" name="aboutimage" id="aboutimage" >
                                @error('aboutimage')
                                    <strong class="text text-danger">{{ $message }}</strong>
                                @enderror
                            </div>
                            <div class="mb-3 ">
                                <button type="submit" class="btn btn-dark ">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- div End -->
@endsection

