<style>
  @import "<?php echo URLROOT; ?>/css/izmijeni_proizvod.css";
</style>

<div class="cd-popup" role="alert">
  <div class="cd-popup-container clearfix">
    <p>Izmijeni Konkurs</p>
    <form id="izmijeni_konkurs_forma" action="<?php echo URLROOT; ?>/karijera/izmijeni/<?php echo $data['izmijeni_id']; ?>" method="POST" enctype="multipart/form-data">
      
      <div id="crnogorski" class="col-md-6">
        <h4><img src="<?php echo URLROOT; ?>/images/crnogorski.png" alt="" width="24"> Crnogorski</h4>
        <div class="form-group"> 
          <label for="naslov_izmjena">Naslov Konkursa <sup>*</sup></label>
          <span class="error-poruka-izmijeni">Morate unijeti naslov konkursa</span><br>
          <input id="naslov_izmjena" class="form-control form-element-izmijeni" name="naslov_izmjena" type="text">
        </div>
        <div class="form-group">
          <label for="pocetak_konkursa_izmjena">Početak Konkursa <sup>*</sup></label>
          <span class="error-poruka-izmijeni">Morate Unijeti Datum Početka Konkursa</span><br>
          <input id="pocetak_konkursa_izmjena" class="form-element-izmijeni" name="pocetak_konkursa_izmjena" type="date">
        </div>
        <div class="form-group">
          <label for="kraj_konkursa_izmjena">Završetak Konkursa <sup>*</sup></label>
          <span class="error-poruka-izmijeni">Morate Unijeti Datum Završetka Konkursa</span><br>
          <input id="kraj_konkursa_izmjena" class="form-element-izmijeni" name="kraj_konkursa_izmjena" type="date">
        </div>
        <div class="form-group">
          <label for="radno_mjesto_izmjena">Opis Radnog Mjesta <sup>*</sup></label>
          <span class="error-poruka-izmijeni">Morate Unijeti Opis Radnog Mjesta</span><br>
          <textarea id="radno_mjesto_izmjena" class="form-control form-element-izmijeni" name="radno_mjesto_izmjena"></textarea>
        </div>
        <div class="form-group">
          <label>Upload Cover Fotografije <sup>*</sup></label>
          <span class="error-poruka-izmijeni">Morate dodati Cover Fotografiju</span><br>
          <label class="custom-file-upload" for="cover_fotografija_izmjena">
            <i class="fa fa-upload"></i> Upload
          </label>
          <input id="cover_fotografija_izmjena" class="form-element-izmijeni" name="cover_fotografija_izmjena" type="file">
        </div>
      </div>
      
      <div id="engleski" class="col-md-6">
        <h4><img src="<?php echo URLROOT; ?>/images/engleski.png" alt="" width="24"> English</h4>
        <div class="form-group"> 
          <label for="title_izmjena">Title Competition <sup>*</sup></label>
          <span class="error-poruka-izmijeni">You Must Enter Contest Title</span><br>
          <input id="title_izmjena" class="form-control form-element-izmijeni" name="title_izmjena" type="text">
        </div>
        <div class="form-group">
          <label for="">Competition Start<sup>*</sup></label>
          <span>You Must Enter the Beginning of the Competition</span><br>
          <input id="" class="form-element-izmijeni" name="" type="date" disabled>
        </div>
        <div class="form-group">
          <label for="">Competition End <sup>*</sup></label>
          <span>You Must Enter the End of the Competition</span><br>
          <input id="" name="" type="date" disabled>
        </div>
        <div class="form-group">
          <label for="work_position_izmjena">Work Position <sup>*</sup></label>
          <span class="error-poruka-izmijeni">You Must Enter Work Position</span><br>
          <textarea id="work_position_izmjena" class="form-control form-element-izmijeni" name="work_position_izmjena"></textarea>
        </div>
        <div class="form-group">
          <label>Upload Cover Photo <sup>*</sup></label>
          <span>You Must Add Cover Photo</span><br>
          <label class="custom-file-upload" for="">
            <i class="fa fa-upload"></i> Upload
          </label>
          <input class="form-element-izmijeni" name="" type="file" disabled>
        </div>
      </div>

      <div id="dugmad-forme" class="form-group pull-right">
        <button id="odustani-izmjena" class="btn btn-default cd-popup2-trigger" type="button">Odustani</button>
        <button id="konkurs-sacuvaj" class="btn btn-primary" type="submit" form="izmijeni_blog_forma">Sačuvaj</button>
      </div>
    </form>

    <a href="#0" class="cd-popup-close img-replace">Close</a>
  </div> 
</div>
