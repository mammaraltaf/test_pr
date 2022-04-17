@extends('layouts.admin.app')
@section('pageTitle') Home @endsection
@section('content')
    <!--begin::Header-->
    <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bolder fs-3 mb-1">Dashboard</span>
        </h3>

    </div>
    <!--end::Header-->
    <!--begin::Body-->
    <div class="card-body py-3">
        <div class="tab-content">
            <!--begin::Tap pane-->
            <div class="tab-pane fade show active" id="kt_table_widget_5_tab_1">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                                <div class="card overflow-hidden">
                                    <div class="card-body" style="background-color: lavender;">
                                        <div class="d-flex">
                                            <div class="mt-2">
                                                <h1 class="">All Posts</h1>
                                                <h2 class="mb-0 number-font" style="color:red">44,278</h2>
                                            </div>
                                            <div class="ms-auto">
                                                <div class="chart-wrapper mt-1">
                                                    <canvas id="saleschart"
                                                            class="h-8 w-9 chart-dropshadow"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        {{--                                        <span class="text-muted fs-12"><span class="text-secondary"><i
                                                                                            class="fe fe-arrow-up-circle  text-secondary"></i> 5%</span>
                                                                                            Last week</span>--}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                                <div class="card overflow-hidden">
                                    <div class="card-body" style="background-color: lavender;">
                                        <div class="d-flex">
                                            <div class="mt-2">
                                                <h1 class="">Drafts</h1>
                                                <h2 class="mb-0 number-font" style="color:red">67,987</h2>
                                            </div>
                                            <div class="ms-auto">
                                                <div class="chart-wrapper mt-1">
                                                    <canvas id="leadschart"
                                                            class="h-8 w-9 chart-dropshadow"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        {{--                                        <span class="text-muted fs-12"><span class="text-pink"><i
                                                                                            class="fe fe-arrow-down-circle text-pink"></i> 0.75%</span>
                                                                                            Last 6 days</span>--}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                                <div class="card overflow-hidden">
                                    <div class="card-body" style="background-color: lavender;">
                                        <div class="d-flex">
                                            <div class="mt-2">
                                                <h1 class="">Pending</h1>
                                                <h2 class="mb-0 number-font" style="color:red">$76,965</h2>
                                            </div>
                                            <div class="ms-auto">
                                                <div class="chart-wrapper mt-1">
                                                    <canvas id="profitchart"
                                                            class="h-8 w-9 chart-dropshadow"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        {{--                                        <span class="text-muted fs-12"><span class="text-green"><i
                                                                                            class="fe fe-arrow-up-circle text-green"></i> 0.9%</span>
                                                                                            Last 9 days</span>--}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                                <div class="card overflow-hidden">
                                    <div class="card-body" style="background-color: lavender;"
                                    >
                                        <div class="d-flex">
                                            <div class="mt-2">
                                                <h1 class="">Posted</h1>
                                                <h2 class="mb-0 number-font" style="color:red">$59,765</h2>
                                            </div>
                                            <div class="ms-auto">
                                                <div class="chart-wrapper mt-1">
                                                    <canvas id="costchart"
                                                            class="h-8 w-9 chart-dropshadow"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        {{--                                        <span class="text-muted fs-12"><span class="text-warning"><i
                                                                                            class="fe fe-arrow-up-circle text-warning"></i> 0.6%</span>
                                                                                            Last year</span>--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ROW-1 END -->
            </div>
            <!--end::Tap pane-->

        </div>
    </div>
    <!--end::Body-->
@endsection

