<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>Metronic | Form Stuff - Form Controls</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>
<meta name="MobileOptimized" content="320">

<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="<?php echo e(asset('plugins/font-awesome/css/font-awesome.min.css')); ?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo e(asset('plugins/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo e(asset('plugins/uniform/css/uniform.default.css')); ?>" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->

<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href=" <?php echo e(asset('/plugins/select2/select2_metro.css')); ?>"/>
<link rel="stylesheet" href=" <?php echo e(asset('/plugins/data-tables/DT_bootstrap.css')); ?>"/>
<!-- END PAGE LEVEL STYLES -->

<!-- BEGIN THEME STYLES -->
<link href="<?php echo e(asset('css/style-metronic.css')); ?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo e(asset('css/style-responsive.css')); ?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo e(asset('css/plugins.css')); ?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo e(asset('css/themes/default.css')); ?>" rel="stylesheet" type="text/css" id="style_color"/>
<link href="<?php echo e(asset('css/custom.css')); ?>" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->

<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed">
<!-- BEGIN HEADER -->
<div class="header navbar navbar-inverse navbar-fixed-top">
	<!-- BEGIN TOP NAVIGATION BAR -->
	<div class="header-inner">
		<!-- BEGIN LOGO -->
		<a class="navbar-brand" href="index.html">
		<!--<img src="<?php echo e(asset('/img/logo.png')); ?>" alt="logo" class="img-responsive"/> -->
			CABUYAO
		</a>
		<!-- END LOGO -->
		<!-- BEGIN RESPONSIVE MENU TOGGLER -->
		<a href="javascript:;" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		<img src="<?php echo e(asset('/img/menu-toggler.png')); ?>" alt=""/>
		</a>
		<!-- END RESPONSIVE MENU TOGGLER -->
		<!-- BEGIN TOP NAVIGATION MENU -->
		<ul class="nav navbar-nav pull-right">
			<!-- BEGIN NOTIFICATION DROPDOWN -->
			<li class="dropdown" id="header_notification_bar">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
				<i class="fa fa-warning"></i>
				<span class="badge">
					6
				</span>
				</a>
				<ul class="dropdown-menu extended notification">
					<li>
						<p>
							You have 14 new notifications
						</p>
					</li>
					<li>
						<ul class="dropdown-menu-list scroller" style="height: 250px;">
							<li>
								<a href="#">
								<span class="label label-icon label-success">
									<i class="fa fa-plus"></i>
								</span>
								 New user registered.
								<span class="time">
									Just now
								</span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="label label-icon label-danger">
									<i class="fa fa-bolt"></i>
								</span>
								 Server #12 overloaded.
								<span class="time">
									15 mins
								</span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="label label-icon label-warning">
									<i class="fa fa-bell-o"></i>
								</span>
								 Server #2 not responding.
								<span class="time">
									22 mins
								</span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="label label-icon label-info">
									<i class="fa fa-bullhorn"></i>
								</span>
								 Application error.
								<span class="time">
									40 mins
								</span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="label label-icon label-danger">
									<i class="fa fa-bolt"></i>
								</span>
								 Database overloaded 68%.
								<span class="time">
									2 hrs
								</span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="label label-icon label-danger">
									<i class="fa fa-bolt"></i>
								</span>
								 2 user IP blocked.
								<span class="time">
									5 hrs
								</span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="label label-icon label-warning">
									<i class="fa fa-bell-o"></i>
								</span>
								 Storage Server #4 not responding.
								<span class="time">
									45 mins
								</span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="label label-icon label-info">
									<i class="fa fa-bullhorn"></i>
								</span>
								 System Error.
								<span class="time">
									55 mins
								</span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="label label-icon label-danger">
									<i class="fa fa-bolt"></i>
								</span>
								 Database overloaded 68%.
								<span class="time">
									2 hrs
								</span>
								</a>
							</li>
						</ul>
					</li>
					<li class="external">
						<a href="#">See all notifications <i class="m-icon-swapright"></i></a>
					</li>
				</ul>
			</li>
			<!-- END NOTIFICATION DROPDOWN -->
			
			<!-- BEGIN INBOX DROPDOWN -->
			<li class="dropdown" id="header_inbox_bar">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
				<i class="fa fa-envelope"></i>
				<span class="badge">
					5
				</span>
				</a>
				<ul class="dropdown-menu extended inbox">
					<li>
						<p>
							You have 12 new messages
						</p>
					</li>
					<li>
						<ul class="dropdown-menu-list scroller" style="height: 250px;">
							<li>
								<a href="inbox14c8.html?a=view">
								<span class="photo">
									<img src="assets/img/avatar2.jpg" alt=""/>
								</span>
								<span class="subject">
									<span class="from">
										Lisa Wong
									</span>
									<span class="time">
										Just Now
									</span>
								</span>
								<span class="message">
									 Vivamus sed auctor nibh congue nibh. auctor nibh auctor nibh...
								</span>
								</a>
							</li>
							<li>
								<a href="inbox14c8.html?a=view">
								<span class="photo">
									<img src="assets/img/avatar3.jpg" alt=""/>
								</span>
								<span class="subject">
									<span class="from">
										Richard Doe
									</span>
									<span class="time">
										16 mins
									</span>
								</span>
								<span class="message">
									 Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh...
								</span>
								</a>
							</li>
							<li>
								<a href="inbox14c8.html?a=view">
								<span class="photo">
									<img src="assets/img/avatar1.jpg" alt=""/>
								</span>
								<span class="subject">
									<span class="from">
										Bob Nilson
									</span>
									<span class="time">
										2 hrs
									</span>
								</span>
								<span class="message">
									 Vivamus sed nibh auctor nibh congue nibh. auctor nibh auctor nibh...
								</span>
								</a>
							</li>
							<li>
								<a href="inbox14c8.html?a=view">
								<span class="photo">
									<img src="assets/img/avatar2.jpg" alt=""/>
								</span>
								<span class="subject">
									<span class="from">
										Lisa Wong
									</span>
									<span class="time">
										40 mins
									</span>
								</span>
								<span class="message">
									 Vivamus sed auctor 40% nibh congue nibh...
								</span>
								</a>
							</li>
							<li>
								<a href="inbox14c8.html?a=view">
								<span class="photo">
									<img src="assets/img/avatar3.jpg" alt=""/>
								</span>
								<span class="subject">
									<span class="from">
										Richard Doe
									</span>
									<span class="time">
										46 mins
									</span>
								</span>
								<span class="message">
									 Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh...
								</span>
								</a>
							</li>
						</ul>
					</li>
					<li class="external">
						<a href="inbox.html">See all messages <i class="m-icon-swapright"></i></a>
					</li>
				</ul>
			</li>
			<!-- END INBOX DROPDOWN -->

			<!-- BEGIN TODO DROPDOWN -->
			<li class="dropdown" id="header_task_bar">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
				<i class="fa fa-tasks"></i>
				<span class="badge">
					5
				</span>
				</a>
				<ul class="dropdown-menu extended tasks">
					<li>
						<p>
							You have 12 pending tasks
						</p>
					</li>
					<li>
						<ul class="dropdown-menu-list scroller" style="height: 250px;">
							<li>
								<a href="#">
								<span class="task">
									<span class="desc">
										New release v1.2
									</span>
									<span class="percent">
										30%
									</span>
								</span>
								<span class="progress">
									<span style="width: 40%;" class="progress-bar progress-bar-success" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
										<span class="sr-only">
											40% Complete
										</span>
									</span>
								</span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="task">
									<span class="desc">
										Application deployment
									</span>
									<span class="percent">
										65%
									</span>
								</span>
								<span class="progress progress-striped">
									<span style="width: 65%;" class="progress-bar progress-bar-danger" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
										<span class="sr-only">
											65% Complete
										</span>
									</span>
								</span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="task">
									<span class="desc">
										Mobile app release
									</span>
									<span class="percent">
										98%
									</span>
								</span>
								<span class="progress">
									<span style="width: 98%;" class="progress-bar progress-bar-success" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100">
										<span class="sr-only">
											98% Complete
										</span>
									</span>
								</span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="task">
									<span class="desc">
										Database migration
									</span>
									<span class="percent">
										10%
									</span>
								</span>
								<span class="progress progress-striped">
									<span style="width: 10%;" class="progress-bar progress-bar-warning" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
										<span class="sr-only">
											10% Complete
										</span>
									</span>
								</span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="task">
									<span class="desc">
										Web server upgrade
									</span>
									<span class="percent">
										58%
									</span>
								</span>
								<span class="progress progress-striped">
									<span style="width: 58%;" class="progress-bar progress-bar-info" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100">
										<span class="sr-only">
											58% Complete
										</span>
									</span>
								</span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="task">
									<span class="desc">
										Mobile development
									</span>
									<span class="percent">
										85%
									</span>
								</span>
								<span class="progress progress-striped">
									<span style="width: 85%;" class="progress-bar progress-bar-success" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
										<span class="sr-only">
											85% Complete
										</span>
									</span>
								</span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="task">
									<span class="desc">
										New UI release
									</span>
									<span class="percent">
										18%
									</span>
								</span>
								<span class="progress progress-striped">
									<span style="width: 18%;" class="progress-bar progress-bar-important" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100">
										<span class="sr-only">
											18% Complete
										</span>
									</span>
								</span>
								</a>
							</li>
						</ul>
					</li>
					<li class="external">
						<a href="#">See all tasks <i class="m-icon-swapright"></i></a>
					</li>
				</ul>
			</li>
			<!-- END TODO DROPDOWN -->

			<!-- BEGIN USER LOGIN DROPDOWN -->
			<li class="dropdown user">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
				<img alt="" src="assets/img/avatar1_small.jpg"/>
				<span class="username">


				
					
				</span>
				<i class="fa fa-angle-down"></i>
				</a>
				<ul class="dropdown-menu">
					<li>
						<a href="extra_profile.html"><i class="fa fa-user"></i> My Profile</a>
					</li>
					<li>
						<a href="page_calendar.html"><i class="fa fa-calendar"></i> My Calendar</a>
					</li>
					<li>
						<a href="inbox.html"><i class="fa fa-envelope"></i> My Inbox
						<span class="badge badge-danger">
							3
						</span>
						</a>
					</li>
					<li>
						<a href="<?php echo e(url('home/logout')); ?>">Logout</a>
					</li>
				</ul>
			</li>
			<!-- END USER LOGIN DROPDOWN -->
		</ul>
		<!-- END TOP NAVIGATION MENU -->
	</div>
	<!-- END TOP NAVIGATION BAR -->
