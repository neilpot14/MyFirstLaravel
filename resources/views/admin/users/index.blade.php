@extends('layouts.admin')


@section('content')

<!-- BEGIN PAGE HEADER-->
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN PAGE TITLE & BREADCRUMB-->
            <h3 class="page-title">
                Users <small> Page</small>
            </h3>
            <ul class="page-breadcrumb breadcrumb">
                <li>
                    <i class="fa fa-home"></i>
                    <a href="/admin">Home</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="/admin/users/">All Users</a>
                </li>
            </ul>
                  <!-- END PAGE TITLE & BREADCRUMB-->
        </div>
    </div>
<!-- END PAGE HEADER-->

<!-- BEGIN PAGE CONTENT-->
      <div class="row">
        <div class="col-md-12">
          <!-- BEGIN EXAMPLE TABLE PORTLET-->
          <div class="portlet box blue">
            <div class="portlet-title">
              <div class="caption">
                <i class="fa fa-list"></i>Users Table
              </div>
            </div>
            <div class="portlet-body">
              <div class="table-toolbar">
                <div class="btn-group">
                  <a href="/admin/users/create" class="btn green">
                  Add New <i class="fa fa-plus"></i>
                  </a>
                </div>
                <div class="btn-group pull-right">
                  <button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="fa fa-angle-down"></i>
                  </button>
                  <ul class="dropdown-menu pull-right">
                    <li>
                      <a href="#">Print</a>
                    </li>
                    <li>
                      <a href="#">Save as PDF</a>
                    </li>
                    <li>
                      <a href="#">Export to Excel</a>
                    </li>
                  </ul>
                </div>
              </div>
              <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                <thead>
                <tr>
                      <th>ID</th>
                      <th>Username</th>
                      <th>Firstname</th>
                      <th>Middlename</th>
                      <th>Lastname</th>
                      <th>Address</th>
                      <th>Options</th>
                </tr>
                </thead>
                <tbody>
                @if($users)

                        @foreach($users as $user)

                       <tr>
                          <td>{{$user->id}}</td>
                          <td>{{$user->username}}</td>
                          <td>{{$user->firstname}}</td>
                          <td>{{$user->middlename}}</td>
                          <td>{{$user->lastname}}</td>
                          <td>{{$user->address}}</td>
                          <td>
                            

                            
                                    <a href="{{url('/admin/users/'.$user->id.'/edit')}}" class="btn default btn-xs purple"><i class="fa fa-tools"></i> View</a>
                          

                          </td>
                       </tr>
                        @endforeach

                @endif
                </tbody>
              </table>
            </div>
          </div>
          <!-- END EXAMPLE TABLE PORTLET-->
        </div>
      </div>
      <!-- END PAGE CONTENT -->
    </div>
  </div>
  <!-- END CONTENT -->

@stop

@section('footer')

<script src="{{URL::to('public/assets/plugins/jquery-1.10.2.min.js')}}"></script>
<script src="{{URL::to('public/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="assets/scripts/table-editable.js"></script>
<script>
jQuery(document).ready(function() {       
   TableEditable.init();
});
</script>

@stop