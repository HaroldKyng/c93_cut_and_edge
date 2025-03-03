@extends('general_layouts.layout')

@section('content')

    <!-- END: Main Menu-->
    <!-- BEGIN: Content-->
    {{--<div class="app-content content">--}}
    {{--    <div class="content-overlay"></div>--}}
    {{--    <div class="content-wrapper">--}}
    {{--        <div class="content-header row">--}}
    {{--        </div>--}}
    <div class="content-body">
        <!-- eCommerce statistic -->
        <div class="row">
            <div class="col-xl-4 col-lg-6 col-12">
                <div class="card pull-up">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="media d-flex">
                                <div class="media-body text-left">
                                    <h3 class="warning">0</h3>
                                    <h6>Unpaid Invoices</h6>
                                </div>
                                <div>
                                    <i class="icon-credit-card warning font-large-2 float-right"></i>
                                </div>
                            </div>
                            <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 80%"
                                     aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-12">
                <div class="card pull-up">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="media d-flex">
                                <div class="media-body text-left">
                                    <h3 class="warning">0</h3>
                                    <h6>Paid Invoices</h6>
                                </div>
                                <div>
                                    <i class="la la-money warning font-large-2 float-right"></i>
                                </div>
                            </div>
                            <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 65%"
                                     aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-12">
                <div class="card pull-up">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="media d-flex">
                                <div class="media-body text-left">
                                    <h3 class="warning">0</h3>
                                    <h6>Quotes</h6>
                                </div>
                                <div>
                                    <i class="la la-folder-open-o warning font-large-2 float-right"></i>
                                </div>
                            </div>
                            <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 75%"
                                     aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!--/ eCommerce statistic -->

        <!-- Products sell and New Orders -->
        <div class="row match-height" style="display: none">
            <div class="col-xl-12 col-12" id="ecommerceChartView">
                <div class="card card-shadow">
                    <div class="card-header card-header-transparent py-20">
                        {{--                            <div class="btn-group dropdown">--}}
                        {{--                                <a href="#" class="text-body dropdown-toggle blue-grey-700" data-toggle="dropdown">PRODUCTS SALES</a>--}}
                        {{--                                <div class="dropdown-menu animate" role="menu">--}}
                        {{--                                    <a class="dropdown-item" href="#" role="menuitem">Sales</a>--}}
                        {{--                                    <a class="dropdown-item" href="#" role="menuitem">Total sales</a>--}}
                        {{--                                    <a class="dropdown-item" href="#" role="menuitem">profit</a>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        <ul class="nav nav-pills nav-pills-rounded chart-action float-right btn-group" role="group">
                            <li class="nav-item"><a class="active nav-link" data-toggle="tab"
                                                    href="#scoreLineToDay">Day</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#scoreLineToWeek">Week</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab"
                                                    href="#scoreLineToMonth">Month</a></li>
                        </ul>
                    </div>
                    <div class="widget-content tab-content bg-white p-20">
                        <div class="ct-chart tab-pane active scoreLineShadow" id="scoreLineToDay"></div>
                        <div class="ct-chart tab-pane scoreLineShadow" id="scoreLineToWeek"></div>
                        <div class="ct-chart tab-pane scoreLineShadow" id="scoreLineToMonth"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">New Orders</h4>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-content">
                        <div id="new-orders" class="media-list position-relative">
                            <div class="table-responsive">
                                <table id="new-orders-table" class="table table-hover table-xl mb-0">
                                    <thead>
                                    <tr>
                                        <th class="border-top-0">Product</th>
                                        <th class="border-top-0">Customers</th>
                                        <th class="border-top-0">Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="text-truncate">iPhone X</td>
                                        <td class="text-truncate p-1">
                                            <ul class="list-unstyled users-list m-0">
                                                <li data-toggle="tooltip" data-popup="tooltip-custom"
                                                    data-original-title="John Doe" class="avatar avatar-sm pull-up">
                                                    <img class="media-object rounded-circle"
                                                         src="../../../app-assets/images/portrait/small/avatar-s-19.png"
                                                         alt="Avatar">
                                                </li>
                                                <li data-toggle="tooltip" data-popup="tooltip-custom"
                                                    data-original-title="Katherine Nichols"
                                                    class="avatar avatar-sm pull-up">
                                                    <img class="media-object rounded-circle"
                                                         src="../../../app-assets/images/portrait/small/avatar-s-18.png"
                                                         alt="Avatar">
                                                </li>
                                                <li data-toggle="tooltip" data-popup="tooltip-custom"
                                                    data-original-title="Joseph Weaver"
                                                    class="avatar avatar-sm pull-up">
                                                    <img class="media-object rounded-circle"
                                                         src="../../../app-assets/images/portrait/small/avatar-s-17.png"
                                                         alt="Avatar">
                                                </li>
                                                <li class="avatar avatar-sm">
                                                    <span class="badge badge-info">+4 more</span>
                                                </li>
                                            </ul>
                                        </td>
                                        <td class="text-truncate">$8999</td>
                                    </tr>
                                    <tr>
                                        <td class="text-truncate">Pixel 2</td>
                                        <td class="text-truncate p-1">
                                            <ul class="list-unstyled users-list m-0">
                                                <li data-toggle="tooltip" data-popup="tooltip-custom"
                                                    data-original-title="Alice Scott" class="avatar avatar-sm pull-up">
                                                    <img class="media-object rounded-circle"
                                                         src="../../../app-assets/images/portrait/small/avatar-s-16.png"
                                                         alt="Avatar">
                                                </li>
                                                <li data-toggle="tooltip" data-popup="tooltip-custom"
                                                    data-original-title="Charles Miller"
                                                    class="avatar avatar-sm pull-up">
                                                    <img class="media-object rounded-circle"
                                                         src="../../../app-assets/images/portrait/small/avatar-s-15.png"
                                                         alt="Avatar">
                                                </li>
                                            </ul>
                                        </td>
                                        <td class="text-truncate">$5550</td>
                                    </tr>
                                    <tr>
                                        <td class="text-truncate">OnePlus</td>
                                        <td class="text-truncate p-1">
                                            <ul class="list-unstyled users-list m-0">
                                                <li data-toggle="tooltip" data-popup="tooltip-custom"
                                                    data-original-title="Christine Ramos"
                                                    class="avatar avatar-sm pull-up">
                                                    <img class="media-object rounded-circle"
                                                         src="../../../app-assets/images/portrait/small/avatar-s-11.png"
                                                         alt="Avatar">
                                                </li>
                                                <li data-toggle="tooltip" data-popup="tooltip-custom"
                                                    data-original-title="Thomas Brewer"
                                                    class="avatar avatar-sm pull-up">
                                                    <img class="media-object rounded-circle"
                                                         src="../../../app-assets/images/portrait/small/avatar-s-10.png"
                                                         alt="Avatar">
                                                </li>
                                                <li data-toggle="tooltip" data-popup="tooltip-custom"
                                                    data-original-title="Alice Chapman"
                                                    class="avatar avatar-sm pull-up">
                                                    <img class="media-object rounded-circle"
                                                         src="../../../app-assets/images/portrait/small/avatar-s-9.png"
                                                         alt="Avatar">
                                                </li>
                                                <li class="avatar avatar-sm">
                                                    <span class="badge badge-info">+3 more</span>
                                                </li>
                                            </ul>
                                        </td>
                                        <td class="text-truncate">$9000</td>
                                    </tr>
                                    <tr>
                                        <td class="text-truncate">Galaxy</td>
                                        <td class="text-truncate p-1">
                                            <ul class="list-unstyled users-list m-0">
                                                <li data-toggle="tooltip" data-popup="tooltip-custom"
                                                    data-original-title="Ryan Schneider"
                                                    class="avatar avatar-sm pull-up">
                                                    <img class="media-object rounded-circle"
                                                         src="../../../app-assets/images/portrait/small/avatar-s-14.png"
                                                         alt="Avatar">
                                                </li>
                                                <li data-toggle="tooltip" data-popup="tooltip-custom"
                                                    data-original-title="Tiffany Oliver"
                                                    class="avatar avatar-sm pull-up">
                                                    <img class="media-object rounded-circle"
                                                         src="../../../app-assets/images/portrait/small/avatar-s-13.png"
                                                         alt="Avatar">
                                                </li>
                                                <li data-toggle="tooltip" data-popup="tooltip-custom"
                                                    data-original-title="Joan Reid" class="avatar avatar-sm pull-up">
                                                    <img class="media-object rounded-circle"
                                                         src="../../../app-assets/images/portrait/small/avatar-s-12.png"
                                                         alt="Avatar">
                                                </li>
                                            </ul>
                                        </td>
                                        <td class="text-truncate">$7500</td>
                                    </tr>
                                    <tr>
                                        <td class="text-truncate">Moto Z2</td>
                                        <td class="text-truncate p-1">
                                            <ul class="list-unstyled users-list m-0">
                                                <li data-toggle="tooltip" data-popup="tooltip-custom"
                                                    data-original-title="Kimberly Simmons"
                                                    class="avatar avatar-sm pull-up">
                                                    <img class="media-object rounded-circle"
                                                         src="../../../app-assets/images/portrait/small/avatar-s-8.png"
                                                         alt="Avatar">
                                                </li>
                                                <li data-toggle="tooltip" data-popup="tooltip-custom"
                                                    data-original-title="Willie Torres"
                                                    class="avatar avatar-sm pull-up">
                                                    <img class="media-object rounded-circle"
                                                         src="../../../app-assets/images/portrait/small/avatar-s-7.png"
                                                         alt="Avatar">
                                                </li>
                                                <li data-toggle="tooltip" data-popup="tooltip-custom"
                                                    data-original-title="Rebecca Jones"
                                                    class="avatar avatar-sm pull-up">
                                                    <img class="media-object rounded-circle"
                                                         src="../../../app-assets/images/portrait/small/avatar-s-6.png"
                                                         alt="Avatar">
                                                </li>
                                                <li class="avatar avatar-sm">
                                                    <span class="badge badge-info">+1 more</span>
                                                </li>
                                            </ul>
                                        </td>
                                        <td class="text-truncate">$8500</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Products sell and New Orders -->

        <!-- Recent Transactions -->
        <div class="row">
            <div id="recent-transactions" class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Pending Invoices</h4>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                {{--                                    <li><a class="btn btn-sm btn-danger box-shadow-2 round btn-min-width pull-right" href="invoice-summary.html" target="_blank">Invoice Summary</a></li>--}}
                            </ul>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="table-responsive">
                            <table id="recent-orders" class="table table-hover table-xl mb-0">
                                <thead>
                                <tr>
{{--                                    <th class="border-top-0">Status</th>--}}
                                    <th class="border-top-0">Invoice#</th>
                                    {{--                                        <th class="border-top-0">Customer Name</th>--}}
                                    <th class="border-top-0">Status</th>
                                    <th class="border-top-0">Status</th>
                                    <th class="border-top-0">Invoice Amount</th>
                                    <th class="border-top-0">Amount Paid</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
{{--                                    <td class="text-truncate"><i--}}
{{--                                            class="la la-dot-circle-o success font-medium-1 mr-1"></i> Paid--}}
{{--                                    </td>--}}
                                    <td class="text-truncate"><a href="#"
                                                                 class="text-success text-bold-700">INV-001001</a></td>


                                    <td>
                                        <button type="button" class="btn btn-sm btn-outline-success round">Paid</button>
                                    </td>
                                    <td>
                                        <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                            <div class="progress-bar bg-gradient-x-success" role="progressbar"
                                                 style="width: 100%" aria-valuenow="100" aria-valuemin="0"
                                                 aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td class="text-truncate">$ 12,009.00</td>
                                    <td class="text-truncate">$ 12,009.00</td>
                                </tr>
                                <tr>
{{--                                    <td class="text-truncate"><i--}}
{{--                                            class="la la-dot-circle-o danger font-medium-1 mr-1"></i> Upaid--}}
{{--                                    </td>--}}
                                    <td class="text-truncate"><a href="#"
                                                                 class="text-danger text-bold-700">INV-001002</a></td>


                                    <td>
                                        <button type="button" class="btn btn-sm btn-outline-danger round">Pending
                                        </button>
                                    </td>
                                    <td>
                                        <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                            <div class="progress-bar bg-gradient-x-danger" role="progressbar"
                                                 style="width: 0%" aria-valuenow="0" aria-valuemin="0"
                                                 aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td class="text-truncate">$ 10,850.00</td>
                                    <td class="text-truncate">$ 0.00</td>
                                </tr>
                                <tr>
{{--                                    <td class="text-truncate"><i--}}
{{--                                            class="la la-dot-circle-o danger font-medium-1 mr-1"></i> Upaid--}}
{{--                                    </td>--}}
                                    <td class="text-truncate"><a href="#"
                                                                 class="text-warning text-bold-700">INV-001003</a></td>


                                    <td>
                                        <button type="button" class="btn btn-sm btn-outline-warning round">Partially Paid</button>
                                    </td>
                                    <td>
                                        <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                            <div class="progress-bar bg-gradient-x-warning" role="progressbar"
                                                 style="width: 75%" aria-valuenow="75" aria-valuemin="0"
                                                 aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td class="text-truncate">$ 11,0056.00</td>
                                    <td class="text-truncate">$ 8,0056.00</td>
                                </tr>
                                <tr>
{{--                                    <td class="text-truncate"><i--}}
{{--                                            class="la la-dot-circle-o success font-medium-1 mr-1"></i> Paid--}}
{{--                                    </td>--}}
                                    <td class="text-truncate"><a href="#"
                                                                 class="text-warning text-bold-700">INV-001004</a></td>


                                    <td>
                                        <button type="button" class="btn btn-sm btn-outline-warning round">Partially Paid
                                        </button>
                                    </td>
                                    <td>
                                        <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                            <div class="progress-bar bg-gradient-x-warning" role="progressbar"
                                                 style="width: 68%" aria-valuenow="68" aria-valuemin="0"
                                                 aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td class="text-truncate">$ 45,080.00</td>
                                    <td class="text-truncate">$ 35,005.00</td>
                                </tr>
                                <tr>
{{--                                    <td class="text-truncate"><i--}}
{{--                                            class="la la-dot-circle-o success font-medium-1 mr-1"></i> Paid--}}
{{--                                    </td>--}}
                                    <td class="text-truncate"><a href="#"
                                                                 class="text-success text-bold-700">INV-001005</a></td>


                                    <td>
                                        <button type="button" class="btn btn-sm btn-outline-success round">Paid</button>
                                    </td>
                                    <td>
                                        <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                            <div class="progress-bar bg-gradient-x-success" role="progressbar"
                                                 style="width: 100%" aria-valuenow="100" aria-valuemin="0"
                                                 aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td class="text-truncate">$ 15,060.00</td>
                                    <td class="text-truncate">$ 15,060.00</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Recent Transactions -->

        <!--Recent Orders & Monthly Sales -->
        <div class="row match-height" style="display: none">
            <div class="col-xl-8 col-lg-12">
                <div class="card">
                    <div class="card-content ">
                        <div id="cost-revenue" class="height-250 position-relative"></div>
                    </div>
                    <div class="card-footer">
                        <div class="row mt-1">
                            <div class="col-3 text-center">
                                <h6 class="text-muted">Total Products</h6>
                                <h2 class="block font-weight-normal">18.6 k</h2>
                                <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                    <div class="progress-bar bg-gradient-x-info" role="progressbar" style="width: 70%"
                                         aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col-3 text-center">
                                <h6 class="text-muted">Total Sales</h6>
                                <h2 class="block font-weight-normal">64.54 M</h2>
                                <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                    <div class="progress-bar bg-gradient-x-warning" role="progressbar"
                                         style="width: 60%" aria-valuenow="60" aria-valuemin="0"
                                         aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col-3 text-center">
                                <h6 class="text-muted">Total Cost</h6>
                                <h2 class="block font-weight-normal">24.38 B</h2>
                                <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                    <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 40%"
                                         aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col-3 text-center">
                                <h6 class="text-muted">Total Revenue</h6>
                                <h2 class="block font-weight-normal">36.72 M</h2>
                                <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                    <div class="progress-bar bg-gradient-x-success" role="progressbar"
                                         style="width: 90%" aria-valuenow="90" aria-valuemin="0"
                                         aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body sales-growth-chart">
                            <div id="monthly-sales" class="height-250"></div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="chart-title mb-1 text-center">
                            <h6>Total monthly Sales.</h6>
                        </div>
                        <div class="chart-stats text-center">
                            <a href="#" class="btn btn-sm btn-danger box-shadow-2 mr-1">Statistics <i
                                    class="ft-bar-chart"></i></a> <span class="text-muted">for the last year.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/Recent Orders & Monthly Sales -->


    </div>
    {{--    </div>--}}
    {{--</div>--}}
    {{--</div>--}}
    <!-- END: Content-->
@endsection
