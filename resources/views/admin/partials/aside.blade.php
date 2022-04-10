<div id="kt_aside" class="aside" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle">
    <!--begin::Aside Toolbarl-->
    <div class="aside-toolbar flex-column-auto" id="kt_aside_toolbar">
        <!--begin::Aside user-->
        <!--begin::User-->
        <div class="aside-user d-flex align-items-sm-center justify-content-center py-5">
            <!--begin::Symbol-->
            <div class="symbol symbol-50px">
                <img src="{{asset('admin/media/avatars/blank.png')}}" alt="" />
            </div>
            <!--end::Symbol-->
            <!--begin::Wrapper-->
            <div class="aside-user-info flex-row-fluid flex-wrap ms-5">
                <!--begin::Section-->
                <div class="d-flex">
                    <!--begin::Info-->
                    <div class="flex-grow-1 me-2">
                        <!--begin::Username-->
                        <a href="#" class="text-white text-hover-primary fs-6 fw-bold">{{ Auth::user()->name }}</a>
                        <!--end::Username-->
                    </div>
                    <!--end::Info-->
                    <!--begin::User menu-->

                    <!--end::User menu-->
                </div>
                <!--end::Section-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::User-->
        <!--end::Aside user-->
    </div>
    <!--end::Aside Toolbarl-->
    <!--begin::Aside menu-->
    <div class="aside-menu flex-column-fluid">
        <!--begin::Aside Menu-->
        <div class="hover-scroll-overlay-y px-2 my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="{default: '#kt_aside_toolbar, #kt_aside_footer', lg: '#kt_header, #kt_aside_toolbar, #kt_aside_footer'}" data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="5px">
            <!--begin::Menu-->
            <div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500" id="#kt_aside_menu" data-kt-menu="true">
                <div class="menu-item">

                    @if((auth()->user()->is_admin))
                        <div class="menu-item">
                            <a class="menu-link {{ Route::currentRouteNamed('admin.home') ? 'active' : '' }}" href="{{route('admin.home')}}" title="Home">
                                <span class="menu-title">Home</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link  {{ Route::currentRouteNamed('admin.manageContent') ? 'active' : '' }}" href="{{route('admin.manageContent')}}">
                                <span class="menu-title">Manage Content</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link  {{ Route::currentRouteNamed('admin.newPressRelease') ? 'active' : '' }}" href="{{route('admin.newPressRelease')}}" >
                                <span class="menu-title">New Press Release</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link  {{ Route::currentRouteNamed('admin.profileSetting') ? 'active' : '' }}" href="{{route('admin.profileSetting')}}" >
                                <span class="menu-title">Profile Settings</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link  {{ Route::currentRouteNamed('admin.payments') ? 'active' : '' }}" href="{{route('admin.payments')}}" >
                                <span class="menu-title">Payments</span>
                            </a>
                        </div>

                        <div class="menu-item">
                            <a class="menu-link  {{ Route::currentRouteNamed('admin.invoices') ? 'active' : '' }}" href="{{route('admin.invoices')}}" >
                                <span class="menu-title">Invoice</span>
                            </a>
                        </div>

                        <div class="menu-item">
                            <a class="menu-link  {{ Route::currentRouteNamed('admin.customers') ? 'active' : '' }}" href="{{route('admin.customers')}}">
                                <span class="menu-title">Customers</span>
                            </a>
                        </div>

                        <div class="menu-item">
                            <a class="menu-link  {{ Route::currentRouteNamed('admin.rssConfiguration') ? 'active' : '' }}" href="{{route('admin.rssConfiguration')}}">
                                <span class="menu-title">RSS Configuration</span>
                            </a>
                        </div>
                    @endif

                    @if(!(auth()->user()->is_admin))
                            <div class="menu-item">
                                <a class="menu-link {{ Route::currentRouteNamed('user.home') ? 'active' : '' }}" href="{{route('user.home')}}">
                                    <span class="menu-title">Home</span>
                                </a>

                            </div>

                            <div class="menu-item">
                                <a class="menu-link {{ Route::currentRouteNamed('user.newPressRelease') ? 'active' : '' }}" href="{{route('user.newPressRelease')}}" >
                                    <span class="menu-title">New Press Release</span>
                                </a>
                            </div>

                            <div class="menu-item">
                                <a class="menu-link {{ Route::currentRouteNamed('user.manageContent') ? 'active' : '' }}" href="{{route('user.manageContent')}}">
                                    <span class="menu-title">Manage Content</span>
                                </a>
                            </div>

                            <div class="menu-item">
                                <a class="menu-link {{ Route::currentRouteNamed('user.profileView') ? 'active' : '' }}" href="{{route('user.profileView')}}">
                                    <span class="menu-title">Profile Settings</span>
                                </a>
                            </div>
                        @endif


            </div>
            <!--end::Menu-->
        </div>
        <!--end::Aside Menu-->
    </div>
    <!--end::Aside menu-->

</div>

</div>
