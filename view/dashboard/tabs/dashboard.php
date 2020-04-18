  <div class="banner">
    <h1><i class="far fa-heart-rate"></i> Dashboard</h1>
    <p>Example dashboard overview and content summary</p>
  </div>
  <div id="myModal" class="modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      <form class="formdufutursamere" method="post">
        <div class="input11">
		  <button>20€</button>
          <button>50€</button>
          <button>100€</button>
		  <input value="20" min="20" type="number" placeholder="Autre">
        </div>
        <button type="submit" name="button">Enregister</button>

      </form>
    </div>
  </div>
  
  <div class="panel">
    <div class="parti">
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
              <p><b>Mot de passe</b></p>
              <p><i class="fas fa-lock"></i> **********</p>

            </div>
            <div class="card-body">
              <a href=>Modifier mon mot de passe</a>

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
              <a id="myBtn">Recharger mon porte monnaie</a>
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
