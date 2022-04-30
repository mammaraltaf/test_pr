@extends('layouts.admin.app')
@section('pageTitle') User Press Releases @endsection
@section('content')
    <!--begin::Header-->

    <div class="card-header pt-5">
        <h3 class="card-title">
            <span class="card-label fw-bolder fs-3 mb-1">Manage User's Content</span>
            <ul class="nav pl-5" style="float: right; !important">
                <li class="nav-item">
                    <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light fw-bolder px-4 me-1 active" id="allTab" data-kt-timeline-widget-1="tab" data-bs-toggle="tab" href="#kt_timeline_widget_1_tab_day">All</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-warning fw-bolder px-4 me-1" id="pendingTab" data-kt-timeline-widget-1="tab" data-bs-toggle="tab" href="#kt_timeline_widget_1_tab_month">Pending</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-success fw-bolder px-4 me-1" id="postedTab" data-kt-timeline-widget-1="tab" data-bs-toggle="tab" href="#kt_timeline_widget_1_tab_month">Posted</a>
                </li>
            </ul>
        </h3>

    </div>
    <div class="card-toolbar">
    </div>
    <!--end::Header-->
    <!--begin::Body-->
    <div class="card-body py-3">
        <div class="tab-content">

            {{--All Datatable--}}
            <table id="example" name="allTable" class="ui celled table allTable" style="width:100%">
                <thead>
                <tr>
                    <th>Title</th>
                    <th>Schedule Date Time</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($allPendingPosted as $pressrel)
                    <tr>
                        <td>{{$pressrel->title}}</td>
                        <td><span class="badge badge-pill badge-primary">{{$pressrel->schedule_press_release_date_time}}</span></td>
                        @if ($pressrel->status == '0')
                            <td><span class="badge badge-pill badge-info">Draft</span></td>
                        @elseif ($pressrel->status == '1')
                            <td><span class="badge badge-pill badge-warning">Pending</span></td>
                        @elseif ($pressrel->status == '2')
                            <td><span class="badge badge-pill badge-success">Active</span></td>
                        @endif

                        <td>
                            @if(!($pressrel->status == '2'))
                                <a href="{{url('/admin/user-press-releases')}}" class="btn btn-primary btn-sm approveUserPost"
                                   data-id="{{$pressrel->id}}" id="{{$pressrel->id}}" data-toggle="tooltip">Approve</a>
                                <a href="{{url('/admin/user-press-releases',$pressrel->id)}}" class="btn btn-danger decline_btn btn-sm"
                                   data-id="{{$pressrel->id}}"  id="{{$pressrel->id}}" data-toggle="tooltip">Decline</a>
                            @elseif($pressrel->status == '2')
                                <a href="{{url('admin/user-press-releases-delete',$pressrel->id)}}" class="btn btn-danger delete_btn btn-sm"
                                   data-id="{{$pressrel->id}}"  id="{{$pressrel->id}}" data-toggle="tooltip">Delete</a>
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>Title</th>
                    <th>Schedule Date Time</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </tfoot>
            </table>
            {{--Pending DataTable--}}
            <table id="example1" name="pendingTable" class="ui celled table pendingTable d-none" style="width:100%">
                <thead>
                <tr>
                    <th>Title</th>
                    <th>Schedule Date Time</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>

                @foreach($pending as $pressrelPending)
                    <tr>
                        <td>{{$pressrelPending->title}}</td>
                        <td><span
                                class="badge badge-pill badge-primary">{{$pressrelPending->schedule_press_release_date_time}}</span>
                        </td>
                        @if ($pressrelPending->status == '0')
                            <td><span class="badge badge-pill badge-info">Draft</span></td>
                        @elseif ($pressrelPending->status == '1')
                            <td><span class="badge badge-pill badge-warning">Pending</span></td>
                        @elseif ($pressrelPending->status == '2')
                            <td><span class="badge badge-pill badge-success">Active</span></td>
                        @endif
                        <td>
                            <a href="{{url('/admin/user-press-releases')}}" class="btn btn-primary btn-sm approveUserPost"
                               data-id="{{$pressrelPending->id}}" id="{{$pressrelPending->id}}" data-toggle="tooltip">Approve</a>
                            <a href="{{url('/admin/user-press-releases',$pressrelPending->id)}}"
                               class="btn btn-danger btn-sm" id="{{$pressrelPending->id}}"
                               data-toggle="tooltip">Decline</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>Title</th>
                    <th>Schedule Date Time</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </tfoot>
            </table>

            <table id="example2" name="postedTable" class="ui celled table postedTable d-none" style="width:100%">
                <thead>
                <tr>
                    <th>Title</th>
                    <th>Schedule Date Time</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($posted as $pressrelPosted)
                    <tr>
                        <td>{{$pressrelPosted->title}}</td>
                        <td><span
                                class="badge badge-pill badge-primary">{{$pressrelPosted->schedule_press_release_date_time}}</span>
                        </td>
                        @if ($pressrelPosted->status == '0')
                            <td><span class="badge badge-pill badge-info">Draft</span></td>
                        @elseif ($pressrelPosted->status == '1')
                            <td><span class="badge badge-pill badge-warning">Pending</span></td>
                        @elseif ($pressrelPosted->status == '2')
                            <td><span class="badge badge-pill badge-success">Active</span></td>
                        @endif
                        <td>
                            @if(!($pressrel->status == '2'))
                                <a href="{{url('/admin/user-press-releases')}}" class="btn btn-primary btn-sm approveUserPost"
                                   data-id="{{$pressrel->id}}" id="{{$pressrel->id}}" data-toggle="tooltip">Approve</a>
                                <a href="{{url('/admin/user-press-releases',$pressrel->id)}}" class="btn btn-danger decline_btn btn-sm"
                                   data-id="{{$pressrel->id}}"  id="{{$pressrel->id}}" data-toggle="tooltip">Decline</a>
                            @elseif($pressrel->status == '2')
                                <a href="{{url('/delete-press-release',$pressrel->id)}}" class="btn btn-danger delete_btn btn-sm"
                                   data-id="{{$pressrel->id}}"  id="{{$pressrel->id}}" data-toggle="tooltip">Delete</a>
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>Title</th>
                    <th>Schedule Date Time</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>
    <!--end::Body-->
