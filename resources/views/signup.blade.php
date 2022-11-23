
<link rel="stylesheet" href="signup.css">
@extends('master')
@section('contents')


<!-- Section: Design Block -->
<section class="text-center text-lg-start">
<style>
  .cascading-right {
	margin-right: -50px;
  }

  @media (max-width: 991.98px) {
	.cascading-right {
	  margin-right: 0;
	}
  }
</style>

<!-- Jumbotron -->
<div class="card-container py-4">
  <div class="row g-0 align-items-center">
	<div class="col-lg-12 mb-10 mb-lg-0">
	  <div class="card" style="
		  background: hsla(0, 0%, 100%, 0.55);
		  backdrop-filter: blur(30px);
		  ">
		<div class="card-body p-5 shadow-5 text-center">
		  <h2 class="fw-bold mb-5">Sign Up Now!</h2>
		  <form method="POST" action="/signup">
			@csrf
			<!-- 2 column grid layout with text inputs for the first and last names -->
			<div class="row">
			  <div class="col-md-6 mb-4">
				<div class="form-outline">
				  <input type="text" name='fname'id="form3Example1" class="form-control" />
				  <label class="form-label" for="form3Example1">First name</label>
				</div>
			  </div>
			  <div class="col-md-6 mb-4">
				<div class="form-outline">
				  <input type="text" name='lname' id="form3Example2" class="form-control" />
				  <label class="form-label" for="form3Example2">Last name</label>
				</div>
			  </div>
			</div>

			<!-- Email input -->
			<div class="form-outline mb-4">
			  <input type="email" name='email' id="form3Example3" class="form-control" />
			  <label class="form-label" for="form3Example3">Email address</label>
			</div>

			<div class="form-outline mb-4">
				<input type="text" name='address' id="form3Example4" class="form-control" />
				<label class="form-label" for="form3Example3">Address</label>
			  </div>

			<!-- Password input -->
			<div class="form-outline mb-4">
			  <input type="password" name='password' id="form3Example5" class="form-control" />
			  <label class="form-label" for="form3Example4">Password</label>
			  <input type="text" name="type" value ="client"id="" hidden>
			</div>

			<!-- Submit button -->
			<button type="submit" class="btn btn-primary btn-block mb-4">
			  Sign up
			</button>
			@if(session('status'))
			<div class="alert alert-success">
				{{ session('status') }}
			</div>
			@endif
		  </form>
		</div>
	  </div>
	</div>
  </div>
</div>
<!-- Jumbotron -->
</section>
<!-- Section: Design Block -->
@endsection

