<div>

    @include('livewire.work.modal')

    <!-- Table Start -->
    <div class="container-fluid pt-4 px-4">
        <button type="button" data-bs-toggle="modal" data-bs-target="#createModal" class="btn btn-info mt-5 mb-2 ">
            Create Works
        </button>
        <div class="bg-secondary text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h3 class="text-center"> Works Data</h3>
                @if (session()->has('status'))
                    <span class="alert alert-warning">{{ session('status')}}</span>
                @endif
            </div>

            <div class="table-responsive">
                <table class="table text-start  align-middle table-striped table-hover mb-0">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>IMAGE</th>
                            <th>TITLE</th>

                            <th>DESCRIPTION</th>
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
                                    <img style="width: 60px; height:60px;" src="{{ asset('uploads/work') }}/{{ $data->image }}" alt="">
                                </td>
                                <td>{{ $data->title }}</td>
                                <td > <a href=""   wire:click="readMore({{ $data->id }})" data-bs-toggle="modal" data-bs-target="#readMoreModal" >{{ str_limit($data->description,   10) }}</a> </td>
                                <td>
                                    <div class="btn-group">
                                        <button wire:click="edit({{ $data->id }})" data-bs-toggle="modal" data-bs-target="#updateModal" class="btn btn-info btn-sm">Edit</button>
                                        <button wire:click="delete({{ $data->id }})" class="btn btn-danger btn-sm">Delete</button>
                                        <button wire:click="status({{ $data->id }})" class="btn btn-{{ $data->status==1 ? 'success':'outline-success' }} btn-sm">Active</button>
                                        <button class="btn btn-light btn-sm" id="images" wire:click="setProjectId({{ $data->id }})" data-bs-toggle="modal" data-bs-target="#addImage">Images</button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- table End -->


    </div>