</div>
<!-- END HEADER -->

<div class="clearfix">
</div>


<!-- BEGIN CONTAINER -->
<div class="page-container">
	
	<!-- BEGIN SIDEBAR -->
	<div class="page-sidebar-wrapper">
		<div class="page-sidebar navbar-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->
			<ul class="page-sidebar-menu">
				<li class="sidebar-toggler-wrapper">
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
					<div class="sidebar-toggler hidden-phone">
					</div>
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
				</li>
				<li class="sidebar-search-wrapper">
					<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
					<form class="sidebar-search" action="http://www.keenthemes.com/preview/metronic_admin/extra_search.html" method="POST">
						<div class="form-container">
							<div class="input-box">
								<a href="javascript:;" class="remove"></a>
								<input type="text" placeholder="Search..."/>
								<input type="button" class="submit" value=" "/>
							</div>
						</div>
					</form>
					<!-- END RESPONSIVE QUICK SEARCH FORM -->
				</li>
				<li class="start ">
					<a href="/admin">
					<i class="fa fa-home"></i>
					<span class="title">
						Dashboard
					</span>
					</a>
				</li>
				<li class="">
					<a href="javascript:;">
					<i class="fa fa-user"></i>
					<span class="title">
						Users
					</span>
					<span class="arrow ">
					</span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="/admin/users">
							<i class="fa fa-user"></i>
							All Users</a>
						</li>
						<li>
							<a href="/admin/users/create">
							<i class="fa fa-plus"></i>
							Create User</a>
						</li>
					</ul>
				</li>

				<li class="">
					<a href="javascript:;">
					<i class="fa fa-list"></i>
					<span class="title">
						User Roles
					</span>
					<span class="arrow ">
					</span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="/admin/roles">
							<i class="fa fa-list"></i>
							All Users Roles</a>
						</li>
						<li>
							<a href="/admin/roles/create">
							<i class="fa fa-plus"></i>
							Add User Role</a>
						</li>
					</ul>
				</li>

			</ul>
		</div>
	</div>
	<!-- END SIDEBAR -->


	<div class="page-content-wrapper"><!-- BEGIN CONTENT WRAPPER-->
		<div class="page-content"><!-- BEGIN CONTENT -->


			<?php echo $__env->yieldContent('content'); ?>

		</div><!-- END CONTENT -->
	</div><!-- END CONTENT WRAPPER-->


