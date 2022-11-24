@extends('form')

@section('contents')
@php
$totalprice = 0;    
@endphp

<div class="main-content">
        

    <main>
   
        <h2 class="dash-title">Dashboard</h2>

        <div class="dash-cards">
            <div class="card-single">
                <div class="card-body">
                    <span class="ti-briefcase"></span>
                    <div>
                        <h5>Profits</h5>
                        <h4>     @foreach ($data as $datas)
                            @php
                            $totalprice += $datas->totalprice;
                    
                            @endphp

                          
                            @endforeach ₱ {{ $totalprice }} </h4>
                    </div>
                </div>
              
            </div>
            
            <div class="card-single">
                <div class="card-body">
                    <i  class="fa-solid fa-cart-plus" style="font-size: 25px;margin-right:20px;"></i>
                    <div>
                        <h5>Purchase</h5>

                        <h4>{{ $hello }} items</h4>
                    </div>
                </div>
              
            </div>
            
            <div class="card-single">
                <div class="card-body">
                    <span class="ti-check-box"></span>
                    <div>
                        <h5>Sale</h5>
                        <h4>₱ {{ $totalprice }} </h4>
                    </div>
                </div>
              
            </div>
            
        </div>
        
        
    
        
    </main>
    
</div>



@endsection