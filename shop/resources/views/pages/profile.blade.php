@extends('layout.master')

<link rel="stylesheet" href="{{url('./styles/responsive.css')}}" />
<link rel="stylesheet" type="text/css" href="{{url('plugins/flexslider/flexslider.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('styles/product.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('styles/product_responsive.css')}}">

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>

    <link rel="stylesheet" href="{{url('styles/profile.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('styles/bootstrap-4.1.2/bootstrap.min.css')}}">
    {{-- <script src="{{url('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js')}}"></script> --}}
    <link rel="stylesheet" href="{{url('fontawesome-free-6.1.1-web/css/all.css')}}">
</head>
<body style="background-color: rgb(228, 228, 228)">
    <br><br><br><br>

    <h1 style="text-align:center; ">MY ACCOUNT</h1>
    <br>
    <div>
    @foreach ($profile as $pp)
        
    
        <div class="upload">
              <img src="{{url($pp->profile_picture)}}" width="200" height="170">
       
        {{-- <img src="./images/profile.jpg" alt="" width="100" height="100"> --}}
        <div class="round">
            
            {{-- <input type="file" name="profile_picture" > --}}
            <i class="fa fa-camera fa-2x"  aria-hidden="true" data-target="#myModal" data-toggle="modal"></i>
        </div>
        
        
    </div>
    @endforeach
    
                
    <div class="container">
  <!-- Trigger the modal with a button -->
  

  <!-- Modal -->
  

  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h6 class="modal-title">Change Profile Picture</h6>
        </div>

        @foreach ($profile as $pp)

            <form action="{{url('/profilePicture/edit/'.$pp->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
        <div class="modal-body">
            <img src="#" alt="" id="newImg" width="50" style="margin-left: 20px; margin-bottom:5px" height="50" onerror="this.src='./images/blank2.png' ">
            
          <input type="file" id="InpImg" name="profile_picture">
        </div>
        <div class="modal-footer">
        
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success" >Save</button>
        </div>
        </form>
        @endforeach
        

      </div>
    </div>
  </div>
</div>
        {{-- <section class="upper">
            
            <div class="name" style="margin-left: 1vw;">{{Auth::user()->name }}</div>
        </section>

        <section class="body">
            <div class="left" style="border-radius: 5px">
            <p class="head" style="color: black; border-radius top : 5px"> <span class="icon"><i class="fa fa-user" aria-hidden="true"></i></span> My Little Account</p>
            <ul>
                <li><span class="icon"><i class="fa fa-comments" aria-hidden="true"></i></span>Inbox</li>
                <li><span class="icon"><i class="fa fa-inbox" aria-hidden="true"></i></span>Orders</li>
                <li><span class="icon"><i class="fa fa-star" aria-hidden="true"></i></span>Ratings & Reviews</li>
                <li><span class="icon"><i class="fa fa-ticket" aria-hidden="true"></i></span>Vouchers</li>
                <li><span class="icon"><i class="fa fa-heart" aria-hidden="true"></i></span>Saved Items</li>
                <li><span class="icon"><i class="fa fa-clock" aria-hidden="true"></i></span>Recently Viewed</li>
                <li><span class="icon"><i class="fa fa-search" aria-hidden="true"></i></span>Recently Searched</li>
            </ul>
            <ul>
                <li><img src="#" alt="">Details</li>
                <li><img src="#" alt="">Address Book</li>
                <a href="{{url('settings')}}"><li><img src="#" alt="">Settings</li></a>
                
            </ul>
            </div>

                <section class="right">
                    <h2 class="rh">Account Overview</h2>
                    <div class="right1">
                    <div class="rbody">
                        <h3>Account Details</h3>
                        <div class="rcontainer">
                            
                            <h5>{{Auth::user()->name }}</h5>
                            <h6>{{Auth::user()->email }}</h6>

                            <span style="padding-top: 6px;"><a href="{{url('settings')}}">Settings</a></span>

                        </div>

                    </div>

                    <div class="rbody">
                        <h3>Address Book</h3>
                        <div class="rcontainer">
                            
                            <h5>Your default shipping address:</h5>
                            <h6>{{Auth::user()->address}}, {{Auth::user()->town}}  </h6>
                            <h6></h6>
                            <h6>{{Auth::user()->state}}, {{Auth::user()->country}}</h6>

                            

                        </div>

                    </div>
                    </div>

                    <div class="right2">
                    <div class="rbody">
                        <h3>Little Closet Prime</h3>
                        <div class="rcontainer">
                            
                            
                            <h6>Little Closet Prime is a loyalty program which offers members free delivery on all  Items </h6>

                            <span style="padding-top: 6px;"><a href="#">Subcribe.</a></span>

                        </div>

                    </div>

                    <div class="rbody">
                        <h3>Little Closet STORE CREDIT</h3>
                        <div class="rcontainer">
                            
                            <h5>&#8358; 0.0</h5>
                            

                        </div>

                    </div>
                    </div>
                </section>

                
        </section>
    </div> --}}
<br>
<div class="container">
  <div class="card-columns">

    <div class="card bg-light">
      <div class="card-body text-center">
        <h2>Account Details</h2>
        <p class="card-text" style="color:#111">{{Auth::user()->name }}</p>
        <p class="card-text"style="color:#111">{{Auth::user()->email }}</p>
        <p class="card-text"style="color:#111"><a href="{{url('settings')}}"><button style="background: green; color:white; border:none; width:5rem">Settings</button></a></p>
      </div>
    </div>


    <div class="card bg-light">
      <div class="card-body text-center">
        <h2>Address</h2>
        <p class="card-text" style="color:#111">{{Auth::user()->address}}, {{Auth::user()->town}}</p>
        <p class="card-text"style="color:#111">{{Auth::user()->state}}, {{Auth::user()->country}}</p>
        <p class="card-text"style="color:#111"><a href="{{url('settings')}}"><button style="background: green; color:white; border:none; width:5rem">Change</button></a></p>
        
      </div>
    </div>
    
      
    <div class="card bg-light">
      <div class="card-body text-center">
        <h2>Orders</h2>
        <p class="card-text" style="color:#111">Pending: 10</p>
        <p class="card-text"style="color:#111">Completed: 30</p>
        <p class="card-text"style="color:#111">Total: 40</p>
        
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
</body>
</html>
@endsection