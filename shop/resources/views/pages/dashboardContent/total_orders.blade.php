@extends('layout.admin')

@section('content')
<br>


<h1 style="padding-left: 2rem; font-weight:bolder">Orders</h1>

<div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h6 class="card-title font-weight-semibold">...</h6>
                    </div>
                    <div class="">
                        <table class="table datatable-show-all">
                            <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Client-Name</th>
                                    <th>Email</th>
                                    <th>Phone-Number</th>
                                    <th>Time-Placed</th>
                                    <th>Price</th>
                                    <th>Product-Ordered</th>
                                    <th>Quantity</th>
                                    <th>Address</th>
                                    <th>Total</th>
                                    <th>Status</th>
                                        
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($orders as $order)
                          <tr>
                             
                                    <td>{{$order->id}}</td>
                                    <td>{{$order->user->name}}</td>
                                  
                                    <td>₦{{$order->user->email}}</td>
                                    <td>
                                    @if (is_null($order->user->phone_number))
                                        Null
                                    @else
                                        {{$order->user->phone_number}}
                                    @endif
                                </td>
                                <td>{{$order->user->created_at}}</td>

                                <td>{{$order->price}}</td>
                                <td>{{$order->product_name}}</td>
                                <td>{{$order->quantity}}</td>
                                <td>{{$order->user->address}}</td>
                                <td>{{$order->total}}</td>
                                <td>{{$order->status}}</td>
                                            
                                </tr>

                                @endforeach  
                                        
                            </tbody>                    
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <button type="button" class="btn btn-primary"><a href="{{url('dash')}}" style="color: #fff">Back</a></button>
    </div>

@endsection