

      <?php 


include 'netting/baglan.php';

$hakkimizdasor=$db->prepare("select * from hakkimizda where hakkimizda_id=? ");
$hakkimizdasor->execute(array(0));  
$hakkimizdacek=$hakkimizdasor->fetch(PDO::FETCH_ASSOC);



       include 'header.php';






        ?>




      <!-- page content -->
      <div class="right_col" role="main">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3> HAKIMIZDA SAYFA AYARLARI </h3>
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
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">BAŞLIK : <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="first-name" required="required" name="hakkimizda_baslik" value="<?php echo $hakkimizdacek['hakkimizda_baslik']; ?>" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>


                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">ICERIK :<span class="required">*</span>
                      </label>

                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea  id="first-name" required="required" name="hakkimizda_icerik" class="form-control col-md-12 col-xs-12"> <?php echo $hakkimizdacek['hakkimizda_icerik']; ?>"</textarea>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">VİZYON :<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea id="first-name" required="required" name="hakkimizda_vizyon" class="form-control col-md-7 col-xs-12"><?php echo $hakkimizdacek['hakkimizda_vizyon']; ?> </textarea>
                      </div>
                    </div>


                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">MİSYON :<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea id="first-name" required="required" name="hakkimizda_misyon" class="form-control col-md-7 col-xs-12"> <?php echo $hakkimizdacek['hakkimizda_misyon']; ?> </textarea> 
                      </div>
                    </div>

                      <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button type="submit" name="hakkimizdaayarkaydet" class="btn btn-success">GÜNCELLE</button>
                      </div>


              </div>
            </div>
          </div>
        </div>



        <?php include 'footer.php';?>
