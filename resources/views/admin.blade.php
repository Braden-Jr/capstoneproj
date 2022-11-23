@extends('form')

@section('contents')


<div class="main-content">

        
    <main>
        <h2 class="dash-title">Accounts</h2>
        
       
        
        
       
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Admin Account</button>
            </li>
         
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Add Account</button>
            </li>
          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"> <div class="activity-card">
            
                <table class="table table-striped" style="margin-top:20px;">
                    <thead style="background-color: #90ccbc;">
                      <tr>
                        <th style="text-align: center">Name</th>
                        <th style="text-align: center">Email</th>
                        <th style="text-align: center">Type</th>
                        <th style="text-align: center">Address</th>
                        <th style="text-align: center">Status</th>
              
                        <th style="text-align: center">Status</th>
                      </tr>
                    </thead>
           <tbody>

            @foreach ($data as $datas)
                
      

                            <tr>
                                <td>{{ $datas->name }}</td>
                                <td>{{ $datas->email }}</td>
                                <td>{{ $datas->type }}</td>
                                <td>{{ $datas->address }}</td>
                                <td>{{ $datas->status }}</td>
                                
                                <td>
                                   <a href="#editclient{{ $datas->id }}" class="btn btn-success" data-bs-toggle="modal"><i class="fa fa-edit">
                                </i> Edit</a>
                                <a href="#deleteClient{{ $datas->id }}" class="btn btn-danger" data-bs-toggle="modal"><i class="fa-solid fa-trash"></i>
                                   Delete</a>
                                @include('layout.modal')
                                  
                                </td>
                            </tr>
                            
                            
                           
                        </tbody>
                        @endforeach
                  </table>
                
                 
            </div>
          </div>





            
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab"><style>
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
              
                  <form method="POST" action="/adminsignup">
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
                    <input type="text" name='type' value="admin" hidden	>
                    <label class="form-label" for="form3Example4">Password</label>
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
            </section></div>
          </div>
        
    </main>
    
</div>


@endsection