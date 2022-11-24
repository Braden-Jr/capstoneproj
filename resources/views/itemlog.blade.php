@extends('form')

@section('contents')

<div class="limiter">

    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt>
               <img src="{{ asset('images/img-01.png') }}">
            </div>

            <form  method="post" action="/getitem" id="isForm">
                @if(session('status'))
    
                <div class="alert alert-success">
                    {{ session('status') }}
             
                </div>
                @endif
                @csrf
                <span class="login100-form-title">
                    Sign up Member
                </span>
                <div class="wrap-input100 validate-input" data-validate = "Password is required">
                    <input class="input100" type="text" name="id" placeholder="Full Name">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="wrap-input100 validate-input" data-validate = "Email is required">
                    <input class="input100" type="text" name="product" placeholder="Email">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                    </span>
                </div>
       
                
                <div class="container-login100-form-btn">
                    <input class="login100-form-btn" value="Sign Up" type="submit">
                    
                </div>

        
                <div class="text-center p-t-136">
                    <a class="txt2" href="login">
                        already have an account?
                        <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                    </a>
                </div>
            </form>
         
        </div>
    </div>
</div>




@endsection