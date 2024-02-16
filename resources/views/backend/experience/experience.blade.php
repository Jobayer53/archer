@extends('layouts.dashboard')
@section('content')




    @livewire('experience')






@endsection

@section('script')
<script>
    document.addEventListener('close-modal', event => {

            $('#createModal').modal('hide');
            $('#updateModal').modal('hide');

         });

</script>

@endsection
