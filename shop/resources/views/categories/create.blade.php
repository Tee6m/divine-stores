@extends('layout.admin')


@section('content')

@if (session()->has('message'))
    
      <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">x</button>

        {{session()->get('message')}}
      </div>
      
  @endif

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>CATEGORY CREATE</h1>
              <div class="card">
                <form method="post" action="{{url('categories/create')}}" enctype="multipart/form-data" class="row">
        @csrf
        <div class="col-lg-12 form-group">
            <input type="text" placeholder=" &nbsp;&nbsp; Input Category Name" onfocus="this.placeholder=''" onblur="this.placeholder = 'Category Name'"  class="form-control"name="name">
        </div>

        <label class="form-control col-lg-12" style="margin-left: 25px;">Choose Category Image</label>
        <div class="col-lg-12 form-group">
            <img src="#" alt="" id="newImg" width="50" style="margin-left: 20px" height="50" onerror="this.src='./images/blank3.png' ">
            <input type="file" style="margin-left: 15px;" id="InpImg"  class="form-control"name="picture">
        </div>


        <div class="text-right">
            <button type="submit" style="margin-left: 25px; margin-bottom:10px" class="btn bg-dark">Create  &nbsp;<i class="fa fa-plus" aria-hidden="true"></i></button>
        </div>
                </form>
            </div>
        </div>
    </div>
    <br>

    <button type="button" class="btn btn-primary"><a href="{{url('categories/all')}}" style="color: #fff">All Categories</a></button>
</div>

<script>
    InpImg.onchange= evt => {
            const[file]=InpImg.files

            if(file){
                newImg.src=URL.createObjectURL(file)
            }
        }
</script>

@endsection