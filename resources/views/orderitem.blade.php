@extends('form')

@section('contents')
@php
use Illuminate\Support\Facades\DB;
$orders = DB::select('select * from orders');
 

@endphp
<section id="hero" class="d-flex align-items-center">

  


    <div class="row">
@foreach ($orders as $orders) 

<div class="col-4" style="margin: 50px;">
<div class="card" style="width: 18rem;">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">{{ $orders->product }}</p>
      <form method="post" action="/getitem">
        @csrf
      
        <input type="text" value="{{ $orders->id }}" name="id" >
        <input type="submit" class="btn-btn-primary" value="Hello">
       </form>
    </div>

</div>
  </div>


  @endforeach
</div>
  </section>

</div>
@endsection