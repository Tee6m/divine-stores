@extends('layout.admin')


@section('content')

@if (session()->has('message3'))
    
      <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">x</button>

        {{session()->get('message3')}}
      </div>
      
  @endif

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3 style="font-weight: bolder"> EDIT CATEGORY</h3>
              <div class="card">
                
                        <form method="post" action="{{url('/categories/edit/'. $category->id)}}" enctype="multipart/form-data" class="row">
        @csrf
        
            
        
        <div class="col-lg-12 form-group">
            <input type="text" placeholder=" &nbsp;&nbsp; Change Category Name" onfocus="this.placeholder=''" onblur="this.placeholder = 'Category Name'" value="{{$category->name}}"  class="form-control"name="name">
        </div>
        <label class="form-control col-lg-12" style="font-weight: bolder">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Change Category Image</label>
        <div class="col-lg-12 form-group">
            <img src="#" alt="" id="newImg" width="100" style="margin-left: 20px" height="100" onerror="this.src='{{url($category->picture)}}' ">
            <input type="file" style="margin-left: 5px;" id="InpImg"  class="form-control"name="picture">
        </div>
        <div class="text-right">
            <button type="submit" style="margin-left: 20px; margin-bottom:10px" class="btn bg-dark">Update  &nbsp;<i class="fa fa-plus" aria-hidden="true"></i></button>
        </div>
    
                </form>
                
            
            </div>
        </div>
    </div>
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