@extends('layouts.dashboard')
@section('content')




    @livewire('work')






@endsection

@section('script')
<script>
    document.addEventListener('close-modal', event => {

            $('#createModal').modal('hide');
            $('#updateModal').modal('hide');
            $('#addImage').modal('hide');

         });



</script>

@endsection
