@extends('layouts.dashboard')

@section('content')
<div class="container  ">
    <div class="row  justify-content-center">
        <div class="col-md-8">
            <div class="card bg-secondary">
                <div class="card-header">{{ __('wellcome to Dashboard') }}</div>

                <div class="card-body">
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
</div>
@endsection
