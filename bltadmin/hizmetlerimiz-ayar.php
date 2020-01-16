

      <?php 


include 'netting/baglan.php';



$hizmetlerimizsor=$db->prepare("select * from hizmetlerimiz where hizmetlerimiz_id=? ");
$hizmetlerimizsor->execute(array(0));  
$hizmetlerimizcek=$hizmetlerimizsor->fetch(PDO::FETCH_ASSOC);



       include 'header.php';






        ?>




      <!-- page content -->
      <div class="right_col" role="main">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3> HİZMETLERİMİZ SAYFA AYARLARI </h3>
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
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">BAŞLIK 1 : <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="first-name" required="required" name="hizmetlerimiz_baslik1" value="<?php echo $hizmetlerimizcek['hizmetlerimiz_baslik1']; ?>" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>


                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">ICERIK 2 :<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea  id="first-name" required="required" name="hizmetlerimiz_icerik2" class="form-control col-md-7 col-xs-12"><?php echo $hizmetlerimizcek['hizmetlerimiz_icerik2']; ?> </textarea>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">ICERIK 3  :<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea  id="first-name" required="required" name="hizmetlerimiz_icerik3" class="form-control col-md-7 col-xs-12"> <?php echo $hizmetlerimizcek['hizmetlerimiz_icerik3']; ?> </textarea>
                      </div>
                    </div>


                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">ICERIK 4 :<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea id="first-name" required="required" name="hizmetlerimiz_icerik4" class="form-control col-md-7 col-xs-12"> <?php echo $hizmetlerimizcek['hizmetlerimiz_icerik4']; ?> </textarea>
                      </div>
                    </div>



                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">ICERIK 5 :<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea  id="first-name" required="required" name="hizmetlerimiz_icerik5"  class="form-control col-md-7 col-xs-12"><?php echo $hizmetlerimizcek['hizmetlerimiz_icerik5']; ?> </textarea>
                      </div>
                    </div>


                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">BASLIK 2 :<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="first-name" required="required" name="hizmetlerimiz_baslik2" value="<?php echo $hizmetlerimizcek['hizmetlerimiz_baslik2']; ?>" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">ACIKLAMA 2 :<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea id="first-name" required="required" name="hizmetlerimiz_aciklama2" class="form-control col-md-7 col-xs-12"> <?php echo $hizmetlerimizcek['hizmetlerimiz_aciklama2']; ?></textarea>
                      </div>
                    </div>




                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">RESİM AÇIKLAMASI 1 :<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea  id="first-name" required="required" name="hizmetlerimiz_raciklama1" class="form-control col-md-7 col-xs-12"> <?php echo $hizmetlerimizcek['hizmetlerimiz_raciklama1']; ?></textarea>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">RESİM ACIKLAMASI 2 :<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea  id="first-name" required="required" name="hizmetlerimiz_raciklama2"  class="form-control col-md-7 col-xs-12"><?php echo $hizmetlerimizcek['hizmetlerimiz_raciklama2'];?>
                         </textarea>
                      </div>
                    </div>

                

                      <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button type="submit" name="hizmetlerimizayarkaydet" class="btn btn-success">GÜNCELLE</button>
                      </div>


              </div>
            </div>
          </div>
        </div>



        <?php include 'footer.php';?>
