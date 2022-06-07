<?php 
include"baglan.php";
?>
<!DOCTYPE html>
<html lang="tr">

<head>
  <title>eczabe &mdash; </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Rubik:400,700|Crimson+Text:400,400i" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


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
              <a href="index2.php" class="js-logo-clone">Dermo | Admin Panel</a>
            </div>
          </div>
          <div class="main-nav d-none d-lg-block">
            <nav class="site-navigation text-right text-md-center" role="navigation">
              <ul class="site-menu js-clone-nav d-none d-lg-block">
                
                
              </ul>
            </nav>
          </div>
          <div class="icons">
          
          </div>
        </div>
      </div>
    </div>

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0">
            <a href="index2.php"></a> <span class="mx-2 mb-0">/</span>
            <strong class="text-black"></strong>
          </div>
        </div>
      </div>
    </div>

    



    <div class="site-section ">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h2 class="text-white mb-4">Offices</h2>
          </div>
          <table id="datatable" class="table table-striped table-bordered">
              <h1> Kullanıcılar </h1>
              <thead>
                <tr>
                <th></th>
                  <th>Kullanıcı Sil</th>
                  <th>Kullanıcı İD</th>
                  <th>Kullanıcı Ad</th>
                  <th>Kullanıcı Soyad</th>
                  <th>Kullanıcı Email</th>
                  <th>Kullanıcı Şifre</th>
                  <th></th>
                  
                  
                  
                </tr>
              </thead>
              <tbody>
                            <?php 
                $Urunler=$db->query("SELECT * FROM giris ORDER BY id");

                while($Urun=$Urunler->fetch())
                {
                    
                  
                  ?>
                  <tr>
                      <td></td>
                  <td><a  class = "text-danger"href="musteri_sil.php?id=<?php echo $Urun['id'] ?>">Sil</a></td>
                  <td><?php echo $Urun['id'] ?></td>
                    <td><?php echo $Urun['ad'] ?></td>
                    <td style="text-align: right;"><?php echo $Urun['soyad'] ?></td>
                    <td><?php echo $Urun['email'] ?></td>
                    <td><?php echo $Urun['sifre'] ?></td>
                    <td></td>
                    
                    
                    
                  </tr>
                  <?php 
                }
                ?>
                </tbody>
            </table>
        </div>
      </div>
      
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