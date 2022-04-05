<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <link href={{asset("assets/plugins/global/plugins.bundle.css")}} rel="stylesheet" type="text/css" />
    <link href={{asset("assets/css/style.bundle.css")}} rel="stylesheet" type="text/css" />
    <link href={{asset('assets/plugins/custom/datatables/datatables.bundle.css')}} rel="stylesheet" type="text/css" />
    <link href={{asset('assets/plugins/custom/vis-timeline/vis-timeline.bundle.css')}} rel="stylesheet" type="text/css" />
    <link href={{asset('assets/plugins/global/plugins.bundle.css')}} rel="stylesheet" type="text/css" />

{{--    <link href={{asset('assets/css/style.bundle.css')}}"" rel="stylesheet" type="text/css" />--}}
    @yield('style')
</head>
<!--begin::Body-->
<body id="kt_body" class="header-tablet-and-mobile-fixed aside-enabled">
<!--begin::Main-->
<!--begin::Root-->
<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="page d-flex flex-row flex-column-fluid">
        <!--begin::Aside-->
@include('dashboard.partials.aside')
@include('dashboard.partials.header')
    </div>
</div>
@yield('content')

@yield('script')
<script src={{asset("assets/plugins/custom/datatables/datatables.bundle.js")}}></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

