@extends('form')

@section('contents')

<div class="main-content">

        
    <main>
        <h2 class="dash-title">Stocks</h2>
        
       
        
        
       

            
                <table class="table table-striped" style="margin-top:20px;">
                    <thead style="background-color: #90ccbc;">
                      <tr>
                   
                        <th>Item Id</th>
                        <th>Stock Added</th>
                        <th>Time Added</th>
                      
              
               
                      </tr>
                    </thead>
           <tbody>
            @foreach ($data as $datas)
                
      
                            <tr>
                                <td>{{ $datas->item_id }}</td>
                                <td>{{ $datas->stock_added }}</td>
                                <td>{{ $datas->time_added }}</td>
                              
                            
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