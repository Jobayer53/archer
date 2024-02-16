@extends('layouts.dashboard')

@section('content')



       <!-- div Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-lg-12  col-xl-12 text-center">
                <div class="bg-secondary  rounded h-100 p-4">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('borddaa ki khobor!') }}
                </div>
            </div>
        </div>
    </div>
    <!-- div End -->

@endsection

