<div class="cd-popup-dodaj" role="alert">
  <div class="cd-popup-dodaj-container clearfix">
    <h3 id="dod-pr-naslov">Dodaj Konkurs</h3>
    <form id="dodaj_konkurs_forma" method="POST" enctype="multipart/form-data"> <!-- action="<?php echo URLROOT; ?>/proizvodi/dodaj" -->
      <div id="crnogorski" class="col-md-6">
        <h4><img src="<?php echo URLROOT; ?>/images/crnogorski.png" alt="" width="24"> Crnogorski</h4>
        
        <div class="form-group"> 
          <label for="naslov_dodaj">Naslov Konkursa <sup>*</sup></label>
          <span class="error-poruka-dodaj">Morate unijeti naslov konkursa</span><br>
          <input id="naslov_dodaj" class="form-control form-element-dodaj" name="naslov_dodaj" type="text">
        </div>
        
        <div class="form-group dates">
          <label for="pocetak_konkursa_dodaj">Početak Konkursa <sup>*</sup></label>
          <span id="poc_kon_dod_err" class="">Morate Unijeti Datum Početka Konkursa</span><br>
          <input id="pocetak_konkursa_dodaj" class="" name="pocetak_konkursa_dodaj" type="text" placeholder="DD/MM/YYYY" readonly="readonly">
        </div>
        
        <div class="form-group dates">
          <label for="kraj_konkursa_dodaj">Završetak Konkursa <sup>*</sup></label>
          <span id="kraj_kon_dod_err" class="">Morate Unijeti Datum Završetka Konkursa</span><br>
          <input id="kraj_konkursa_dodaj" class="" name="pocetak_konkursa_dodaj" type="text" placeholder="DD/MM/YYYY" readonly="readonly">
        </div>
        
        <div class="form-group">
          <label for="radno_mjesto_dodaj">Opis Radnog Mjesta <sup>*</sup></label>
          <span class="error-poruka-dodaj">Morate Unijeti Opis Radnog Mjesta</span><br>
          <textarea id="radno_mjesto_dodaj" class="form-control form-element-dodaj" name="radno_mjesto_dodaj"></textarea>
        </div>
        
        <div id="cover_dodaj" class="form-group">
          <label for="cover_fotografija_dodaj">Upload Cover Fotografije:</label>
          <span id="cvr_dodaj_err" class="">Morate dodati cover fotografiju</span><br>
          <input id="cover_fotografija_dodaj" class="real-file" name="cover_fotografija_dodaj" type="file" hidden="hidden">
          <button class="custom-button" type="button">Upload</button>
          <span class="custom-text">Izaberite fotografiju.</span>
          <img id="prikaz-cover-slike-dodaj" class="prikaz-slike" src="" alt="">
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
          <label for="title_dodaj">Title Competition <sup>*</sup></label>
          <span class="error-poruka-dodaj">You Must Enter Contest Title</span><br>
          <input id="title_dodaj" class="form-control form-element-dodaj" name="title_dodaj" type="text">
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
          <label for="work_position_dodaj">Work Position <sup>*</sup></label>
          <span class="error-poruka-dodaj">You Must Enter Work Position</span><br>
          <textarea id="work_position_dodaj" class="form-control form-element-dodaj" name="work_position_dodaj"></textarea>
        </div>
      </div>
      <div class="row pull-right dugmad-potvrde">
        <button id="odustani_konkurs" class="btn btn-default cd-popup-potvrda-trigger" type="button">Odustani</button>
        <button class="btn btn-primary" id="dodaj_submit" type="button" form="dodaj_konkurs_forma">Sačuvaj</button>
      </div>
    </form>
  </div>
    
    <a href="#0" class="cd-popup-dodaj-close img-replace-dodaj">Close</a>
  </div>
</div>
