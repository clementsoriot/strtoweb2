<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>STRTOWEB : lpb de tout les rebeux</title>
    <link rel="stylesheet" href="http://localhost/strtoweb2/src/main.css/">
    <link rel="stylesheet" href="http://localhost/strtoweb2/src/mobile.css/">
    <script src="https://kit.fontawesome.com/381cd9e6df.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  </head>
  <body>
    <div class="dashboard">
      <div class="nav">
        <div class="part">
          <h1>StrToWeb <span>FR</span></h1>
        </div>
        <div class="part">
          <img src="https://images.unsplash.com/photo-1520719627573-5e2c1a6610f0?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=60&h=60&fit=crop&ixid=eyJhcHBfaWQiOjF9" alt="">
        </div>
      </div>
      <div class="content">
        <div class="left">
          <div class="part">
            <h4>Interface</h4>
            <p><i class="fab fa-accessible-icon"></i> Layout</p>
            <p><i class="fab fa-accessible-icon"></i> Layout</p>
            <p><i class="fab fa-accessible-icon"></i> Layout</p>
            <p><i class="fab fa-accessible-icon"></i> Layout</p>
            <p><i class="fab fa-accessible-icon"></i> Layout</p>
          </div>
          <div class="part">
            <h4>Interface</h4>
            <p><i class="fab fa-accessible-icon"></i> Layout</p>
            <p><i class="fab fa-accessible-icon"></i> Layout</p>
            <p><i class="fab fa-accessible-icon"></i> Layout</p>
            <p><i class="fab fa-accessible-icon"></i> Layout</p>
            <p><i class="fab fa-accessible-icon"></i> Layout</p>
          </div>
          <div class="part">
            <h4>Interface</h4>
            <p><i class="fab fa-accessible-icon"></i> Layout</p>
            <p><i class="fab fa-accessible-icon"></i> Layout</p>
            <p><i class="fab fa-accessible-icon"></i> Layout</p>
            <p><i class="fab fa-accessible-icon"></i> Layout</p>
            <p><i class="fab fa-accessible-icon"></i> Layout</p>
          </div>
        </div>
        <div class="right">
          <div class="banner">
            <h1><i class="fab fa-accessible-icon"></i> Dashboard</h1>
            <p>Example dashboard overview and content summary</p>
          </div>
          <div class="panel">
            <div class="parti">
              <div class="infos">
                <div class="panel-s">
                  <div class="chart">
                    <p>Area machin</p>
                    <canvas id="myChart" width="400" height="400"></canvas>
                    <script>
                    var ctx = document.getElementById('myChart').getContext('2d');
                    var myChart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                            datasets: [{
                                label: '# of Votes',
                                data: [12, 19, 3, 5, 2, 3],
                                backgroundColor: [
                                    'rgba(255, 99, 132, 0.2)',
                                    'rgba(54, 162, 235, 0.2)',
                                    'rgba(255, 206, 86, 0.2)',
                                    'rgba(75, 192, 192, 0.2)',
                                    'rgba(153, 102, 255, 0.2)',
                                    'rgba(255, 159, 64, 0.2)'
                                ],
                                borderColor: [
                                    'rgba(255, 99, 132, 1)',
                                    'rgba(54, 162, 235, 1)',
                                    'rgba(255, 206, 86, 1)',
                                    'rgba(75, 192, 192, 1)',
                                    'rgba(153, 102, 255, 1)',
                                    'rgba(255, 159, 64, 1)'
                                ],
                                borderWidth: 1
                            }]
                        },
                        options: {
                            scales: {
                                yAxes: [{
                                    ticks: {
                                        beginAtZero: true
                                    }
                                }]
                            }
                        }
                    });
                    </script>
                  </div>
                </div>
                <div class="panel-s">
                  <div class="chart">
                    <p>Area machin</p>
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
            </div>
          </div>
        </div>
      </div>

    </div>
  </body>
</html>
