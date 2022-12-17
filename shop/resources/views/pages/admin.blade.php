@extends('layout.master')

@section('content')
<br><br><br><br><br>
<H1>
    Admin dasboard in a few... you will have to wait Mr/Mrs: {{Auth::user()->name }}. Because You are a verified Admin....
</H1>

@endsection