
<!DOCTYPE html>
<html lang="en">
  <head>
	<link rel="Shortcut Icon" type="image/png" href="{{url('/images/logoo.png')}}" type="" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <base href="{{url('/')}}"/>
    <title>Divine Stores</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
    <meta name="robots" content="index, follow">
    <meta name="apple-mobile-web-app-title" content="Superior Link Nigeria Limited is a diversified sector across Nigeria. We feature in Oil & Gas, Agriculture, E-Commerce, etc."/>
   
    <meta name="msapplication-TileColor" content="#ffffff"/>
    <meta name="description" content="Shop.">
     <link rel="shortcut icon" type="image/png" href="{{ asset('asset/img/favicon.png') }}">
   
    <link rel="stylesheet" href="{{url('/')}}/asset/frontend/css/sweetalert.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="{{url('/')}}/asset/global_assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
    <link href="{{url('/')}}/asset/global_assets/css/icons/fontawesome/styles.min.css" rel="stylesheet" type="text/css">
    <link href="{{url('/')}}/asset/user/assets/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="{{url('/')}}/asset/user/assets/css/bootstrap_limitless.css" rel="stylesheet" type="text/css">
    <link href="{{url('/')}}/asset/user/assets/css/layout.css" rel="stylesheet" type="text/css">
    <link href="{{url('/')}}/asset/user/assets/css/components.min.css" rel="stylesheet" type="text/css">
    <link href="{{url('/')}}/asset/user/assets/css/colors.css" rel="stylesheet" type="text/css">
    <script src="{{url('/')}}/asset/global_assets/js/main/jquery.min.js"></script>
    <script src="{{url('/')}}/asset/global_assets/js/main/bootstrap.bundle.min.js"></script>
    <script src="{{url('/')}}/asset/global_assets/js/plugins/loaders/blockui.min.js"></script>
    <script src="{{url('/')}}/asset/global_assets/js/plugins/ui/ripple.min.js"></script>
    <script src="{{url('/')}}/asset/global_assets/js/plugins/visualization/d3/d3.min.js"></script>
    <script src="{{url('/')}}/asset/global_assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
    <script src="{{url('/')}}/asset/global_assets/js/plugins/forms/styling/switchery.min.js"></script>
    <script src="{{url('/')}}/asset/global_assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
    <script src="{{url('/')}}/asset/global_assets/js/plugins/ui/moment/moment.min.js"></script>
    <script src="{{url('/')}}/asset/global_assets/js/plugins/pickers/daterangepicker.js"></script>
    <script src="{{url('/')}}/asset/global_assets/js/plugins/tables/datatables/datatables.min.js"></script>
    <script src="{{url('/')}}/asset/global_assets/js/plugins/tables/datatables/extensions/responsive.min.js"></script>
    <script src="{{url('/')}}/asset/global_assets/js/plugins/forms/selects/select2.min.js"></script>
    <script src="{{url('/')}}/asset/global_assets/js/plugins/ui/prism.min.js"></script>
    <script src="{{url('/')}}/asset/global_assets/js/plugins/editors/summernote/summernote.min.js"></script>
    <script src="{{url('/')}}/asset/global_assets/js/plugins/forms/styling/uniform.min.js"></script>
    <script src="{{url('/')}}/asset/global_assets/js/plugins/forms/validation/validate.min.js"></script>
    <script src="{{url('/')}}/asset/global_assets/js/plugins/forms/inputs/touchspin.min.js"></script>
    <script src="{{url('/')}}/asset/global_assets/js/plugins/forms/selects/select2.min.js"></script>
    <script src="{{url('/')}}/asset/global_assets/js/plugins/forms/styling/switch.min.js"></script>
    <script src="{{url('/')}}/asset/user/assets/js/app.js"></script>
    <script src="{{url('/')}}/asset/global_assets/js/demo_pages/dashboard.js"></script>
    <script src="{{url('/')}}/asset/global_assets/js/demo_pages/login.js"></script>
    <script src="{{url('/')}}/asset/global_assets/js/demo_pages/datatables_advanced.js"></script>
    <script src="{{url('/')}}/asset/global_assets/js/demo_pages/datatables_basic.js"></script>
    <script src="{{url('/')}}/asset/global_assets/js/demo_pages/form_layouts.js"></script>
    <script src="{{url('/')}}/asset/global_assets/js/demo_pages/form_select2.js"></script>
    <script src="{{url('/')}}/asset/global_assets/js/demo_pages/form_checkboxes_radios.js"></script>
    <script src="{{url('/')}}/asset/global_assets/js/demo_pages/form_validation.js"></script>
    <script src="{{url('/')}}/asset/global_assets/js/demo_pages/datatables_responsive.js"></script>
    <script src="{{url('/')}}/asset/tinymce/tinymce.min.js"></script>
    <script src="{{url('/')}}/asset/tinymce/init-tinymce.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="{{url('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js')}}"></script>
	<script src="{{url('js/product.js')}}"></script>
    <script src="{{url('js/category.js') }}"></script>
    @yield('css')
    </head>

