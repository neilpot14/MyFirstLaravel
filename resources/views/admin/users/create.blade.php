@extends('layouts.admin')

@section('content')
<!-- BEGIN PAGE HEADER-->
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN PAGE TITLE & BREADCRUMB-->
            <h3 class="page-title">
                Create <small> User Page</small>
            </h3>
            <ul class="page-breadcrumb breadcrumb">
                <li>
                    <i class="fa fa-home"></i>
                    <a href="/admin">Home</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="/admin/users/">All Users</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="/admin/users/create">Add User</a>
                </li>
            </ul>
                  <!-- END PAGE TITLE & BREADCRUMB-->
        </div>
    </div>
<!-- END PAGE HEADER-->

<!-- BEGIN PAGE CONTENT-->
<div class="row profile">
    <div class="col-md-12">
        <!--BEGIN TABS-->

            <div class="tab-content">
                <!--tab_1_2-->
                <div class="row profile-account">
                    <div class="col-md-3">
                        <ul class="ver-inline-menu tabbable margin-bottom-10">
                            <li class="active">
                                <a data-toggle="tab" href="#tab_1-1">
                                <i class="fa fa-cog"></i> User info </a>
                                <span class="after"></span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-9">
                        <div class="tab-content">
                            <div id="tab_1-1" class="tab-pane active">
                                <form action="{{url('/admin/users/create')}}" method="post">
                                {{ csrf_field() }}
                                    @if ($message = Session::get('success'))

                                          <div class="alert alert-success">

                                              <p>{{ $message }}</p>

                                          </div>

                                    @endif
                                     <input type="hidden" name="user_id" class="form-control" value="{{ old('user_id') }}">
                                    <div class="form-group {{ $errors->has('firstname') ? 'has-error' : '' }}">
                                        <label class="control-label">Firstname:</label>
                                        <input type="text" name="firstname" class="form-control" value="{{ old('firstname') }}">
                                        @if ($errors->has('firstname'))
                                            <span class="text-danger">{{ $errors->first('firstname') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group {{ $errors->has('middlename') ? 'has-error' : '' }}">
                                        <label class="control-label">Middlename:</label>
                                        <input type="text" name="middlename" class="form-control" value="{{ old('middlename') }}">
                                        @if ($errors->has('middlename'))
                                            <span class="text-danger">{{ $errors->first('middlename') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group {{ $errors->has('lastname') ? 'has-error' : '' }}">
                                        <label class="control-label">Lastname:</label>
                                        <input type="text" name="lastname" class="form-control" value="{{ old('lastname') }}">
                                        @if ($errors->has('lastname'))
                                            <span class="text-danger">{{ $errors->first('lastname') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group {{ $errors->has('address') ? 'has-error' : '' }}">
                                        <label class="control-label">Address:</label>
                                        <input type="text" name="address" class="form-control" value="{{ old('address') }}">
                                        @if ($errors->has('address'))
                                            <span class="text-danger">{{ $errors->first('address') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group {{ $errors->has('username') ? 'has-error' : '' }}">
                                        <label class="control-label">Username:</label>
                                        <input type="text" name="username" class="form-control" value="{{ old('username') }}">
                                        @if ($errors->has('username'))
                                            <span class="text-danger">{{ $errors->first('username') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                                        <label class="control-label">Password:</label>
                                        <input type="password" name="password" class="form-control">
                                        @if ($errors->has('password'))
                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group {{ $errors->has('confirm_password') ? 'has-error' : '' }}">
                                        <label class="control-label">Confirm Password:</label>
                                        <input type="password" name="confirm_password" class="form-control">
                                        @if ($errors->has('confirm_password'))
                                            <span class="text-danger">{{ $errors->first('confirm_password') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <button class="btn btn-success" type="submit">Add User</button>
                                         <a href="/admin/users" class="btn default">Cancel</a>
                                    </div>

                                 </form>
                            </div>
                        </div>
                </div><!--end col-md-9-->
            </div>
         
                            
                            
        </div>
    </div>
</div>
<!-- END PAGE CONTENT-->

@stop


@section('footer')

<script src="{{URL::to('public/assets/plugins/jquery-1-11-3.min.js')}}"></script>
<script>
//Form post code
$(document).ready(function() {

});
</script>

@stop