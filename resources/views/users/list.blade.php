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
                                        <strong>Validation Error!</strong>  @foreach ($errors->all() as $error)
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
                                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                    {{--                                    <div class="row">--}}
                                    {{--                                        <div class="col-sm-12 col-md-10">--}}
                                    {{--                                            <div class="dataTables_length" id="DataTables_Table_0_length"><label>Show--}}
                                    {{--                                                    <select name="DataTables_Table_0_length"--}}
                                    {{--                                                            aria-controls="DataTables_Table_0"--}}
                                    {{--                                                            class="custom-select custom-select-sm form-control form-control-sm">--}}
                                    {{--                                                        <option value="10">10</option>--}}
                                    {{--                                                        <option value="25">25</option>--}}
                                    {{--                                                        <option value="50">50</option>--}}
                                    {{--                                                        <option value="100">100</option>--}}
                                    {{--                                                    </select> entries</label></div>--}}
                                    {{--                                        </div>--}}
                                    {{--                                        <div class="col-sm-12 col-md-2 text-end">--}}
                                    {{--                                            <div id="DataTables_Table_0_filter" class="dataTables_filter"><label>Search:<input--}}
                                    {{--                                                        type="search" class="form-control form-control-sm"--}}
                                    {{--                                                        placeholder="" aria-controls="DataTables_Table_0"></label></div>--}}

                                    {{--                                        </div>--}}
                                    {{--                                    </div>--}}
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <a href="{{route('users.create')}}" class="btn btn-dark mb-1 mr-1 waves-effect waves-light float-right" type="button" >New</a>
                                            <table class="table table-bordered">
                                                <thead>
                                                <tr role="row">
                                                    <th class="sorting_asc" tabindex="0" aria-controls="row-select-delete" rowspan="1"
                                                        colspan="1" aria-sort="ascending"
                                                        aria-label="Employee Name: activate to sort column descending">Name
                                                    </th>
                                                    <th class="sorting_asc" tabindex="0" aria-controls="row-select-delete" rowspan="1"
                                                        colspan="1" aria-sort="ascending"
                                                        aria-label="Employee Name: activate to sort column descending">Email
                                                    </th>
                                                    <th class="sorting_asc" tabindex="0" aria-controls="row-select-delete" rowspan="1"
                                                        colspan="1" aria-sort="ascending"
                                                        aria-label="Employee Name: activate to sort column descending">Designation
                                                    </th>
                                                    <th class="sorting_asc" tabindex="0" aria-controls="row-select-delete" rowspan="1"
                                                        colspan="1" aria-sort="ascending"
                                                        aria-label="Employee Name: activate to sort column descending">Customer
                                                    </th>


                                                    <th class="sorting_asc" tabindex="0" aria-controls="row-select-delete" rowspan="1"
                                                        colspan="1" aria-sort="ascending"
                                                        aria-label="Employee Name: activate to sort column descending">Status
                                                    </th>

                                                    <th class="sorting text-end" tabindex="1"
                                                        aria-controls="DataTables_Table_0"
                                                        style="width:100px"
                                                        aria-label="Salary: activate to sort column ascending"
                                                    >
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                @foreach($users as $item)
                                                    <tr role="row" class="odd">
                                                        <td class="sorting_1">{{$item->first_name." ".$item->last_name  ?? "-"}}</td>
                                                        <td class="sorting_1">{{$item->email ?? "-"}}</td>
                                                        <td class="sorting_1">{{$item->job_title ?? "-"}}</td>
                                                        <td class="sorting_1">{{$item->customer_name ?? "-"}}</td>
{{--                                                        <td class="sorting_1">{{$item->statusDetails->name ?? "-"}}</td>--}}
                                                        <td class="sorting_1">
                                                        @if($item->status_id == 1)
                                                            <button type="button" class="btn mr-1 mb-1 btn-outline-success btn-sm"><i class="la la-battery-full"></i>
                                                                Active</button>
                                                        @else
                                                                <button type="button" class="btn mr-1 mb-1 btn-outline-danger btn-sm"><i class="la la-battery-empty"></i>
                                                                    Inactive</button>
                                                        @endif
                                                        </td>
                                                        <td>
                                                            <div class="btn-group" role="group" aria-label="First Group">
{{--                                                                <a href="#" type="button" class="btn btn-icon btn-success waves-effect waves-light"><i class="la la-eye"></i></a>--}}
{{--                                                                                                                                <a href="#"--}}
{{--                                                                                                                                   class="menu-link px-3"--}}
{{--                                                                                                                                   data-bs-table='{{ json_encode($item) }}'--}}
{{--                                                                                                                                   data-bs-toggle="modal"--}}
{{--                                                                                                                                   data-bs-target="#kt_modal_edit_app">--}}
{{--                                                                                                                                    Edit--}}
{{--                                                                                                                                </a>--}}
                                                                <a href="{{route('users.edit',$item->id)}}" class="btn btn-icon btn-warning waves-effect waves-light"><i class="la la-pencil"></i></a>
                                                                <button type="button" class="btn btn-icon btn-danger waves-effect waves-light"><i class="la la-trash-o"></i></button>
                                                            </div>
                                                            <div class="btn-group  mb-1" style="display: none">
                                                                <button type="button"
                                                                        class="btn btn-light waves-effect waves-light">
                                                                    Action
                                                                </button>
                                                                <button type="button"
                                                                        class="btn btn-light dropdown-toggle waves-effect waves-light"
                                                                        data-toggle="dropdown" aria-haspopup="true"
                                                                        aria-expanded="false">
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item" href="#">Edit</a>
                                                                    {{--                                                                    <a class="dropdown-item" href="#">Delete</a>--}}

                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item" href="#">Delete</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach


                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div
                                            class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end">
                                            <div class="dataTables_paginate paging_simple_numbers"
                                                 id="kt_customers_table_paginate">
                                                @if($users instanceof \Illuminate\Pagination\LengthAwarePaginator )

                                                    <div class="clearfix ">
                                                        {{$users->links()}}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- Modal -->
    <div class="modal fade text-left" id="new_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel35" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="myModalLabel35"> {{$page_title}}</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="{{route('users.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <fieldset class="form-group floating-label-form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="" required>
                        </fieldset>
                        {{--                        <br>--}}
                        {{--                        <fieldset class="form-group floating-label-form-group">--}}
                        {{--                            <label for="title">Password</label>--}}
                        {{--                            <input type="password" class="form-control" id="title" placeholder="Password">--}}
                        {{--                        </fieldset>--}}
                        {{--                        <br>--}}
                        {{--                        <fieldset class="form-group floating-label-form-group">--}}
                        {{--                            <label for="title1">Description</label>--}}
                        {{--                            <textarea class="form-control" id="title1" rows="3" placeholder="Description"></textarea>--}}
                        {{--                        </fieldset>--}}
                    </div>
                    <div class="modal-footer">
                        <input type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal" value="close">
                        <input type="submit" class="btn btn-outline-primary btn-lg" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade text-left" id="edit_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel35" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="myModalLabel35"> {{$page_title}}</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="edit_form" >
                    @csrf
                    <div class="modal-body">
                        <fieldset class="form-group floating-label-form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="" required>
                        </fieldset>
                        {{--                        <br>--}}
                        {{--                        <fieldset class="form-group floating-label-form-group">--}}
                        {{--                            <label for="title">Password</label>--}}
                        {{--                            <input type="password" class="form-control" id="title" placeholder="Password">--}}
                        {{--                        </fieldset>--}}
                        {{--                        <br>--}}
                        {{--                        <fieldset class="form-group floating-label-form-group">--}}
                        {{--                            <label for="title1">Description</label>--}}
                        {{--                            <textarea class="form-control" id="title1" rows="3" placeholder="Description"></textarea>--}}
                        {{--                        </fieldset>--}}
                    </div>
                    <div class="modal-footer">
                        <input type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal" value="close">
                        <input type="submit" class="btn btn-outline-primary btn-lg" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection
