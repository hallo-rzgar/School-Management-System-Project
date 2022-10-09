<!-- Main navbar -->
<div class="navbar navbar-expand-lg navbar-dark navbar-static">
    <div class="d-flex flex-1 d-lg-none">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
            <i class="icon-paragraph-justify3"></i>
        </button>
        <button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
            <i class="icon-transmission"></i>
        </button>
    </div>

    <div class="navbar-brand text-center text-lg-left">
        <a href="#" class="d-inline-block">
            <h5>School</h5>
{{--            <img src="{{asset('global_assets/images/logo_light.png')}}" class="d-none d-sm-block" alt="">--}}
{{--            <img src="{{asset('global_assets/images/logo_icon_light.png')}}" class="d-sm-none" alt="">--}}
        </a>
    </div>

    <div class="collapse navbar-collapse order-2 order-lg-1" id="navbar-mobile">

        <span class="badge badge-success my-3 my-lg-0 ml-lg-3">Online</span>

        <ul class="navbar-nav ml-lg-auto">
            <li class="nav-item dropdown">

                <div class="dropdown-menu dropdown-menu-right dropdown-content wmin-lg-300">
                    <div class="dropdown-content-header">
                        <span class="font-weight-semibold">Users online</span>
                        <a href="#" class="text-body"><i class="icon-search4 font-size-base"></i></a>
                    </div>

                    <div class="dropdown-content-body dropdown-scrollable">
                        <ul class="media-list">
                            <li class="media">
                                <div class="mr-3">
                                    <img src="{{asset('global_assets/images/placeholders/placeholder.jpg')}}" width="36"
                                         height="36" class="rounded-circle" alt="">
                                </div>
                                <div class="media-body">
                                    <a href="#" class="media-title font-weight-semibold">Jordana Ansley</a>
                                    <span class="d-block text-muted font-size-sm">Lead web developer</span>
                                </div>
                                <div class="ml-3 align-self-center"><span
                                        class="badge badge-mark border-success"></span></div>
                            </li>

                            <li class="media">
                                <div class="mr-3">
                                    <img src="{{asset('global_assets/images/placeholders/placeholder.jpg')}}" width="36"
                                         height="36" class="rounded-circle" alt="">
                                </div>
                                <div class="media-body">
                                    <a href="#" class="media-title font-weight-semibold">Will Brason</a>
                                    <span class="d-block text-muted font-size-sm">Marketing manager</span>
                                </div>
                                <div class="ml-3 align-self-center"><span class="badge badge-mark border-danger"></span>
                                </div>
                            </li>

                            <li class="media">
                                <div class="mr-3">
                                    <img src="{{asset('global_assets/images/placeholders/placeholder.jpg')}}" width="36"
                                         height="36" class="rounded-circle" alt="">
                                </div>
                                <div class="media-body">
                                    <a href="#" class="media-title font-weight-semibold">Hanna Walden</a>
                                    <span class="d-block text-muted font-size-sm">Project manager</span>
                                </div>
                                <div class="ml-3 align-self-center"><span
                                        class="badge badge-mark border-success"></span></div>
                            </li>

                            <li class="media">
                                <div class="mr-3">
                                    <img src="{{asset('global_assets/images/placeholders/placeholder.jpg')}}" width="36"
                                         height="36" class="rounded-circle" alt="">
                                </div>
                                <div class="media-body">
                                    <a href="#" class="media-title font-weight-semibold">Dori Laperriere</a>
                                    <span class="d-block text-muted font-size-sm">Business developer</span>
                                </div>
                                <div class="ml-3 align-self-center"><span
                                        class="badge badge-mark border-warning"></span></div>
                            </li>

                            <li class="media">
                                <div class="mr-3">
                                    <img src="{{asset('global_assets/images/placeholders/placeholder.jpg')}}" width="36"
                                         height="36" class="rounded-circle" alt="">
                                </div>
                                <div class="media-body">
                                    <a href="#" class="media-title font-weight-semibold">Vanessa Aurelius</a>
                                    <span class="d-block text-muted font-size-sm">UX expert</span>
                                </div>
                                <div class="ml-3 align-self-center"><span
                                        class="badge badge-mark border-secondary"></span></div>
                            </li>
                        </ul>
                    </div>

                    <div class="dropdown-content-footer bg-light">
                        <a href="#" class="text-body mr-auto">All users</a>
                        <a href="#" class="text-body"><i class="icon-gear"></i></a>
                    </div>
                </div>
            </li>
        </ul>
    </div>

    <ul class="navbar-nav flex-row order-1 order-lg-2 flex-1 flex-lg-0 justify-content-end align-items-center">

        <li class="nav-item nav-item-dropdown-lg dropdown dropdown-user h-100">
            <a href="#"
               class="navbar-nav-link navbar-nav-link-toggler dropdown-toggle d-inline-flex align-items-center h-100"
               data-toggle="dropdown">
                <img src="{{asset('global_assets/images/placeholders/placeholder.jpg')}}" class="rounded-pill mr-lg-2"
                     height="34" alt="">
                <span class="d-none d-lg-inline-block">{{ Auth::user()->currentTeam }}</span>
            </a>

            <div class="dropdown-menu dropdown-menu-right">
                <a href="#" class="dropdown-item"><i class="icon-user-plus"></i> My profile</a>
                <a href="#" class="dropdown-item"><i class="icon-coins"></i> My balance</a>
                <a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Messages <span
                        class="badge badge-primary badge-pill ml-auto">58</span></a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item"><i class="icon-cog5"></i> Account settings</a>
                <a href="{{route('admin.logout')}}" class="dropdown-item"><i class="icon-switch2"></i> Logout</a>
            </div>
        </li>
    </ul>
</div>
<!-- /main navbar -->
