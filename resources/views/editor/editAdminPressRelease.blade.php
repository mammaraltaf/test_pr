@extends('layouts.admin.app')
@section('pageTitle') New Press Releases @endsection

@section('styles')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <link href="{{asset('assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" type="text/css" href="https://npmcdn.com/flatpickr/dist/themes/confetti.css">

@endsection

@section('content')
    <!--begin::Header-->
    <div class="card-header border-0 pt-5">
        <h2 class="card-title align-items-start flex-column">
            <span class="card-label fw-bolder fs-3 mb-1">Edit Press Release</span>
        </h2>

    </div>
    <br>
    <!--end::Header-->
    <form method="post" action="" id="pressReleaseTable" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-6">
                    <label for="" class="form-label">Press Release Title<span style="color:red">*</span></label>
                    <input type="text" name="title" class="form-control" placeholder="Enter Title Here" value="{{$editPressRelease->title}}" required/>
                </div>
                <br>
                <div class="col-md-4">
                    <label for="" class="form-label">Schedule Press Release Date/Time <span style="color:green">(Optional)</span></label>
                    <input class="form-control form-control-solid" value="{{$editPressRelease->schedule_press_release_date_time}}" name="schedule_press_release_date_time" readable placeholder="Pick date" id="kt_datepicker_10"/>
                </div>
                <div class="col-md-1"></div>

            </div>
            <br>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <label for="" class="form-label">Description<span style="color:red">*</span></label>
                        <textarea class="summernote d-none" name="description">{{$editPressRelease->description}}</textarea>
                    </div>
                    <div class="col-md-1"></div>

                </div>

            </div>
            <div class="form-group text-center">
                <button class="btn btn-info btn-sm" type="submit" value="Preview">Preview</button>
                <button class="btn btn-success btn-sm" id="ready-to-publish" type="submit" value="Ready to Publish">Ready to Publish</button>
            </div>
        </div>
    </form>

    <!--begin::Modal-->
    <div class="modal fade" tabindex="-1" id="schedule_press_release_date_time">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Schedule Press Release Date/Time</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <!--begin::Close-->
                {{--                                        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                                                            <span class="svg-icon svg-icon-2x"></span>
                                                        </div>--}}
                <!--end::Close-->
                </div>

                <div class="modal-body">
                    <div class="mb-0">
                        <label for="" class="form-label">Select date/time</label>
                        <input class="form-control form-control-solid" placeholder="Pick date" id="kt_datepicker_10"/>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-light close" data-dismiss="modal" aria-label="Close">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <!--end::Modal-->

@endsection

@section('script')
    <script type="text/javascript">

        $("#kt_datepicker_10").flatpickr({
            enableTime: true,
            dateFormat: "Y-m-d H:i",
        });

        $(document).ready(function() {
            $("#ready-to-publish").click(function(e) {
                e.preventDefault();

                swal({
                    title: "Are you sure?",
                    text: "Save Press Release?",
                    icon: "info",
                    buttons: true,
                }).then((willDelete) => {
                    if (willDelete) {
                        var data = $('#pressReleaseTable').serialize()+'&complete_status=completed'
                        $.ajax({
                            type: 'POST',
                            url: `{!! route('user.newPressReleaseStore') !!}`,
                            data: data
                        }).done(function(data) {
                            swal("Press Release Posted for Admin Approval!", {
                                icon: "success",
                            });
                            let pageRedirectUrl = `{!! url('manage-content') !!}`;
                            window.location.href = pageRedirectUrl;
                        }).fail(function(data) {
                            // Optionally alert the user of an error here...
                        });

                    }
                });
            })
        });
    </script>

@endsection
