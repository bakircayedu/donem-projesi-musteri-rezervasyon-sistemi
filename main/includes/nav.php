
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header ">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="http://localhost/webproje/main/index.php">Restoran Rezervasyon Sistemi</a>
            </div>
           
            <ul class="nav navbar-right top-nav" >


               
              
               
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle " style="color:grey" data-toggle="dropdown"><i class="fa fa-user"></i><?php echo  " " . $_SESSION['musteri_ad'] ." ". $_SESSION['musteri_soyad'] ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="http://localhost/webproje/main/profilim.php"><i class="fa fa-fw fa-user"></i> Profilim</a>
                        </li>
                        
                        <li class="divider"></li>
                        
                        <li>
                            <a href="http://localhost/webproje/main/cikis.php"><i class="fa fa-fw fa-power-off"></i> Çıkış Yap</a>
                        </li>
                    </ul>
                </li>
            </ul>
            
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="tumRestoranlariListele.php"> Tüm Restoranlar</a>
                    </li>
                             
                    

                                      
                                                        
                </ul>
            </div>
         
        </nav>
