@extends('layout.admin')

@section('content')
<br>


<h1 style="padding-left: 2rem; font-weight:bolder">Total Users</h1>

<div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h6 class="card-title font-weight-semibold">...</h6>
                    </div>
                    <div class="">
                        <table class="table datatable-show-all">
                            <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone_number</th>
                                    <th>Date-Joined</th>
                                    <th>..</th>
                                    <th>..</th>
                                        
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                          <tr>
                             
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                  
                                    <td>₦{{$user->email}}</td>
                                    <td>
                                    @if (is_null($user->phone_number))
                                        Null
                                    @else
                                        {{$user->phone_number}}
                                    @endif
                                </td>
                                <td>{{$user->created_at}}</td>
                                <td></td>
                                <td></td>
                                            
                                </tr>

                                @endforeach  
                                             
                            </tbody>                    
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <button type="button" class="btn btn-primary"><a href="{{url('dash')}}" style="color: #fff">Back</a></button>
    </div>

@endsection