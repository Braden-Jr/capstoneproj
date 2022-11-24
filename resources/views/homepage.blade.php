@extends('master')

@section('content')

@if(Auth::check())
@php
    $user = Auth::check();
@endphp
<section id="hero">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Hi, <br>{{ $data['email'] }}</h1>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet soluta veniam voluptate aliquam
                    deleniti labore quod quis illum, sapiente nam nesciunt magni voluptatibus voluptatem incidunt
                    placeat consequuntur quaerat voluptatum expedita!</p>
                <form method="POST" action="{{ url('update') }}">
                    @csrf
                    <input type="text" name="id" placeholder="Id">
                    <input type="text" name="name" placeholder="Name">
                    <input type="text" name="password" placeholder="Password">
                    <input type="text" name="email" placeholder="Email">
                    <button type="submit">Update </button>
                </form>

            </div>
            <div class="col">
                <img src="https://66.media.tumblr.com/2cb779ff560ca29ddc58230de4dd6a24/tumblr_prq451wauy1u0m5xz_540.jpg"
                    class="img-fluid" alt="Sample image">
            </div>
        </div>

    </div>
</section>
@else
    <p>BOBO login ka muna </p>
@endif
@endsection
