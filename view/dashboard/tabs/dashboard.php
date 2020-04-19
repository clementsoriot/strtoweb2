  <div class="banner">
    <h1><i class="far fa-heart-rate"></i> Tableau de bord</h1>
    <p>Configurez votre compte, et accedez aux options primaire.</p>
  </div>
  <div id="rechargeModal" class="modal">
    <div class="modal-content">
      <span class="close" onclick="modal_open('rechargeModal','close')">&times;</span>
      <form class="formdufutursamere" method="post">
        <p style="font-size:2rem">Recharger votre porte monnaie</p>
        <p style="text-align:center;">Celui-ci vous permetera d'être prelever sur votre monnaie virtuel et eviter les defaut de paiement.</p>

        <div class="input11">

        <button>20€</button>
          <button>50€</button>
          <button>100€</button>
          <input value="20" min="20" type="number" placeholder="Autre">
        </div>
     
        <button type="submit" name="button">Enregister</button>
        <p>L'argent ajouté ne peu-plus être remboursé après les 5 jours suivant le paiement.</p>
      </form>
    </div>
  </div>

  <div id="infoModal" class="modal">
    <div class="modal-content">
      <span class="close" onclick="modal_open('infoModal','close')">&times;</span>
      <form class="formdufutursamere" method="post">
        <p style="font-size:2rem">Votre compte</p>
        <p style="text-align:center;">Prenom: Clément</p>

    
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
              <a onclick="modal_open('infoModal','op')">Modifier les informations</a>
            </div>
          </div>
          <div class="card">
            <div class="card-header">
              <p><b>Paiement Mensuel</b></p>
              <div>
              <p>Renouvellement: 55€</p>
              <p><i class="fas fa-exclamation-circle"></i> Retard de paiement: +5€</p>
              <p style="text-align:right">Total: 60€</p>
          
            </div>
            </div>
            <div class="card-body">
              <a>Consulter mon actualité</a>
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
              <p><b>Porte monnaie (30€)</b></p>
              <p>Reçu #518741: 2€</p>
              <p>Reçu #518740: 2€</p>
            </div>
            <div class="card-body">
              <a onclick="modal_open('rechargeModal','op')">Recharger mon porte monnaie</a>
            </div>
          </div>
        </div>


      </div>

<script type="text/javascript">


      function modal_open(modal,op){
      var modal = document.getElementById(modal);

      // Get the button that opens the modal
      // Get the <span> element that closes the modal
      var span = document.getElementsByClassName("close")[0];

      // When the user clicks on the button, open the modal
      if(op == "close"){
        modal.style.display = "none";
      } else {
        modal.style.display = "block";
      }

      // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
          if (event.target == modal) {
            modal.style.display = "none";
          }
        }
      }
</script>
