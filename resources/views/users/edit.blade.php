@extends('general_layouts.layout')

@section('content')


    <div class="content-body">
    {{--    @include('includes.content_header')--}}
    <!-- Statistic -->
        <section id="material-datatables">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-0" style="zoom: 1;">


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


                                    <div class="card-body">
                                        <form id="userForm" action="{{route('users.update',$user_details->id)}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')

                                            <div class="row">
                                                <div class="card">

                                                    <div class="row">
                                                        <div class="col-md-12 mt-3 mb-3">
                                                            <h4>{{$user_details->first_name."'s"}} DETAILS</h4>

                                                        </div>
                                                                                                              <div class="col-md-4 mb-3">
                                                            <label class="form-label" for="first_name">First Name <i
                                                                    class="text-danger">*</i>
                                                            </label>
                                                            <input class="form-control" id="first_name" name="first_name" type="text" value="{{$item->first_name}}"
                                                                   required>
                                                        </div>

                                                        <div class="col-md-4 mb-3">
                                                            <label class="form-label" for="middle_name">Middle Name</label>
                                                            <input class="form-control" id="middle_name" name="middle_name" type="text"  value="{{$item->middle_name}}">
                                                        </div>

                                                        <div class="col-md-4 mb-3">
                                                            <label class="form-label" for="last_name">Last Name <i class="text-danger">*</i>
                                                            </label>
                                                            <input class="form-control" id="last_name" name="last_name" type="text" value="{{$item->last_name}}"
                                                                   required>
                                                        </div>


                                                        <div class="col-md-4 mb-3">
                                                            <label class="form-label" for="job_title">Job Title</label>
                                                            <input class="form-control" id="job_title" name="job_title" type="text"  value="{{$item->job_title}}" required>
                                                        </div>
                                                        <div class="col-md-4 mb-3">
                                                            <label class="form-label" for="email">Email <i class="text-danger">*</i></label>
                                                            <input class="form-control" id="email" name="email" type="email"  value="{{$item->email}}" required>
                                                        </div>

                                                        <div class="col-md-4 mb-3">
                                                            <label class="form-label" for="phone">Phone <i class="text-danger">*</i>
                                                            </label>
                                                            <input class="form-control" id="phone" name="phone" type="text"  value="{{$item->phone}}" required>
                                                        </div>


                                                        <div class="col-md-4 mb-3">
                                                            <label class="form-label" for="address">Address <i class="text-danger">*</i>
                                                            </label>
                                                            <input class="form-control" id="address" name="address" type="text"  value="{{$item->address}}" required>
                                                        </div>



                                                        <div class="col-md-12 mb-3">
                                                            <label for="status_id" class="form-label">Status <i
                                                                    class="text-danger">*</i></label>
                                                            <select class="form-control btn-square selection-option" id="status_id"
                                                                    name="status_id" required>
                                                                <option selected value="{{$user_details->statusDetails->id ?? ""}}">{{$user_details->statusDetails->name ?? "-"}}</option>

                                                                <option value="0">Inactive</option>
                                                                <option value="1">Active</option>
{{--                                                                @foreach($customers as $item)--}}
{{--                                                                    <option value="{{$item->id}}">{{$item->name}}</option>--}}
{{--                                                                @endforeach--}}
                                                            </select>
                                                        </div>



                                                    </div>
                                                    <button class="btn btn-dark m-auto p-2 mb-3" type="submit">Create User</button>
                                                </div>


                                            </div>
                                        </form>
                                    </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>




@endsection
