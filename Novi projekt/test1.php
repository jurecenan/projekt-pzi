<?php


//include auth.php file on all secure pages
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <title>REZ-N</title>

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
  <meta name="viewport" content="width=device-width" />

  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

  <!-- Bootstrap core CSS     -->
  <link rel="stylesheet" href="https://cdn.rawgit.com/creativetimofficial/now-ui-kit/2e8e665f/assets/css/bootstrap.min.css">
  <link href="https://cdn.rawgit.com/creativetimofficial/now-ui-kit/2e8e665f/assets/css/now-ui-kit.min.css?v1.2.0" rel="stylesheet"/>
  <link href="https://cdn.rawgit.com/creativetimofficial/now-ui-kit/2e8e665f/assets/demo/demo.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css" type="text/css">  
  <style>
    .navbar .navbar-nav .nav-link:not(.btn) i.fa{
      font-size: 18px;
      position: relative;
      top: 3px;
      text-align: center;
      width: 21px;
    }
  </style>

</head>

<section id="index">
<body class="index-page sidebar-collapse">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand"  data-placement="bottom"  onclick="scrollToElement('#index', 600);">
                    REZ-N
                </a>
                <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse justify-content-end" data-nav-image="./assets/img/blurred-image-1.jpg">
                <div class="collapse navbar-collapse justify-content-end">
                    <ul class="navbar-nav">
                          <li class="nav-item"><a class="nav-link" href="profil.php">Profil</a></li>
                          <li class="nav-item"><a class="nav-link" onclick="scrollToElement('#vizija', 600);">Vizija</a></li>
                          <li class="nav-item"><a class="nav-link" onclick="scrollToElement('#koncerti', 600);">Koncerti</a></li>
                          <li class="nav-item"><a class="nav-link" onclick="scrollToElement('#o-nama', 600);">O nama</a></li>
                          
                          <li class="nav-item"><a class="nav-link">Prijavljeni ste kao <?php echo $_SESSION['username']; ?></a></li>
                          <li class="nav-item"><a class="nav-link" href="logout.php">Odjava</a></li>
                    </ul>
              </div>
                            
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</section>
    <!-- End Navbar -->
    <div class="wrapper">
        <div class="page-header clear-filter" filter-color="orange">
            <div class="page-header-image" data-parallax="true" style="background-image: url('https://cdn.allwallpaper.in/wallpapers/2400x1350/8754/music-concert-2400x1350-wallpaper.jpg');">
            </div>
            <div class="container">
                <div class="content-center brand">
                    <img class="n-logo" src="https://cdn.rawgit.com/creativetimofficial/now-ui-kit/2e8e665f/assets/img/now-logo.png" alt="">
                    <h1 class="h1-seo">REZ-N</h1>
                    <h3>Rezervacija ulaznica za koncerte</h3>
                </div>
            </div>
        </div>
        <div class="main">

            <section class="section section-basic" id="vizija">
                <div class="container text-center mt-5">
                  <h3 class="title">Naša vizija</h3>
                  <p>Zeljeli smo napraviti web aplikaciju koja omogucuje korisnicima prijavu na sustav
                      i rezervaciju ulaznica za koncerte koje imamo u ponudi.
                  </p>
                  <p href="">Preuzmite nasu viziju u Word-u</p>

                </div></section>

               <!-- <section class="section section-basic" id="koncerti"><div class="container text-center">
                        <h1 class="pb-3">Izaberi koncert!</h1>
                        <div class="row product-review-container">
                              <div class="col-xl-3 col-md-6">
                                    <div class="card mb-5 mb-xl-0" id="card1" onclick="loadInfo('athlete')">
                                          <div class="card-body">
                                                <img src="https://www.jutarnji.hr/migration_catalog/bajaga/2784899/alternates/LANDSCAPE_680/bajaga" style="width:100%">
                                                <h6 class="card-price py-3">Bajaga</h6>
                                                <p>Arena Zagreb 2.3.2019</p>
                                                <button>Rezerviraj</button>
                                          </div>
                                    </div>
                              </div>
                              <div class="col-xl-3 col-md-6">
                                    <div class="card mb-5 mb-xl-0" id="card2" onclick="loadInfo('bodybuilder')">
                                          <div class="card-body">
                                                <img src="http://coolstyle.ba/wp-content/uploads/2018/11/severina.jpg" style="width:100%">
                                                <h6 class="card-price py-3">Severina</h6>
                                                <p>Donja Stubica 2.3.2019</p>
                                                <button>Rezerviraj</button>
                                          </div>
                                    </div>
                              </div>
                              <div class="col-xl-3 col-md-6">
                                    <div class="card mb-5 mb-xl-0" id="card3" onclick="loadInfo('senior')">
                                          <div class="card-body">
                                                <img src="http://cityportal.hr/wp-content/uploads/2018/02/ivan_zak_da_si_tu_3_foto_by_marko_grubisic.jpg" style="width:100%">
                                                <h6 class="card-price py-3">Ivan Zak</h6>
                                                <p>Arena Varazdin 9.3.2019</p>
                                                <button>Rezerviraj</button>
                                          </div>
                                    </div>
                              </div>
                              <div class="col-xl-3 col-md-6">
                                    <div class="card mb-5 mb-xl-0" id="card4">
                                          <div class="card-body">
                                              <img src="data:image/jpeg;base64,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" style="width:100%">
                                            
                                                <h6 class="card-price py-3">Zeljko Joksimovic</h6>
                                                <p>Koprivnica 15.3.2019</p>
                                                <button>Rezerviraj</button>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div></section> -->

                  <section class="section section-basic" id="koncerti"><div class="section" id="carousel">
                    <div class="container text-center">
                      <div class="title">
                        <h2 class="pb-3" allign="center">Izaberi koncert!</h2>
                      </div>
                      <div class="row justify-content-center">
                        <div class="col-lg-8 col-md-12">
                          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                              <li data-target="#carouselExampleIndicators" data-slide-to="0" class=""></li>
                              <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
                              <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
                              <li data-target="#carouselExampleIndicators" data-slide-to="3" class="active"></li>
                            </ol>
                            <div class="carousel-inner" role="listbox">
                              <div class="carousel-item">
                                <img class="d-block" src="http://hejmagazin.rs/wp-content/uploads/2016/11/Zeljko-Joksimovic-Suada.jpg" style="width:100%" alt="First slide">
                                <div class="carousel-caption d-none d-md-block">
                                  <h5>Zeljko Joksimovic</h5>
                                  <h4>Koprivnica 15.3.2019</h4>
                                  <a href="" class="btn btn-simple btn-round btn-white btn-lg" target="_blank">Rezerviraj</a>
                                </div>
                              </div>
                              <div class="carousel-item">
                                <img class="d-block" src="https://eventinfo.com.hr/admin/slike_dogadaji/srednja/ivan_zak_1492067353.jpg" style="width:100%" alt="Second slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Ivan Zak</h5>
                                    <h4>Arena Varazdin 9.3.2019</h4>
                                    <a href="" class="btn btn-simple btn-round btn-white btn-lg" target="_blank">Rezerviraj</a>
                                </div>
                              </div>
                              <div class="carousel-item">
                                <img class="d-block" src="https://eventinfo.com.hr/admin/slike_dogadaji/srednja/bajaga_i_instruktori_1468224500.jpg" style="width:100%" alt="Third slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Bajaga i instruktori</h5>
                                    <h4>Arena Zagreb 6.3.2019</h4>
                                    <a href="" class="btn btn-simple btn-round btn-white btn-lg" target="_blank">Rezerviraj</a>
                                </div>
                              </div>
                              <div class="carousel-item active">
                                <img class="d-block" src="http://images6.fanpop.com/image/photos/40900000/Severina-Wallpapers-severina-40914146-800-600.png" style="width:100%" alt="Fourd slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Severina</h5>
                                    <h4>Donja Stubica 2.3.2019</h4>
                                    <a href="" class="btn btn-simple btn-round btn-white btn-lg" target="_blank">Rezerviraj</a>
                                </div>
                              </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                              <i class="now-ui-icons arrows-1_minimal-left"></i>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                              <i class="now-ui-icons arrows-1_minimal-right"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div></section>
                  <!-- Registracija u stranici.....Napravio sam drugu pa kako vam se vise svidja
                  <section class="section section-basic" id="registracija">
                  <div class="container">
                    <div class="row">
                        <div class="card card-signup" data-background-color="orange" id="registracija">
                            <form class="form" method="" action="">
                                <div class="card-header text-center">
                                    <h3 class="card-title title-up">Registracija</h3>
                                    <div class="social-line">
                                       
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="input-group no-border">
                                        <div class="input-group-prepend">
                          <span class="input-group-text">
                            <i class="now-ui-icons users_circle-08"></i>
                          </span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="First Name...">
                                    </div>
        
                                    <div class="input-group no-border">
                                        <div class="input-group-prepend">
                          <span class="input-group-text">
                            <i class="now-ui-icons text_caps-small"></i>
                          </span>
                                        </div>
                                        <input type="text" placeholder="Last Name..." class="form-control">
                                    </div>

                                    <div class="input-group no-border">
                                        <div class="input-group-prepend">
                          <span class="input-group-text">
                            <i class="now-ui-icons ui-1_lock-circle-open"></i>
                          </span>
                                        </div>
                                        <input type="password" class="form-control" placeholder="Password...">
                                    </div>
        
                                    <div class="input-group no-border">
                                        <div class="input-group-prepend">
                          <span class="input-group-text">
                            <i class="now-ui-icons ui-1_email-85"></i>
                          </span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Email...">
                                    </div>
                                    
                                </div>
                                <div class="card-footer text-center">
                                    <a href="#pablo" class="btn btn-neutral btn-round btn-lg">Registriraj se</a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col text-center">
                        <a href="prijava.html" class="btn btn-simple btn-round btn-white btn-lg" target="">Prijavi se</a>
                    </div>
                </div></section>
                  -->
                <section class="section section-basic" id="o-nama"><div class="container text-center mt-5">
                    <h3 class="title">O nama</h3>
                    <p>Na ovome projektu sudjelovali su:</p>
                    <div class="row">
                          <div class="col-lg-3">
                                <img src="https://previews.123rf.com/images/alexmas/alexmas1302/alexmas130200009/17910474-3d-person-team-with-multi-colored-puzzles-3d-image-white-background-.jpg" alt="">
                                <p class="partial-text">Ivan Andrić</p>
                          </div>
                          <div class="col-lg-3">
                                <img src="https://previews.123rf.com/images/alexmas/alexmas1302/alexmas130200009/17910474-3d-person-team-with-multi-colored-puzzles-3d-image-white-background-.jpg" alt="">
                                <p class="partial-text">Jurica Ćenan</p>
                          </div>
                          <div class="col-lg-3">
                                <img src="https://previews.123rf.com/images/alexmas/alexmas1302/alexmas130200009/17910474-3d-person-team-with-multi-colored-puzzles-3d-image-white-background-.jpg" alt="">
                                <p class="partial-text">Luka Perić</p>
                          </div>
                          <div class="col-lg-3">
                            <img src="https://previews.123rf.com/images/alexmas/alexmas1302/alexmas130200009/17910474-3d-person-team-with-multi-colored-puzzles-3d-image-white-background-.jpg" alt="">
                            <p class="partial-text">Tina Petrović</p>
                      </div>
                    </div>
                
                </div></section>

               
            </div>

        <footer class="footer" data-background-color="black">
            <div class="container">
                <div class="copyright">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>, Designed by Ivan Andrić, Jurica Ćenan, Luka Perić, Tina Petrović
                </div>
            </div>
        </footer>
    </div>
</body>

<!--   Core JS Files   -->
<script src="script1.js"></script>
<script src="https://cdn.rawgit.com/creativetimofficial/now-ui-kit/2e8e665f/assets/js/core/jquery.min.js"></script>

<script src="https://cdn.rawgit.com/creativetimofficial/now-ui-kit/2e8e665f/assets/js/core/popper.min.js"></script>

<script src="https://cdn.rawgit.com/creativetimofficial/now-ui-kit/2e8e665f/assets/js/core/bootstrap.min.js"></script>

<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="https://cdn.rawgit.com/creativetimofficial/now-ui-kit/2e8e665f/assets/js/plugins/bootstrap-switch.js"></script>

<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="https://cdn.rawgit.com/creativetimofficial/now-ui-kit/2e8e665f/assets/js/plugins/nouislider.min.js"></script>

<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<script src="https://cdn.rawgit.com/creativetimofficial/now-ui-kit/2e8e665f/assets/js/plugins/bootstrap-datepicker.js"></script>
<script src="script1.js"></script>

<!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
<script src="https://cdn.rawgit.com/creativetimofficial/now-ui-kit/2e8e665f/assets/js/now-ui-kit.js"></script>





</html>

  



