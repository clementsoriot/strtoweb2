<?php $actualites->GetLastActualite(); ?>
<div class="banner">
  <h1><i class="fal fa-newspaper"></i> Articles</h1>
  <p>Dernières informations à propos de StrToWeb</p>
</div>
<div class="panel">
  <div class="parti">
    <div class="infos">
      <div class="panel-s">
        <div class="chart">
          <p>Vous concernant</p>
          <div class="chart-div" style="flex:auto; height:300px;">
            <p>Vous avez un défaut de paiement</p>
            <p>Ce qui change :</p>
            <ul>
              <li>Meilleur animation</li>
              <li>Meilleur panel de couscous</li>
              <li>Meilleur animation</li>
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
