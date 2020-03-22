<div class="dashboard">
  <div class="nav">
    <div class="part">
      <h1>StrToWeb <span>FR</span></h1>
      <i class="fas fa-bars hamburger-icon"></i>
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
        <h4>Informations</h4>
        <p onclick=""><i class="far fa-heart-rate"></i> Tableau de bord</p>
        <p><i class="fas fa-chart-line"></i> Analytiques</p>
        <p><i class="far fa-wallet"></i> Porte monnaie</p>
      </div>
      <div class="part">
        <h4>Mes sites</h4>
        <p onclick="LeftDropDowntkt(1)"><i class="far fa-browser"></i> Web-Hamadi</p>
        <div class="in" id="1" style="display:none">
          <p><i class="fas fa-cogs"></i> Gérer</p>
          <p><i class="far fa-file-alt"></i> Factures</p>
          <p><i class="far fa-eye"></i> Surveillance</p>
          <p><i class="far fa-comments"></i>Chat développeur</p>
        </div>


      </div>
      <div class="part">
        <h4>Mes projets</h4>
        <p onclick="LeftDropDowntkt(-1)"><i class="fas fa-file-alt"></i> APIS</p>
        <div class="in" id="-1" style="display:none">
          <p><i class="fas fa-cogs"></i> API #1</p>
          <p><i class="fas fa-cogs"></i> API #1</p>
          <p><i class="fas fa-cogs"></i> API #1</p>
          <p><i class="fas fa-cogs"></i> API #1</p>
        </div>
      </div>
    </div>
    <div id="right" class="right">
      <?php require root.pre.'view/dashboard/tabs/'.pre.'gerer-site.php'; ?>
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
