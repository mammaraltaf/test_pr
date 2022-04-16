@extends('layouts.admin.app')
@section('pageTitle') Home @endsection
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
            <table id="example" name="allTable" class="ui celled table" style="width:100%">
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
                @foreach($pressReleases as $pressrel)
                <tr>
                    <td>{{$pressrel->title}}</td>
{{--                    <td>{{$pressrel->description}}</td>--}}
                    <td><span class="badge badge-pill badge-primary">{{$pressrel->schedule_press_release_date_time}}</span></td>
                    @if ($pressrel->status == '0')
                        <td><span class="badge badge-pill badge-info">Draft</span></td>
                    @elseif ($pressrel->status == '1')
                        <td><span class="badge badge-pill badge-warning">Pending</span></td>
                    @elseif ($pressrel->status == '0')
                        <td><span class="badge badge-pill badge-success">Active</span></td>
                        @endif
                    <td>
                        <a href="{{url('/edit-press-release',$pressrel->id)}}" class="btn btn-primary btn-sm" id="{{$pressrel->id}}" data-toggle="tooltip">Edit</a>
                        <a href="{{url('/delete-press-release',$pressrel->id)}}" class="btn btn-danger btn-sm" id="{{$pressrel->id}}" data-toggle="tooltip">Delete</a>
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
            {{--Draft DataTable--}}
            <table id="example" name="draftTable"  class="ui celled table d-none" style="width:100%">
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
                @foreach($pressReleases as $pressrel)
                    <tr>
                        <td>{{$pressrel->title}}</td>
                        {{--                    <td>{{$pressrel->description}}</td>--}}
                        <td><span class="badge badge-pill badge-primary">{{$pressrel->schedule_press_release_date_time}}</span></td>
                        @if ($pressrel->status == '0')
                            <td><span class="badge badge-pill badge-info">Draft</span></td>
                        @elseif ($pressrel->status == '1')
                            <td><span class="badge badge-pill badge-warning">Pending</span></td>
                        @elseif ($pressrel->status == '0')
                            <td><span class="badge badge-pill badge-success">Active</span></td>
                        @endif
                        <td>
                            <a href="{{url('/edit-press-release',$pressrel->id)}}" class="btn btn-primary btn-sm" id="{{$pressrel->id}}" data-toggle="tooltip">Edit</a>
                            <a href="{{url('/delete-press-release',$pressrel->id)}}" class="btn btn-danger btn-sm" id="{{$pressrel->id}}" data-toggle="tooltip">Delete</a>
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
            {{--Pending DataTable--}}
            <table id="example" name="pendingTable" class="ui celled table d-none" style="width:100%">
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
                @foreach($pressReleases as $pressrel)
                    <tr>
                        <td>{{$pressrel->title}}</td>
                        {{--                    <td>{{$pressrel->description}}</td>--}}
                        <td><span class="badge badge-pill badge-primary">{{$pressrel->schedule_press_release_date_time}}</span></td>
                        @if ($pressrel->status == '0')
                            <td><span class="badge badge-pill badge-info">Draft</span></td>
                        @elseif ($pressrel->status == '1')
                            <td><span class="badge badge-pill badge-warning">Pending</span></td>
                        @elseif ($pressrel->status == '0')
                            <td><span class="badge badge-pill badge-success">Active</span></td>
                        @endif
                        <td>
                            <a href="{{url('/edit-press-release',$pressrel->id)}}" class="btn btn-primary btn-sm" id="{{$pressrel->id}}" data-toggle="tooltip">Edit</a>
                            <a href="{{url('/delete-press-release',$pressrel->id)}}" class="btn btn-danger btn-sm" id="{{$pressrel->id}}" data-toggle="tooltip">Delete</a>
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
            {{--Posted DataTable--}}
            <table id="example" name="postedTable" class="ui celled table d-none" style="width:100%">
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
                @foreach($pressReleases as $pressrel)
                    <tr>
                        <td>{{$pressrel->title}}</td>
                        {{--                    <td>{{$pressrel->description}}</td>--}}
                        <td><span class="badge badge-pill badge-primary">{{$pressrel->schedule_press_release_date_time}}</span></td>
                        @if ($pressrel->status == '0')
                            <td><span class="badge badge-pill badge-info">Draft</span></td>
                        @elseif ($pressrel->status == '1')
                            <td><span class="badge badge-pill badge-warning">Pending</span></td>
                        @elseif ($pressrel->status == '2')
                            <td><span class="badge badge-pill badge-success">Active</span></td>
                        @endif
                        <td>
                            <a href="{{url('/edit-press-release',$pressrel->id)}}" class="btn btn-primary btn-sm" id="{{$pressrel->id}}" data-toggle="tooltip">Edit</a>
                            <a href="{{url('/delete-press-release',$pressrel->id)}}" class="btn btn-danger btn-sm" id="{{$pressrel->id}}" data-toggle="tooltip">Delete</a>
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
        } );

    </script>
@endsection
