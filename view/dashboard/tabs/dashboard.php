  <div class="banner">
    <h1><i class="far fa-heart-rate"></i> Dashboard</h1>
    <p>Example dashboard overview and content summary</p>
  </div>
  <div class="panel">
    <div class="parti">
      <div class="infos">
        <div class="panel-s grey">
          <div class="disabled">
            <a href="">Envie de savoir combien de visiteur il y a au total ? Cliquez ici</a>
          </div>
          <div class="chart">
            <p>Nombre de visiteurs</p>
            <div class="chart-div">
              <canvas style="width:100%;"  height="300" id="myChart"></canvas>
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
        <div class="panel-s grey">
          <div class="disabled">
            <a href="">Envie de savoir combien de visiteur il y a sur vos différents site ? Cliquez ici</a>
          </div>
          <div class="chart">
            <p>Nombre de visiteurs sur les différents sites</p>
            <div class="chart-div">
              <canvas style="width:100%;" height="300" id="myChart2"></canvas>
              <script type="text/javascript">
              var ctx = document.getElementById('myChart2');
              new Chart(ctx, {
                  type: 'bar',
                  data: {
                    labels: ["Web-Hamadi", "StrToWeb", "pitichat.fr"],
                    datasets: [
                      {
                        label: "Visiteurs",
                        backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f"],
                        data: [213,10,1]
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
              <p><b>Informations personnelles</b></p>
              <p>Clément SORIOT</p>

              <p>bouffeur2doigts@gmail.com</p>
            </div>
            <div class="card-body">
              <a href="">Modifier les informations</a>
            </div>
          </div>
          <div class="card">
            <div class="card-header">
              <p><b>Moyens de paiement</b></p>
              <p><i class="fas fa-credit-card"></i> 0213 ***** ***** *****</p>
            </div>
            <div class="card-body">
              <a href="">Modifier les moyens de paiement</a>
            </div>
          </div>
        </div>
        <div class="part">
          <div class="card">
            <div class="card-header">
              <p><b>Factures</b></p>
              <p>Hebergement: 50€</p>
              <p>Nom de domaine: 12€</p>
            </div>
            <div class="card-body">
              <a href="">Voir toutes les factures</a>
            </div>
          </div>
          <div class="card">
            <div class="card-header">
              <p><b>Porte monnaie | 30€</b></p>
              <p>Reçu #518741: 2€</p>
              <p>Reçu #518740: 2€</p>
            </div>
            <div class="card-body">
              <a href="">Recharger mon porte monnaie</a>
            </div>
          </div>
        </div>

      </div>
