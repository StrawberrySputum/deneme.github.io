<?php 
include"baglan.php";
if (!isset($_SESSION['oturum'])){
    header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="tr">

<head>
  <title>Eczane &mdash; </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Rubik:400,700|Crimson+Text:400,400i" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">


  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">

</head>

<body>

  <div class="site-wrap">


    <div class="site-navbar py-2">

      <div class="search-wrap">
        <div class="container">
          <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
          <form action="#" method="post">
            <input type="text" class="form-control" placeholder="Search keyword and hit enter...">
          </form>
        </div>
      </div>

      <div class="container">
        <div class="d-flex align-items-center justify-content-between">
          <div class="logo">
            <div class="site-logo">
              <a href="index2.php" class="js-logo-clone">Dermo | Evim</a>
            </div>
          </div>
          <div class="main-nav d-none d-lg-block">
            <nav class="site-navigation text-right text-md-center" role="navigation">
              <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li class="active"><a href="index2.php">Anasayfa</a></li>
                <li><a href="shop.php">Mağaza</a></li>
                <li><a href="about.php">Hakkımızda</a></li>
                <li><a href="contact.php">İletişim</a></li>
              </ul>
            </nav>
          </div>
          <div class="icons">
          <li class="icons-btn d-inline-block"><?php if (!isset($_SESSION['oturum'])){
								?><a href="giris.php" class="icons-btn d-inline-block ">Giriş Yap</a>
                                |
                                <a href="kayit.php" class="icons-btn d-inline-block ">Kayıt Ol</a><?php
									}else{?><h6 class = "icons-btn d-inline-block text-dark">
									<?php
										echo $_SESSION["email"]; ?> |
									</h6><a href="cikis.php" class = "icons-btn d-inline-block text-danger"><b>
                                         | Çıkış Yap</b></a>
									<?php	} ?>
          </div>
        </div>
      </div>
    </div>

    <div class="site-blocks-cover" style="background-image: url('images/her2.jpg');">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 mx-auto order-lg-2 align-self-center">
            <div class="site-block-cover-content text-center">
              <h2 class="sub-title">Etkili Tıp, Her Gün Yeni Tıp</h2>
              <h1>Sağlığa, Güzelliğe, Doğala Hoşgeldiniz</h1>
              <p>
                <a href="shop.php" class="btn banner-wrap text-light px-5 py-3">Şimdi satın Al</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row align-items-stretch section-overlap">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="banner-wrap bg-primary h-100">
              <a href="#" class="h-100">
                <h5 >Ücretsiz <br> Teslimat</h5>
                <p>
                  Amet sit amet dolor
                  <strong>Lorem, ipsum dolor sit amet consectetur adipisicing.</strong>
                </p>
              </a>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="banner-wrap h-100">
              <a href="#" class="h-100">
                <h5>Açılışa <br> Özel 50% İndirim</h5>
                <p>
                  Amet sit amet dolor
                  <strong>Lorem, ipsum dolor sit amet consectetur adipisicing.</strong>
                </p>
              </a>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="banner-wrap bg-warning h-100">
              <a href="#" class="h-100">
                <h5>Sağlıklı <br> Bir Yaşam</h5>
                <p>
                  Amet sit amet dolor
                  <strong>Lorem, ipsum dolor sit amet consectetur adipisicing.</strong>
                </p>
              </a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="title-section text-center col-12">
            <h2 class="text-uppercase">Popüler Ürünler</h2>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <span class="tag">Sale</span>
            <a href="#"> <img src="images/product_01.png" alt="Image"></a>
            <h3 class="text-dark"><a href="#">Bioderma</a></h3>
            <p class="price"><del>95.00</del> &mdash; ₺55.00</p>
          </div>
          <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <a href="#"> <img src="images/product_02.png" alt="Image"></a>
            <h3 class="text-dark"><a href="#">İlaç</a></h3>
            <p class="price">₺70.00</p>
          </div>
          <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <a href="#"> <img src="images/product_03.png" alt="Image"></a>
            <h3 class="text-dark"><a href="#">İlaç</a></h3>
            <p class="price">₺120.00</p>
          </div>

          <div class="col-sm-6 col-lg-4 text-center item mb-4">

            <a href="#"> <img src="images/product_04.png" alt="Image"></a>
            <h3 class="text-dark"><a href="#">İlaç</a></h3>
            <p class="price"><del>45.00</del> &mdash; ₺20.00</p>
          </div>
          <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <a href="#"> <img src="images/product_05.png" alt="Image"></a>
            <h3 class="text-dark"><a href="#">İlaç</a></h3>
            <p class="price">$38.00</p>
          </div>
          <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <span class="tag">Sale</span>
            <a href="#"> <img src="images/product_06.png" alt="Image"></a>
            <h3 class="text-dark"><a href="#">İlaç</a></h3>
            <p class="price"><del>₺89</del> &mdash; ₺38.00</p>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-12 text-center">
            <a href="shop.php" class="btn btn-primary px-4 py-3">Daha Fazla</a>
          </div>
        </div>
      </div>
    </div>

    
    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="title-section text-center col-12">
            <h2 class="text-uppercase">Yeni Ürünler</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 block-3 products-wrap">
            <div class="nonloop-block-3 owl-carousel">

              <div class="text-center item mb-4">
                <a href="#"> <img src="images/product_03.png" alt="Image"></a>
                <h3 class="text-dark"><a href="#">İlaç</a></h3>
                <p class="price">₺120.00</p>
              </div>

              <div class="text-center item mb-4">
                <a href="#"> <img src="images/product_01.png" alt="Image"></a>
                <h3 class="text-dark"><a href="#">İlaç</a></h3>
                <p class="price">₺120.00</p>
              </div>

              <div class="text-center item mb-4">
                <a href="#"> <img src="images/product_02.png" alt="Image"></a>
                <h3 class="text-dark"><a href="#">İlaç</a></h3>
                <p class="price">₺120.00</p>
              </div>

              <div class="text-center item mb-4">
                <a href="#"> <img src="images/product_04.png" alt="Image"></a>
                <h3 class="text-dark"><a href="#">İlaç</a></h3>
                <p class="price">₺120.00</p>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

    

    <div class="site-section bg-secondary bg-image" style="background-image: url('images/bg_2.jpg');">
      <div class="container">
        <div class="row align-items-stretch">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <a href="#" class="banner-1 h-100 d-flex" style="background-image: url('images/bg_1.jpg');">
              <div class="banner-1-inner align-self-center">
                <h2>İlaç Ürünleri</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae ex ad minus rem odio voluptatem.
                </p>
              </div>
            </a>
          </div>
          <div class="col-lg-6 mb-5 mb-lg-0">
            <a href="#" class="banner-1 h-100 d-flex" style="background-image: url('images/bg_2.jpg');">
              <div class="banner-1-inner ml-auto  align-self-center">
                <h2>Uzmanlar tarafından incelendi</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae ex ad minus rem odio voluptatem.
                </p>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>


    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">

            <div class="block-7">
              <h3 class="footer-heading mb-4">About Us</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius quae reiciendis distinctio voluptates
                sed dolorum excepturi iure eaque, aut unde.</p>
            </div>

          </div>
          <div class="col-lg-3 mx-auto mb-5 mb-lg-0">
            <h3 class="footer-heading mb-4">Quick Links</h3>
            <ul class="list-unstyled">
              <li><a href="#">Supplements</a></li>
              <li><a href="#">Vitamins</a></li>
              <li><a href="#">Diet &amp; Nutrition</a></li>
              <li><a href="#">Tea &amp; Coffee</a></li>
            </ul>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="block-5 mb-5">
              <h3 class="footer-heading mb-4">Contact Info</h3>
              <ul class="list-unstyled">
                <li class="address">203 Fake St. Mountain View, San Francisco, California, USA</li>
                <li class="phone"><a href="tel://23923929210">+2 392 3929 210</a></li>
                <li class="email">emailaddress@domain.com</li>
              </ul>
            </div>


          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;
              <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made
              with Onur
                
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>

        </div>
      </div>
    </footer>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>

</body>

</html>