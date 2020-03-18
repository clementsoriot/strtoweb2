<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>STRTOWEB : lpb de tout les rebeux</title>
    <link rel="stylesheet" href="http://localhost/strtoweb2/src/main.css/">
    <link rel="stylesheet" href="http://localhost/strtoweb2/src/mobile.css/">
    <script src="https://kit.fontawesome.com/381cd9e6df.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
  </head>
  <body>
    <div class="dashboard">
      <div class="nav">
        <div class="part">
          <h1>StrToWeb <span>FR</span></h1>
          <i class="fas fa-bars mobile hamburger-icon"></i>
        </div>
        <div class="part">
          <i class="far fa-bell"></i>
          <i class="far fa-envelope"></i>
          <p>Anne marie</p>
          <img src="https://images.unsplash.com/photo-1520719627573-5e2c1a6610f0?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=60&h=60&fit=crop&ixid=eyJhcHBfaWQiOjF9" alt="">
        </div>
      </div>
      <div class="content">
        <div class="left" id="part">
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
                            data: [10,50,110,70,213,500,420,550],
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
<script type="text/javascript">


$(".hamburger-icon").click(function(){
  $(".left").slideToggle();
  $(".dropdown").css('display', 'flex');

});

</script>