</div>
<!-- END CONTAINER -->


<!-- BEGIN FOOTER -->
<div class="footer">
	<div class="footer-inner">
		 2018 © City Government of Cabuyao.
	</div>
	<div class="footer-tools">
		<span class="go-top">
			<i class="fa fa-angle-up"></i>
		</span>
	</div>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="assets/plugins/respond.min.js"></script>
<script src="assets/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src=" <?php echo e(asset('/plugins/jquery-1.10.2.min.js')); ?>" type="text/javascript"></script>
<script src=" <?php echo e(asset('/plugins/jquery-migrate-1.2.1.min.js')); ?>" type="text/javascript"></script>
<script src=" <?php echo e(asset('/plugins/bootstrap/js/bootstrap.min.js')); ?>" type="text/javascript"></script>
<script src=" <?php echo e(asset('/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js')); ?>" type="text/javascript"></script>
<script src=" <?php echo e(asset('/plugins/jquery-slimscroll/jquery.slimscroll.min.js')); ?>" type="text/javascript"></script>
<script src=" <?php echo e(asset('/plugins/jquery.blockui.min.js')); ?>" type="text/javascript"></script>
<script src=" <?php echo e(asset('/plugins/jquery.cokie.min.js')); ?>" type="text/javascript"></script>
<script src=" <?php echo e(asset('/plugins/uniform/jquery.uniform.min.js')); ?>" type="text/javascript"></script>
<!-- END CORE PLUGINS -->

<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src=" <?php echo e(asset('/plugins/select2/select2.min.js')); ?>"></script>
<script type="text/javascript" src=" <?php echo e(asset('/plugins/data-tables/jquery.dataTables.min.js')); ?>"></script>
<script type="text/javascript" src=" <?php echo e(asset('/plugins/data-tables/DT_bootstrap.js')); ?>"></script>
<!-- END PAGE LEVEL PLUGINS -->

<script src=" <?php echo e(asset('/scripts/app.js')); ?>"></script>
<script src=" <?php echo e(asset('/scripts/table-editable.js')); ?>"></script>

<script>

jQuery(document).ready(function() {   
   // initiate layout and plugins
   App.init();
   
});
</script>

	<?php echo $__env->yieldContent('footer'); ?>

 <!-- END JAVASCRIPTS -->
<script type="text/javascript">  var _gaq = _gaq || [];  _gaq.push(['_setAccount', 'UA-37564768-1']);  _gaq.push(['_setDomainName', 'keenthemes.com']);  _gaq.push(['_setAllowLinker', true]);  _gaq.push(['_trackPageview']);  (function() {    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);  })();</script>
</body>
<!-- END BODY -->
</html>