@extends('layouts.dashboard')
@section('content')
<div class="container">
    <div class="row ">
        <div class=" col-lg-8 m-auto">
            <div class="bg-secondary card">
                <div class="card-header">
                    <h2>Users <span style="float: right ">Total:{{ $total_users }}</span></h2>
                </div>
                <div class="card-body">
                    <table class="table  table-striped ">
                        <tr>
                            <th>SL</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($users as $key=>$user )
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>
                                @if ($user->image == null)
                                    <img src="{{ Avatar::create($user->name)->toBase64() }}" style="width: 40px; height: 40px;" alt="">
                                @else
                                    <img src="{{ asset('uploads/user') }}/{{ $user->image }}" class="rounded-circle me-lg-2" style="width: 40px; height: 40px;" alt="">
                                @endif

                            </td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->created_at->DiffForHumans() }}</td>
                            <td><a class="btn btn-danger" href="{{ route('user.delete', $user->id)   }}">Delete</a></td>
                        </tr>
                        @endforeach

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
