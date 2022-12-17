@extends('layout.master')

<link rel="stylesheet" type="text/css" href="{{url('styles/category.css') }}">
<link rel="stylesheet" type="text/css" href="{{url('styles/category_responsive.css') }}">




<div class="pre">
  <img src="../images/logoo.png" width="70px" alt="">
    </div>

{{-- <h1>    Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia doloribus odit reiciendis, iste harum neque, laboriosam vitae tenetur temporibus nam eius laborum adipisci eveniet natus? Animi iure sed sit nulla.</h1> --}}
	<div class="super_container_inner">
		<div class="super_overlay"></div>
<br><br><br><br>

 <div class="home_content text-center">
		<div class="home_title" style="font-weight: bolder; color:rgb(7, 61, 0)">SHOP</div>
					
				</div>



				<div class="breadcrumbs d-flex flex-column align-items-center justify-content-center">
						<ul class="d-flex flex-row align-items-start justify-content-start text-center">
							<li><a href="{{'/'}}" style="font-weight: bolder; color:rgb(0, 0, 0)">Home</a></li>
							<li><a href="{{url('shop')}}" style="font-weight: bolder; color:rgb(0, 0, 0)">All products</a></li>
							
						</ul>
					</div>


				

				@section('content')

				<div class="row products_row products_container grid">
					@foreach ($products as $product)
						
					
					
					<!-- Product -->
					<div class="col-xl-4  col-md-6" >
						<div class="product">
							<div class="product_image" style="border: 1px solid rgb(207, 207, 207)"><a href="{{url('product/'.$product->url)}}"><img src="{{url($product->picture)}}" alt=""  width="100%" height="300px"></a></div>
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
											<div><div><img src="../images/heart_2.svg" class="svg" alt=""><div>+</div></div></div>
										</div>
										<div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
											<div><div>
											<a href="javascript:addcart({{$product->id}})"><img src="../images/cart.svg" alt="" class="svg"></a><div>+</div>	
											</div></div> 
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="text-success" id="cart_feedback{{$product->id}}"></div>
					</div>

					@endforeach

				</div>

				<div class="row load_more_row">
					<div class="col" style="display: flex; justify-content:center; color:black">
						{{$products->links('pagination::bootstrap-4')}}
					</div>
				</div>

			</div>

            <br><br>
			
		</div>

		@stop
		</div>

                                