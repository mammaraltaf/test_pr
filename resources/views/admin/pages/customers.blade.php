@extends('layouts.admin.app')
@section('pageTitle') Customers @endsection
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
            <table id="customerTable" name="allTable" class="ui celled table allTable" style="width:100%">
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
                        <td>{{$customer->timezone}}</td>
                        <td>
                            <a href="{{url('/admin/customer-remove',$customer->id)}}" data-id="{{$customer->id}}" class="btn btn-danger remove_customer btn-sm" id="{{$customer->id}}" data-toggle="tooltip">Remove</a>
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
            $('#customerTable').DataTable();
                $('.remove_customer').on('click', function(e){
                    e.preventDefault(); //cancel default action
                    var id = $(this).data('id');
                    //Recuperate href value
                    var href = $(this).attr('href');
                    var message = $(this).data('confirm');;
                    //pop up
                    swal({
                        title: "Are you sure you want to remove this customer?",
                        text: message,
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                        .then((willDelete) => {
                            if (willDelete) {
                                $.ajax({
                                    type: 'DELETE',
                                    url: '{{url("/admin/customers")}}/' + id,
                                    dataType: 'JSON',
                                    data: {
                                        "id": id,
                                        "_token": "{{ csrf_token() }}",
                                    },
                                    success: function (data) {
                                        swal("Customer has been deleted!", {icon: "success",});
                                        // window.location.href = href;
                                    },
                                    error: function (data) {
                                        swal("Customer has been deleted!", {icon: "success",});
                                        location.reload();
                                        {{--window.location.href = {{route('admin.customers')}};--}}

                                        // Optionally alert the user of an error here...
                                    },
                                });
                            }
                             else {
                                swal("Customer is safe!");
                            }
                        });
                });
            });
    </script>
@endsection
