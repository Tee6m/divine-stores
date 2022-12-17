@extends('layout.admin')

@section('content')

@if (session()->has('message'))
    
      <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">x</button>

        {{session()->get('message')}}
      </div>
      
  @endif

  @if (session()->has('message2'))
    
      <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">x</button>

        {{session()->get('message2')}}
      </div>
      
  @endif

@if (session()->has('delete'))
    
      <div class="alert alert-warning">
        <button type="button" class="close" data-dismiss="alert">x</button>

        {{session()->get('delete')}}
      </div>
      
  @endif
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h6 class="card-title font-weight-semibold">All Products  </h6>
                    </div>
                    <div class="">
                        <table class="table datatable-show-all">
                            <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Category Name</th>
                                    <th>Image</th>
                                    <th>Price (₦)</th>
                                    <th>Created</th>
                                    <th>Updated</th>
                                    <th class="text-center"></th>    
                                    <th class="text-center">Actions</th>    
                                    <th class="text-center"></th>    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $product)
                          <tr>
                             
                                    <td>{{$product->id}}</td>
                                    <td>{{$product->name}}</td>
                                    <td>  @if($product->picture)<img src="{{url($product->picture)}}" height="50px" width="50px">
                @endif</td>
                                    <td>₦{{$product->price/100, 2}}</td>
                                    <td>{{$product->created_at}}</td>
                                    <td>{{$product->updated_at}}</td>
                                    <td><button type="button" class="btn btn-info"><a href="#" style="color: white">Info</a></button></td>
                                    <td><button type="submit" class="btn btn-warning"><a href="{{url('/products/edit/'. $product->id)}}" style="color: white">Edit</a></button></td>
                                    <td><button type="button" class="btn btn-danger"><a href="{{url('/products/delete/'.$product->id)}}" style="color: white">Delete</a></button></td>
                                                  
                                </tr>
                                @endforeach  
                                             
                            </tbody>                    
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <button type="button" class="btn btn-primary"><a href="{{url('products/create')}}" style="color: #fff">Add Product</a></button>
    </div>
@stop