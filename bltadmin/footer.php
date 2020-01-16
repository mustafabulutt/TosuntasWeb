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



<!-- footer content -->
        <footer>
          <div class="copyright-info">
            <p class="pull-right">BLT YAZİLİM - MUSTAFA BULUT <a href="https://wwww.facebook.com/bltmstf">İLETİŞİM</a>
            </p>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->

      </div>
      <!-- /page content -->
    </div>

  </div>

  <div id="custom_notifications" class="custom-notifications dsp_none">
    <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
    </ul>
    <div class="clearfix"></div>
    <div id="notif-group" class="tabbed_notifications"></div>
  </div>

  <script src="js/bootstrap.min.js"></script>

  <!-- bootstrap progress js -->
  <script src="js/progressbar/bootstrap-progressbar.min.js"></script>
  <script src="js/nicescroll/jquery.nicescroll.min.js"></script>
  <!-- icheck -->
  <script src="js/icheck/icheck.min.js"></script>

  <script src="js/custom.js"></script>

  <!-- pace -->
  <script src="js/pace/pace.min.js"></script>

</body>

</html>