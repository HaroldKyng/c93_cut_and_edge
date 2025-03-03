@extends('general_layouts.layout')

@section('content')

    <div class="content-body">
    {{--    @include('includes.content_header')--}}
    <!-- Statistic -->
        <section id="material-datatables">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-0" style="zoom: 1;">
                        {{--                        <div class="card-header">--}}
                        {{--                            <h4 class="card-title">{{$page_title ?? "-"}}</h4>--}}
                        {{--                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>--}}
                        {{--                            <div class="heading-elements">--}}
                        {{--                                <ul class="list-inline mb-0">--}}
                        {{--                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>--}}
                        {{--                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>--}}
                        {{--                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>--}}
                        {{--                                    <li><a data-action="close"><i class="ft-x"></i></a></li>--}}
                        {{--                                </ul>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}


                        <div class="card-content collapse show">
                            <div class="card-body">
                                @if ($errors->any())
                                    <div class="alert alert-danger mb-2" role="alert">
                                        <strong>Validation Error!</strong> @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </div>
                                @endif
                                @if($message = Session::get('error'))
                                    <div class="alert alert-warning mb-2" role="alert">
                                        <strong>Error!</strong> {{$message}}
                                    </div>
                                @endif
                                @if($message = Session::get('success'))
                                    <div class="alert alert-success mb-2" role="alert">
                                        <strong>Success!</strong> {{$message}}
                                    </div>
                                @endif
                                <section class="users-edit">
                                    <div class="card">
                                        <div class="card-content">
                                            <div class="card-body">
                                                <ul class="nav nav-tabs mb-2 nav-tabs-material" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link d-flex align-items-center waves-effect waves-dark active"
                                                           id="account-tab" data-toggle="tab" href="#account"
                                                           aria-controls="account" role="tab" aria-selected="true">
                                                            <i class="ft-user mr-25"></i><span
                                                                class="d-none d-sm-block">Account</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link d-flex align-items-center waves-effect waves-dark"
                                                           id="information-tab" data-toggle="tab" href="#information"
                                                           aria-controls="information" role="tab" aria-selected="false">
                                                            <i class="ft-info mr-25"></i><span
                                                                class="d-none d-sm-block">Information</span>
                                                        </a>
                                                    </li>
                                                    <div class="nav-tabs-indicator"
                                                         style="left: 0px; right: 1458.64px;"></div>
                                                </ul>
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="account"
                                                         aria-labelledby="account-tab" role="tabpanel">
                                                        <!-- users edit media object start -->
                                                        <div class="media mb-2">
                                                            <a class="mr-2" href="#">
                                                                <img
                                                                    src="{{('app-assets/images/user_avatar.png')}}"
                                                                    alt="users avatar"
                                                                    class="users-avatar-shadow rounded-circle"
                                                                    height="64" width="64">
                                                            </a>
                                                            <div class="media-body">
                                                                <h4 class="media-heading">Avatar</h4>
                                                                <div class="col-12 px-0 d-flex">
                                                                    <a href="#"
                                                                       class="btn btn-sm btn-primary mr-25 waves-effect waves-light">Change</a>
                                                                    <a href="#"
                                                                       class="btn btn-sm btn-secondary waves-effect waves-light">Reset</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- users edit media object ends -->
                                                        <!-- users edit account form start -->
                                                        <form novalidate="">
                                                            <div class="row">
                                                                <div class="col-12 col-sm-6">
                                                                    <div class="form-group">
                                                                        <div class="controls">
                                                                            <label>Username</label>
                                                                            <input type="text" class="form-control"
                                                                                   placeholder="Username"
                                                                                   value="{{$user_details->email}}"
                                                                                   required=""
                                                                                   data-validation-required-message="This username field is required">
                                                                            <div class="help-block"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <div class="controls">
                                                                            <label>Name</label>
                                                                            <input type="text" class="form-control"
                                                                                   placeholder="Name"
                                                                                   value="{{$user_details->first_name}} {{$user_details->middle_name}} {{$user_details->last_name}}"
                                                                                   required=""
                                                                                   data-validation-required-message="This name field is required">
                                                                            <div class="help-block"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <div class="controls">
                                                                            <label>E-mail</label>
                                                                            <input type="email" class="form-control"
                                                                                   placeholder="Email"
                                                                                   value="{{$user_details->email}}"
                                                                                   required=""
                                                                                   data-validation-required-message="This email field is required">
                                                                            <div class="help-block"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-sm-6">
                                                                    <div class="form-group">
                                                                        <label>Role</label>
                                                                        <select class="form-control">
                                                                            <option>User</option>
                                                                            <option>Staff</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Status</label>
                                                                        <select class="form-control">
                                                                            {{--                                                                                <option>Inactive</option>--}}
                                                                            <option>Active</option>
                                                                            {{--                                                                                <option>Close</option>--}}
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Company</label>
                                                                        <input type="text" class="form-control"
                                                                               value="{{$user_details->customer_name}}"
                                                                               placeholder="Company name">
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="table-responsive">
                                                                        <table class="table mt-1">
                                                                            <thead>
                                                                            <tr>
                                                                                <th>Module Permission</th>
                                                                                <th>Read</th>
                                                                                <th>Write</th>
                                                                                <th>Delete</th>
                                                                            </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                            <tr>
                                                                                <td>Users</td>
                                                                                <td>
                                                                                    <div
                                                                                        class="custom-control custom-checkbox color-warning">
                                                                                        <input type="checkbox"
                                                                                               id="users-checkbox1"
                                                                                               class="custom-control-input"
                                                                                               checked="">
                                                                                        <label
                                                                                            class="custom-control-label"
                                                                                            for="users-checkbox1"></label>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div
                                                                                        class="custom-control custom-checkbox">
                                                                                        <input type="checkbox"
                                                                                               id="users-checkbox2"
                                                                                               class="custom-control-input"><label
                                                                                            class="custom-control-label"
                                                                                            for="users-checkbox2"></label>
                                                                                    </div>
                                                                                </td>

                                                                                <td>
                                                                                    <div
                                                                                        class="custom-control custom-checkbox">
                                                                                        <input type="checkbox"
                                                                                               id="users-checkbox4"
                                                                                               class="custom-control-input"
                                                                                        >
                                                                                        <label
                                                                                            class="custom-control-label"
                                                                                            for="users-checkbox4"></label>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Invoices</td>
                                                                                <td>
                                                                                    <div
                                                                                        class="custom-control custom-checkbox">
                                                                                        <input type="checkbox"
                                                                                               id="users-checkbox5"
                                                                                               class="custom-control-input"
                                                                                               checked=""><label
                                                                                            class="custom-control-label"
                                                                                            for="users-checkbox5"></label>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div
                                                                                        class="custom-control custom-checkbox">
                                                                                        <input type="checkbox"
                                                                                               id="users-checkbox6"
                                                                                               class="custom-control-input"
                                                                                        >
                                                                                        <label
                                                                                            class="custom-control-label"
                                                                                            for="users-checkbox6"></label>
                                                                                    </div>
                                                                                </td>

                                                                                <td>
                                                                                    <div
                                                                                        class="custom-control custom-checkbox">
                                                                                        <input type="checkbox"
                                                                                               id="users-checkbox8"
                                                                                               class="custom-control-input"
                                                                                        >
                                                                                        <label
                                                                                            class="custom-control-label"
                                                                                            for="users-checkbox8"></label>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Contracts</td>
                                                                                <td>
                                                                                    <div
                                                                                        class="custom-control custom-checkbox">
                                                                                        <input type="checkbox"
                                                                                               id="users-checkbox9"
                                                                                               class="custom-control-input"
                                                                                               checked="">
                                                                                        <label
                                                                                            class="custom-control-label"
                                                                                            for="users-checkbox9"></label>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div
                                                                                        class="custom-control custom-checkbox">
                                                                                        <input type="checkbox"
                                                                                               id="users-checkbox10"
                                                                                               class="custom-control-input"
                                                                                        >
                                                                                        <label
                                                                                            class="custom-control-label"
                                                                                            for="users-checkbox10"></label>
                                                                                    </div>
                                                                                </td>

                                                                                <td>
                                                                                    <div
                                                                                        class="custom-control custom-checkbox">
                                                                                        <input type="checkbox"
                                                                                               id="users-checkbox12"
                                                                                               class="custom-control-input"><label
                                                                                            class="custom-control-label"
                                                                                            for="users-checkbox12"></label>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Meters</td>
                                                                                <td>
                                                                                    <div
                                                                                        class="custom-control custom-checkbox">
                                                                                        <input type="checkbox"
                                                                                               id="users-checkbox9"
                                                                                               class="custom-control-input"
                                                                                               checked="">
                                                                                        <label
                                                                                            class="custom-control-label"
                                                                                            for="users-checkbox9"></label>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div
                                                                                        class="custom-control custom-checkbox">
                                                                                        <input type="checkbox"
                                                                                               id="users-checkbox10"
                                                                                               class="custom-control-input"
                                                                                        >
                                                                                        <label
                                                                                            class="custom-control-label"
                                                                                            for="users-checkbox10"></label>
                                                                                    </div>
                                                                                </td>

                                                                                <td>
                                                                                    <div
                                                                                        class="custom-control custom-checkbox">
                                                                                        <input type="checkbox"
                                                                                               id="users-checkbox12"
                                                                                               class="custom-control-input"><label
                                                                                            class="custom-control-label"
                                                                                            for="users-checkbox12"></label>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Meter Readings</td>
                                                                                <td>
                                                                                    <div
                                                                                        class="custom-control custom-checkbox">
                                                                                        <input type="checkbox"
                                                                                               id="users-checkbox9"
                                                                                               class="custom-control-input"
                                                                                               checked="">
                                                                                        <label
                                                                                            class="custom-control-label"
                                                                                            for="users-checkbox9"></label>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div
                                                                                        class="custom-control custom-checkbox">
                                                                                        <input type="checkbox"
                                                                                               id="users-checkbox10"
                                                                                               class="custom-control-input"
                                                                                        >
                                                                                        <label
                                                                                            class="custom-control-label"
                                                                                            for="users-checkbox10"></label>
                                                                                    </div>
                                                                                </td>

                                                                                <td>
                                                                                    <div
                                                                                        class="custom-control custom-checkbox">
                                                                                        <input type="checkbox"
                                                                                               id="users-checkbox12"
                                                                                               class="custom-control-input"><label
                                                                                            class="custom-control-label"
                                                                                            for="users-checkbox12"></label>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Support Tickets</td>
                                                                                <td>
                                                                                    <div
                                                                                        class="custom-control custom-checkbox">
                                                                                        <input type="checkbox"
                                                                                               id="users-checkbox9"
                                                                                               class="custom-control-input"
                                                                                               checked="">
                                                                                        <label
                                                                                            class="custom-control-label"
                                                                                            for="users-checkbox9"></label>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div
                                                                                        class="custom-control custom-checkbox">
                                                                                        <input type="checkbox"
                                                                                               id="users-checkbox10"
                                                                                               class="custom-control-input" checked=""
                                                                                        >
                                                                                        <label
                                                                                            class="custom-control-label"
                                                                                            for="users-checkbox10"></label>
                                                                                    </div>
                                                                                </td>

                                                                                <td>
                                                                                    <div
                                                                                        class="custom-control custom-checkbox">
                                                                                        <input type="checkbox"
                                                                                               id="users-checkbox12"
                                                                                               class="custom-control-input"><label
                                                                                            class="custom-control-label"
                                                                                            for="users-checkbox12"></label>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                                                    <button type="submit"
                                                                            class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1 waves-effect waves-light">
                                                                        Save
                                                                        changes
                                                                    </button>
                                                                    <button type="reset"
                                                                            class="btn btn-light waves-effect waves-light">
                                                                        Cancel
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                        <!-- users edit account form ends -->
                                                    </div>
                                                    <div class="tab-pane" id="information"
                                                         aria-labelledby="information-tab" role="tabpanel">
                                                        <!-- users edit Info form start -->
                                                        <form novalidate="">
                                                            <div class="row">

                                                                <div class="col-12 col-sm-6 mt-1 mt-sm-0">
                                                                    <h5 class="mb-1"><i class="ft-user mr-25"></i>Personal
                                                                        Info</h5>

                                                                    <div class="form-group">
                                                                        <label>Location</label>
                                                                        <select class="form-control" id="accountSelect">
                                                                            <option>Zambia</option>
                                                                        </select>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <div class="controls">
                                                                            <label>Phone</label>
                                                                            <input type="text" class="form-control"
                                                                                   required=""
                                                                                   placeholder="Phone number"
                                                                                   value="{{$user_details->phone}}"
                                                                                   data-validation-required-message="This phone number field is required">
                                                                            <div class="help-block"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <div class="controls">
                                                                            <label>Address</label>
                                                                            <input type="text" class="form-control"
                                                                                   value="{{$user_details->address}}"
                                                                                   placeholder="Address"
                                                                                   data-validation-required-message="This Address field is required">
                                                                            <div class="help-block"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                                <div
                                                                    class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                                                    <button type="submit"
                                                                            class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1 waves-effect waves-light">
                                                                        Save
                                                                        changes
                                                                    </button>
                                                                    <button type="reset"
                                                                            class="btn btn-light waves-effect waves-light">
                                                                        Cancel
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                        <!-- users edit Info form ends -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>


@endsection
