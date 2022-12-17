@extends('layout.master')

@section('title')
<br><br>
Shop Now
@endsection

@section('banner')
<!-- <div class="background_image"></div> -->
<section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
                <div class="container">
                    <div class="banner_content text-center">
                        <h2>Shopping Cart</h2>
                        <div class="page_link">
                            <a href="index.html">Home</a>
                            <a href="cart.html">Cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection

@section('content')
 <div class="container">
     <div class="row">
         <div class="col-md-6 col-md-3">
             
         </div>
     </div>

     <div class="container" id="cart_table">
        Loading...
     </div>

 </div>
 

@endsection


@section('scripts')
   <script>
    document.addEventListener('DOMContentLoaded', cart_table());
    function cart_table()
    {
        const table = document.getElementById('cart_table');
        table.innerHTML = '<div class="text-info text-center">Loading...</div>';
        $('#cart_table').load(base+"/cart_table");
    }

    function update_cart_table(rowId)
    {
      console.log(rowId);
      const cart_qty = document.getElementById('cart_qty'+rowId).value;
      if (isNaN(cart_qty) || parseInt(cart_qty) < 1 || cart_qty == "") {
        document.getElementById('cart_qty'+rowId).value = 1;
        return;
      }
      const feedback = document.getElementById('cart_table_feedback');
      //feedback.innerHTML = '<div class="text-info text-center">Loading...</div>';
      $('#cart_table').load(base+"/cart_table/"+rowId+"/"+cart_qty);
    }
    

    function remove_cart_item(rowId)
    {
      console.log(rowId);
        const feedback = document.getElementById('cart_table_feedback');
        feedback.innerHTML = '<div class="text-info text-center">Loading...</div>';
        $('#cart_table').load(base+"/remove_cart_item/"+rowId);
    }
   </script>
@stop