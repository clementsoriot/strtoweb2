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
              <p style="font-size:3rem;text-align:center">14€<span style="font-size:1rem">/mois</span> </p>
           
      
            </div>
            </div>
    
          </div>
        </div>
        <div class="part">
          <div class="card">
            <div class="card-header">
              <p><b>Factures</b></p>
              <p style="font-size:1.5rem;">-7€<span style="font-size:1rem">/Hebergement</span></p>
              <p style="font-size:1.5rem;">-2€<span style="font-size:1rem">/Domaine</span></p>
              <p style="font-size:1.5rem;">-5€<span style="font-size:1rem">/Hebergement</span></p>
            </div>
            <div class="card-body">
              <a href="">Voir toutes les factures</a>
            </div>
          </div>
          <div class="card 
          <?php 
          if($user->GetMonnaie() < 0 ):
            echo 'bg-red'; 
          endif;
          ?>">
            <div class="card-header ">
              <p><b>Solde:</b></p>
              <p style="font-size:3rem;text-align:center"><?= $user->GetMonnaie() ?>€</p>
        
            
            </div>
            <div class="card-body
            <?php 
            if($user->GetMonnaie() < 0 ):
              echo 'bg-red'; 
            endif;
            ?>
            ">
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
