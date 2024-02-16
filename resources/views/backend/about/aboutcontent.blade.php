@extends('layouts.dashboard')
@section('content')
           <!-- div Start -->
           <div class="container-fluid  pt-4 px-4">
            <div class="row  g-4">
                <div class=" d-flex justify-content-center ">
                    <div class="bg-secondary col-lg-8   rounded h-100 p-4">
                        <h3 class="text text-center">About Content</h3>
                        <form action="{{ route('aboutcontent.update') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label" for="">Banner Title</label>

                                <input type="text" class=" mb-2 form-control " name="title" placeholder="Title" value="{{ $about->first()->title }}" >
                                {{-- @php
                                    $banner=App\Models\Banner::all();
                                @endphp
                                <input type="text" class=" mb-2 form-control " name="title_2" placeholder="Title 2" value="{{ $banner[0]->title_2 }}"> --}}

                                @error('title')
                                    <strong class="text text-danger">{{ $message }}</strong>
                                @enderror

                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="">Short Title</label>
                                <textarea class="form-control" id="short_title" name="short_title" rows="4" cols="50" value="">{{ $about->first()->short_title }}</textarea>
                                @error('short_title')
                                    <strong class="text text-danger">{{ $message }}</strong>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="">Name</label>
                                <input type="text" class="form-control " name="name" id="name" value="{{ $about->first()->name }}" >
                                @error('name')
                                <strong class="text text-danger">{{ $message }}</strong>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="">Date of Birth</label>
                                <input type="date" class="form-control " name="birth_date" id="birth_date" value="{{ $about->first()->birth_date }}" >
                                @error('birth_date')
                                <strong class="text text-danger">{{ $message }}</strong>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="">Nationality</label>
                                <input type="text" class="form-control " name="nationality" id="nationality" value="{{ $about->first()->nationality }}" >
                                @error('nationality')
                                <strong class="text text-danger">{{ $message }}</strong>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="">Work Status</label>
                                <input type="text" class="form-control " name="work_status" id="work_status" value="{{ $about->first()->work_status }}" >
                                @error('work_status')
                                <strong class="text text-danger">{{ $message }}</strong>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="">Phone</label>
                                <input type="number" class="form-control " name="phone" id="phone" value="{{ $about->first()->phone }}">
                                @error('phone')
                                <strong class="text text-danger">{{ $message }}</strong>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="">Email</label>
                                <input type="email" class="form-control " name="email" id="email" value="{{ $about->first()->email}}" >
                                @error('email')
                                <strong class="text text-danger">{{ $message }}</strong>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="">Address</label>
                                <input type="text" class="form-control " name="address" id="address" value="{{ $about->first()->address }}">
                                @error('address')
                                <strong class="text text-danger">{{ $message }}</strong>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="">Freelancer</label>
                                <input type="text" class="form-control " name="freelancer" id="freelancer" value="{{ $about->first()->freelancer }}">
                                @error('freelancer')
                                <strong class="text text-danger">{{ $message }}</strong>
                                @enderror
                            </div>
                            <div class="mb-3 text-center">
                                <button type="submit" class="btn btn-dark text-light">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- div End -->



@endsection
