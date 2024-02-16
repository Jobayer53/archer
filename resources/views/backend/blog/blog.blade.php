@extends('layouts.dashboard')
@section('content')



<!-- Table Start -->
{{-- <div class="container-fluid pt-4 px-4">
    <a href="{{ route('blog.create') }}" class="btn btn-info mt-5 mb-2 ">
        Create Blogs
    </a>
    <div class="bg-secondary text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h3 class="text-center"> Blogs Data</h3>
            @if (session()->has('status'))
                <span class="alert alert-warning">{{ session('status')}}</span>
            @endif
        </div>

        <div class="table-responsive">
            <table class="table text-start  align-middle table-striped table-hover mb-0">
                <thead>
                    <tr>
                        <th>SL</th>
                        <th>THUMBNAIL</th>
                        <th>TITLE</th>
                        <th>DATE</th>
                        <th>TAGS</th>
                        <th>READ TIME</th>
                        <th>CONTENT</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody >
                    @if ($works->count() == 0)
                        <tr >
                        <td colspan="12"></td>
                        </tr>
                        <tr >
                            <td colspan="12" class="text-center">NO DATA TO SHOW</td>
                        </tr>
                    @endif
                    @foreach ($works as $key=>  $data)
                        <tr class="text-white">
                            <td>{{ $key+1 }}</td>
                            <td>
                                <img style="width: 60px; height:60px;" src="{{ asset('uploads/blog') }}/{{ $data->thumbnail }}" alt="">
                            </td>
                            <td>{{ $data->title }}</td>
                            <td>{{ $data->date }}</td>
                            <td>{{ $data->tag }}</td>
                            <td>{{ $data->read_time }}</td>
                            <td><a href="#">Click to read</a></td>



                            <td>
                                <div class="btn-group">
                                    <button wire:click="edit({{ $data->id }})" data-bs-toggle="modal" data-bs-target="#updateModal" class="btn btn-info btn-sm">Edit</button>
                                <button wire:click="delete({{ $data->id }})" class="btn btn-danger btn-sm">Delete</button>
                                <button wire:click="status({{ $data->id }})" class="btn btn-{{ $data->status==1 ? 'success':'outline-success' }} btn-sm">Active</button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div> --}}
<!-- table End -->
@livewire('blog')
@endsection
@section('script')


<script>
    document.addEventListener('close-modal', event => {

            $('#contentModal').modal('hide');

         });

</script>

@endsection
