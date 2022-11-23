@extends('form')

@section('contents')

<div class="main-content">

        
    <main>
        <h2 class="dash-title">Stocks</h2>
        
       
        
        
       

            
                <table class="table table-striped" style="margin-top:20px;">
                    <thead style="background-color: #90ccbc;">
                      <tr>
                        <th>Product Name</th>
                        <th>Gender</th>
                        <th>Price</th>
                        <th>stocks</th>
              
                        <th>Status</th>
                      </tr>
                    </thead>
           <tbody>
            @foreach ($data as $datas)
              
                            <tr>
                                <td>{{ $datas->Product_Name }}</td>
                                <td>{{ $datas->Gender }}</td>
                                <td>{{ $datas->Price }}</td>
                                <td>{{ $datas->stocks }}</td>
                                
                                <td>
                                      
                                          <a href="#updatestocks{{ $datas->id }}" class="btn btn-warning" data-bs-toggle="modal"><i class="fa fa-edit">
                                          </i> Add</a>
                                          @include('layout.modal')
                                          
                                       
                                </td>
                            </tr>
                            
                            @endforeach
                           
                           
                        </tbody>
                  </table>

                  <div class="row" style="padding-left:20px;border-radius:20px;display:flex;justify-content:center;margin-top:50px;">{{ $data->links() }}</div>
                
                 
            </div></div>

          </div>
        
    </main>

      

   
</div>
@endsection