@extends('layout.master')

<link rel="stylesheet" type="text/css" href="{{url('plugins/flexslider/flexslider.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('styles/product.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('styles/product_responsive.css')}}">

@section('content')

<div class="pre">
  <img src="../images/logoo.png" width="100px" alt="">
    </div>


	<div class="product">
			<div class="container">
				<div class="row">
					
					<!-- Product Image -->
					<div class="col-lg-6">
						<div class="product_image_slider_container">
							<div id="slider" class="flexslider">



								<ul class="slides">
									@if ($product->picture)
										<li>
										<img src="{{url($product->picture)}}" />
									</li>
									@endif
									
									
									 @if ($product->picture)
									<li>
										<img src="{{url($product->picture1)}}" />
									</li>
									@endif
									 
									@if ($product->picture)
									<li>
										<img src="{{url($product->picture2)}}" />
									</li>
									@endif
									 
									@if ($product->picture)
									<li>
										<img src="{{url($product->picture3)}}" />
									</li>
									@endif
									
								</ul>


							</div>

							@if ($product->picture && $product->picture1 && $product->picture2)
								

							<div class="carousel_container">
								<div id="carousel" class="flexslider">


									<ul class="slides">
									@if ($product->picture)
										<li>
										<img src="{{url($product->picture)}}" />
									</li>
									@endif
									
									
										@if ($product->picture)
										<li>
										<img src="{{url($product->picture1)}}" />
									</li>
									@endif
									

									
									@if ($product->picture)
										<li>
										<img src="{{url($product->picture2)}}" />
									    </li>
									@endif
									

									@if ($product->picture)
										<li>
										<img src="{{url($product->picture3)}}" />
									    </li>
									@endif
									
									
								</ul>
								</div>
								<div class="fs_prev fs_nav disabled"><i class="fa fa-chevron-up" aria-hidden="true"></i></div>
								<div class="fs_next fs_nav"><i class="fa fa-chevron-down" aria-hidden="true"></i></div>
							</div>
							@endif
							
						</div>
					</div>

					<!-- Product Info -->
					<div class="col-lg-6 product_col">
						<div class="product_info">
							<div class="product_name">{{ ucwords($product->name) }}</div>
							
							<div class="product_category">In <a href="{{url('category/'.$product->category->url)}}">@if($product->category){{$product->category->name}}@endif</a></div>
							
							<div class="product_rating_container d-flex flex-row align-items-center justify-content-start">
								<div class="rating_r rating_r_4 product_rating"><i></i><i></i><i></i><i></i><i></i></div>
								<div class="product_reviews">4.7 out of (3514)</div>
								<div class="product_reviews_link"><a href="#">Reviews</a></div>
							</div>
							<div class="product_price">&#8358;{{number_format($product->price/100, 2)}}<span></span></div>
							{{-- <div class="product_size">
								<div class="product_size_title">Select Size</div>
								<ul class="d-flex flex-row align-items-start justify-content-start">
									<li>
										<input type="radio" id="radio_1" disabled name="product_radio" class="regular_radio radio_1">
										<label for="radio_1">XS</label>
									</li>
									<li>
										<input type="radio" id="radio_2" name="product_radio" class="regular_radio radio_2" checked>
										<label for="radio_2">S</label>
									</li>
									<li>
										<input type="radio" id="radio_3" name="product_radio" class="regular_radio radio_3">
										<label for="radio_3">M</label>
									</li>
									<li>
										<input type="radio" id="radio_4" name="product_radio" class="regular_radio radio_4">
										<label for="radio_4">L</label>
									</li>
									<li>
										<input type="radio" id="radio_5" name="product_radio" class="regular_radio radio_5">
										<label for="radio_5">XL</label>
									</li>
									<li>
										<input type="radio" id="radio_6" disabled name="product_radio" class="regular_radio radio_6">
										<label for="radio_6">XXL</label>
									</li>
								</ul>
							</div> --}}
							<div class="product_text">
								<p>{{($product->description)}}</p>
							</div>
							<div class="product_buttons">
								<div class="text-right d-flex flex-row align-items-start justify-content-start">
									<div class="product_button product_fav text-center d-flex flex-column align-items-center justify-content-center">
										<div><div><img src="http://localhost/shop/public/images/heart_2.svg" class="svg" alt=""><div>+</div></div></div>
									</div>
									<div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
										<div><div>
											<a href="javascript:addcart({{$product->id}})"><img src="../images/cart.svg" alt="" class="svg"></a><div>+</div>	
											</div></div>
									</div>
								</div>
							</div>
						</div>
						<div class="text-success" id="cart_feedback{{$product->id}}"></div>
					</div>


				</div>
			</div>
		</div>



@endsection