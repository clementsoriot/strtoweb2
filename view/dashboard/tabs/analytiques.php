  <div class="banner">
    <h1><i class="fas fa-chart-line"></i> Analytiques <span>WEB-HAMADI.FR</span></h1>
    <p>Example dashboard overview and content summary</p>
  </div>
  <div class="panel">
    <div class="parti">
      <div class="infos">
        <div class="panel-s">
          <div class="chart">
            <p>Nombre de visiteurs</p>
            <div class="chart-div">
              <canvas style="width:100%;" height="300" id="myChart"></canvas>
              <script>
              var ctx = document.getElementById('myChart');

              new Chart(ctx, {
              type: 'line',
              data: {
                labels: ['Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi','Dimanche'],
                datasets: [{
                    data: 
					[<?= $statistiques->get_stat('123')['d1'] ?>,
					<?= $statistiques->get_stat('123')['d2'] ?>,
					<?= $statistiques->get_stat('123')['d3'] ?>,
					<?= $statistiques->get_stat('123')['d4'] ?>,
					<?= $statistiques->get_stat('123')['d5'] ?>,
					<?= $statistiques->get_stat('123')['d6'] ?>,
					<?= $statistiques->get_stat('123')['d7'] ?>],
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
        <div class="panel-s">
          <div class="chart">
            <p>Origine des visiteurs</p>
            <div class="chart-div">
              <canvas style="width:100%;" height="300" id="myChart2"></canvas>
              <script type="text/javascript">
              var ctx = document.getElementById('myChart2');
              new Chart(ctx, {
                  type: 'bar',
                  data: {
                    labels: ["Recherches google", "Pubs StrToWeb", "Inconnus"],
                    datasets: [
                      {
                        label: "Visiteurs",
                        backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f"],
                        data: [500,725,213]
                      }
                    ]
                  },
                  options: {
                    legend: { display: false },
                    title: {
                      display: false,
                    }
                  }
                });
              </script>
            </div>

          </div>
        </div>
      </div>
      