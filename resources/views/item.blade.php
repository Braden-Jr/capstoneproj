@extends('form')

@section('contents')

<section id="hero" class="d-flex align-items-center">

  


    <div class="row">


<div class="col-4" style="margin: 50px;">
<div class="card" style="width: 18rem;">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">{{ $order['product'] }}</p>
      <form method="post" action="/create">
        @csrf
        <input type="number"  name="quantity" placeholder="number">
        <input type="text" value="{{ $order['id'] }}" name="id" >
        <input type="submit" class="btn-btn-primary" value="Hello">
       </form>
    </div>
  </div>
</div>


</div>
  </section>

</div>
@endsection