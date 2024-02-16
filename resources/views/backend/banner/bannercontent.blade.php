@extends('layouts.dashboard')
@section('content')
 <!-- div Start -->
 <div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="d-flex justify-content-center ">
            <div class=" col-lg-8 bg-secondary rounded h-100 p-4">

                <h3 class="text text-center">Banner Content</h3>

                <form action="{{ route('bannercontent.update') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" for="">Banner Title</label>

                        <input type="text" class=" mb-2 form-control " name="title_1" placeholder="Title 1" value="{{ $banner->first()->title_1 }}">
                        {{-- @php
                            $banner=App\Models\Banner::all();
                        @endphp
                        <input type="text" class=" mb-2 form-control " name="title_2" placeholder="Title 2" value="{{ $banner[0]->title_2 }}"> --}}
                        <input type="text" class=" mb-2 form-control " name="title_2" placeholder="Title 2" value="{{ $banner->first()->title_2 }}">
                        <input type="text" class=" mb-2 form-control " name="title_3" placeholder="Title 3" value="{{ $banner->first()->title_3 }}">
                        @error('title_1')
                            <strong class="text text-danger">{{ $message }}</strong>
                        @enderror
                        @error('title_2')
                            <strong class="text text-danger">{{ $message }}</strong>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="">Short Title</label>
                        <textarea class="form-control" id="short_title" name="short_title" rows="4" cols="50" value="">{{ $banner->first()->short_title  }}</textarea>
                        @error('short_title')
                            <strong class="text text-danger">{{ $message }}</strong>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="">Email</label>
                        <input type="email" class="form-control " name="email" id="email" value="{{ $banner->first()->email }}" >
                        @error('email')
                           <strong class="text text-danger">{{ $message }}</strong>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="">Phone</label>
                        <input type="number" class="form-control " name="phone" id="phone" value="{{ $banner->first()->phone }}">
                        @error('phone')
                           <strong class="text text-danger">{{ $message }}</strong>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="">Location</label>
                        <input type="text" class="form-control " name="location" id="location" value="{{ $banner->first()->location }}">
                        @error('location')
                           <strong class="text text-danger">{{ $message }}</strong>
                        @enderror
                    </div>
                    <div class=" text-center">
                        <button type="submit" class="btn btn-dark text-light">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- div End -->




@endsection

{{-- <div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-md-6 col-xl-4">
            <div class="h-100 bg-secondary rounded p-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <form action="{{ route('bannercontent.update') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" for="">Banner Title</label>

                            <input type="text" class=" mb-2 form-control " name="title_1" placeholder="Title 1" value="{{ $banner->first()->title_1 }}">
                            {{-- @php
                                $banner=App\Models\Banner::all();
                            @endphp
                            <input type="text" class=" mb-2 form-control " name="title_2" placeholder="Title 2" value="{{ $banner[0]->title_2 }}"> --}}
                            {{-- <input type="text" class=" mb-2 form-control " name="title_2" placeholder="Title 2" value="{{ $banner->first()->title_2 }}">
                            <input type="text" class=" mb-2 form-control " name="title_3" placeholder="Title 3" value="{{ $banner->first()->title_3 }}">
                            @error('title_1')
                                <strong class="text text-danger">{{ $message }}</strong>
                            @enderror
                            @error('title_2')
                                <strong class="text text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="">Short Title</label>
                            <textarea class="form-control" id="short_title" name="short_title" rows="4" cols="50" value="">{{ $banner->first()->short_title  }}</textarea>
                            @error('short_title')
                                <strong class="text text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="">Email</label>
                            <input type="email" class="form-control " name="email" id="email" value="{{ $banner->first()->email }}" >
                            @error('email')
                            <strong class="text text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="">Phone</label>
                            <input type="number" class="form-control " name="phone" id="phone" value="{{ $banner->first()->phone }}">
                            @error('phone')
                            <strong class="text text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="">Location</label>
                            <input type="text" class="form-control " name="location" id="location" value="{{ $banner->first()->location }}">
                            @error('location')
                            <strong class="text text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class=" text-center">
                            <button type="submit" class="btn btn-dark text-light">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
