@extends('form')

@section('contents')


<div class="main-content">
        
      
        
    <main>
        
        <h2 class="dash-title">Dashboard</h2>
        
        <div class="dash-cards">
            <div class="card-single">
                <div class="card-body">
                    <span class="ti-briefcase"></span>
                    <div>
                        <h5>Profits</h5>
                        <h4> ₱ 20000 </h4>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="">View all</a>
                </div>
            </div>
            
            <div class="card-single">
                <div class="card-body">
                    <i  class="fa-solid fa-cart-plus" style="font-size: 25px;margin-right:20px;"></i>
                    <div>
                        <h5>Purchase</h5>
                        <h4>100 items</h4>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="">View all</a>
                </div>
            </div>
            
            <div class="card-single">
                <div class="card-body">
                    <span class="ti-check-box"></span>
                    <div>
                        <h5>Sale</h5>
                        <h4>₱ 40000 </h4>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="">View all</a>
                </div>
            </div>
            
        </div>
        
        
        <section class="recent">
            <div class="activity-grid">
                <div class="activity-card">
                 
                    <canvas id="myChart" style="width:100%;max-width:600px"></canvas>

                </div>
                
               
                </div>
            </div>
        </section>
        
    </main>
    
</div>

<script>
    var xValues = [50,60,70,80,90,100,110,120,130,140,150];
var yValues = [7,8,8,9,9,9,10,11,14,14,15];

new Chart("myChart", {
type: "bar",
data: {
labels:xValues,

datasets: [{
  fill: false,
  lineTension: 0,
  backgroundColor: "rgba(0,0,255,1.0)",
  borderColor: "rgba(0,0,255,0.1)",
  data: yValues
}]
},
options: {
legend: {display: false},
scales: {
  yAxes: [{ticks: {min: 6, max:16}}],
}
}
});

    </script>


@endsection