@extends('layout.admin')

<link rel="stylesheet" href="{{url('./styles/file_button.css')}}">

{{-- Wanted to link it to see.js but ended up using internal Javascript --}}

@section('content')

    <div class="content"> 
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h6 class="card-title font-weight-semibold">Create Product</h6>
                    </div>
                    <div class="card-body">
                        <p class="text-danger"></p>
                        <form action="{{ url('products/create') }}" method="post" enctype="multipart/form-data">
                        @csrf
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Name:</label>
                                <div class="col-lg-10">
                                    <input type="text" name="name" class="form-control" reqiured>
                                </div>
                            </div> 
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Price:</label>
                                <div class="col-lg-10">
                                    <div class="input-group">
                                        <input type="number" step="any" name="price" class="form-control">
                                        <span class="input-group-append">
                                            <span class="input-group-text">₦</span>
                                        </span>
                                    </div>
                                </div>
                            </div>                             
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Old Price:</label>
                                <div class="col-lg-10">
                                    <div class="input-group">
                                        <input type="number" step="any" name="old_price" class="form-control">
                                        <span class="input-group-append">
                                            <span class="input-group-text">₦</span>
                                        </span>
                                    </div>
                                </div>
                            </div>                             
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Shipping Fee:</label>
                                <div class="col-lg-10">
                                    <div class="input-group">
                                        <input type="number" step="any" name="max_amount" class="form-control">
                                        <span class="input-group-append">
                                            <span class="input-group-text">₦</span>
                                        </span>
                                    </div>
                                </div>
                            </div>                             
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Features:</label>
                                <div class="col-lg-10">
                                    <div class="input-group">
                                        <input type="text" step="any" name="upgrade" class="form-control">
                                        <span class="input-group-append">
                                            <span class="input-group-text"></span>
                                        </span>
                                    </div>
                                </div>
                            </div> 
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Expiry Date:</label>
                                <div class="col-lg-10">
                                    <input type="date" name="date" pattern="[0-9]+(\.[0-9]{0,2})?%?" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Product Category:</label>
                                <div class="col-lg-10">
                                    <select class="form-control select" name="category" data-fouc required>                                           
                                        <option value="">Select Category</option>
                                        @foreach($categories as $category)                
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach                
                          
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row"> 
                                <label class="col-form-label col-lg-2">Brand Name:</label>
                                <div class="col-lg-10">
                                    <div class="input-group">
                                        <input type="text" name="brand" placeholder="Nike" class="form-control" >
                                        <span class="input-group-append">
                                            <span class="input-group-text">✓</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Return Policy:</label>
                                <div class="col-lg-10">
                                    <div class="input-group">
                                        <input type="text" name="return_policy" value="No returns or exchanges for this item." class="form-control" >
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Product Description:</label>
                                <div class="col-lg-10">
                                    <div class="input-group">
                                        <input type="text" name="description" value="Add Product Description Here..." class="form-control" >
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Availabilty:</label>
                                <div class="col-lg-10">
                                    <select class="form-control select" name="status">
                                        <option value="In Stock">In Stock
                                        </option>
                                        <option value="Out of Stock">Out of Stock
                                        </option>
                                    </select>
                                </div>
                            </div> 
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Product Images:</label>
                                <div class="col-lg-10">
                                    <img src="#" alt="" id="newImg" width="50" height="50" onerror="this.src='./images/blank3.png' ">
                                    <input type="file" name="picture" id="InpImg" class="form-input-styled" data-fouc required> 
                                    <br>

                                    <img src="#" alt="" id="newImg1" width="50" height="50" onerror="this.src='./images/blank3.png' ">
                                    <input type="file" name="picture1" id="InpImg1" class="form-input-styled" > 
                                    <br>

                                    <img src="#" alt="" id="newImg2" width="50" height="50" onerror="this.src='./images/blank3.png' ">
                                    <input type="file" name="picture2" id="InpImg2" class="form-input-styled" > 
                                    <br>

                                    <img src="#" alt="" id="newImg3" width="50" height="50" onerror="this.src='./images/blank3.png' ">
                                    <input type="file" name="picture3" class="form-input-styled" > 
                                    <br>
                                    <span class="form-text text-muted">Accepted formats: gif, png, jpg. Max file size 1Mb</span>
                                </div>

                                
                            <div class="text-right">
                                <button type="submit" class="btn bg-dark">Create  &nbsp;<i class="fa fa-plus" aria-hidden="true"></i></button>
                            </div>
                        </form>
                    </div>
                </div> 
            </div>
        </div>

        <button type="button" class="btn btn-primary"><a href="{{url('products/all')}}" style="color: #fff">All Product</a></button>
    </div>


    <script>
InpImg.onchange= evt => {
            const[file]=InpImg.files

            if(file){
                newImg.src=URL.createObjectURL(file)
            }
        }
        

InpImg1.onchange= evt => {
            const[file]=InpImg1.files

            if(file){
                newImg1.src=URL.createObjectURL(file)
            }
        }

InpImg2.onchange= evt => {
            const[file]=InpImg2.files

            if(file){
                newImg2.src=URL.createObjectURL(file)
            }
        }

InpImg3.onchange= evt => {
            const[file]=InpImg3.files

            if(file){
                newImg3.src=URL.createObjectURL(file)
            }
        }




    </script>
@stop