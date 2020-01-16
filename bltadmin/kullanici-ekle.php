

      <?php 


include 'netting/baglan.php';

$ayarsor=$db->prepare("select * from ayar where ayar_id=? ");
$ayarsor->execute(array(0));  
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);




       include 'header.php';






        ?>




      <!-- page content -->
      <div class="right_col" role="main">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3> KULLANİCİ EKLE </h3>
            </div>

          </div>
          <div class="clearfix"></div>

          <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">
              

                  <form action="netting/islem.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                    
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Kullanici Adı : <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="first-name" required="required" name="kullanici_ad"  class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>


                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kullanici Sifre : <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="first-name" required="required" name="kullanici_sifre"  class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kullanici Adı Soyadı :<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="first-name" required="required" name="kullanici_adsoyad" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>


                      <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button type="submit" name="kullanicieklekaydet" class="btn btn-success">EKLE</button>
                      </div>


              </div>
            </div>
          </div>
        </div>



        <?php include 'footer.php';?>
