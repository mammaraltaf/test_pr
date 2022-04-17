@extends('layouts.admin.app')
@section('pageTitle') Home @endsection
@section('content')
    <!--begin::Header-->

    <div class="card-header pt-5">
        <h3 class="card-title">
            <span class="card-label fw-bolder fs-3 mb-1">Customers</span>
        </h3>

    </div>
    <div class="card-toolbar">
    </div>
    <!--end::Header-->
    <!--begin::Body-->
    <div class="card-body py-3">
        <div class="tab-content">
            {{--Customers Datatable--}}
            <table id="invoicesTable" name="allTable" class="ui celled table allTable" style="width:100%">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Country</th>
                    <th>TimeZone</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($customers as $customer)
                    <tr>
                        <td>{{$customer->name}}</td>
                        <td>{{$customer->email}}</td>
                        <td><span class="badge badge-pill badge-primary">{{$customer->country}}</span></td>
                        {{--<td>{{$customer->country}}</td>--}}
                        <td>{{$customer->timezone}}</td>
                        <td>
                            <a href="{{url('/',$customer->id)}}" class="btn btn-danger btn-sm" id="{{$customer->id}}" data-toggle="tooltip">Remove</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Country</th>
                    <th>TimeZone</th>
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
            $('#invoicesTable').DataTable();
        });
    </script>
@endsection
