
@extends('form')

@section('contents')

<div class="main-content">

        
    <main>
        <h2 class="dash-title">Transaction History</h2>
        
       
        
        
       
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Transaction</button>
            </li>
         
          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"> <div class="activity-card">
            
                <table class="table table-striped" style="margin-top:20px;">
                    <thead style="background-color: #90ccbc;">
                      <tr>
                        <th style="text-align: center">ProductName</th>
                        <th style="text-align: center">Email</th>
                        <th style="text-align: center">Address</th>
                        <th style="text-align: center">Total Price</th>
              
                        <th style="text-align: center">Mode Of Paypment</th>
                      </tr>
                    </thead>
           <tbody>
               @foreach ($data as $datas)
                  
           
                            <tr>
                                <td>{{ $datas->products }}</td>
                                <td>{{ $datas->email }}</td>
                                <td>{{ $datas->address }}</td>
                                <td>{{ $datas->totalprice }}</td>
                                <td>{{ $datas->modeofpayment }}</td>
                               
                            </tr>
                            
           @endforeach 
                           
                        </tbody>
                  </table>
                
                 
            </div></div>
          </div>
        
    </main>
    
</div>

@endsection
