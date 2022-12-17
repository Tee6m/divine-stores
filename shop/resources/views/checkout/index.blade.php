@extends('layout.master')
<link rel="stylesheet" type="text/css" href="{{url('styles/checkout.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('styles/checkout_responsive.css')}}">

@section('banner')

<div class="home">
			<div class="home_container d-flex flex-column align-items-center justify-content-end">
				<div class="home_content text-center">
					<div class="home_title">Checkout</div>
					<div class="breadcrumbs d-flex flex-column align-items-center justify-content-center">
						<ul class="d-flex flex-row align-items-start justify-content-start text-center">
							<li><a href="#">Home</a></li>
							<li>Checkout</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

@endsection
@section('content')
<div class="checkout">
			<div class="container">
				<div class="row">
					
					<!-- Billing -->
					<div class="col-lg-6">
						<div class="billing">
							<div class="checkout_title">Billing</div>
							<div class="checkout_form_container">
			<form action="{{url('profile_update')}}" id="checkout_form" class="checkout_form">
                                @csrf
				<div class="row">
					<div class="col-lg-6">
											<!-- Name -->
					<input type="text" name="name" id="checkout_name" class="checkout_input" placeholder="First Name" required="required" value="{{auth()->user()->name}}">
					</div>
					<div class="col-lg-6">
											<!-- Last Name -->
					<input type="text" name="phone_number" id="checkout_last_name" class="checkout_input" placeholder="Last Name" required="required" value="{{auth()->user()->phone_number}}">
					</div>
				</div>
				<div>
										<!-- Company -->
				<input type="text" id="checkout_company" placeholder="Company" class="checkout_input">
				</div>
				<div>
										<!-- Country -->
				<select name="country" id="checkout_country" class="dropdown_item_select checkout_input" require="required">
				<option>Country</option>
				<option value="Nigeria">Nigeria</option>
											
				</select>
				</div>
				<div>
										<!-- Address -->
				<input type="text" id="checkout_address" class="checkout_input" placeholder="Address Line 1" required="required" value="{{auth()->user()->address}}" name="address">
				<input type="text" id="checkout_address_2" class="checkout_input checkout_address_2" placeholder="Address Line 2" required="required" name="">
				</div>
				<div>
										<!-- Zipcode -->
				<input type="text" id="checkout_zipcode" class="checkout_input" placeholder="Zip Code" required="required">
				</div>
				<div>
										<!-- City / Town -->
				<select name="town" id="checkout_city" class="dropdown_item_select checkout_input" require="required">
					<option>City / Town</option>
					<option value="Abuja">Abuja</option>
					<option value="Lagos">Lagos</option>
					<option value="Kaduna">Kaduna</option>
					<option value="Nasarawa">Nasarawa</option>
				</select>
				</div>
							
				<div>
										<!-- Phone no -->
				<input type="phone_number" id="checkout_phone" class="checkout_input" placeholder="Phone No." required="required" value="{{auth()->user()->phone_number}}">
				</div>
				<div>
										<!-- Email -->
				<input type="email" name="email" id="checkout_email" class="checkout_input" placeholder="Email" required="required" value="{{auth()->user()->email}}">
				</div>
				<div class="checkout_extra">
					<ul>
						<li class="billing_info d-flex flex-row align-items-center justify-content-start">
						<label class="checkbox_container">
						<input type="checkbox" id="cb_1" name="billing_checkbox" class="billing_checkbox">
						<span class="checkbox_mark"></span>
						<span class="checkbox_text"><a href="{{url('terms')}}">Terms and conditions</a></span>
						</label>
						</li>
						<li class="billing_info d-flex flex-row align-items-center justify-content-start">
						<label class="checkbox_container">
						<input type="checkbox" id="cb_2" name="billing_checkbox" class="billing_checkbox">
						<span class="checkbox_mark"></span>
						<span class="checkbox_text"><a href="{{url('register')}}">Create an account</a></span>
						</label>
						</li>
											<li class="billing_info d-flex flex-row align-items-center justify-content-start">
												<label class="checkbox_container">
													<input type="checkbox" id="cb_3" name="billing_checkbox" class="billing_checkbox">
													<span class="checkbox_mark"></span>
													<span class="checkbox_text">Subscribe to our newsletter</span>
												</label>
											</li>
										</ul>
									</div>
									<button type="submit" class="checkout_button trans_200">Submit</button>
								</form>
							</div>
						</div>
					</div>

					<!-- Cart Total -->
					<div class="col-lg-6 cart_col">
						<div class="cart_total">
							<div class="cart_extra_content cart_extra_total">
								<div class="checkout_title">Cart Total</div>
								<ul class="cart_extra_total_list">
									 @php $total = 0; @endphp
                        			 @foreach($carts as $cart)
									<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="cart_extra_total_title">{{$cart->name}}</div>
									<div class="cart_extra_total_value ml-auto"> {{$cart->qty}}</div>
									<div class="cart_extra_total_value ml-auto">&#8358; {{number_format(($cart->qty * $cart->price), 2)}}</div>
									</li>
									@php $total += ($cart->qty * $cart->price); @endphp
                        			@endforeach
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div class="cart_extra_total_title">Subtotal</div>
										<div class="cart_extra_total_value ml-auto">&#8358; {{Cart::subtotal()}}</div>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div class="cart_extra_total_title">Shipping</div>
										<div class="cart_extra_total_value ml-auto">Free</div>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div class="cart_extra_total_title">Total</div>
										<div class="cart_extra_total_value ml-auto">&#8358; {{Cart::subtotal()}}</div>
									</li>
								</ul>
								<div class="payment_options">
									<div class="checkout_title">Payment</div>
									<ul>
										<li class="shipping_option d-flex flex-row align-items-center justify-content-start">
											<label class="radio_container">
												<input type="radio" id="radio_1" name="payment_radio" class="payment_radio">
												<span class="radio_mark"></span>
												<span class="radio_text">Paystack</span>
											</label>
										</li>
										<li class="shipping_option d-flex flex-row align-items-center justify-content-start">
											<label class="radio_container">
												<input type="radio" id="radio_2" name="payment_radio" class="payment_radio">
												<span class="radio_mark"></span>
												<span class="radio_text">Cash on Delivery</span>
											</label>
										</li>
										<li class="shipping_option d-flex flex-row align-items-center justify-content-start">
											<label class="radio_container">
												<input type="radio" id="radio_3" name="payment_radio" class="payment_radio" checked>
												<span class="radio_mark"></span>
												<span class="radio_text">Credit Card</span>
											</label>
										</li>
									</ul>
								</div>
								<div class="cart_text">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra tempor so dales. Phasellus sagittis auctor gravida. Integ er bibendum sodales arcu id te mpus. Ut consectetur lacus.</p>
								</div>
								 <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
                            @csrf
                                <input type="hidden" name="email" value="{{auth()->user()->email}}"> 
                                <input type="hidden" name="orderID" value="{{$orderId}}">
                                <input type="hidden" name="amount" value="{{$total*100}}"> 
                                <input type="hidden" name="quantity" value="1">
                                <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}">
                                  <button class="view-btn btn btn-block btn-success"><span>Proceed to Payment</span></button>
                                </p>
                        </form>
								<!-- <div class="checkout_button trans_200"><a href="checkout.html">place order</a></div> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
@endsection