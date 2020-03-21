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
      <div class="panel-s">
        <div class="chart">
          <p>Chat visiteur</p>
          <div class="chart-div">
            <div class="message">
              <i class="fas fa-desktop"></i>
              <p>lolo  ol oz ia iafiaifioaf aj oiajoaojaofoajfo  ajfoafjoiaj fafioiejfie  fefea ayugufgz zohjfiozh zoifhizhf ziohfioz zoizjhzoe zzzzz ziii i ii eruur rr rgujrg eg egiehog eggegoi egehgoeoi hge oehgheoiihi hi ehgieih ie</p>
            </div>
            <div class="message from">
              <img src="https://images.unsplash.com/photo-1520719627573-5e2c1a6610f0?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=60&h=60&fit=crop&ixid=eyJhcHBfaWQiOjF9" alt="">
              <p>lolo  ol oz ia iafiaifioaf aj oiajoaojaofoajfo  ajfoafjoiaj fafioiejfie  fefea ayugufgz zohjfiozh zoifhizhf ziohfioz zoizjhzoe zzzzz ziii i ii eruur rr rgujrg eg egiehog eggegoi egehgoeoi hge oehgheoiihi hi ehgieih ie</p>
            </div>


          </div>
          <form class="" method="post">
            <input placeholder="Envoyer un message..." type="text" name="" value="">
            <button type="submit" name="button"><i class="far fa-paper-plane"></i></button>
          </form>
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
