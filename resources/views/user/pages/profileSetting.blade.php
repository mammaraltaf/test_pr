@extends('layouts.admin.app')
@section('content')
    <form action="{{route('newArticleSave')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label class="form-label fw-bolder text-dark fs-6">Title</label>
        <input id="title" type="text" class="form-control"  placeholder="Enter your Title Here" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>
        <br>
        <p><textarea class="form-control" name="editor" id="editor"></textarea></p>
        <input class="btn btn-primary" type="submit" value="Save as draft">
        <input class="btn btn-info" type="submit" value="Preview">
        <input class="btn btn-success" type="submit" value="Schedule Press Release Time/Date">
        <input class="btn btn-success" id="publish" type="submit" value="Ready to Publish">
    </form>
@endsection
@section('script')
<script>
    $(document).ready(function() {
        $("#publish").click(function(e) {
            e.preventDefault();

            swal({
                title: "Are you sure?",
                text: "Save details and Generate pdf",
                icon: "info",
                buttons: true,
            }).then((willDelete) => {
                if (willDelete) {
                    var data = $('#msform').serialize()+'&complete_status=completed'
                    $.ajax({
                        type: 'POST',
                        url: `{!! route('saveUserForm') !!}`,
                        data: data
                    }).done(function(data) {
                        let pageRedirectUrl = `{!! url('detail-document') !!}`;
                        swal("PDF is ready!", {
                            icon: "success",
                        });
                        window.location.href = pageRedirectUrl + '/' + data.user_id;
                    }).fail(function(data) {
                        // Optionally alert the user of an error here...
                    });

                }
            });
        })
    })
</script>
@endsection
