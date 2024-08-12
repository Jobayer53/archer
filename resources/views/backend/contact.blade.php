@extends('layouts.dashboard')
@section('content')
    <!-- Table Start -->
    <div class="container-fluid pt-4 px-4">

        <div class="bg-secondary text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h3 class="text-center"> Contact Message</h3>
            </div>
            <div class="table-responsive">
                <table class="table text-start  align-middle table-striped table-hover mb-0">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>NAME</th>
                            <th>EMAIL</th>
                            <th>SUBJECT</th>
                            <th>MESSAGE</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody >
                        @if ($contacts->count() == 0)
                           <tr >
                            <td colspan="12"></td>

                           </tr>
                           <tr >
                                <td colspan="12" class="text-center">NO DATA TO SHOW</td>
                           </tr>
                        @endif
                        @foreach ($contacts as $key=>  $data)
                            <tr class="text-white">
                                <td>{{ $key+1 }}</td>

                                <td>{{ $data->name }}</td>
                                <td > {{ $data->email }} </td>
                                <td > {{ $data->subject }} </td>
                                <td > {{ $data->message }} </td>
                                {{-- <td>
                                    <div class="btn-group">
                                        <button wire:click="edit({{ $data->id }})" data-bs-toggle="modal" data-bs-target="#updateModal" class="btn btn-info btn-sm">Edit</button>
                                        <button wire:click="delete({{ $data->id }})" class="btn btn-danger btn-sm">Delete</button>
                                        <button wire:click="status({{ $data->id }})" class="btn btn-{{ $data->status==1 ? 'success':'outline-success' }} btn-sm">Active</button>
                                        <button class="btn btn-light btn-sm" id="images" wire:click="setProjectId({{ $data->id }})" data-bs-toggle="modal" data-bs-target="#addImage">Images</button>
                                    </div>
                                </td> --}}
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $contacts->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
    <!-- table End -->



@endsection
