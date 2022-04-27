@extends('layouts.admin.app')
@section('pageTitle') Manage Content @endsection
@section('content')
    <!--begin::Header-->

    <div class="card-header pt-5">
        <h3 class="card-title">
            <span class="card-label fw-bolder fs-3 mb-1">Manage Content</span>
            <ul class="nav pl-5" style="float: right; !important">
                <li class="nav-item">
                    <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light fw-bolder px-4 me-1 active" id="allTab" data-kt-timeline-widget-1="tab" data-bs-toggle="tab" href="#kt_timeline_widget_1_tab_day">All</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-info fw-bolder px-4 me-1" id="draftTab" data-kt-timeline-widget-1="tab" data-bs-toggle="tab" href="#kt_timeline_widget_1_tab_week">Draft</a>
                </li>
{{--                <li class="nav-item">
                    <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-warning fw-bolder px-4 me-1" id="pendingTab" data-kt-timeline-widget-1="tab" data-bs-toggle="tab" href="#kt_timeline_widget_1_tab_month">Pending</a>
                </li>--}}
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
                @foreach($pressReleases as $pressrel)
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
                                <a href="{{url('/admin/edit-press-release',$pressrel->id)}}" class="btn btn-primary btn-sm"
                                   id="{{$pressrel->id}}" data-toggle="tooltip">Edit</a>
                            @endif
                            <a href="{{url('/admin/delete-press-release',$pressrel->id)}}" class="btn btn-danger delete_btn btn-sm"
                               data-id="{{$pressrel->id}}" id="{{$pressrel->id}}" data-toggle="tooltip">Delete</a>

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
            {{--Draft DataTable--}}
            <table id="example1" name="draftTable"  class="ui celled table draftTable d-none" style="width:100%">
                <thead>
                <tr>
                    <th>Title</th>
                    <th>Schedule Date Time</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($pressReleasesDraft as $pressreldraft)
                    <tr>
                        <td>{{$pressreldraft->title}}</td>
                        <td><span class="badge badge-pill badge-primary">{{$pressrel->schedule_press_release_date_time}}</span></td>
                        @if ($pressreldraft->status == '0')
                            <td><span class="badge badge-pill badge-info">Draft</span></td>
                        @elseif ($pressreldraft->status == '1')
                            <td><span class="badge badge-pill badge-warning">Pending</span></td>
                        @elseif ($pressreldraft->status == '2')
                            <td><span class="badge badge-pill badge-success">Active</span></td>
                        @endif
                        <td>
                            <a href="{{url('/admin/edit-press-release',$pressreldraft->id)}}" class="btn btn-primary btn-sm" id="{{$pressreldraft->id}}" data-toggle="tooltip">Edit</a>
                            <a href="{{url('/admin/delete-press-release',$pressreldraft->id)}}" class="btn btn- delete_btndanger btn-sm" data-id="{{$pressreldraft->id}}" id="{{$pressreldraft->id}}" data-toggle="tooltip">Delete</a>
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
            {{--            <table id="example2" name="pendingTable" class="ui celled table pendingTable d-none" style="width:100%">--}}
            {{--                <thead>--}}
            {{--                <tr>--}}
            {{--                    <th>Title</th>--}}
            {{--                    <th>Schedule Date Time</th>--}}
            {{--                    <th>Status</th>--}}
            {{--                    <th>Action</th>--}}
            {{--                </tr>--}}
            {{--                </thead>--}}
            {{--                <tbody>--}}
            {{--                @foreach($pressReleasesPending as $pressrelpending)--}}
            {{--                    <tr>--}}
            {{--                        <td>{{$pressrelpending->title}}</td>--}}
            {{--                        --}}{{--                    <td>{{$pressrel->description}}</td>--}}
            {{--                        <td><span class="badge badge-pill badge-primary">{{$pressrel->schedule_press_release_date_time}}</span></td>--}}
            {{--                        @if ($pressrelpending->status == '0')--}}
            {{--                            <td><span class="badge badge-pill badge-info">Draft</span></td>--}}
            {{--                        @elseif ($pressrelpending->status == '1')--}}
            {{--                            <td><span class="badge badge-pill badge-warning">Pending</span></td>--}}
            {{--                        @elseif ($pressrelpending->status == '2')--}}
            {{--                            <td><span class="badge badge-pill badge-success">Active</span></td>--}}
            {{--                        @endif--}}
            {{--                        <td>--}}
            {{--                            <a href="{{url('/admin/edit-press-release',$pressrelpending->id)}}" class="btn btn-primary btn-sm" id="{{$pressrelpending->id}}" data-toggle="tooltip">Edit</a>--}}
            {{--                            <a href="{{url('/admin/delete-press-release',$pressrelpending->id)}}" class=" delete_btnbtn btn-danger btndata-id id="{{$pressrelpending->id= -sm" id="{{$pressrelpending->id}}" data-toggle="tooltip">Delete</a>--}}
            {{--                        </td>--}}
            {{--                    </tr>--}}
            {{--                @endforeach--}}
            {{--                </tbody>--}}
            {{--                <tfoot>--}}
            {{--                <tr>--}}
            {{--                    <th>Title</th>--}}
            {{--                    --}}{{--                    <th>Description</th>--}}
            {{--                    <th>Schedule Date Time</th>--}}
            {{--                    <th>Status</th>--}}
            {{--                    <th>Action</th>--}}
            {{--                </tr>--}}
            {{--                </tfoot>--}}
            {{--            </table>--}}
            {{--Posted DataTable--}}
            <table id="example3" name="postedTable" class="ui celled table postedTable d-none" style="width:100%">
                <thead>
                <tr>
                    <th>Title</th>
                    {{--                    <th>Description</th>--}}
                    <th>Schedule Date Time</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($pressReleasesPosted as $pressrelposted)
                    <tr>
                        <td>{{$pressrelposted->title}}</td>
                        {{--                    <td>{{$pressrel->description}}</td>--}}
                        <td><span class="badge badge-pill badge-primary">{{$pressrel->schedule_press_release_date_time}}</span></td>
                        @if ($pressrelposted->status == '0')
                            <td><span class="badge badge-pill badge-info">Draft</span></td>
                        @elseif ($pressrelposted->status == '1')
                            <td><span class="badge badge-pill badge-warning">Pending</span></td>
                        @elseif ($pressrelposted->status == '2')
                            <td><span class="badge badge-pill badge-success">Active</span></td>
                        @endif
                        <td>
                            @if (!($pressrelposted->status == '2'))
                            <a href="{{url('/admin/edit-press-release',$pressrelposted->id)}}" class="btn btn-primary btn-sm" id="{{$pressrelposted->id}}" data-toggle="tooltip">Edit</a>
                            @endif
                                <a href="{{url('/admin/delete-press-release',$pressrelposted->id)}}" class="btn btn-danger delete_btn btn-sm delete" data-id="{{$pressrelposted->id}}" id="{{$pressrelposted->id}}" data-toggle="tooltip">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>Title</th>
                    {{--                    <th>Description</th>--}}
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
        $(document).ready(function() {
            $('#example').DataTable();
            // Hide div by setting display to none
            $("#allTab").click(function(){
                $(".allTable").removeClass('d-none');
                $(".postedTable").addClass('d-none');
                $(".draftTable").addClass('d-none');
                $(".pendingTable").addClass('d-none');
                $('#example1').DataTable().destroy();
                $('#example').DataTable();
                $('#example2').DataTable().destroy();
                $('#example3').DataTable().destroy();
            });

            // Show div by removing inline display none style rule
            $("#draftTab").click(function(){
                $(".postedTable").addClass('d-none');
                $(".allTable").addClass('d-none');
                $(".draftTable").removeClass('d-none');
                $(".pendingTable").addClass('d-none');
                $('#example').DataTable().destroy();
                $('#example1').DataTable();
                $('#example2').DataTable().destroy();
                $('#example3').DataTable().destroy();

            });

            // Toggle div display
            $("#pendingTab").click(function(){
                $(".postedTable").addClass('d-none');
                $(".allTable").addClass('d-none');
                $(".draftTable").addClass('d-none');
                $(".pendingTable").removeClass('d-none');
                $('#example').DataTable().destroy();
                $('#example1').DataTable().destroy();
                $('#example2').DataTable();
                $('#example3').DataTable().destroy();

            });

            $("#postedTab").click(function(){
                $(".postedTable").removeClass('d-none');
                $(".allTable").addClass('d-none');
                $(".draftTable").addClass('d-none');
                $(".pendingTable").addClass('d-none');
                $('#example').DataTable().destroy();
                $('#example1').DataTable().destroy();
                $('#example2').DataTable().destroy();
                $('#example3').DataTable();

            });



            /*            $('.delete').on('click', function (event) {
                            event.preventDefault();
                            const url = $(this).attr('href');
                            swal({
                                title: 'Are you sure?',
                                text: 'This record and it`s details will be permanantly deleted!',
                                icon: 'warning',
                                buttons: ["Cancel", "Yes!"],
                            }).then(function(value) {
                                if (value) {
                                    window.location.href = url;
                                }
                            });
                        });*/

            $('.delete_btn').on('click', function(e){
                e.preventDefault(); //cancel default action
                var id = $(this).data('id');
                //Recuperate href value
                var href = $(this).attr('href');
                var message = $(this).data('confirm');
                //pop up
                swal({
                    title: "Are you sure you want to remove press release?",
                    text: message,
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                    .then((willDelete) => {
                        if (willDelete) {
                            $.ajax({
                                type: 'DELETE',
                                url: '{{url("/admin/delete-press-release")}}/' + id,
                                dataType: 'JSON',
                                data: {
                                    "id": id,
                                    "_token": "{{ csrf_token() }}",
                                },
                                success: function (data) {
                                    swal("Press Release has been deleted!", {icon: "success",});
                                    // window.location.href = href;
                                },
                                error: function (data) {
                                    swal("Press Release has been deleted!", {icon: "success",});
                                    location.reload();
                                    // Optionally alert the user of an error here...
                                },
                            });
                        }
                        else {
                            swal("Press Release is safe!");
                        }
                    });
            });
        });
    </script>
@endsection
