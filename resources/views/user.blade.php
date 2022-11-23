@extends('form')

@section('contents')


<div class="main-content">

        
    <main>
        <h2 class="dash-title">User Accounts</h2>
        
       
        
        
       
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">User Account</button>
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





            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
              <table class="table table-striped" style="margin-top:20px;">
              <thead style="background-color: #90ccbc;">
                <tr>
                  <th style="text-align: center">Name</th>
                  <th style="text-align: center">UserName</th>
                  <th style="text-align: center">Email</th>
                  <th style="text-align: center">Address</th>
        
                  <th style="text-align: center">Status</th>
                </tr>
              </thead>
     <tbody>

   

                      <tr>
                          <td>joel</td>
                          <td>Joel</td>
                          <td>Joel@joel</td>
                          <td>Joel's Street</td>
                          
                          <td>
                                    <button style="width: 70px;background-color:#ffc107;border: 2px solid #90ccbc;height: 30px;padding:0">Update</button>      
                             <button style="width: 70px;background-color:#dc3545;border: 2px solid #90ccbc;height: 30px;color:white;padding:0;">delete</button>      
                          </td>
                      </tr>
                      
                      
                     
                  </tbody>
          
            </table>
          </div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
          </div>
        
    </main>
    
</div>


@endsection