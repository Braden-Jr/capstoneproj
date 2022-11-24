@extends('form')

@section('contents')

@php

 $user = Auth::user();
@endphp

<h1>{{ $user->name }}</h1>

<form method="POST" action="cart">
    @csrf
    <input type="text" name="id" value={{ $user->id }}>
    <input type="submit" >
</form>


@endsection