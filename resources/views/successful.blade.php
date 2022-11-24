@extends('master')

@section('contents')
<section id="hero" class="d-flex align-items-center">

    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <div class="row">
        <div class="col-xl-6">
          <h1>Hello {{ $data['name'] }}</h1>
          <h2>Welcome to this website</h2>
          <a href="#about" class="btn btn-info scrollto" style="color: black">Get Started</a>
     
        </div>
      </div>
    </div>

  </section>

</div>
@endsection