@extends('form')

@section('contents')


<div class="main-content">

        
    <main>
        <h2 class="dash-title">Accounts</h2>
        
       
        
        
       
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">User Account</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Admin Account</button>
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
                
                 
            </div></div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
          </div>
        
    </main>
    
</div>


@endsection