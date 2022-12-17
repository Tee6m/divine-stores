@extends('layout.admin')

@section('content')
<style>
  @media only screen and (max-width: 575px){
    .inboc{
      width: 100%;
      background-color: rgb(202, 202, 202);
      border: none
    }

  }
</style>
<br>
  <div>
    <h1 style="font-weight:bolder; margin-left:5px">Inboxes</h1>
  </div>
  <br>

  <div>
    @foreach ($contacts as $contact)
    <div style="margin-left: 20px;width:80%; background-color: rgb(202, 202, 202);" class="inboc">
        <div  style="padding-top:10px; padding-left:10px">
        <h1>Name: <span style="font-size: 20px; color:rgb(8, 116, 8)">{{$contact->name}}</span></h1>
        <h1>Phone Number: <span style="font-size: 18px; color:rgb(1, 6, 1)">{{$contact->phone_number}}</span></h1>
        <h1>Email: <span style="font-size: 18px; color:rgb(0, 5, 0); width:40%">{{$contact->email}}</span></h1>
        <h1>Message: <span style="font-size: 20px; color:rgb(10, 2, 255)">{{$contact->message}}</span> </h1>
        <h5>Sent : <span style="font-size: 20px; color:rgb(235, 8, 8)">{{$contact->created_at}}</span> </h5>
        </div>
    </div>
    <br><br>
        
    @endforeach
  </div>
@endsection