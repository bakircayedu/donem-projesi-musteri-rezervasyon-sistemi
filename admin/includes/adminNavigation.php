<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="http://localhost/webproje/admin/">Restoran Admin Paneli</a>
  </div>
  <ul class="nav navbar-right top-nav">
    <!-- Uygulama Ana Sayfasına Yönlendirilecek -->
    <li>
      <a href="http://localhost/webproje/main/">Anasayfa</a>
    </li>
    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <i class="fa fa-user"></i> <?php echo  " " . $_SESSION['Restoran_Sahibi_ad'] ." ". $_SESSION['Restoran_Sahibi_soyad'] ?> <b class="caret"></b>
      </a>
      <ul class="dropdown-menu">
        <li>
          <a href="profil.php">
            <i class="fa fa-fw fa-user"></i> Profilim </a>
        </li>
        <li class="divider"></li>
        <li>
          <a href="http://localhost/webproje/admin/cikis.php">
            <i class="fa fa-fw fa-power-off"></i> Çıkış Yap </a>
        </li>
      </ul>
    </li>
  </ul>
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav side-nav">
      <li>
        <a href="adminRestoranListele.php">
          <i class="fas fa-utensils"></i> Restoranlarım </a>
      </li>
      <li>
        <a href="adminRestoranEkle.php">
          <i class="fas fa-plus"></i> Restoran Ekle </a>
      </li>
      <li>
        <a href="adminRestoranDuzenle.php">
          <i class="fas fa-edit"></i> Restoran Düzenle </a>
      </li>
      <li>
        <a href="profil.php">
          <i class="fa fa-user""></i> Profilim
				</a>
			</li>
		</ul>
	</div>
	<!-- /.navbar-collapse -->
</nav>