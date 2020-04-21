<div class="dashboard">
  <div class="nav">
    <div class="part">
      <h1>StrToWeb <span>FR</span></h1>
      <i class="fas fa-bars hamburger-icon"></i>
    </div>
    <div class="part">
      <i class="fal fa-sign-out-alt"></i>
      <p>Anne marie</p>
      <img src="https://images.unsplash.com/photo-1520719627573-5e2c1a6610f0?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=60&h=60&fit=crop&ixid=eyJhcHBfaWQiOjF9" alt="">
    </div>
  </div>
  <div class="content">
    <div class="left" id="part">
      <div class="part">
        <h4>Informations</h4>
        <a href="<?= siteurl ?>/tableau-de-bord/category/main"><i class="far fa-heart-rate"></i> Tableau de bord</a>
        <a href="<?= siteurl ?>/tableau-de-bord/category/porte-monnaie"><i class="far fa-wallet"></i> Porte monnaie</a>
        <a href="<?= siteurl ?>/tableau-de-bord/category/actualites"><i class="fal fa-newspaper"></i> Actualité</a>
        <a href="<?= siteurl ?>/tableau-de-bord/category/factures"><i class="fal fa-newspaper"></i> Factures</a>
      </div>
      <div class="part">
        <h4>Vos sites (<?= $user->GetSiteCount() ?>) </h4>
        <?= $user->GetSiteList() ?>

        <h4>Vos WebMail (<?= $user->GetWMCount() ?>) </h4>
        <?= $user->GetWMList() ?>
   

      </div>

    </div>
    <div id="right" class="right">
      <?php 
        $category = $ClassMvc->Get('category');

        if($category === "main"):
          require root.pre.'view/dashboard/tabs/'.pre.'dashboard.php'; 
        elseif($category === "boutique"):
          require root.pre.'view/dashboard/tabs/'.pre.'boutique.php'; 
        elseif($category === "actualites"):
          require root.pre.'view/dashboard/tabs/'.pre.'actualites.php'; 
        elseif($category === "factures"):
          require root.pre.'view/dashboard/tabs/'.pre.'factures.php';
        elseif($category === "analytiques"):
          require root.pre.'view/dashboard/tabs/'.pre.'analytiques.php';
        elseif($category === "porte-monnaie"):
          require root.pre.'view/dashboard/tabs/'.pre.'wallet.php';
        elseif($category === "renouvellement"):
          require root.pre.'view/dashboard/tabs/'.pre.'renouvellement.php';
        else:
          require root.pre.'view/dashboard/tabs/'.pre.'dashboard.php'; 
        endif;
      ?>
    </div>
      </div>
    </div>
  </div>

</div>

<script type="text/javascript">

function LeftDropDowntkt(id){
$('#'+ id).slideToggle();
}
$(".hamburger-icon").click(function(){
  $(".left").animate({
      width: "toggle"
    });
});



</script>
