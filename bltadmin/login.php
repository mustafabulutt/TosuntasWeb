<!DOCTYPE html>
<html lang="tr">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>BLT YAZILIM YONETIM PANELI </title>

  <!-- Bootstrap core CSS -->

  <link href="css/bootstrap.min.css" rel="stylesheet">

  <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet">

  <!-- Custom styling plus plugins -->
  <link href="css/custom.css" rel="stylesheet">
  <link href="css/icheck/flat/green.css" rel="stylesheet">


  <script src="js/jquery.min.js"></script>

  <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>

<body style="background:#F7F7F7;">

  <div class="">
    <a class="hiddenanchor" id="toregister"></a>
    <a class="hiddenanchor" id="tologin"></a>

    <div id="wrapper">
      <div id="login" class="animate form">
        <section class="login_content">
          <form action ="netting/islem.php" method="POST">
            <h1>YONETIM PANELI</h1>
            <div>
              <input type="text" name="kullanici_ad" class="form-control" placeholder="Kullanıcı Adınız" required="" />
            </div>
            <div>
              <input type="password" name="kullanici_sifre" class="form-control" placeholder="Şifreniz" required="" />
            </div>
            <div>
               <button style="width: 100%; background-color: #73879C; color:white;   " type="submit" name="girisyap" class="btn btn-default"> GİRİŞ YAP </button>             
            </div>
            <div class="clearfix"></div>
            <div class="separator">

            

            
              <div class="clearfix"></div>
              <br />
              <div>
                <h1><i class="fa fa-cloud" style="font-size: 26px;"></i> BLT YAZİLİM</h1>

               <p>©2019 Mustafa Bulut tarafından kodlanmıştır.</p>  
              </div>
            </div>
          </form>
          <!-- form -->
        </section>
        <!-- content -->
      
    </div>
  </div>

</body>

</html>
