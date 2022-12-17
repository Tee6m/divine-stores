@extends('layout.master')

<link rel="stylesheet" href="{{url('./styles/contact2.css')}}" />
@section('content')
<br><br><br>

@if (session()->has('message'))
    
      <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">x</button>

        {{session()->get('message')}}
      </div>
      
  @endif

{{-- sweet Alert --}}
@include('sweetalert::alert')

    <div class="conthead">
      <h1 class="contf" style="color: #2fce98;">GET IN TOUCH</h1>
      <br />
      <p class="contdes" style="color: black">
        Want to get in touch? you can <br />
        leave me a message below and we will try <br />
        reply as soon as we can.
      </p>
    </div>
    <form action="{{url('contact')}}" method="POST" >
        @csrf
    <div class="cont-container">
      <div class="contact-box">
        <div class="left" style="background-image: url('./images/bg1.jpg')"></div>
        <div class="right">
          <h2 class="contus" style="color: black">Contact Us</h2>
          <input type="text" class="field" required="" placeholder="Name" name="name" />
          <input type="email" class="field" required="" placeholder="Email" name="email" />
          <input type="text" class="field" required="" placeholder="phone" name="phone_number" />
          <textarea class="field area" required="" placeholder="Message" name="message"></textarea>
          <button type="submit" class="contbtn" style="background-color: #2fce98; ">Send</button>
        </div>
      </div>
    </div>
    </form>
 
    @endsection





@if (session()->has('message'))
    
      <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">x</button>

        {{session()->get('message')}}
      </div>
      
  @endif

{{-- sweet Alert --}}
@include('sweetalert::alert')