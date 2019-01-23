@extends('layouts.admin')


@section('content')
<!-- BEGIN PAGE HEADER-->
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN PAGE TITLE & BREADCRUMB-->
            <h3 class="page-title">
                User <small> Edit</small>
            </h3>
            <ul class="page-breadcrumb breadcrumb">
                <li>
                    <i class="fa fa-home"></i>
                    <a href="/admin">Home</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="/admin/roles/">All Users</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="/admin/roles/create">Add User</a>
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
                                {!! Form::model($user, ['method'=>'PATCH', 'action'=>['AdminUsersController@update', $user->id]]) !!}
                                    
                                    <div class="form-group">
                                        <label class="control-label">First Name</label>
                                        {!! Form::text('firstname', null, ['class'=>'form-control'])!!}
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Middle Name</label>
                                        {!! Form::text('middlename', null, ['class'=>'form-control'])!!}
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Last Name</label>
                                        {!! Form::text('lastname', null, ['class'=>'form-control'])!!}
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Address</label>
                                        {!! Form::text('address', null, ['class'=>'form-control'])!!}
                                    </div>

                                    <div class="form-group"">
                                        {!! Form::submit('Update User', ['class'=>'btn green']) !!}
                                        <a href="/admin/users" class="btn default">Cancel</a>
                                    </div>
                                {!! Form::close() !!}

                                

                            </div>
                        </div>
                </div><!--end col-md-9-->
            </div>               
        </div>
    </div>
</div>
<!-- END PAGE CONTENT-->

<!-- BEGIN PAGE CONTENT-->
<div class="row profile">
    <div class="col-md-12">  
        <div class="tab-content">

            <!--tab_1_2-->
            <div class="tab-pane" id="tab_1_3">
                <div class="row profile-account">
                    <div class="col-md-3">
                        <ul class="ver-inline-menu tabbable margin-bottom-10">
                            <li class="active">
                                <a data-toggle="tab" href="#tab_1-1">
                                <i class="fa fa-cog"></i> Personal info </a>
                                <span class="after"></span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-9">
                        <div class="tab-content">
                            <div id="tab_1-1" class="tab-pane active">
                                
                            </div>

                        </div>
                    </div>
                            


        </div>
    </div> 
</div>



 @stop