<body class="">
	<!-- Main navbar -->

	


	<div class="navbar navbar-expand-md navbar-light navbar-static">
    <div class="navbar-header navbar-dark d-none d-md-flex align-items-md-center">
        <div class="navbar-brand navbar-brand-md">
          <a href="{{url('/')}}" class="d-inline-block">
		  	
          </a>
        </div>
        
        <div class="navbar-brand navbar-brand-xs">
          <a href="{{url('/')}}" class="d-inline-block">
		  	
          </a>
        </div>
    </div>
		<div class="d-md-none">
			<button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
				<i class="icon-paragraph-justify3"></i>
			</button>
		</div>
		<div class="collapse navbar-collapse" id="navbar-mobile">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
          				<i class="icon-paragraph-justify3"></i>
					</a>
				</li>
			</ul>
			<span class="navbar-text ml-md-3 mr-md-auto">
				<span class="badge badge-mark border-orange-300 mr-2"></span>
				 
				Welcome back, {{auth()->user()->name}}
			
			</span>

			<ul class="navbar-nav">
				<li class="nav-item dropdown dropdown-user" style="display: flex">
					<span class="navbar-nav-link" style="margin-top: 6px"><i class="fa fa-envelope fa-1x" aria-hidden="true"></i></span>
					<span class="navbar-nav-link" style="margin-top: 6px"><i class="fa fa-bell-o" aria-hidden="true"></i></span>
					<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
						
						
						<span><i class="fa fa-user" aria-hidden="true"></i></span>
					</a>

					<div class="dropdown-menu dropdown-menu-right">
						<a href="#" class="dropdown-item"><i class="icon-lock"></i> Account information</a>
						<a href="{{url('logout')}}" class="dropdown-item"><i class="icon-switch2"></i> Logout</a>
					</div>
					
				</li>
			</ul>
		</div>
	</div>
	<div class="page-content">


		<!-- Main sidebar -->
		<div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">

			<!-- Sidebar mobile toggler -->
			<div class="sidebar-mobile-toggler text-center">
				<a href="#" class="sidebar-mobile-main-toggle">
					<i class="icon-arrow-left8"></i>
				</a>
				Navigation
				<a href="#" class="sidebar-mobile-expand">
					<i class="icon-screen-full"></i>
					<i class="icon-screen-normal"></i>
				</a>
			</div>
			<!-- /sidebar mobile toggler -->


			<!-- Sidebar content -->
			<div class="sidebar-content">
				@foreach ($profile as $pp)
					
				<a href="{{url('account')}}"><div style="margin-left: 10px; margin-top: 20px;"> <span><img src="{{url($pp->profile_picture)}}"  class="rounded-circle" alt=""  style=" height:35px; width:35px"></span> <span style="font-size: 15px; padding-left: 5px; color:#fff ">{{auth()->user()->name}}</span></div></a>
				@endforeach
				<!-- User menu -->
				<div class="sidebar-user-material">
					<div class="sidebar-user-material-body">
						<div class="card-body text-center">
							<h6 class="mb-0 text-white text-shadow-dark"></h6>
							<span class="font-size-sm text-white text-shadow-dark"></span>
						</div>
					</div>
					<div class="sidebar-user-material-footer">
							<a href="#user-nav" class="d-flex justify-content-between align-items-center text-shadow-dark dropdown-toggle" data-toggle="collapse"><span>My account</span></a>
						</div>
				</div>
				<div class="collapse" id="user-nav">
						<ul class="nav nav-sidebar">
							<li class="nav-item">
								<a href="#" class="nav-link">
									<i class="icon-lock"></i>
									<span>Account information</span>
								</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link">
									<i class="icon-switch2"></i>
									<span>Logout</span>
								</a>
							</li>
						</ul>
					</div>
				<!-- /user menu -->
	
				
				<!-- Main navigation -->
				<div class="card card-sidebar-mobile">
					<ul class="nav nav-sidebar" data-nav-type="accordion">

						<!-- Main -->
						<li class="nav-item">
							<a href="{{url('dash')}}" class="nav-link">
								<i class="fa fa-tachometer" aria-hidden="true"></i>
								<span>
									Dashboard
								</span>
							</a>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-lan2"></i><span>E-Commerce</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Transfer">
								<li class="nav-item"><a href="{{url('categories/create')}}" class="nav-link"><i class="icon-office"></i>Add Category</a></li>
								<li class="nav-item"><a href="{{url('categories/all')}}" class="nav-link"><i class="icon-city"></i>All Categories</a></li>
								<li class="nav-item"><a href="{{url('products/create')}}" class="nav-link"><i class="icon-phone"></i>Add Product</a></li>
								<li class="nav-item"><a href="{{url('products/all')}}" class="nav-link"><i class="icon-cart"></i>All Products</a></li>
							</ul>
						</li>											
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-user-plus"></i> <span>User Manangement</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="User Manangement">
								<li class="nav-item"><a href="#" class="nav-link"><i class="icon-user"></i> Client accounts</a></li>
								<li class="nav-item"><a href="#" class="nav-link"><i class="icon-bubbles5"></i>Support ticket</a></li>
								<li class="nav-item"><a href="#" class="nav-link"><i class="icon-envelope"></i>Promotional Emails</a></li>
								<li class="nav-item"><a href="#" class="nav-link"><i class="icon-bubbles5"></i>Messages</a></li>
							</ul>
						</li>

						<li class="nav-item">
							<a href="{{url('home_display')}}" class="nav-link">
								<i class="fa fa-pencil-square"></i>
								<span>
									Edit Home Display
								</span>
							</a>
						</li>

						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="fa fa-envelope fa-1x" aria-hidden="true"></i></i> <span>Mails</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="System configuration">
								
								<li class="nav-item"><a href="{{url('inbox')}}" class="nav-link"><i class="icon-bubble"></i>Inbox</a></li>
								<li class="nav-item"><a href="#" class="nav-link"><i class="icon-envelope"></i>Email</a></li>
								
								
							</ul>
						</li>						
						<li class="nav-item nav-item-submenu">
							<a href="{{'account'}}" class="nav-link"><i class="icon-cogs spinner"></i> <span>Update Account</span></a>
						</li>												
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="fa fa-credit-card-alt" aria-hidden="true"></i></i><span>Payments</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Deposit">
								<li class="nav-item"><a href="#" class="nav-link"><i class="icon-puzzle4"></i>Payment gateways</a></li>
								<li class="nav-item"><a href="#" class="nav-link"><i class="icon-list-unordered"></i>Deposit log</a></li>
								<li class="nav-item"><a href="#" class="nav-link"><i class="icon-spinner2 spinner"></i>Pending deposit</a></li>
								<li class="nav-item"><a href="#" class="nav-link"><i class="icon-thumbs-up2"></i>Approved deposit</a></li>
								<li class="nav-item"><a href="#" class="nav-link"><i class="icon-thumbs-down2"></i>Declined deposit</a></li>
							</ul>
						</li>





						<li class="nav-item">
							<a href="{{url('/')}}" class="nav-link">
								<i class="icon-home4"></i>
								<span>
									Home page
								</span>
							</a>
						</li>

						
						{{-- <li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-pipe"></i><span>Oil & Gas</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Withdraw">
								<li class="nav-item"><a href="#" class="nav-link"><i class="icon-list-unordered"></i>Withdraw log</a></li>
								<li class="nav-item"><a href="#" class="nav-link"><i class="icon-spinner2 spinner"></i>Unpaid withdrawal</a></li>
								<li class="nav-item"><a href="#" class="nav-link"><i class="icon-thumbs-up2"></i>Approved withdrawal</a></li>
								<li class="nav-item"><a href="#" class="nav-link"><i class="icon-accessibility"></i>Declined withdrawal</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-magazine"></i> <span>News Section</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="News Section">
								<li class="nav-item"><a href="#" class="nav-link"><i class="icon-quill4"></i>New Post</a></li>
								<li class="nav-item"><a href="#" class="nav-link"><i class="icon-newspaper"></i>Articles</a></li>
								<li class="nav-item"><a href="#"class="nav-link"><i class="icon-clipboard6"></i>Category</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-home4"></i> <span>Web control</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="News Section">
								<li class="nav-item"><a href="{{url('/')}}" class="nav-link"><i class="icon-home4"></i>Homepage</a></li>
								<li class="nav-item"><a href="{{url('logos/create')}}" class="nav-link"><i class="icon-image2"></i>Logo & Favicon</a></li>	
								<li class="nav-item"><a href="#"class="nav-link"><i class="icon-clipboard6"></i>Platform Review</a></li>
								<li class="nav-item"><a href="#"class="nav-link"><i class="icon-accessibility"></i>Services</a></li>
								<li class="nav-item"><a href="#" class="nav-link"><i class="icon-stack"></i>Webpages</a></li>
								<li class="nav-item"><a href="#" class="nav-link"><i class="icon-coin-euro"></i>Currency</a></li>
								<li class="nav-item"><a href="#" class="nav-link"><i class="icon-question4"></i>FAQs</a></li>
								<li class="nav-item"><a href="#" class="nav-link"><i class="icon-file-check"></i>Terms & Condition</a></li>
								<li class="nav-item"><a href="#" class="nav-link"><i class="icon-file-check"></i>Privacy policy</a></li>
								<li class="nav-item"><a href="{{url('abouts/create')}}" class="nav-link"><i class="icon-file-check"></i>About us</a></li>
								<li class="nav-item"><a href="{{url('aboutus/create')}}" class="nav-link"><i class="icon-share2"></i>Social Links</a></li>
							</ul>
						</li> --}}
					</ul>
				</div>
				<!-- /main navigation -->

			</div>
			<!-- /sidebar content -->
			
		</div>
		<div class="content-wrapper">
			<div class="page-header page-header-light">
				<div class="page-header-content header-elements-md-inline">
					<div class="page-title d-flex">
						<h4><span class="font-weight-semibold">Divine Stores</span></h4>
					</div>
				</div>
			</div>
@yield('content')


<!-- footer begin -->
<!--  -->
  <script src="{{url('/')}}/asset/frontend/js/sweetalert.js"></script>
	</div>
	<!-- /page content -->

</body>
</html>


@if (session('alert'))
    <script>
      "use strict";
        $(document).ready(function () {
            swal("Sorry!", "{{ session('alert') }}", "error");
        });
    </script>
@endif
    <script>
    @if(Session::has('message'))
    "use strict";
    var type = "{{Session::get('alert-type','info')}}";
    switch (type) {
        case 'info':
            toastr.info("{{Session::get('message')}}");
            break;
        case 'warning':
            toastr.warning("{{Session::get('message')}}");
            break;
        case 'success':
            toastr.success("{{Session::get('message')}}");
            break;
        case 'error':
            toastr.error("{{Session::get('message')}}");
            break;
    }
    @endif
</script>
<script type="text/javascript">
  $(window).on('load', function () {
    $('#modal-notification').modal('show');
  });
</script>
<script type="text/javascript">
    $("document").ready(function (){
        setTimeout(function(){
            $("div.alert").remove();
        }, 3000);

    });
</script>
