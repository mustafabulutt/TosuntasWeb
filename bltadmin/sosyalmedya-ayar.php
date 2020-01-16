

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
              <h3> Sosyal Medya AYARLARI </h3>
            </div>

            <div class="title_right">
              <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="ANAHTAR KELİMENİZ">
                  <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Ara</button>
                        </span>
                </div>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>

          <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">
              

                  <form action="netting/islem.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                    
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">FACEBOOK :  <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="first-name" required="required" name="ayar_facebook" value="<?php echo $ayarcek['ayar_facebook']; ?>" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>


                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">TWİTTER : <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="first-name" required="required" name="ayar_twitter" value=" <?php echo $ayarcek['ayar_twitter']; ?> " class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>

                    
                    </div>


                    

                      <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button type="submit" name="sosyalmedyaayarkaydet" class="btn btn-success">GÜNCELLE</button>
                      </div>


              </div>
            </div>
          </div>
        </div>



        <?php include 'footer.php';?>
