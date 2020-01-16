
<?php 


ob_start();
include 'netting/baglan.php';
$kullanicisor=$db->prepare("select * from kullanici where kullanici_ad=:ad");
$kullanicisor->execute(array(
'ad'=> $_SESSION['kullanici_ad']
));
$say=$kullanicisor->rowCount();

if ($say==0) {
  header("location:login.php?durum=izinsiz");
  exit; 
}

?>


<!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

            <div class="menu_section">
              <h3>General</h3>
              <ul class="nav side-menu">
                 <li><a href="index.php"><i class="fa fa-home"></i>  ANASAYFA <span class="label label-success pull-right"> home page </span></a>
                </li>

                <li><a href="hakkimizda-ayar.php"><i class="fa fa-book"></i>  HAKKIMIZDA <span class="label label-success pull-right"> about us </span></a>
                </li>

                <li><a href="hizmetlerimiz-ayar.php"><i class="fa fa-laptop"></i>  HİZMETLERİMİZ <span class="label label-success pull-right">services  </span></a>
                </li>





                <li><a><i class="fa fa-cog"></i> AYARLAR <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="genel-ayar.php">Genel Ayarlar</a>
                    </li>
                    <li><a href="iletisim-ayar.php">Iletişim Ayarları</a>
                    </li>
                    <li><a href="api-ayar.php">APİ Ayarları</a>
                    </li>
                    <li><a href="sosyalmedya-ayar.php">Sosyal Medya</a>
                    </li>
                  </ul>
                </li>
              
               
               
                
              </ul>
            </div>
         

          </div>
          <!-- /sidebar menu -->