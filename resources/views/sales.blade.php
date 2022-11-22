
@extends('form')

@section('contents')

<div class="main-content">

        
    <main>
        <h2 class="dash-title">Sales</h2>
        
       
        
        
       
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">daily</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">weekly</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">monthly</button>
            </li>
          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"> <div class="activity-card">
            
                <table class="table table-striped" style="margin-top:20px;">
                    <thead style="background-color: #90ccbc;">
                      <tr>
                        <th>Name</th>
                        <th>UserName</th>
                        <th>Email</th>
                        <th>Address</th>
              
                        <th>Status</th>
                      </tr>
                    </thead>
           <tbody>
                            <tr>
                                <td>joel</td>
                                <td>Joel</td>
                                <td>Joel@joel</td>
                                <td>Joel's Street</td>
                                
                                <td>
                                          <button style="width: 70px;background-color:#ffc107;border: 2px solid #90ccbc;height: 30px;">Update</button>      
                                   <button style="width: 70px;background-color:#dc3545;border: 2px solid #90ccbc;height: 30px;color:white">delete</button>      
                                </td>
                            </tr>
                            
                            <tr>
                                <td>joel</td>
                                <td>Joel</td>
                                <td>Joel@joel</td>
                                <td>Joel's Street</td>
                     
                                <td>
                                          <button style="width: 70px;background-color:#ffc107;border: 2px solid #90ccbc;height: 30px;">Update</button>      
                                   <button style="width: 70px;background-color:#dc3545;border: 2px solid #90ccbc;height: 30px;color:white">delete</button>      
                                </td>
                            </tr>
                           
                            
                            <tr>
                                <td>joel</td>
                                <td>Joel</td>
                                <td>Joel@joel</td>
                                <td>Joel's Street</td>
                     
                                <td>
                                          <button style="width: 70px;background-color:#ffc107;border: 2px solid #90ccbc;height: 30px;">Update</button>      
                                   <button style="width: 70px;background-color:#dc3545;border: 2px solid #90ccbc;height: 30px;color:white">delete</button>      
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
