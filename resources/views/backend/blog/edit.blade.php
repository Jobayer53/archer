@extends('layouts.dashboard')
@section('content')
           <!-- div Start -->
           <div class="container-fluid  pt-4 px-4">
            <div class="row  g-4">
                <div class=" d-flex justify-content-center ">
                    <div class="bg-secondary col-lg-10   rounded h-100 p-4">
                        <h3 class="text text-center">Add Blog</h3>
                        <form action="{{ route('blog.update') }}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="row">
                                <div class=" col mb-3">
                                    <label for="" class="form-label">Title</label>
                                    <input type="text" id="title" class="form-control"  name="title" value="{{ $blogs->title }}">
                                    <input type="hidden" name="blog_id" value="{{ $blogs->id }}">
                                    @error('title')
                                        <span class="text text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col mb-3">
                                    <label for="" class="form-label">Date</label>
                                    <input type="date"   class="form-control" name="date" value="{{ $blogs->date }}">
                                    @error('date')
                                        <span class="text text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <label for="" class="form-label">Tags</label>
                                    <input type="text" id="tag"   class="form-control" name="tag" value="{{ $blogs->tag }}">
                                    @error('tag')
                                        <span class="text text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col mb-3">
                                    <label for="" class="form-label">Read Time</label>
                                    <input type="text" id="time"   class="form-control" name="readTime" value="{{ $blogs->read_time }}">
                                    @error('readTime')
                                        <span class="text text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                                <div class="mb-3  ">
                                    <label for="" class="form-label">Blog Content</label>
                                    <div class="bg-dark">
                                        <textarea id="summernote" name="content">{!! $blogs->blog_content !!} </textarea>
                                    </div>
                                    @error('content')
                                        <span class="text text-danger">{{ $message }}</span>
                                    @enderror


                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Blog Thumbnail</label>
                                    <input type="file" class="form-control"   name="thumbnail">
                                    Previous Image:
                                    <br>
                                    <img style="width: 300px; height:200px;" src="{{ asset('uploads/blog') }}/{{ $blogs->thumbnail }}" alt="">
                                    @error('thumbnail')
                                        <span class="text text-danger">{{ $message }}</span>
                                    @enderror

                                </div>


                                <div class="mb-3 text-center">

                                    <button type="submit" class="btn  btn-info">Update</button>
                                </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- div End -->

@endsection
@section('script')

<script>

    $(document).ready(function() {
        $('#summernote').summernote();
    });
</script>


@endsection
