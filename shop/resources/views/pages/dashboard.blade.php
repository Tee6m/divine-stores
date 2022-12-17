@extends('layout.admin')

<link rel="stylesheet" href="{{url('./styles/dashboard.css')}}">

@section('content')
<br>
  <div>
    <h1 style="font-weight:bolder; margin-left:5px">Sales Dashboard</h1>
  </div>
  <br>

  <div class="row" style="margin-left: 5px">
  <div class="column" >
    <a href="{{url('total_users')}}">
    <div class="card" style="background-color:red ;">

    <div style="display:flex;color: white; justify-content: space-between;">
    <div><span style="font-size:30px ;font-weight: bolder;">{{$total_user}}</span>  <br>
     <span>Total Users</span> 
    </div> 
  
    <div><i class="fa fa-user-plus fa-4x" aria-hidden="true" ></i></div>

    </div>

    <div>

    </div>


    </div>

    </a>
  </div>

  <div class="column" >
    <a href="{{url('total_orders')}}">
    <div class="card" style="background-color:rgb(254, 197, 8) ;">

    <div style="display:flex;color: rgb(0, 0, 0); justify-content: space-between;">
    <div><span style="font-size:30px ;font-weight: bolder;">{{$total_order}}</span>  <br>
     <span>Total Orders</span> 
    </div> 
  
    <div><i class="fa fa-shopping-bag fa-4x" aria-hidden="true" ></i></div>
    </div>
    <div>
    </div>
    </div>

    </a>
  </div>

  <div class="column" >
    <a href="{{url('products/all')}}">
    <div class="card" style="background-color:rgb(42, 179, 1) ;">

    <div style="display:flex;color: white; justify-content: space-between;">
    <div><span style="font-size:30px ;font-weight: bolder;">{{$total_product}}</span>  <br>
     <span>Total Products</span> 
    </div> 
  
    <div><i class="fa fa-heartbeat fa-4x" aria-hidden="true" ></i></div>

    </div>

    <div>

    </div>


    </div>

    </a>
  </div>

  <div class="column" >
    <a href="{{url('categories/all')}}">
    <div class="card" style="background-color:rgb(219, 1, 179) ;">

    <div style="display:flex;color: white; justify-content: space-between;">
    <div><span style="font-size:30px ;font-weight: bolder;">{{$total_categories}}</span>  <br>
     <span>Total Categories</span> 
    </div> 
  
    <div><i class="fa fa-expand fa-4x" aria-hidden="true" ></i></div>

    </div>

    <div>
      

    </div>


    </div>
    </a>
  </div>

  <div class="column" >
    <a href="#">
    <div class="card" style="background-color:rgb(0, 96, 239) ;">

    <div style="display:flex;color: rgb(255, 255, 255); justify-content: space-between;">
    <div><span style="font-size:30px ;font-weight: bolder;">30</span>  <br>
     <span>Website Visit</span> 
    </div> 
  
    <div><i class="fa fa-globe fa-4x" aria-hidden="true" ></i></div>

    </div>

    <div>

    </div>


    </div>
    </a>
  </div>


  <div class="column" >
    <a href="{{url('total_orders')}}">
    <div class="card" style="background-color:rgb(12, 214, 197) ;">

    <div style="display:flex;color: rgb(74, 74, 74); justify-content: space-between;">
    <div><span style="font-size:30px ;font-weight: bolder;">{{$pending_order}}</span>  <br>
     <span>Pending Orders</span> 
    </div> 
  
    <div><i class="fa fa-clock-o fa-4x" aria-hidden="true" ></i></div>

    </div>

    <div>

    </div>


    </div>
    </a>
  </div>

  <div class="column" >
    <a href="{{url('total_orders')}}">
    <div class="card" style="background-color:rgb(255, 143, 14) ;">

    <div style="display:flex;color: rgb(74, 74, 74); justify-content: space-between;">
    <div><span style="font-size:30px ;font-weight: bolder;">{{$pending_order}}</span>  <br>
     <span>Completed Orders</span> 
    </div> 
  
    <div><i class="fa fa-clock-o fa-4x" aria-hidden="true" ></i></div>

    </div>

    <div>

    </div>


    </div>
    </a>
  </div>
  
</div>


<section>
    <h1>Charts will be added Later on</h1>
</section>


@endsection