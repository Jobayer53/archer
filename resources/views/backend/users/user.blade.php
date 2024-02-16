@extends('layouts.dashboard')
@section('content')
        <!-- Table Start -->

                    <div class="container-fluid pt-4 px-4">
                        <div class="bg-secondary text-center rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Users <span style="float: right ">Total:{{ $total_users }}</span> </h6>

                            </div>
                            <div class="table-responsive">
                                <table class="table text-start align-middle table-bordered table-hover mb-0">
                                    <thead>
                                        <tr>
                                            <th >SL</th>
                                            <th >Image</th>
                                            <th >Name</th>
                                            <th >Email</th>
                                            <th >Created At</th>
                                            <th >Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($users->count() == 0)
                                            <tr >
                                                <td colspan="12"></td>

                                            </tr>
                                            <tr >
                                                    <td colspan="12" class="text-center">NO DATA TO SHOW</td>
                                            </tr>
                                        @endif
                                        @foreach ($users as $key=>$user )
                                        <tr >
                                            <td>{{ $key+1 }}</td>
                                            <td>
                                                @if ($user->image == null)
                                                    <img class="rounded-circle flex-shrink-0"  src="{{ Avatar::create($user->name)->toBase64() }}" style="width: 40px; height: 40px;" alt="">
                                                @else
                                                    <img class="rounded-circle flex-shrink-0" src="{{ asset('uploads/user') }}/{{ $user->image }}" class="rounded-circle me-lg-2" style="width: 40px; height: 40px;" alt="">
                                                @endif

                                            </td>
                                            <td >{{ $user->name }}</td>
                                            <td >{{ $user->email }}</td>
                                            <td>{{ $user->created_at->DiffForHumans() }}</td>
                                            <form action="{{ route('user.destroy',$user->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')

                                                 <td><button class="btn btn-danger" type="submit" >Delete</button></td>
                                            </form>

                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                <!-- table End -->

@endsection

{{-- <!-- Table Start -->
<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Users <span style="float: right ">Total:{{ $total_users }}</span> </h6>
        </div>
        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                    <tr>
                        <th >SL</th>
                    </tr>
                </thead>
                <tbody>




                    <img class="rounded-circle flex-shrink-0"  src="{{ Avatar::create($user->name)->toBase64() }}" style="width: 40px; height: 40px;" alt="">

                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- table End --> --}}
