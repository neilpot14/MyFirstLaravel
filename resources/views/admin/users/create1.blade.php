@extends('layouts.admin')

@section('content')
<!-- BEGIN PAGE HEADER-->
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN PAGE TITLE & BREADCRUMB-->
            <h3 class="page-title">
                Roles <small> Create</small>
            </h3>
            <ul class="page-breadcrumb breadcrumb">
                <li>
                    <i class="fa fa-home"></i>
                    <a href="/admin">Home</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="/admin/roles/">All Roles</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="/admin/roles/create">Add Role</a>
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
                                <i class="fa fa-cog"></i> Role info </a>
                                <span class="after"></span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-9">
                        <div class="tab-content">
                            <div id="tab_1-1" class="tab-pane active">
                                <form action="{{url('/admin/users/create')}}" method="post">
                                {{ csrf_field() }}
                                    <div class="alert alert-danger print-error-msg" style="display:none">
                                         <ul></ul>
                                     </div>
                                     <div class="alert alert-success print-success-msg" style="display:none"></div>
                                    <div class="form-group">
                                        <label>Firstname </label>
                                        <input type="text" id="firstname" class="form-control" placeholder="ex. MIS Staff" name="firstname" value=""/>
                                    </div>
                                    <div class="form-group">
                                        <label>Middlename </label>
                                        <input type="text" id="middlename" class="form-control" placeholder="ex. MIS Staff" name="middlename" value=""/>
                                    </div>
                                    <div class="form-group">
                                        <label>Lastname </label>
                                        <input type="text" id="lastname" class="form-control" placeholder="ex. MIS Staff" name="lastname" value=""/>
                                    </div>
                                    <div class="form-group">
                                        <label>Address </label>
                                        <input type="text" id="address" class="form-control" placeholder="ex. MIS Staff" name="address" value=""/>
                                    </div>
                                    <div class="margiv-top-10">
                                             <button  type="button" class="btn btn-primary btn-add-role">Submit</button>
                                        <a href="/admin/roles" class="btn default">Cancel</a>
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

/ Jquery library
<script src="{{URL::to('public/assets/plugins/jquery-1-11-3.min.js')}}"></script>
<script>
//Form post code
$(document).ready(function() {
    //$("input.myclass").prop('disabled', true);
     // on button click we are getting values by input name.
    $(".btn-add-user").click(function(e){
        e.preventDefault();
        var _token = $("input[name='_token']").val(); // get csrf field.
        var firstname = $("input[name='firstname']").val();
        var middlename = $("input[name='middlename']").val();
        var lastname = $("input[name='lastname']").val();
        var address = $("input[name='address']").val();
        $.ajax({
              url: "{{url('/admin/users/create')}}",
              type:'POST',
              data: {_token:_token, firstname:firstname, middlename:middlename, lastname:lastname, address:address},
              success: function(data) 
              { 
                // No error empty the field and previous error msg if any.
                  if($.isEmptyObject(data.error)){
                    $(".print-error-msg").find("ul").html('');
                    $(".print-error-msg").css('display','none');
                    $(".print-success-msg").html('');
                    $(".print-success-msg").css('display','block');
                    $(".print-success-msg").html(data.success);
                    $("input[name='firstname']").val('');
                    $("input[name='middlename']").val('');
                    $("input[name='lastname']").val('');
                    $("input[name='address']").val('');
                  }else{
                    errorMsg(data.error);
                  }
              }
          });
      }); 
      // Function to show error messages
    function errorMsg (msg) {
      $(".print-success-msg").find("ul").html('');
      $(".print-success-msg").css('display','none');
      $(".print-error-msg").find("ul").html('');
      $(".print-error-msg").css('display','block');
      $.each( msg, function( key, value ) {
        $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
      });
    }
  });
</script>

@stop