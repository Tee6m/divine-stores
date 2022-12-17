@extends('layout.master')

@section('content')



<div class="pre">
  <img src="./images/pre4.gif" width="200px" alt="">
    </div>

    
<div class="super_container_inner">
		<div class="super_overlay"></div>

        {{-- home --}}

		<div class="home" style="height: 50%">
          <!-- Home Slider -->
          <div class="home_slider_container  carousel slide" style="height: 50%">
            <div class="owl-carousel owl-theme home_slider">
              <!-- Slide -->
              <div class="owl-item" style="height: ">
                <div
                  class="background_image"
                  style="background-image: url(./images/bg1.jpg);filter: blur(4px); -webkit-filter:blur(4px)"
                ></div>
                <div class="container fill_height">
                  <div class="row fill_height">
                    <div class="col fill_height">
                      <div
                        class="home_container d-flex flex-column align-items-center justify-content-start"
                      >
                        <div class="home_content">
							@foreach ($slider_texts as $text)
								
							
                          <div class="home_title">{{$text->text1}}</div>
                          <div class="home_subtitle">{{$text->text2}}</div>

						  @endforeach
                          <div class="home_items">
                            <div class="row">
                              <div class="col-sm-3 offset-lg-1">
                                <div class="home_item_side">
                                  <a href="product.html"
                                    ><img src="images/h2.jpg" alt=""
                                  /></a>
                                </div>
                              </div>
                              <br><br><br><br><br><br><br><br>
                              <div
                                class="col-lg-4 col-md-6 col-sm-8 offset-sm-2 offset-md-0"
                              >
                                <div class="product home_item_large">
                                  
                                  <div
                                    class="product_tag d-flex flex-column align-items-center justify-content-center"
                                  >
                                    <div>
                                      <div>from</div>
                                      <div>N100<span></span></div>
                                    </div>
                                  </div>
                                  
                                  <div class="product_image">
                                    <img src="images/h3.jpg" alt="" width="200" />
                                  </div>
                                  
                                </div>
                              </div>
                              <div class="col-sm-3">
                                <div class="home_item_side">
                                  <a href="product.html"
                                    ><img src="images/h1.jpg" alt=""
                                  /></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Slide -->
              

              <!-- Slide -->
              
              <!-- Slide -->
              
            </div>
            <div class="home_slider_nav home_slider_nav_prev">
              <i class="fa fa-chevron-left" aria-hidden="true"></i>
            </div>
            <div class="home_slider_nav home_slider_nav_next">
              <i class="fa fa-chevron-right" aria-hidden="true"></i>
            </div>

            <!-- Home Slider Dots -->

            
          </div>
        </div>
		<br><br>
		<div class="row">
					<div class="col-lg-6 offset-lg-3">
						<div class="section_title text-center">Popular Categories</div>
					</div>
				</div>
				<br><br>

		<div class="boxes">
            <div class="container">
                <div class="row">
                        @forelse($categories as $category)
                        <div class="col" style="margin-bottom: 30px">
                                <div class="boxes_container d-flex flex-row  justify-content-between flex-wrap">
                                        <!-- Box -->
                                        <div class="">
                                                <div class="background_image" style="background-image:url( {{url($category->picture)}} );filter: blur(4px); -webkit-filter:blur(4px) "></div>
                                                <div class="box_content d-flex flex-row align-items-center justify-content-start">
                                                        <div class="box_left">
                                                                <div class="box_image">
                                                                        <a href="{{url('category/'.$category->url)}}">
                                                                                <div class="background_image" style="background-image:url( {{url($category->picture)}} )">
                                                                                        
                                                                                </div>
                                                                        </a>
                                                                </div>
                                                        </div>
                                                        <div class="box_right text-center" style="padding-top: 100px; width:70px">
                                                                <div class="box_title" style="color: rgb(255, 255, 255); padding-left:5px">{{ $category->name }}</div>
                                                        </div>
                                                </div> <br><br>
                                        </div>
                                </div>
                        </div>
					
                         @empty
                    <div class="text-danger">No Items Found!</div>
                    @endforelse 
                </div>
            </div>
		
        </div>

		<!-- Products -->

		<div class="products">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 offset-lg-3">
						<div class="section_title text-center">Popular Products</div>
					</div>
				</div>
				<div class="row page_nav_row">
					<div class="col">
						<div class="page_nav">
							<ul class="d-flex flex-row align-items-start justify-content-center">
								<li class="active"><a href="category.html">All</a></li>
								@foreach ($display_categories as $category)
									
								<li><a href="{{url('category/'.$category->url)}}">{{$category->name}}</a></li>
								

								@endforeach
							</ul>
						</div>
					</div>
				</div>
				<div class="row products_row">
					@foreach ($products as $product)
						
					
					<!-- Product -->
					<div class="col-xl-4  col-md-6" >
						<div class="product">
							<div class="product_image" style="border: 1px solid rgb(207, 207, 207)"><a href="{{url('product/'.$product->url)}}"><img src="{{url($product->picture)}}" alt="" width="100%" height="300px"></a></div>
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

					

					@endforeach

				</div>

				

				<div class="row load_more_row">
					<div class="col" style="display: flex; justify-content:center; color:black">
						{{$products->links('pagination::bootstrap-4')}}
					</div>
				</div>
			</div> <br><br>
		

		<!-- Boxes -->

		
		<div class="boxes">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="boxes_container d-flex flex-row align-items-start justify-content-between flex-wrap">

							<!-- Box -->
							<div class="box">
								<div class="background_image" style="background-image:url( {{url($category->picture)}} );filter: blur(4px); -webkit-filter:blur(4px) "></div>
								<div class="box_content d-flex flex-row align-items-center justify-content-start">
									<div class="box_left">
										<div class="box_image">
											<a href="category.html">
												<div class="background_image" style="background-image:url(images/box_1_img.jpg)"></div>
											</a>
										</div>
									</div>
									<div class="box_right text-center">
										<div class="box_title">Trendsetter Collection</div>
									</div>
								</div>
							</div>

							<!-- Box -->
							<div class="box">
								<div class="background_image" style="background-image:url(images/box_2.jpg)"></div>
								<div class="box_content d-flex flex-row align-items-center justify-content-start">
									<div class="box_left">
										<div class="box_image">
											<a href="category.html">
												<div class="background_image" style="background-image:url(images/box_2_img.jpg)"></div>
											</a>
										</div>
									</div>
									<div class="box_right text-center">
										<div class="box_title">Popular Choice</div>
									</div>
								</div>
							</div>

							

						</div>
					</div>
				</div>
			</div>
		</div>

		

		<!-- Features -->

		<div class="features">
			<div class="container">
				<div class="row">
					
					<!-- Feature -->
					<div class="col-lg-4 feature_col">
						<div class="feature d-flex flex-row align-items-start justify-content-start">
							<div class="feature_left">
								<div class="feature_icon"><img src="images/icon_1.svg" alt=""></div>
							</div>
							<div class="feature_right d-flex flex-column align-items-start justify-content-center">
								<div class="feature_title">Fast Secure Payments</div>
							</div>
						</div>
					</div>

					<!-- Feature -->
					<div class="col-lg-4 feature_col">
						<div class="feature d-flex flex-row align-items-start justify-content-start">
							<div class="feature_left">
								<div class="feature_icon ml-auto mr-auto"><img src="images/icon_2.svg" alt=""></div>
							</div>
							<div class="feature_right d-flex flex-column align-items-start justify-content-center">
								<div class="feature_title">Premium Products</div>
							</div>
						</div>
					</div>

					<!-- Feature -->
					<div class="col-lg-4 feature_col">
						<div class="feature d-flex flex-row align-items-start justify-content-start">
							<div class="feature_left">
								<div class="feature_icon"><img src="images/icon_3.svg" alt=""></div>
							</div>
							<div class="feature_right d-flex flex-column align-items-start justify-content-center">
								<div class="feature_title">Fast Delivery</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
@endsection    