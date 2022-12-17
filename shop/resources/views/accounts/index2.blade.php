@extends('layout.master')


@section('content')
<br><br><br><br>
<div>

  @if (session()->has('error2'))
    
      <div class="alert alert-warning">
        <button type="button" class="close" data-dismiss="alert">x</button>

        {{session()->get('error2')}}
      </div>
      
  @endif

   @if (session()->has('error'))
    
      <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert">x</button>

        {{session()->get('error')}}
      </div>
      
  @endif

   @if (session()->has('message'))
    
      <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">x</button>

        {{session()->get('message')}}
      </div>
      
  @endif

  @if (session()->has('update'))
    
      <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">x</button>
        

        {{session()->get('update')}}
      </div>
      
  @endif

  @if (session()->has('update2'))
    
      <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">x</button>
        

        {{session()->get('update2')}}
      </div>
      
  @endif


</div>

{{-- sweet Alert --}}
@include('sweetalert::alert')

<div class="pre">
  <img src="./images/pre4.gif" width="200px" alt="">
    </div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
       		<h1 style="color: black">Settings</h1>
       	
       		<div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Update-Profile
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        <div>
        <form class="row" method="post" action="{{url('profile_update')}}" >
                	@csrf

                    <div class="col-lg-12 form-group">
                      <Label style="color: black; font-weight:bolder; padding-top:10px">Personal Information</Label>
                        <input type="text" placeholder="Name*" onfocus="this.placeholder=''" onblur="this.placeholder = 'Name*'"  value="{{auth()->user()->name}}" class="form-control"name="name" style="color: black">
                    </div>
                    <div class="col-lg-6 form-group">
                        <input type="text" placeholder="Phone number*" onfocus="this.placeholder=''" onblur="this.placeholder = 'Phone number*'"  class="form-control" value="{{auth()->user()->phone_number}}" name="phone_number" style="color: black">
                    </div>
                    <div class="col-lg-6 form-group">
                        <input type="email" placeholder="Email Address*" onfocus="this.placeholder=''" onblur="this.placeholder = 'Email Address*'" value="{{auth()->user()->email}}"  class="form-control" name="email" style="color: black">
                    </div>
                    <div class="mt-20">
                    {{-- <button type="submit" class="btn btn-block btn-primary" style="margin-left: 15px; border-bottom:1px solid #111">
                    	Update Personal-Info
                    </button> --}}
                </div>
                
                </div>

                <br><br>

                <div>

                  @csrf
                    <div class="col-lg-12 form-group">
                      <Label style="color: black; font-weight:bolder; padding-top:10px">Shipping Address</Label>
                        <textarea placeholder="Address" onfocus="this.placeholder=''" onblur="this.placeholder = 'Street Name:'"  class="form-control"  name="address" style="color: black">{{auth()->user()->address}}</textarea>
                    </div>
                    <div class="col-lg-6 form-group">
                        <input type="text" placeholder="Town/City" onfocus="this.placeholder=''" onblur="this.placeholder = 'Town/City*'"  class="form-control" value="{{auth()->user()->town}}" name="town" style="color: black">
                    </div>
                    <div class="col-lg-6 form-group">
                        <input type="text" placeholder="State" onfocus="this.placeholder=''" onblur="this.placeholder = 'State'" value="{{auth()->user()->state}}"  class="form-control" name="state" style="color: black">
                    </div>

                    <div class="col-lg-12">
                        <div class="sorting">
                            <input type="country" placeholder="Country" onfocus="this.placeholder=''" onblur="this.placeholder = 'Country'" value="{{auth()->user()->country}}"  class="form-control" name="country" style="color: black">
                        </div>
                    </div>
                     <div class="col-lg-12">
                        <div class="sorting">
                            <input type="country" placeholder="Zipcode" onfocus="this.placeholder=''" onblur="this.placeholder = 'zipcode'" value="{{auth()->user()->zipcode}}"  class="form-control" name="zipcode" style="color: black">
                        </div>
                    </div>
                    
                <div class="mt-20">
                    <button type="submit" class="btn btn-block btn-primary" style="margin-left: 15px;margin-top: 15px;">
                    	Update
                    </button>
                </div>
                </form>
                </div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Change Password
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        <form class="row" method="post" action="{{url('change_password')}}">
                	@csrf
                    <div class="col-lg-12 form-group">
                        <input type="password" placeholder="Old Password*" required="" name="old_password" class="form-control">
                    </div>
                    <div class="col-lg-12 form-group">
                        <input type="password" placeholder="New Password*" required="" name="new_password" class="form-control">
                    </div>
                    <div class="col-lg-12 form-group">
                        <input type="password" placeholder="Confirm new Password*" required="" name="confirm_password" class="form-control">
                    </div>
                <div class="mt-20 form-group">
                    <button type="submit" class="btn btn-block btn-primary">
                    	Change Password
                    </button>
                </div>
            </form>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Payment History
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
</div>
   		</div>
   </div>
</div>
@endsection

@section('scripts')
<script>
	$('.collapse').collapse()
</script>
@stop