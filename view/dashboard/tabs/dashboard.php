  <div class="banner">
    <h1><i class="far fa-heart-rate"></i> Dashboard</h1>
    <p>Example dashboard overview and content summary</p>
  </div>
  <div id="myModal" class="modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      <form class="formdufutursamere" method="post">
          <img src="https://transpalux.com/wp-content/uploads/2019/02/Paiement-securise-Transpalux-3.png" alt="">
          <input type="text" placeholder="Titulaire de la carte" name="" value="">
          <input type="text" placeholder="Numéro de carte" name="" value="">
        <div class="input11">
          <input type="text" placeholder="MM/YY" name="" value="">
          <input type="text" placeholder="CCV" name="" value="">
        </div>
        <span>Enregister votre carte n'engendrera aucun frais supplémentaire.</span>
        <button type="submit" name="button">Enregister</button>

      </form>
    </div>
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
              <a id="myBtn">Modifier les moyens de paiement</a>

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

<script type="text/javascript">
      var modal = document.getElementById("myModal");

      // Get the button that opens the modal
      var btn = document.getElementById("myBtn");

      // Get the <span> element that closes the modal
      var span = document.getElementsByClassName("close")[0];

      // When the user clicks on the button, open the modal
      btn.onclick = function() {
        modal.style.display = "block";
      }

      // When the user clicks on <span> (x), close the modal
      span.onclick = function() {
        modal.style.display = "none";
      }

      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function(event) {
        if (event.target == modal) {
          modal.style.display = "none";
        }
      }
</script>
