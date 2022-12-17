@extends('layout.master')

<link rel="stylesheet" href="{{url('./styles/contact2.css')}}" />
@section('content')
<br><br><br>

    <div class="conthead">
      <h1 class="contf">GET IN TOUCH</h1>
      <br />
      <p class="contdes">
        Want to get in touch? you can <br />
        leave me a message below and we will try <br />
        reply as soon as i can
      </p>
    </div>
    <div class="cont-container">
      <div class="contact-box">
        <div class="left"></div>
        <div class="right">
          <h2 class="contus">Contact Us</h2>
          <input type="text" class="field" placeholder="Name" />
          <input type="email" class="field" placeholder="Email" />
          <input type="text" class="field" placeholder="phone" />
          <textarea class="field area" placeholder="Send Us a Message 😇"></textarea>
          <button class="contbtn">Send</button>
        </div>
      </div>
    </div>

    
 
    @endsection
