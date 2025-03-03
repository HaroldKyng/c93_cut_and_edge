<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            {{--            <li class="active"><a href="{{route('home')}}"><span class="menu-title"--}}
            {{--                                                                                    data-i18n="{{env('APP_NAME')}}">Hello {{\Illuminate\Support\Facades\Auth::user()->first_name ?? ""}} </span></a>--}}
            {{--            </li>--}}


            <div class="user-profile" style="background: black" >
{{--                style="background: #0a001f"--}}
                <div class="user-info text-center pt-1 pb-1"><img class="user-img img-fluid rounded-circle"
                                                                  src="{{asset('app-assets/images/user_avatar.png')}}" style="max-height: 200px;margin-bottom: 10px">
                    <div class="name-wrapper d-block dropdown" >
                        <a class="white ml-2" id="user-account"
                                                                  href="#"
                                                                 >
                            <span
                                class="user-name text-light">{{\Illuminate\Support\Facades\Auth::user()->first_name ?? ""}} {{\Illuminate\Support\Facades\Auth::user()->last_name ?? ""}}</span></a>
                        <div class="text-warning ml-1 mr-1">{{\Illuminate\Support\Facades\Auth::user()->customer_name ?? ""}}</div>

                    </div>
                </div>
            </div>
{{--<hr style="width: 100%"/>--}}
            <li class=" nav-item"><a href="{{route('home')}}"><i class="material-icons">settings_input_svideo</i><span
                        class="menu-title" data-i18n="Users">Home</span></a>
            </li>
            <li class=" nav-item"><a href="#"><i class="la la-file"></i><span
                        class="menu-title" data-i18n="Users">Quotes</span></a>
            </li>


            <li class=" nav-item"><a href="#"><i class="la la-file"></i><span
                        class="menu-title" data-i18n="Users">Invoices</span></a>
            </li>


            </li>


        </ul>
    </div>
</div>


{{----    <div class="user-profile">--}}
{{--        <div class="user-info text-center pt-1 pb-1"><img class="user-img img-fluid rounded-circle"--}}
{{--                                                          src="{{asset('app-assets/images/portrait/small/avatar-s-1.png')}}">--}}
{{--            <div class="name-wrapper d-block dropdown"><a class="white dropdown-toggle ml-2" id="user-account" href="#"--}}
{{--                                                          data-toggle="dropdown" aria-haspopup="true"--}}
{{--                                                          aria-expanded="false"><span--}}
{{--                        class="user-name">Charlie Adams</span></a>--}}
{{--                <div class="text-light">UX Designer</div>--}}
{{--                <div class="dropdown-menu arrow" aria-labelledby="dropdownMenuLink"><a class="dropdown-item"><i--}}
{{--                            class="material-icons align-middle mr-1">person</i><span class="align-middle">Profile</span></a><a--}}
{{--                        class="dropdown-item"><i class="material-icons align-middle mr-1">message</i><span--}}
{{--                            class="align-middle">Messages</span></a><a class="dropdown-item"><i--}}
{{--                            class="material-icons align-middle mr-1">attach_money</i><span--}}
{{--                            class="align-middle">Balance</span></a><a class="dropdown-item"><i--}}
{{--                            class="material-icons align-middle mr-1">settings</i><span--}}
{{--                            class="align-middle">Settings</span></a><a class="dropdown-item"><i--}}
{{--                            class="material-icons align-middle mr-1">power_settings_new</i><span class="align-middle">Log Out</span></a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
