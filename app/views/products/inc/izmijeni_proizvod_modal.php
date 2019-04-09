<div class="cd-popup-izmijeni" role="alert">
  <div class="cd-popup-izmijeni-container clearfix">
    <h3 id="izm-pr-naslov">Izmijeni Proizvod</h3>
    <form id="izmijeni_forma" method="POST" enctype="multipart/form-data">
        <div id="crnogorski" class="col-md-6">
          <h4><img src="<?php echo URLROOT; ?>/images/crnogorski.png" alt="" width="24"> Crnogorski</h4>
          
          <div class="form-group"> 
            <label for="naziv_izmjena">Naziv Proizvoda <sup>*</sup></label>
            <span class="error-poruka-izmjena">Morate unijeti naziv proizvoda</span><br>
            <input id="naziv_izmjena" class="form-control form-element-izmjena" name="naziv_izmjena" type="text">
          </div>

          <div class="form-group">
            <label for="opis_izmjena">Opis Proizvoda <sup>*</sup></label>
            <span class="error-poruka-izmjena">Morate unijeti opis proizvoda</span><br>
            <input id="opis_izmjena" class="form-control form-element-izmjena" name="opis_izmjena" type="text" >
          </div>

          <div class="form-group">
            <label for="uvodni_tekst_izmjena">Uvodni Tekst <sup>*</sup></label>
            <span class="error-poruka-izmjena">Morate unijeti uvodni tekst</span><br>
            <textarea id="uvodni_tekst_izmjena" class="form-control form-element-izmjena" name="uvodni_tekst_izmjena"></textarea>
          </div>

          <div class="form-group">
            <label for="tekst_proizvoda_izmjena">Tekst Proizvoda <sup>*</sup></label>
            <span class="error-poruka-izmjena">Morate unijeti tekst proizvoda</span><br>
            <textarea id="tekst_proizvoda_izmjena" class="form-control form-element-izmjena" name="tekst_proizvoda_izmjena"></textarea>
          </div>
          
          <div id="cover_izmijeni" class="form-group">
            <label for="cover_fotografija_izmjena">Upload Cover Fotografije:</label>
            <span id="cvr_err_por" class="">Morate dodati cover fotografiju</span><br>
            <input id="cover_fotografija_izmjena" class="real-file" name="cover_fotografija_izmjena" type="file" hidden="hidden">
            <button class="custom-button" type="button">Upload</button>
            <span class="custom-text">Izaberite fotografiju.</span>
            <img id="prikaz-cover-slike-izmijeni" class="prikaz-slike" src="" alt="">
            <button class="button-ukloni" type="button">Ukloni</button>
            <div class="image-upload-wrap">
              <div id="dropzone-izmijeni-cover" class="dropzone">
                <span>Regija za <em>Drag and Drop</em></span>
              </div>
            </div>

          </div>
          
          <div class="form-group">
            <label for="alt_tag_izmjena">Alt Tag <sup>*</sup></label>
            <span class="error-poruka-izmjena">Morate unijeti alt tag</span><br>
            <input id="alt_tag_izmjena" class="form-control form-element-izmjena" name="alt_tag_izmjena" type="text">
          </div>
        </div>
        
        <div id="engleski" class="col-md-6">
          <h4><img src="<?php echo URLROOT; ?>/images/engleski.png" alt="" width="24"> English</h4>

          <div class="form-group">
            <label for="name_izmjena">Product Name <sup>*</sup></label>
            <span class="error-poruka-izmjena">Please enter the name of product</span><br>
            <input id="name_izmjena" class="form-control form-element-izmjena" name="name_izmjena" type="text">
          </div>
          <div class="form-group">
            <label for="description_izmjena">Product Description <sup>*</sup></label>
            <span class="error-poruka-izmjena">Please enter product description</span><br>
            <input id="description_izmjena" class="form-control form-element-izmjena" name="description_izmjena" type="text">
          </div>
          <div class="form-group">
            <label for="introductory_text_izmjena">Introductory Text <sup>*</sup></label>
            <span class="error-poruka-izmjena">Please enter introductory text</span><br>
            <textarea id="introductory_text_izmjena" class="form-control form-element-izmjena" name="introductory_text_izmjena"></textarea>
          </div>
          <div class="form-group">
            <label for="product_text_izmjena">Product Text <sup>*</sup></label>
            <span class="error-poruka-izmjena">Please enter product text</span><br>
            <textarea id="product_text_izmjena" class="form-control form-element-izmjena" name="product_text_izmjena"></textarea>
          </div>
          
          <div id="uvodna_izmijeni" class="form-group">
            <label for="uvodna_fotografija_izmjena">Upload Uvodne Fotografije:</label>
            <span id="uvd_err_por" class="">Morate dodati uvodnu fotografiju</span><br>
            <input id="uvodna_fotografija_izmjena" class="real-file" name="uvodna_fotografija_izmjena" type="file" hidden="hidden">
            <button class="custom-button" type="button">Upload</button>
            <span class="custom-text">Izaberite fotografiju.</span>
            <img id="prikaz-uvodne-slike-izmijeni" class="prikaz-slike" src="" alt="">
            <button class="button-ukloni" type="button">Ukloni</button>
            <div class="image-upload-wrap">
              <div id="dropzone-izmijeni-uvodna" class="dropzone">
                <span>Regija za <em>Drag and Drop</em></span>
              </div>
            </div>
          </div>

          <div class="form-group">
            <label for="alt_tag_eng_izmjena">Alt Tag Eng <sup>*</sup></label>
            <span class="error-poruka-izmjena">Please add Alt Tag</span>
            <input id="alt_tag_eng_izmjena" class="form-control form-element-izmjena" name="alt_tag_eng_izmjena" type="text">
          </div>
        </div>
        
        <div id="" class="row pull-right dugmad-potvrde">
          <button id="odustani-izmjena" class="btn btn-default cd-popup-potvrda-trigger" type="button">Odustani</button>
        <button id="proizvod-sacuvaj" class="btn btn-primary" name="dodaj_proizvod" type="button" form="izmijeni_forma">Sačuvaj</button>
        </div>
      </form>

    <a href="#0" class="cd-popup-izmijeni-close img-replace-izmijeni">Close</a>
  </div>
</div>
