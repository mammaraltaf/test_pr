@extends('layouts.admin.app')
@section('pageTitle') Home @endsection
@section('content')
    <!--begin::Header-->
    <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bolder fs-3 mb-1">Manage Content</span>
        </h3>

    </div>
    <!--end::Header-->
    <!--begin::Body-->
    <div class="card-body py-3">
        <div class="tab-content">
            <table id="example"  class="ui celled table" style="width:100%">
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
                    <td><span class="badge badge-pill badge-warning">{{$pressrel->schedule_press_release_date_time}}</span></td>
                    @if ($pressrel->status == '0')
                        <td><span class="badge badge-pill badge-info">Draft</span></td>
                    @elseif ($pressrel->status == '1')
                        <td><span class="badge badge-pill badge-warning">Pending</span></td>
                    @elseif ($pressrel->status == '0')
                        <td><span class="badge badge-pill badge-success">Active</span></td>
                        @endif
                    <td>
                        <button type="button" class="btn btn-info btn-sm" id="{{$pressrel->id}}" data-toggle="tooltip">Edit</button>
                        <button type="button" class="btn btn-danger btn-sm" id="{{$pressrel->id}}" data-toggle="tooltip">Delete</button>
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