@endsection
@section('script')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.css"/>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#example').DataTable();
            // Hide div by setting display to none
            $("#allTab").click(function () {
                $(".allTable").removeClass('d-none');
                $(".pendingTable").addClass('d-none');
                $(".postedTable").addClass('d-none');
                $('#example').DataTable();
                $('#example1').DataTable().destroy();
                $('#example2').DataTable().destroy();
            });

            $("#pendingTab").click(function () {
                $(".pendingTable").removeClass('d-none');
                $(".postedTable").addClass('d-none');
                $(".allTable").addClass('d-none');
                $('#example').DataTable().destroy();
                $('#example1').DataTable();
                $('#example2').DataTable().destroy();
            });

            $("#postedTab").click(function () {
                $(".postedTable").removeClass('d-none');
                $(".allTable").addClass('d-none');
                $(".pendingTable").addClass('d-none');
                $('#example').DataTable().destroy();
                $('#example1').DataTable().destroy();
                $('#example2').DataTable();
            });

            $(document).ready(function () {
                $(document).on('click','.approveUserPost',function (e) {
                    e.preventDefault();
                    var id = $(this).data('id');
                    swal({
                        title: "Are you sure?",
                        text: "You want to approve this post?",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                        .then((willDelete) => {
                            if (willDelete) {
                                $.ajax({
                                    type: "POST",
                                    url: "{{route('admin.userPressReleasesApprove')}}",
                                    dataType: 'json',
                                    data: {
                                        id:id,
                                    },
                                    success: function (data) {
                                        swal("Successfully posted on 500newswire!!!", {
                                            icon: "success",
                                            timer: 10000,
                                        });
                                        location.reload();
                                    },
                                    error: function (data){
                                        swal("There's a problem while posting on 500newswire!!!", {
                                            icon: "error",
                                        });
                                    }
                                });

                            } else {
                                swal("Not Posted!");
                            }
                        });
                });

                $(document).on('click','.decline_btn',function (e) {
                    e.preventDefault();
                    var id = $(this).data('id');
                    swal({
                        title: "Are you sure?",
                        text: "You want to decline this post?",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                        .then((willDelete) => {
                            if (willDelete) {
                                $.ajax({
                                    type: "POST",
                                    url: "{{route('admin.userPressReleasesDecline')}}",
                                    dataType: 'json',
                                    data: {
                                        id:id,
                                    },
                                    success: function (data) {
                                        swal("Successfully declined user release!!!", {
                                            icon: "success",
                                        });
                                        location.reload();
                                    },
                                    error: function (data){
                                        swal("There's a problem while declining user press release!!!", {
                                            icon: "error",
                                        });
                                    }
                                });

                            } else {
                                swal("Post is Safe!");
                            }
                        });
                });
                $(document).on('click','.delete_btn',function (e) {
                    e.preventDefault();
                    var id = $(this).data('id');
                    swal({
                        title: "Are you sure?",
                        text: "You want to delete this post?",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                        .then((willDelete) => {
                            if (willDelete) {
                                $.ajax({
                                    type: "POST",
                                    url: "{{route('admin.userPressReleasesDelete')}}",
                                    dataType: 'json',
                                    data: {
                                        id:id,
                                    },
                                    success: function (data) {
                                        swal("Successfully Deleted user release!!!", {
                                            icon: "success",
                                        });
                                        location.reload();
                                    },
                                    error: function (data){
                                        swal("There's a problem while Deleting user press release!!!", {
                                            icon: "error",
                                        });
                                    }
                                });

                            } else {
                                swal("Post is Safe!");
                            }
                        });
                });

            });


        });
    </script>
@endsection
