
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
			  <form>
				<!-- 2 column grid layout with text inputs for the first and last names -->
				<div class="row">
				  <div class="col-md-6 mb-4">
					<div class="form-outline">
					  <input type="text" id="form3Example1" class="form-control" />
					  <label class="form-label" for="form3Example1">First name</label>
					</div>
				  </div>
				  <div class="col-md-6 mb-4">
					<div class="form-outline">
					  <input type="text" id="form3Example2" class="form-control" />
					  <label class="form-label" for="form3Example2">Last name</label>
					</div>
				  </div>
				</div>
  
				<!-- Email input -->
				<div class="form-outline mb-4">
				  <input type="email" id="form3Example3" class="form-control" />
				  <label class="form-label" for="form3Example3">Email address</label>
				</div>
  
				<!-- Password input -->
				<div class="form-outline mb-4">
				  <input type="password" id="form3Example4" class="form-control" />
				  <label class="form-label" for="form3Example4">Password</label>
				</div>
  
				<!-- Submit button -->
				<button type="submit" class="btn btn-primary btn-block mb-4">
				  Sign up
				</button>
  
				<!-- Register buttons -->
				<div class="text-center">
				  <p>or sign up with:</p>
				  <button type="button" class="btn btn-link btn-floating mx-1">
					<i class="fa fa-facebook-f"></i>
				  </button>
  
				  <button type="button" class="btn btn-link btn-floating mx-1">
					<i class="fa fa-google"></i>
				  </button>
  
				  <button type="button" class="btn btn-link btn-floating mx-1">
					<i class="fa fa-twitter"></i>
				  </button>
  
				  <button type="button" class="btn btn-link btn-floating mx-1">
					<i class="fa fa-github"></i>
				  </button>
				</div>
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

