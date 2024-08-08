@extends('layouts.dashboard')
@section('content')




    @livewire('work')






@endsection

@section('script')
<script>
    document.addEventListener('close-modal', event => {

            $('#createModal').modal('hide');
            $('#updateModal').modal('hide');

         });



</script>
<script>
    $(document).ready(function() {
        $('#images').on('click', function() {
            $('#work_id').val($(this).data('id'));
        });
    });
</script>
@endsection
