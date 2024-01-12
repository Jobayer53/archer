@extends('layouts.dashboard')
@section('content')
{{-- <div class="container">
    <div class="row">
        <div class="col-lg-8 m-auto">
            <div class="card bg-secondary">
                <div class="card-header"><h3 class="text-center">Add Experience</h3></div>
                <div class="card-body">

                    <form id="addForm"  action="{{ route('add.experience') }}" method="POST" >
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Title</label>
                            <input type="text" class="form-control" name="title" id="title">
                            <span class="text text-danger error-text title_error"></span>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Year</label>
                            <input type="text" class="form-control" name="year" id="year">
                            <span class="text text-danger error-text year_error"></span>
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Description</label>
                            <input type="text" class="form-control" name="description" id="description">
                            <span class="text text-danger error-text description_error"></span>
                        </div>
                        <div class="mb-3 text-center">
                            <button id="addBtn"  class="btn  btn-dark ">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
{{-- <div class="container mt-4">
    <div class="row">
        <div class="col-lg-10 m-auto">
            <div class="card bg-secondary">
                <div class="card-header"><h3 class="text-center">Experience lists</h3></div>
                <div class="card-body">
                    <table class="table table-bordered data-table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Details</th>
                                <th width="280px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<a href="javascript:void(0)" class="btn btn-success mb-2" id="create-new-post">Add post</a>
<table class="table table-bordered data-table">
    <thead>
        <tr>
            <th>No</th>
            <th>name</th>
            <th>Member</th>
            <th width="280px">Action</th>
        </tr>
    </thead>
    @foreach($experience as $post)
    <tr id="post_id_{{ $post->id }}">
       <td>{{ $post->id  }}</td>
       <td>{{ $post->title }}</td>
       <td>{{ $post->year }}</td>
       <td><a href="javascript:void(0)" id="edit-post" data-id="{{ $post->id }}" class="btn btn-info">Edit</a></td>
       <td>
        <a href="javascript:void(0)" id="delete-post" data-id="{{ $post->id }}" class="btn btn-danger delete-post">Delete</a></td>
    </tr>
    @endforeach

</table>
<div class="modal fade" id="ajax-crud-modal" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title" id="postCrudModal"></h4>
        </div>
        <div class="modal-body">
            <form id="postForm" name="postForm" class="form-horizontal">
               <input type="hidden" name="post_id" id="post_id">
               <div class="mb-3">
                    <label for="" class="form-label">Title</label>
                    <input type="text" class="form-control" name="title" id="title">
                    <span class="text text-danger error-text title_error"></span>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Year</label>
                    <input type="text" class="form-control" name="year" id="year">
                    <span class="text text-danger error-text year_error"></span>
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Description</label>
                    <input type="text" class="form-control" name="description" id="description">
                    <span class="text text-danger error-text description_error"></span>
                </div>

                <div class="col-sm-offset-2 col-sm-10">
                 <button type="submit" class="btn btn-primary" id="btn-save" value="create">Save
                 </button>
                </div>
            </form>
        </div>
        <div class="modal-footer">

        </div>
    </div>
    </div>
    </div>
<span id="output"></span>


@section('footer')

<script type="text/javascript">
      $(function () {

      /*------------------------------------------
       --------------------------------------------
       Pass Header Token
       --------------------------------------------
       --------------------------------------------*/
      $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
      });

      $('#create-new-post').click(function () {
        $('#btn-save').val("create-post");
        $('#postForm').trigger("reset");
        $('#postCrudModal').html("Add New post");
        $('#ajax-crud-modal').modal('show');
    });

    if ($("#postForm").length > 0) {
      $("#postForm").validate({

     submitHandler: function(form) {
      var actionType = $('#btn-save').val();
      $('#btn-save').html('Sending..');

                    $.ajax({
                        data: $('#postForm').serialize(),
                    url: "{{ route('expData.store') }}",
                    type: "POST",
                    dataType: 'json',
                    success: function (data) {
                        var post = '<tr id="post_id_' + data.id + '"><td>' + data.id + '</td><td>' + data.title + '</td><td>' + data.year + '</td><td>' + data.description + '</td>';
                        post += '<td><a href="javascript:void(0)" id="edit-post" data-id="' + data.id + '" class="btn btn-info">Edit</a></td>';
                        post += '<td><a href="javascript:void(0)" id="delete-post" data-id="' + data.id + '" class="btn btn-danger delete-post">Delete</a></td></tr>';


                        if (actionType == "create-post") {
                            $('#posts-crud').prepend(post);
                        } else {
                            $("#post_id_" + data.id).replaceWith(post);
                        }

                        $('#postForm').trigger("reset");
                        $('#ajax-crud-modal').modal('hide');
                        $('#btn-save').html('Save Changes');

                    },
                    error: function (data) {
                        console.log('Error:', data);
                        $('#btn-save').html('Save Changes');
                    }
                });
            }
  })
}





});
</script>

{{-- <script>
    $(document).ready(function () {
        $.ajax({
            url:"{{ route('getExperienceData') }}",
            type:"GET",
            success:function(data){
                if(data.experienceData.length > 0){
                    for(let i=0;i<data.experienceData.length;i++){
                        $("#experienceTable").append('<tr><td>'+(i+1)+'</td> <td>'+(data.experienceData[i]['title'])+'</td><td>'+(data.experienceData[i]['year'])+'</td><td>'+(data.experienceData[i]['description'])+'</td>    </tr>');
                    };
                }else{

                };
            },
            error:function(e){
                console.log(e.responsiveText);
            }
        });
    });
</script>

<script>
    $(function(){
        $("#addForm").on('submit',function(e){
            e.preventDefault();


            var data = new FormData(this);

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url:$(this).attr("action"),
                method:$(this).attr("method"),
                data:data,
                processData:false,
                dataType:'json',
                contentType:false,
                beforeSend:function(){
                    $(document).find("span.error-text").text("");
                },
                success:function(data){

                    if(data.status == 0){
                        $.each(data.error, function(prefix, val){
                            $('span.'+prefix+'_error').text(val[0]);
                        });
                    }else{
                        $("#addForm")[0].reset();
                       alert(data.success);
                       if(data.experienceData.length > 0){
                        for(let i=0;i<data.experienceData.length;i++){
                            $("#experienceTable").append('<tr><td>'+(i+1)+'</td> <td>'+(data.experienceData[i]['title'])+'</td><td>'+(data.experienceData[i]['year'])+'</td><td>'+(data.experienceData[i]['description'])+'</td>    </tr>');
                        };
                        }else{
                            $("#experienceTable").append('<tr><td>Data Not Found</td> </tr>');
                        };

                    }
                } //succes ends here
            });
        });
    });

</script> --}}
@endsection


@endsection
