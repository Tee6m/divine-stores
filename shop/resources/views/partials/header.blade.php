<div class="menu">
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;<span style="color: black; font-size:50px" ><a href="#" class="close" style="color: black">X</a></span>

	<!-- Search -->
	<div class="menu_search">
		<form action="{{ url('search') }}" id="menu_search_form" class="menu_search_form" method="GET">
			<input type="text" class="search_input typehead" id="search_product" placeholder="Search Item" name="search" value="{{Request::get('search')}}" required="required">
			<button class="menu_search_button"><img src="http://localhost/shop/public/images/search.png" alt=""></button>
		</form>
	</div>
	&nbsp;&nbsp;&nbsp;
	<!-- Navigation -->
	<div class="menu_nav">
		<ul>
			<li><a href="#">Top products</a></li>
			&nbsp;
			<li><a href="{{url('shop')}}">Shop</a></li>
			&nbsp;
			<li><a href="#">Track my Order</a></li>
			&nbsp;
			<li><a href="{{url('profile')}}">My Account</a></li>
			&nbsp;
			<li><a href="{{url('contact')}}">Contact</a></li>
			&nbsp;
		</ul>
	</div>
	<!-- Contact Info -->
	<div class="menu_contact">
		<div class="menu_phone d-flex flex-row align-items-center justify-content-start">
			<div><div><img src="http://localhost/shop/public/images/phone.svg" alt="https://www.flaticon.com/authors/freepik"></div></div>
			<div>+2349096668226</div>
		</div>
		<div class="menu_social">
			<ul class="menu_social_list d-flex flex-row align-items-start justify-content-start">
				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</div>
</div>

	<header class="header">
		<div class="header_overlay"></div>
		<div class="header_content d-flex flex-row align-items-center justify-content-start">
			<div class="logo">
				<a href="{{url('/')}}">
					<div class="d-flex flex-row align-items-center justify-content-start">
						{{-- @auth --}}

						@foreach ($shopName as $shop)
							
						
						<div><img src="../images/logo_1.png" alt=""></div>
						<div>{{$shop->shopname}}</div>

						@endforeach

						{{-- @else 

						@endauth --}}
					</div>
				</a>	
			</div>
			<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
			<nav class="main_nav">
				<ul class="d-flex flex-row align-items-start justify-content-start">
					<li class="active"><a href="#">Top Products</a></li>
					<li><a href="{{url('shop')}}">Shop</a></li>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<li><a href="#">Track My Order</a></li>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<li><a href="{{url('profile')}}">My Account</a></li>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<li><a href="{{url('contact')}}">Contact</a></li>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</ul>
			</nav>
			&nbsp;&nbsp;&nbsp;
			<div class="header_right d-flex flex-row align-items-center justify-content-start ml-auto">
				<!-- Search -->
				<div class="header_search">
					<form action="{{ url('search') }}" id="header_search_form" method="GET">
						<input type="text" class="search_input typeahead" id="search_product" placeholder="Search Item" name="search" value="{{Request::get('search')}}" required="required">
						<button class="header_search_button"><img src="http://localhost/shop/public/images/search.png" alt=""></button>
					</form>
				</div>
				<!-- User -->
				@auth
				<div class="dropdown">
  <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    {{-- {{Auth::user()->name }} Or  --}}
	{{-- <img src="{{url('images/h1.jpg')}}" alt="" width="40px" height="35px" style="border-radius: 50%"> --}}
	<i class="fa fa-user fa-1x" aria-hidden="true"></i>
  </button>
  <ul class="dropdown-menu">
	<li><a class="dropdown-item" href="{{url('home')}}">Home</a></li> 
	<li><a class="dropdown-item" href="{{url('settings')}}">Settings</a></li>
    <li><a class="dropdown-item" href="{{url('logout')}}">Logout</a></li>

	@if(auth()->user()->admin)
        <li><a class="dropdown-item" href="{{url('dash')}}">ADMIN Dashboard</a></li>
	@endif
    
    
  </ul>
</div>&nbsp;&nbsp;&nbsp;&nbsp;

				@else
				<div class="dropdown">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    Account
  </a>

  <ul class="dropdown-menu">
<li><a class="dropdown-item" href="{{url('login')}}">Login</a></li>
    <li><a class="dropdown-item" href="{{url('register')}}">Register</a></li>
  </ul>
</div>&nbsp;&nbsp;

				@endauth
				<!-- Cart -->
				<div class="user">
              <a href="#"
                ><div>
                  <img
                    src="../images/heart_2.svg"
                    alt="https://www.flaticon.com/authors/freepik"
                  />
                  <div>1</div>
                </div></a
              >
            </div>

			{{-- This one is for cart --}}
			<div class="user">
              <a href="{{url('cart')}}"
                ><div>
                  <img
                    src="../images/cart.svg"
                    alt="https://www.flaticon.com/authors/freepik"
                  />
                  <div style="background-color:Transparent;" id="cart_count" ></div>
                </div></a
              >
            </div>


				{{-- <span style="margin-bottom:40px; color:white" id="cart_count"></span>
				<div class="cart"><a href="{{url('cart')}}"><div><img src="http://localhost/shop/public/images/cart.svg" alt="https://www.flaticon.com/authors/freepik"><div> </div></div></a></div> --}}
				
				&nbsp;
				{{-- heart --}}
				{{-- <div class="cart"><a href="{{url('#')}}"><div><span id="favorite_count"></span><img src="http://localhost/shop/public/images/like.png" alt="https://www.flaticon.com/authors/freepik"><div> </div></div></a></div> --}}
				
				<!-- Phone -->
				{{-- <div class="header_phone d-flex flex-row align-items-center justify-content-start">
					<div><div><a href="{{url('contact')}}"><img src="http://localhost/shop/public/images/phone.svg" alt="https://www.flaticon.com/authors/freepik"></a></div></div>
				</div> --}}

			</div>
		</div>
	</header>
