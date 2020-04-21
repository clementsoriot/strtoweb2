<?php $actualites->GetLastActualite(); ?>
<div class="banner">
  <h1><i class="fal fa-newspaper"></i> Informations</h1>
  <p>Dernières informations à propos de StrToWeb</p>
</div>
<div class="panel">
  <div class="parti">
    <div class="infos">
      <div class="panel-s">
        <div class="chart">
          <p>Mentions légales</p>
          <div class="chart-div" style="flex:auto; height:300px;">
            <p>Retard de paiement:</p>
            <ul>
              <li>Votre solde passe en négatif</li>
              <li>S'applique des frais d'un euro par jours pendant que votre solde est en négatif</li>
              <li>Chaque prelevement s'applique le prix + 5€</li>
            </ul>
            <p>Remboursement/Resiliation:</p>
            <ul>
              <li>Le remboursement du solde n'est pas possible.</li>
              <li>Tout travail effectué ou produit acheté n'est pas remboursable.</li>
              <li>Vous pouvez décider d'arrêter de payer une option superflux sur <br/>votre site en cliquant sur "Arreter l'abonnement" celui-ci prendera fin directement,<br/>mais ne sera pas remboursé.</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="panel-s">
        <div class="chart">
          <p><?= $actualites->titre; ?></p>
          <div class="chart-div" style="flex:auto; height:300px;">
            <h3>Article rédigé par <?= $actualites->auteur; ?> le <?= date('d.m.Y',$actualites->date); ?></h3>
            <p><?= $actualites->text; ?></p>
          </div>
        </div>
      </div>
    </div>
    <div class="cards">
      <div class="part">
        <div class="card">
          <div class="card-header">
            <p><b>Une chose à signaler ?</b></p>
          </div>
          <div class="card-body">
            <a href="">Nous contacter</a>
          </div>
        </div>
        <div class="card">
          <div class="card-header">
            <p><b>Une chose à signaler ?</b></p>
          </div>
          <div class="card-body">
            <a href="">Nous contacter</a>
          </div>
        </div>
      </div>
      <div class="part">
        <div class="card">
          <div class="card-header">
            <p><b>Une chose à signaler ?</b></p>
          </div>
          <div class="card-body">
            <a href="">Nous contacter</a>
          </div>
        </div>
        <div class="card">
          <div class="card-header">
            <p><b>Une chose à signaler ?</b></p>
          </div>
          <div class="card-body">
            <a href="">Nous contacter</a>
          </div>
        </div>
      </div>

    </div>
