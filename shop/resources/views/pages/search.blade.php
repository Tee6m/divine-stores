@extends('layout.master')

<link rel="stylesheet" type="text/css" href="{{url('styles/category.css') }}">
<link rel="stylesheet" type="text/css" href="{{url('styles/category_responsive.css') }}">

@section('content')
<br><br><br>

{{-- <Div><h3 style="font-weight: bold; color:black; text-align:center" class=""></h3></Div> --}}

<div class="products">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 offset-lg-3">
						<div class="section_title text-center" style="font-weight: bold; color:black;">Search Results</div>
					</div>
				</div>
<div class="row products_row">
					@forelse ($search_products as $product)
						
					
					<!-- Product -->
					<div class="col-xl-4 col-md-6">
						<div class="product">
							<div class="product_image" style="border: 1px solid rgb(207, 207, 207)"><a href="{{url('product/'.$product->url)}}"><img src="{{url($product->picture)}}" alt="" width="350px" height="250px"></a></div>
							<div class="product_content">
								<div class="product_info d-flex flex-row align-items-start justify-content-start">
									<div>
										<div>
											<div class="product_name"><a href="{{url('product/'.$product->url)}}">{{$product->name}}</a></div>
											<div class="product_category">In <a href="{{url('category/'.$product->category->url)}}">
											    {{$product->category->name}}
												{{-- @if ($product->category_id)
													{{$product->category->name}}
												@endif --}}
											
											</a></div>
										</div>
									</div>
									<div class="ml-auto text-right">
										<div class="rating_r rating_r_4 home_item_rating"><i></i><i></i><i></i><i></i><i></i></div>
										<div class="product_price text-right">&#8358; <span>{{number_format($product->price/100, 2)}}</span></div>
									</div>
								</div>
								<div class="product_buttons">
									<div class="text-right d-flex flex-row align-items-start justify-content-start">
										<div class="product_button product_fav text-center d-flex flex-column align-items-center justify-content-center">
											<div><div><img src="images/heart_2.svg" class="svg" alt=""><div>+</div></div></div>
										</div>
										<div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
											<div><div>
											<a href="javascript:addcart({{$product->id}})"><img src="images/cart.svg" alt="" class="svg"></a><div>+</div>	
											</div></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="text-success" id="cart_feedback{{$product->id}}"></div>
					</div>

</div>
			</div>

					@empty
					<h4 style="color: black">
					&nbsp; Product Unavailable 😔😔 
					</h4>
					
					
					
					@endforelse

					<div class="row load_more_row">
					<div class="col" style="display: flex; justify-content:center">
						{{$search_products->appends(request()->input())->links('pagination::bootstrap-4')}}
					</div>
				</div>


			</div> <br>


			<div  style="display: flex; justify-content:center"><a href="{{url('/')}}" class="btn btn-success" style="text-align:center" data-text="KEEP SHOPPING">CONTINUE SHOPPING</a></div>
			<br>

@endsection                    