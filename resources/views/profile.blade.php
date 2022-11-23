@extends('form')

@section('contents')


<div class="main-content">

        
    <main>
        <h2 class="dash-title">Profile</h2>
        
       
        
 
           
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
                    <div class="col-lg-12 mb-10 mb-lg-0" style="display: flex;justify-content:center;">
                      <div class="card" style="
                        background: hsla(0, 0%, 100%, 0.55);
                        backdrop-filter: blur(30px);
                        border: 2px solid #90ccbc;
                        ">
                      <div class="card-body p-5 shadow-5 text-center">
                    
                        <form method="POST" action="/adminsignup">
                        @csrf
                        <!-- 2 column grid layout with text inputs for the first and last names -->
                        <div class="row">
                          <div class="col-md-12 mb-4">
                          <div class="form-outline">
                            <input type="text" name='fname'id="form3Example1" value="{{ session('username') }}" class="form-control" style="border: 2px solid #90ccbc;font-size:20px;text-align:center;" disabled/>
                            <label style="margin-top:15px;" class="form-label" for="form3Example1">Name</label>
                          </div>
                          </div>
                          <div class="col-md-12 mb-4">
                            <div class="form-outline">
                              <input type="text" name='fname'id="form3Example1" value="{{ session('email') }}" class="form-control" style="border: 2px solid #90ccbc;font-size:20px;text-align:center;" disabled/>
                              <label style="margin-top:15px;" class="form-label" for="form3Example1">Email</label>
                            </div>
                            </div>
                        </div>
                  
                        <!-- Email input -->
                        <div class="col-md-12 mb-4">
                            <div class="form-outline">
                              <input type="text" name='fname'id="form3Example1" value="{{ session('address') }}" class="form-control" style="border: 2px solid #90ccbc;font-size:20px;text-align:center;" disabled/>
                              <label style="margin-top:15px;" class="form-label" for="form3Example1">Address</label>
                            </div>
                            </div>
                  
                            <div class="col-md-12 mb-4">
                                <div class="form-outline">
                                  <input type="text" name='fname'id="form3Example1" value="{{ session('type') }}"  class="form-control" style="border: 2px solid #90ccbc;font-size:20px;text-align:center;" disabled/>
                                  <label style="margin-top:15px;" class="form-label" for="form3Example1">Type</label>
                                </div>
                                </div>
                        <!-- Password input -->
                   
                  
                        <!-- Submit button -->
                     
                      </div>
                      </div>
                    </div>
                    </div>
                  </div>
                 
         





     
        
    </main>
    
</div>


@endsection