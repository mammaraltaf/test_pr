<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Press Release</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <link href={{asset("assets/plugins/global/plugins.bundle.css")}} rel="stylesheet" type="text/css" />
    <link href={{asset("assets/css/style.bundle.css")}} rel="stylesheet" type="text/css" />
    @yield('style')
</head>
<body id="kt_body" class="bg-body">
<div class="d-flex flex-column flex-root">
    <div class="d-flex flex-column flex-lg-row flex-column-fluid">
<!--begin::Aside-->
<div class="d-flex flex-column flex-lg-row-auto w-xl-600px positon-xl-relative" style="background-color: #F2C98A">
    <!--begin::Wrapper-->
    <div class="d-flex flex-column position-xl-fixed top-0 bottom-0 w-xl-600px scroll-y">
        <!--begin::Content-->
        <div class="d-flex flex-row-fluid flex-column text-center p-10 pt-lg-20">
            <!--begin::Logo-->
{{--            <a href="../../demo10/dist/index.html" class="py-9 mb-5">--}}
{{--                <img alt="Logo" src={{asset("assets/media/logos/logo-2.svg")}} class="h-60px" />--}}
{{--            </a>--}}
            <!--end::Logo-->
            <!--begin::Title-->
            <h1 class="fw-bolder fs-2qx pb-5 pb-md-10" style="color: #986923;">Welcome to Press Release</h1>
            <!--end::Title-->
            <!--begin::Description-->
            <p class="fw-bold fs-2" style="color: #986923;">Setup Your Account and Start your journey
                <br /> with Press Release</p>
            <!--end::Description-->
        </div>
        <!--end::Content-->
        <!--begin::Illustration-->
        <div class="d-flex flex-row-auto bgi-no-repeat bgi-position-x-center bgi-size-contain bgi-position-y-bottom min-h-100px min-h-lg-350px" style="background-image: url({{asset('assets/media/illustrations/sigma-1/13.png')}})"></div>
        <!--end::Illustration-->
    </div>
    <!--end::Wrapper-->
</div>
<!--end::Aside-->

@yield('content')
@yield('script')
</body>
</html>
