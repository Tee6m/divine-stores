

<link rel="stylesheet" type="text/css" href="{{url('styles/cart.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('styles/cart_responsive.css')}}">

@if($carts->isEmpty())
<br><br><br><br>
<div class="text-info text-center">
                <h4><p><strong> Your cart is empty 😔😔!</strong></p></h4>
                <h3><p>Browse our categories and discover our best deals 😉👍!</p></h3>
                <p><a href="{{url('/')}}" class="btn btn-success" data-text="KEEP SHOPPING">START SHOPPING</a></p>
            </div>
@else
<br><br>
<div class="cart_inner">
    <div id="cart_table_feedback"></div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Product</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Sub Total</th>
                                    <th scope="col">Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                @foreach($carts as $cart)
                <tr>
                    <td>
                        <div class="media">
                            <div class="d-flex">
                                @if($cart->model->picture)
                                <img src="{{url($cart->model->picture)}}" alt="image" style="max-width: 100px;" class="img-fluid">
                                @endif
                            </div>
                            <div class="media-body">
                                <p>{{ ucwords($cart->name) }}</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <h5>&#8358;{{number_format($cart->price, 2)}}</h5>
                    </td>
                    <td>
                        <div class="product_count">
                            <input style="width: 3rem; border:none; background:rgb(236, 236, 236)" type="number" name="qty" id="cart_qty{{$cart->rowId}}" value="{{$cart->qty}}" title="Quantity:" class="input-text qty" onchange="update_cart_table('{{$cart->rowId}}')">
                            <!-- <button onclick="update_cart_table('{{$cart->rowId}}')" class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button>
                            <button onclick="update_cart_table('{{$cart->rowId}}')" class="reduced items-count" type="button"><i class="lnr lnr-chevron-down"></i></button> -->
                        </div>
                    </td>
                    <td>
                    <h5>&#8358;{{number_format($cart->qty * $cart->price, 2)}}</h5>
                    </td>
                    <td>
                        <button type="button" onclick="remove_cart_item('{{$cart->rowId}}')" class="btn btn-danger btn-xs">x</button>
                    </td>
                </tr>
                @endforeach
                                <!-- <tr class="">
                                    <td class="text-center">
                                      <h4><strong class="text-center">TOTAL:&#8358;{{Cart::subtotal()}}</strong></h4>
                                    </td>
                                    
                                </tr> -->
                                <tr class="">
                                    <td></td>
                                    <td class="d-flex justify-content-center align-items-center">
                                        <div class="checkout_btn_inner">
                                            <a class="btn gray_btn btn-md" href="{{url('/')}}">Continue Shopping</a>
                                            <br><br>
                                            <a class="btn btn-danger btn-md" href="{{url('checkout')}}">Proceed to checkout</a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row cart_extra_row">
                    <div class="col-lg-6">
                        <div class="cart_extra cart_extra_1">
                            <div class="cart_extra_content cart_extra_coupon">
                                <div class="cart_extra_title">Coupon code</div>
                                <div class="coupon_form_container">
                                    <form action="#" id="coupon_form" class="coupon_form">
                                        <input type="text" class="coupon_input" required="required">
                                        <button class="coupon_button">apply</button>
                                    </form>
                                </div>
                                <div class="coupon_text">Phasellus sit amet nunc eros. Sed nec congue tellus. Aenean nulla nisl, volutpat blandit lorem ut.</div>
                                <div class="shipping">
                                    <div class="cart_extra_title">Shipping Method</div>
                                    <ul>
                                        <li class="shipping_option d-flex flex-row align-items-center justify-content-start">
                                            <label class="radio_container">
                                                <input type="radio" id="radio_1" name="shipping_radio" class="shipping_radio">
                                                <span class="radio_mark"></span>
                                                <span class="radio_text">Next day delivery</span>
                                            </label>
                                            <div class="shipping_price ml-auto">$4.99</div>
                                        </li>
                                        <li class="shipping_option d-flex flex-row align-items-center justify-content-start">
                                            <label class="radio_container">
                                                <input type="radio" id="radio_2" name="shipping_radio" class="shipping_radio">
                                                <span class="radio_mark"></span>
                                                <span class="radio_text">Standard delivery</span>
                                            </label>
                                            @if($cart->model->shipping)
                                            <div class="shipping_price ml-auto">{{url($cart->model->shipping)}}</div>
                                            @endif
                                        </li>
                                        <li class="shipping_option d-flex flex-row align-items-center justify-content-start">
                                            <label class="radio_container">
                                                <input type="radio" id="radio_3" name="shipping_radio" class="shipping_radio" checked>
                                                <span class="radio_mark"></span>
                                                <span class="radio_text">Personal Pickup</span>
                                            </label>
                                            <div class="shipping_price ml-auto">Free</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 cart_extra_col">
                        <div class="cart_extra cart_extra_2">
                            <div class="cart_extra_content cart_extra_total">
                                <div class="cart_extra_title">Cart Total</div>
                                <ul class="cart_extra_total_list">
                                    <li class="d-flex flex-row align-items-center justify-content-start">
                                        <div class="cart_extra_total_title">Subtotal</div>
                                        <div class="cart_extra_total_value ml-auto">&#8358;{{Cart::subtotal()}}</div>
                                    </li>
                                    <li class="d-flex flex-row align-items-center justify-content-start">
                                        <div class="cart_extra_total_title">Shipping</div>
                                        <div class="cart_extra_total_value ml-auto">Free</div>
                                    </li>
                                    <li class="d-flex flex-row align-items-center justify-content-start">
                                        <div class="cart_extra_total_title">Total</div>
                                        <div class="cart_extra_total_value ml-auto">&#8358;{{Cart::subtotal()}}</div>
                                    </li>
                                </ul> 
                                <div class="checkout_button trans_200"><a href="{{url('checkout')}}">Checkout</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif






