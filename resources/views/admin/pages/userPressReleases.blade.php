@extends('layouts.admin.app')
@section('pageTitle') User Press Releases @endsection
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
                    {{--                    <th>Description</th>--}}
                    <th>Schedule Date Time</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
{{--                @foreach($pressReleases as $pressrel)--}}
                    <tr>
{{--                        <td>{{$pressrel->title}}</td>--}}
                        {{--                    <td>{{$pressrel->description}}</td>--}}
{{--                        <td><span class="badge badge-pill badge-primary">{{$pressrel->schedule_press_release_date_time}}</span></td>--}}
{{--                        @if ($pressrel->status == '0')--}}
{{--                            <td><span class="badge badge-pill badge-info">Draft</span></td>--}}
{{--                        @elseif ($pressrel->status == '1')--}}
{{--                            <td><span class="badge badge-pill badge-warning">Pending</span></td>--}}
{{--                        @elseif ($pressrel->status == '0')--}}
{{--                            <td><span class="badge badge-pill badge-success">Active</span></td>--}}
{{--                        @endif--}}

                        <td>
                            a
{{--                            <a href="{{url('/edit-press-release',$pressrel->id)}}" class="btn btn-primary btn-sm" id="{{$pressrel->id}}" data-toggle="tooltip">Edit</a>--}}
{{--                            <a href="{{url('/delete-press-release',$pressrel->id)}}" class="btn btn-danger btn-sm" id="{{$pressrel->id}}" data-toggle="tooltip">Delete</a>--}}

                        </td>
                    </tr>
{{--                @endforeach--}}
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
            {{--Draft DataTable--}}
            <table id="example1" name="draftTable"  class="ui celled table draftTable d-none" style="width:100%">
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
{{--                @foreach($pressReleasesDraft as $pressreldraft)--}}
                    <tr>
{{--                        <td>{{$pressreldraft->title}}</td>--}}
                        {{--                    <td>{{$pressrel->description}}</td>--}}
{{--                        <td><span class="badge badge-pill badge-primary">{{$pressrel->schedule_press_release_date_time}}</span></td>--}}
{{--                        @if ($pressreldraft->status == '0')--}}
                            <td><span class="badge badge-pill badge-info">Draft</span></td>
{{--                        @elseif ($pressreldraft->status == '1')--}}
                            <td><span class="badge badge-pill badge-warning">Pending</span></td>
{{--                        @elseif ($pressreldraft->status == '0')--}}
                            <td><span class="badge badge-pill badge-success">Active</span></td>
{{--                        @endif--}}
                        <td>
{{--                            <a href="{{url('/edit-press-release',$pressreldraft->id)}}" class="btn btn-primary btn-sm" id="{{$pressreldraft->id}}" data-toggle="tooltip">Edit</a>--}}
{{--                            <a href="{{url('/delete-press-release',$pressreldraft->id)}}" class="btn btn-danger btn-sm" id="{{$pressreldraft->id}}" data-toggle="tooltip">Delete</a>--}}
                        </td>
                    </tr>
{{--                @endforeach--}}
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

        });
    </script>
@endsection
