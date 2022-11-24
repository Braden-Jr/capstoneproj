@extends('master')

@section('content')
<h1>Account Created! </h1>
<h6>Account Details </h6>
<ul>
        <li>First Name: {{$data['fname']}} </li>
        <li>Last Name: {{$data['lname']}}</li>
        <li>Email:  {{$data['email']}}</li>
        <li> Password:  {{$data['password']}}</li>
</ul>   

@endsection