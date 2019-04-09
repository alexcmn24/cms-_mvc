<div class="cd-popup-dodaj" role="alert">
  <div class="cd-popup-dodaj-container clearfix">
    <h3 id="dod-pr-naslov">Dodaj Proizvod</h3>
    <form id="dodaj_proizvod_forma" method="POST" enctype="multipart/form-data"> <!-- action="<?php echo URLROOT; ?>/proizvodi/dodaj" -->
      <div id="crnogorski" class="col-md-6">
        <h4><img src="<?php echo URLROOT; ?>/images/crnogorski.png" alt="" width="24"> Crnogorski</h4>
        <div class="form-group"> 
          <label for="naziv_dodaj">Naziv Proizvoda <sup>*</sup></label>
          <span class="error-poruka-dodaj">Morate unijeti naziv proizvoda</span><br>
          <input id="naziv_dodaj" class="form-control form-element-dodaj" name="naziv_dodaj" type="text">
        </div>
        <div class="form-group">
          <label for="opis_dodaj">Opis Proizvoda <sup>*</sup></label>
          <span class="error-poruka-dodaj">Morate unijeti opis proizvoda</span><br>
          <input id="opis_dodaj" class="form-control form-element-dodaj" name="opis_dodaj" type="text">
        </div>
        <div class="form-group">
          <label for="uvodni_tekst_dodaj">Uvodni Tekst <sup>*</sup></label>
          <span class="error-poruka-dodaj">Morate unijeti uvodni tekst</span><br>
          <textarea id="uvodni_tekst_dodaj" class="form-control form-element-dodaj" name="uvodni_tekst_dodaj"></textarea>
        </div>
        <div class="form-group">
          <label for="tekst_proizvoda_dodaj">Tekst Proizvoda <sup>*</sup></label>
          <span class="error-poruka-dodaj">Morate unijeti tekst proizvoda</span><br>
          <textarea id="tekst_proizvoda_dodaj" class="form-control form-element-dodaj" name="tekst_proizvoda_dodaj"></textarea>
        </div>
        
        <div id="cover_dodaj" class="form-group">
          <label for="cover_fotografija_dodaj">Upload Cover Fotografije:</label>
          <span class="error-poruka-dodaj">Morate dodati cover fotografiju</span><br>
          <input id="cover_fotografija_dodaj" class="real-file form-element-dodaj" name="cover_fotografija_dodaj" type="file" hidden="hidden">
          <button class="custom-button" type="button">Upload</button>
          <span class="custom-text">Izaberite fotografiju.</span>
          <img id="prikaz-cover-foto-dodaj" class="prikaz-slike" src="" alt="">
          <button class="button-ukloni" type="button">Ukloni</button>
          <div class="image-upload-wrap">
            <div id="dropzone-dodaj-cover" class="dropzone">
              <span>Regija za <em>Drag and Drop</em></span>
            </div>
          </div>
        </div>
        
        <div class="form-group">
          <label for="alt_tag_dodaj">Alt Tag <sup>*</sup></label>
          <span class="error-poruka-dodaj">Morate unijeti alt tag</span><br>
          <input id="alt_tag_dodaj" class="form-control form-element-dodaj" name="alt_tag_dodaj" type="text">
        </div>
      </div>
      
      <div id="engleski" class="col-md-6">
        <h4><img src="<?php echo URLROOT; ?>/images/engleski.png" alt="" width="24"> English</h4>

        <div class="form-group">
          <label for="name_dodaj">Product Name <sup>*</sup></label>
          <span class="error-poruka-dodaj">Please enter the name of product</span><br>
          <input id="name_dodaj" class="form-control form-element-dodaj" name="name_dodaj" type="text">
        </div>
        <div class="form-group">
          <label for="description_dodaj">Product Description <sup>*</sup></label>
          <span class="error-poruka-dodaj">Please enter product description</span><br>
          <input id="description_dodaj" class="form-control form-element-dodaj" name="description_dodaj" type="text">
        </div>
        <div class="form-group">
          <label for="introductory_text_dodaj">Introductory Text <sup>*</sup></label>
          <span class="error-poruka-dodaj">Please enter introductory text</span><br>
          <textarea id="introductory_text_dodaj" class="form-control form-element-dodaj" name="introductory_text_dodaj"></textarea>
        </div>
        <div class="form-group">
          <label for="product_text_dodaj">Product Text <sup>*</sup></label>
          <span class="error-poruka-dodaj">Please enter product text</span><br>
          <textarea id="product_text_dodaj" class="form-control form-element-dodaj" name="product_text_dodaj"></textarea>
        </div>

        <div id="uvodna_dodaj" class="form-group">
          <label for="uvodna_fotografija_dodaj">Upload Uvodne Fotografije:</label>
          <span class="error-poruka-dodaj">Morate dodati uvodnu fotografiju</span><br>
          <input id="uvodna_fotografija_dodaj" class="real-file form-element-dodaj" name="uvodna_fotografija_dodaj" type="file" hidden="hidden">
          <button class="custom-button" type="button">Upload</button>
          <span class="custom-text">Izaberite fotografiju.</span>
          <img class="prikaz-slike" src="" alt="">
          <button class="button-ukloni" type="button">Ukloni</button>
          <div class="image-upload-wrap">
            <div id="dropzone-dodaj-uvodna" class="dropzone">
              <span>Regija za <em>Drag and Drop</em></span>
            </div>
          </div>
        </div>

        <div class="form-group">
          <label for="alt_tag_eng_dodaj">Alt Tag <sup>*</sup></label>
          <span class="error-poruka-dodaj">Please add Alt Tag</span>
          <input id="alt_tag_eng_dodaj" class="form-control form-element-dodaj" name="alt_tag_eng_dodaj" type="text">
        </div>
      </div>
      <div class="row pull-right dugmad-potvrde">
        <button id="odustani_proizvod" class="btn btn-default cd-popup-potvrda-trigger" type="button">Odustani</button>
        <button class="btn btn-primary" id="dodaj_submit" name="dodaj_proizvod" type="button" form="dodaj_proizvod_forma">Sačuvaj</button>
      </div>
    </form>
    <a href="#0" class="cd-popup-dodaj-close img-replace-dodaj">Close</a>
  </div>
    
  </div> 
</div>
