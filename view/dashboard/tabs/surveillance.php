<div class="banner">
  <h1><i class="far fa-eye"></i> Surveillance <span>WEB-HAMADI.FR</span></h1>
  <p>Example dashboard overview and content summary</p>
</div>
<div class="panel">
  <div class="parti">
    <div class="infos">
      <div class="panel-s">
        <div class="chart">
          <p>Nombre de visiteurs en temps réel</p>
          <div class="chart-div">
            <canvas style="width:100%;" height="300" id="myChart"></canvas>
            <script>
            var ctx = document.getElementById('myChart');

            new Chart(ctx, {
            type: 'line',
            data: {
              labels: ['','','','','','',''],
              datasets: [{
                  data: [10,10,15,8,30,50,35,30],
                  label: "Visiteurs",
                  borderColor: "#0061f2",
                  fill: true
                }
              ]
            },
            options: {
              legend: {
                display: false,
              },
            }
          });

            </script>
          </div>
        </div>
      </div>
      <div class="panel-s" style="visibility:hidden;">
        <div class="chart">
          <p>Chat visiteur</p>
          <div class="chart-div">

          </div>

        </div>
      </div>
    </div>
    <div class="cards">
      <div class="part">
        <div class="card">
          <div class="card-header">
            <p>Primary Card</p>
          </div>
          <div class="card-body">
            <a href="">View Details</a>
          </div>
        </div>
        <div class="card">
          <div class="card-header">
            <p>Primary Card</p>
          </div>
          <div class="card-body">
            <a href="">View Details</a>
          </div>
        </div>
      </div>
      <div class="part">
        <div class="card">
          <div class="card-header">
            <p>Primary Card</p>
          </div>
          <div class="card-body">
            <a href="">View Details</a>
          </div>
        </div>
        <div class="card">
          <div class="card-header">
            <p>Primary Card</p>
          </div>
          <div class="card-body">
            <a href="">View Details</a>
          </div>
        </div>
      </div>

    </div>
