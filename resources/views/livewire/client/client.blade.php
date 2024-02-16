<div>

    @include('livewire.client.modal')


     <!-- Table Start -->
<div class="container-fluid pt-4 px-4">
    <button type="button" data-bs-toggle="modal" data-bs-target="#createModal" class="btn btn-info mt-4 mb-2">
        Add Client Comment
    </button>
    <div class="bg-secondary text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h3 class="text-center"> Clients Comment</h3>
            @if (session()->has('status'))
                <span class="alert alert-warning">{{ session('status')}}</span>
            @endif
        </div>
        <div class="table-responsive">
            <table class="table text-start align-middle table-striped table-hover mb-0">
                <thead>
                    <tr>
                        <th>SL</th>
                        <th>IMAGE</th>
                        <th>NAME</th>
                        <th>PROFESSION</th>
                        <th>COMMENT</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                     @if ($clients->count() == 0)
                           <tr >
                            <td colspan="12"></td>

                           </tr>
                           <tr >
                                <td colspan="12" class="text-center">NO DATA TO SHOW</td>
                           </tr>
                        @endif
                        @foreach ($clients as $key=>  $data)
                            <tr class="text-white">
                                <td>{{ $key+1 }}</td>
                                <td>
                                    @if ($data->image == null)
                                        <img src="{{ Avatar::create($data->name)->toBase64() }}" style="width: 60px; height: 60px;" alt="">
                                    @else
                                        <img class="rounded-circle me-lg-2" style="width: 60px; height:60px;" src="{{ asset('uploads/client') }}/{{ $data->image }}" alt="">
                                    @endif

                                </td>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->profession }}</td>

                                <td>
                                                {{-- Efficient conditional check --}}
                                    @if (!array_key_exists($data->id, $showFullContent) || !$showFullContent[$data->id])
                                        {{ substr($data->comment, 0, 20) }}...
                                    @else
                                        {{ $data->comment }}
                                    @endif
                                    <br>
                                    <button wire:click="toggleShowFullContent({{ $data->id }})">
                                        @if ($showFullContent[$data->id] ?? false)
                                            Read Less
                                        @else
                                            Read More
                                        @endif
                                    </button>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <button wire:click="edit({{ $data->id }})" data-bs-toggle="modal" data-bs-target="#updateModal" class="btn btn-info btn-sm">Edit</button>
                                    <button wire:click="delete({{ $data->id }})" class="btn btn-danger btn-sm">Delete</button>

                                    </div>
                                </td>
                            </tr>
                        @endforeach








            </table>
        </div>
    </div>
</div>
<!-- table End -->


    </div>


