<nav
    class="header-navbar navbar-expand-lg navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-dark navbar-shadow">
    <div class="navbar-wrapper" style="background: black">
        {{--                style="background: #0a001f"--}}
        <div class="navbar-header" style="background: black">
            {{--                style="background: #0a001f"--}}
            <ul class="nav navbar-nav flex-row" >
                <li class="nav-item mobile-menu d-lg-none mr-auto" ><a
                        class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i
                            class="ft-menu font-large-1"></i></a></li>
                <li class="nav-item mr-auto" style="background: black;">
                    {{--                style="background: #0a001f"--}}
                    <a class="navbar-brand" href="{{env('APP_NAME')}}">
                        {{--                        <img class="brand-logo" alt="{{env('APP_NAME')}}" src="{{asset('app-assets/images/logo/logo.png')}}">--}}
                        <i class="text-warning" style="font-style: normal">C93</i><br/>
                        <h3 class="brand-text text-warning">Cut and Edge</h3>
                    </a></li>
                <li class="nav-item d-none d-lg-block nav-toggle"><a class="nav-link modern-nav-toggle pr-0"
                                                                     data-toggle="collapse"><i
                            class="toggle-icon ft-toggle-right font-medium-3 white"
                            data-ticon="ft-toggle-right"></i></a></li>
                <li class="nav-item d-lg-none"><a class="nav-link open-navbar-container" data-toggle="collapse"
                                                  data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a></li>
            </ul>
        </div>
        <div class="navbar-container content">
            <div class="collapse navbar-collapse" id="navbar-mobile">
                <ul class="nav navbar-nav mr-auto float-left">
                    <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand" href="#"><i
                                class="ficon ft-maximize"></i></a></li>
                    <li class="dropdown nav-item mega-dropdown d-none d-lg-block"><a class="dropdown-toggle nav-link"
                                                                                     href="#" data-toggle="dropdown">Admin
                            Tools</a>
                        <ul class="mega-dropdown-menu dropdown-menu row p-1">
                            <li class="col-md-4 bg-mega p-2">
                                <h3 class="text-white mb-1 font-weight-bold">Administrator Menu</h3>
                                <p class="text-white line-height-2">The administrator menu provides essential tools for
                                    managing users, monitoring transactions, configuring settings, and overseeing
                                    customer interactions within the portal</p>
                                <button class="btn btn-outline-white">Learn More</button>
                            </li>
                            <li class="col-md-5 px-2">
                                <h6 class="font-weight-bold font-medium-2 ml-1">System Management</h6>
                                <ul class="row mt-2">
                                    <li class="col-6 col-xl-4"><a class="text-center mb-2 mb-xl-3"
                                                                  href="{{route('users.list')}}"><i
                                                class="la la-users font-large-1 mr-0"></i>
                                            <p class="font-medium-2 mt-25 mb-0">Users</p>
                                        </a></li>
                                    <li class="col-6 col-xl-4"><a class="text-center mb-2 mb-xl-3"
                                                                  href="#"><i
                                                class="la la-money font-large-1 mr-0"></i>
                                            <p class="font-medium-2 mt-25 mb-0">Payment Modes</p>
                                        </a></li>
{{--                                    <li class="col-6 col-xl-4"><a class="text-center mb-2 mb-xl-3 mt-75 mt-xl-0"--}}
{{--                                                                  href="#"><i--}}
{{--                                                class="la la-building font-large-1 mr-0"></i>--}}
{{--                                            <p class="font-medium-2 mt-25 mb-0">Support Teams</p>--}}
{{--                                        </a></li>--}}
{{--                                    <li class="col-6 col-xl-4"><a class="text-center mb-2 mt-75 mt-xl-0"--}}
{{--                                                                  href="#"><i--}}
{{--                                                class="la la-money font-large-1 mr-0"></i>--}}
{{--                                            <p class="font-medium-2 mt-25 mb-50">Payment Modes</p>--}}
{{--                                        </a></li>--}}
                                    {{--                                    <li class="col-6 col-xl-4"><a class="text-center mb-2 mt-75 mt-xl-0"--}}
                                    {{--                                                                  href="../support-menu-template" ><i--}}
                                    {{--                                                class="la la-tag font-large-1 mr-0"></i>--}}
                                    {{--                                            <p class="font-medium-2 mt-25 mb-50">Support</p>--}}
                                    {{--                                        </a></li>--}}
                                    {{--                                    <li class="col-6 col-xl-4"><a class="text-center mb-2 mt-75 mt-xl-0"--}}
                                    {{--                                                                  href="../bank-menu-template" ><i--}}
                                    {{--                                                class="la la-bank font-large-1 mr-0"></i>--}}
                                    {{--                                            <p class="font-medium-2 mt-25 mb-50">Bank</p>--}}
                                    {{--                                        </a></li>--}}
                                </ul>
                            </li>
                            <li class="col-md-3" style="display: none">
                                <h6 class="font-weight-bold font-medium-2">Other Configurations</h6>
                                <ul class="row mt-1 mt-xl-2">
                                    <li class="col-12 col-xl-6 pl-0">
                                        <ul class="mega-component-list">
                                            <li class="mega-component-item"><a class="mb-1 mb-xl-2"
                                                                               href="#"
                                                >Payment Modes</a></li>
                                            <li class="mega-component-item"><a class="mb-1 mb-xl-2"
                                                                               href="#"
                                                >Support Ticket Statuses</a></li>
                                            <li class="mega-component-item"><a class="mb-1 mb-xl-2"
                                                                               href="#"
                                                >System Statuses</a></li>
                                                                                        <li class="mega-component-item"><a class="mb-1 mb-xl-2"
                                                                                                                           href="component-carousel.html"
                                                                                                                           >Carousel</a></li>
                                        </ul>
                                    </li>
                                    <li class="col-12 col-xl-6 pl-0">
                                        <ul class="mega-component-list">
                                            {{--                                            <li class="mega-component-item"><a class="mb-1 mb-xl-2"--}}
                                            {{--                                                                               href="{{route('statuses.list')}}"--}}
                                            {{--                                                                               >System Statuses</a></li>--}}
                                            {{--                                            <li class="mega-component-item"><a class="mb-1 mb-xl-2"--}}
                                            {{--                                                                               href="component-list-group.html"--}}
                                            {{--                                                                               >List Group</a></li>--}}
                                            {{--                                            <li class="mega-component-item"><a class="mb-1 mb-xl-2"--}}
                                            {{--                                                                               href="component-modals.html"--}}
                                            {{--                                                                               >Modals</a></li>--}}
                                            {{--                                            <li class="mega-component-item"><a class="mb-1 mb-xl-2"--}}
                                            {{--                                                                               href="component-pagination.html"--}}
                                            {{--                                                                               >Pagination</a></li>--}}
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item nav-search"><a class="nav-link nav-link-search" href="#"><i
                                class="ficon ft-search"></i></a>
                        <div class="search-input">
                            <input class="input" type="text" placeholder="Explore Modern..." tabindex="0"
                                   data-search="template-list">
                            <div class="search-input-close"><i class="ft-x"></i></div>
                            <ul class="search-list"></ul>
                        </div>
                    </li>
                </ul>
                <ul class="nav navbar-nav float-right">
                    <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link"
                                                                       id="dropdown-flag" href="#"
                                                                       data-toggle="dropdown" aria-haspopup="true"
                                                                       aria-expanded="false"><i
                                class="flag-icon flag-icon-zm"></i><span class="selected-language"></span></a>
                        <div class="dropdown-menu" aria-labelledby="dropdown-flag"><a class="dropdown-item" href="#"
                                                                                      data-language="en"><i
                                    class="flag-icon flag-icon-gb"></i> English</a><a class="dropdown-item" href="#"
                                                                                      data-language="fr"><i
                                    class="flag-icon flag-icon-zm"></i> Cibemba</a><a class="dropdown-item" href="#"
                                                                                      data-language="pt"><i
                                    class="flag-icon flag-icon-zm"></i> Chinyanja</a><a class="dropdown-item" href="#"
                                                                                        data-language="de"><i
                                    class="flag-icon flag-icon-zm"></i> Chitonga</a></div>
                    </li>
                    <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#"
                                                                           data-toggle="dropdown"><i
                                class="ficon ft-bell"></i><span
                                class="badge badge-pill badge-danger badge-up badge-glow">5</span></a>
                        <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                            <li class="dropdown-menu-header">
                                <h6 class="dropdown-header m-0"><span class="grey darken-2">Notifications</span></h6>
                                <span class="notification-tag badge badge-danger float-right m-0">5 New</span>
                            </li>
                            <li class="scrollable-container media-list w-100"><a href="javascript:void(0)">
                                    <div class="media">
                                        <div class="media-left align-self-center"><i
                                                class="ft-plus-square icon-bg-circle bg-cyan mr-0"></i></div>
                                        <div class="media-body">
                                            <h6 class="media-heading">You have new order!</h6>
                                            <p class="notification-text font-small-3 text-muted">Lorem ipsum dolor sit
                                                amet, consectetuer elit.</p><small>
                                                <time class="media-meta text-muted"
                                                      datetime="2015-06-11T18:29:20+08:00">30 minutes ago
                                                </time>
                                            </small>
                                        </div>
                                    </div>
                                </a><a href="javascript:void(0)">
                                    <div class="media">
                                        <div class="media-left align-self-center"><i
                                                class="ft-download-cloud icon-bg-circle bg-red bg-darken-1 mr-0"></i>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="media-heading red darken-1">99% Server load</h6>
                                            <p class="notification-text font-small-3 text-muted">Aliquam tincidunt
                                                mauris eu risus.</p><small>
                                                <time class="media-meta text-muted"
                                                      datetime="2015-06-11T18:29:20+08:00">Five hour ago
                                                </time>
                                            </small>
                                        </div>
                                    </div>
                                </a><a href="javascript:void(0)">
                                    <div class="media">
                                        <div class="media-left align-self-center"><i
                                                class="ft-alert-triangle icon-bg-circle bg-yellow bg-darken-3 mr-0"></i>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="media-heading yellow darken-3">Warning notifixation</h6>
                                            <p class="notification-text font-small-3 text-muted">Vestibulum auctor
                                                dapibus neque.</p><small>
                                                <time class="media-meta text-muted"
                                                      datetime="2015-06-11T18:29:20+08:00">Today
                                                </time>
                                            </small>
                                        </div>
                                    </div>
                                </a><a href="javascript:void(0)">
                                    <div class="media">
                                        <div class="media-left align-self-center"><i
                                                class="ft-check-circle icon-bg-circle bg-cyan mr-0"></i></div>
                                        <div class="media-body">
                                            <h6 class="media-heading">Complete the task</h6><small>
                                                <time class="media-meta text-muted"
                                                      datetime="2015-06-11T18:29:20+08:00">Last week
                                                </time>
                                            </small>
                                        </div>
                                    </div>
                                </a><a href="javascript:void(0)">
                                    <div class="media">
                                        <div class="media-left align-self-center"><i
                                                class="ft-file icon-bg-circle bg-teal mr-0"></i></div>
                                        <div class="media-body">
                                            <h6 class="media-heading">Generate monthly report</h6><small>
                                                <time class="media-meta text-muted"
                                                      datetime="2015-06-11T18:29:20+08:00">Last month
                                                </time>
                                            </small>
                                        </div>
                                    </div>
                                </a></li>
                            <li class="dropdown-menu-footer"><a class="dropdown-item text-muted text-center"
                                                                href="javascript:void(0)">Read all notifications</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#"
                                                                           data-toggle="dropdown"><i
                                class="ficon ft-mail"></i></a>
                        <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                            <li class="dropdown-menu-header">
                                <h6 class="dropdown-header m-0"><span class="grey darken-2">Messages</span></h6><span
                                    class="notification-tag badge badge-warning float-right m-0">4 New</span>
                            </li>
                            <li class="scrollable-container media-list w-100"><a href="javascript:void(0)">
                                    <div class="media">
                                        <div class="media-left"><span
                                                class="avatar avatar-sm avatar-online rounded-circle"><img
                                                    src="../../../app-assets/images/portrait/small/avatar-s-19.png"
                                                    alt="avatar"><i></i></span></div>
                                        <div class="media-body">
                                            <h6 class="media-heading">Margaret Govan</h6>
                                            <p class="notification-text font-small-3 text-muted">I like your portfolio,
                                                let's start.</p><small>
                                                <time class="media-meta text-muted"
                                                      datetime="2015-06-11T18:29:20+08:00">Today
                                                </time>
                                            </small>
                                        </div>
                                    </div>
                                </a><a href="javascript:void(0)">
                                    <div class="media">
                                        <div class="media-left"><span
                                                class="avatar avatar-sm avatar-busy rounded-circle"><img
                                                    src="../../../app-assets/images/portrait/small/avatar-s-2.png"
                                                    alt="avatar"><i></i></span></div>
                                        <div class="media-body">
                                            <h6 class="media-heading">Bret Lezama</h6>
                                            <p class="notification-text font-small-3 text-muted">I have seen your work,
                                                there is</p><small>
                                                <time class="media-meta text-muted"
                                                      datetime="2015-06-11T18:29:20+08:00">Tuesday
                                                </time>
                                            </small>
                                        </div>
                                    </div>
                                </a><a href="javascript:void(0)">
                                    <div class="media">
                                        <div class="media-left"><span
                                                class="avatar avatar-sm avatar-online rounded-circle"><img
                                                    src="../../../app-assets/images/portrait/small/avatar-s-3.png"
                                                    alt="avatar"><i></i></span></div>
                                        <div class="media-body">
                                            <h6 class="media-heading">Carie Berra</h6>
                                            <p class="notification-text font-small-3 text-muted">Can we have call in
                                                this week ?</p><small>
                                                <time class="media-meta text-muted"
                                                      datetime="2015-06-11T18:29:20+08:00">Friday
                                                </time>
                                            </small>
                                        </div>
                                    </div>
                                </a><a href="javascript:void(0)">
                                    <div class="media">
                                        <div class="media-left"><span
                                                class="avatar avatar-sm avatar-away rounded-circle"><img
                                                    src="../../../app-assets/images/portrait/small/avatar-s-6.png"
                                                    alt="avatar"><i></i></span></div>
                                        <div class="media-body">
                                            <h6 class="media-heading">Eric Alsobrook</h6>
                                            <p class="notification-text font-small-3 text-muted">We have project party
                                                this saturday.</p><small>
                                                <time class="media-meta text-muted"
                                                      datetime="2015-06-11T18:29:20+08:00">last month
                                                </time>
                                            </small>
                                        </div>
                                    </div>
                                </a></li>
                            <li class="dropdown-menu-footer"><a class="dropdown-item text-muted text-center"
                                                                href="javascript:void(0)">Read all messages</a></li>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link"
                                                                   href="#" data-toggle="dropdown"><span
                                class="mr-1 user-name text-bold-700">@if(\Illuminate\Support\Facades\Auth::check()){{\Illuminate\Support\Facades\Auth::user()->name ?? "-"}} @endif</span><span
                                class="avatar avatar-online"><img
                                    src="{{asset('app-assets/images/user_avatar.png')}}" alt="avatar"><i></i></span></a>
                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item"
                                                                          href="#"><i
                                    class="ft-user"></i> View Profile</a>
{{--                            <a class="dropdown-item" href="#"><i--}}
{{--                                    class="ft-clipboard"></i> Todo</a>--}}
{{--                            <a class="dropdown-item" href="#"><i--}}
{{--                                    class="ft-check-square"></i> Task</a>--}}
                            <div class="dropdown-divider"></div>
                            {{--                            <a class="dropdown-item" href="login-with-bg-image.html"><i class="ft-power"></i> Logout</a>--}}
                            <form id="logoutForm" class="dropdown-item"
                                  action="{{route('logout')}}"
                                  method="GET">
                                @csrf
                                @method('GET')
                                <a
                                    onclick="if (confirm('Are you sure you want to logout?')) { document.getElementById('logoutForm').submit(); }"
                                ><i class="ft-power"></i> Logout</a>
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
