<div class="cd-popup-izmijeni" role="alert">
  <div class="cd-popup-izmijeni-container clearfix">
    <h3 id="dod-pr-naslov">Izmijeni Konkurs</h3>
    <form id="izmijeni_konkurs_forma" method="POST" enctype="multipart/form-data">
      <div id="crnogorski" class="col-md-6">
        <h4><img src="<?php echo URLROOT; ?>/images/crnogorski.png" alt="" width="24"> Crnogorski</h4>

        <div class="form-group"> 
          <label for="naslov_izmjena">Naslov Konkursa <sup>*</sup></label>
          <span class="error-poruka-izmjena">Morate unijeti naslov konkursa</span><br>
          <input id="naslov_izmjena" class="form-control form-element-izmjena" name="naslov_izmjena" type="text">
        </div>
        
        <div class="form-group dates">
          <label for="pocetak_konkursa_izmjena">Početak Konkursa <sup>*</sup></label>
          <span id="poc_kon_izm" class="">Morate Unijeti Datum Početka Konkursa</span><br>
          <input id="pocetak_konkursa_izmjena" class="" name="pocetak_konkursa_izmjena" type="text" placeholder="DD/MM/YYYY" readonly="readonly">
        </div>
        
        <div class="form-group dates">
          <label for="kraj_konkursa_izmjena">Završetak Konkursa <sup>*</sup></label>
          <span id="kraj_kon_izm" class="">Morate Unijeti Datum Završetka Konkursa</span><br>
          <input id="kraj_konkursa_izmjena" class="" name="kraj_konkursa_izmjena" type="text" placeholder="DD/MM/YYYY" readonly="readonly">
        </div>
        
        <div class="form-group">
          <label for="radno_mjesto_izmjena">Opis Radnog Mjesta <sup>*</sup></label>
          <span class="error-poruka-izmjena">Morate Unijeti Opis Radnog Mjesta</span><br>
          <textarea id="radno_mjesto_izmjena" class="form-control form-element-izmjena" name="radno_mjesto_izmjena"></textarea>
        </div>
        
        <div id="cover_izmijeni" class="form-group">
          <label for="cover_fotografija_izmjena">Upload Cover Fotografije:</label>
          <span id="cvr_izmijeni_err" class="">Morate dodati cover fotografiju</span><br>
          <input id="cover_fotografija_izmjena" class="real-file" name="cover_fotografija_izmjena" type="file" hidden="hidden">
          <button class="custom-button" type="button">Upload</button>
          <span class="custom-text">Izaberite fotografiju.</span>
          <img id="prikaz-cover-slike-izmijeni" class="prikaz-slike" src="" alt="">
          <button class="button-ukloni" type="button">Ukloni</button>
          <div class="image-upload-wrap">
            <div id="dropzone-cover" class="dropzone">
              <span>Regija za <em>Drag and Drop</em></span>
            </div>
          </div>
        </div>

      </div>
      
      <div id="engleski" class="col-md-6">
        <h4><img src="<?php echo URLROOT; ?>/images/engleski.png" alt="" width="24"> English</h4>

        <div class="form-group"> 
          <label for="title_izmjena">Title Competition <sup>*</sup></label>
          <span class="error-poruka-izmjena">You Must Enter Contest Title</span><br>
          <input id="title_izmjena" class="form-control form-element-izmjena" name="title_izmjena" type="text">
        </div>

        <div class="form-group">
          <label for="">Competition Start <sup>*</sup></label><br>
          <input id="" class="" name="" type="date" disabled>
        </div>
        
        <div class="form-group">
          <label for="">Competition End <sup>*</sup></label><br>
          <input id="" class="" name="" type="date" disabled>
        </div>
        
        <div class="form-group">
          <label for="work_position_izmjena">Work Position <sup>*</sup></label>
          <span class="error-poruka-izmjena">You Must Enter Work Position</span><br>
          <textarea id="work_position_izmjena" class="form-control form-element-izmjena" name="work_position_izmjena"></textarea>
        </div>

      </div>
      
      <div class="row pull-right dugmad-potvrde">
        <button id="odustani-izmjena" class="btn btn-default cd-popup-potvrda-trigger" type="button">Odustani</button>
        <button id="konkurs-sacuvaj" class="btn btn-primary" type="button" form="izmijeni_konkurs_forma">Sačuvaj</button>
      </div>
    </form>

    <a href="#0" class="cd-popup-izmijeni-close img-replace-izmijeni">Close</a>
  </div>
</div>
