@extends('layout.admin')

@section('content')
@if (session()->has('message3'))
    
      <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">x</button>

        {{session()->get('message3')}}
      </div>
      
  @endif

  @if (session()->has('message'))
    
      <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">x</button>

        {{session()->get('message')}}
      </div>
      
  @endif

  @if (session()->has('message2'))
    
      <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert">x</button>

        {{session()->get('message2')}}
      </div>
      
  @endif

    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h6 class="card-title font-weight-semibold">All Product Categories</h6>
                    </div>
                    <div class="">
                        <table class="table datatable-show-all">
                            <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Category Name</th>
                                    <th>Image</th>
                                    <th>Created</th>
                                    <th>Updated</th>
                                    <th class="text-center"></th>    
                                    <th class="text-center">Actions</th>    
                                    <th class="text-center"></th>    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $category)
                          <tr>
                             
                                    <td>{{$category->id}}</td>
                                    <td>{{$category->name}}</td>
                                    <td>  @if($category->picture)<img src="{{url($category->picture)}}" height="50px" width="50px">
                @endif</td>
                                    <td>{{$category->created_at}}</td>
                                    <td>{{$category->updated_at}}</td>
                                    <td><button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#myModal">Info</button></td>
                                    


                                    <td><button type="button" class="btn btn-warning"><a href="{{'/categories/edit/'. $category->id}}" style="color: white">Edit</a></button></td>
                                    <td><button type="button" class="btn btn-danger"><a href="{{'/categories/delete/' .$category->id}}" style="color: white">Delete</a></button></td>
                                                  
                                </tr>
                                @endforeach 
                                

<!-- The Modal -->
@foreach($categories as $category)
<div class="modal" id="myModal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Category Name: <strong style="font-size: 30px"> {{$category->name}} </strong></h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <h3>Category Picture: <img src="{{url($category->picture)}}" width="200px" alt=""></h3>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>
      

    </div>
  </div>
</div>

@endforeach


                            </tbody>                    
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <button type="button" class="btn btn-primary"><a href="{{url('categories/create')}}" style="color: #fff">Add Category</a></button>
    </div>
@stop