<nav class="navigations-nav" role="navigation">
	<div class="top-menu">
		<div class="container">
			<div class="row">
			<div class="col-sm-7 col-md-9">
					<div id="navigations-logo"><a href="home"><img class="logopic" src="{{ asset('img/logo.png') }}" >
					</a></div>
				</div>
				<div class="col-sm-5 col-md-3">
				<form action="#" class="search-wrap">
				   <div class="form-group">
					  <input type="search" class="form-control search" placeholder="Search">
					  <button class="btn btn-primary submit-search text-center" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
				   </div>
				</form>
			 </div>
		 </div>
			<div class="row">
				<div class="col-sm-12 text-left menu-1">
					<ul>
						<li class="active"><a href="/">Home</a></li>
						<li>
							<a href="{{ url('men') }}">Men</a>
							
						</li>
						<li><a href="women">Women</a></li>
						<li><a href="about">About</a></li>
						<li><a href="contact">Contact</a></li>
						@if(Auth::check())
						<li class=" has-dropdown" id="cart">
							<a href="men">{{ session('username') }}</a>
							<ul class="dropdown">
								<li><a href="profile">Profile</a></li>
								<li><a href="history">History</a></li>
								<li><a href="logout">Logout</a></li>
								
							</ul>
						</li>
						<li id="cart"><a href="cart"><i class="fa-solid fa-cart-shopping"></i> Cart [{{ session('cartitem') }}]</a></li>
						@else
						<li id="cart"><a href="userlogin"><i class="icon-shopping-cart"></i> Log In</a></li>
						<li id="cart"><a href="signup"><i class="icon-shopping-cart"></i> Sign Up</a></li>
						<li id="cart"><a href="cart"><i class="fa-solid fa-cart-shopping"></i> Cart [0]</a></li>
						@endif
						
						
						
						
					</ul>
				</div>
			</div>
		</div>
	</div>
</nav>