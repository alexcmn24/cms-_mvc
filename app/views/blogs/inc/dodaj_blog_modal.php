<div class="cd-popup-dodaj" role="alert">
  <div class="cd-popup-dodaj-container clearfix">
    <h3 id="dod-pr-naslov">Dodaj Blog</h3>
    <form id="dodaj_blog_forma" method="POST" enctype="multipart/form-data">
      <div id="crnogorski" class="col-md-6">
        <h4><img src="<?php echo URLROOT; ?>/images/crnogorski.png" alt="" width="24"> Crnogorski</h4>
        <div class="form-group"> 
          <label for="naslov_dodaj">Naslov Bloga <sup>*</sup></label>
          <span class="error-poruka-dodaj">Morate unijeti naslov bloga</span><br>
          <input id="naslov_dodaj" class="form-control form-element-dodaj" name="naslov_dodaj" type="text">
        </div>
        
        <div class="form-group">
          <label for="ime_i_prezime_dodaj">Ime i Prezime Autora <sup>*</sup></label>
          <span class="error-poruka-dodaj">Morate unijeti Ime i Prezime Autora</span><br>
          <input id="ime_i_prezime_dodaj" class="form-control form-element-dodaj" name="ime_i_prezime_dodaj" type="text">
        </div>
        
        <div class="form-group dates">
          <label for="vrijeme_dodaj">Datum Kreiranja Bloga <sup>*</sup></label>
          <span id="vrm_err_dod" class="">Morate Unijeti Datum Kreiranja Bloga</span><br>
          <input id="vrijeme_dodaj" class="" type="text" placeholder="DD/MM/YYYY" readonly="readonly">
        </div>
        
        <div class="form-group">
          <label for="uvodni_tekst_dodaj">Uvodni Tekst <sup>*</sup></label>
          <span class="error-poruka-dodaj">Morate Unijeti Uvodni Tekst</span><br>
          <textarea id="uvodni_tekst_dodaj" class="form-control form-element-dodaj" name="uvodni_tekst_dodaj"></textarea>
        </div>

        <div class="form-group">
          <label for="glavni_tekst_dodaj">Tekst Bloga <sup>*</sup></label>
          <span class="error-poruka-dodaj">Morate Unijeti Tekst Novosti</span><br>
          <textarea id="glavni_tekst_dodaj" class="form-control form-element-dodaj" name="glavni_tekst_dodaj"></textarea>
        </div>

        <div id="cover_dodaj" class="form-group">
          <label for="cover_fotografija_dodaj">Upload Cover Fotografije:</label>
          <span id="cvr_err_por" class="err-cover">Morate dodati cover fotografiju</span><br>
          <input id="cover_fotografija_dodaj" class="real-file" name="cover_fotografija_dodaj" type="file" hidden="hidden">
          <button class="custom-button" type="button">Upload</button>
          <span class="custom-text">Izaberite fotografiju.</span>
          <img class="prikaz-slike" src="" alt="">
          <button class="button-ukloni" type="button">Ukloni</button>
          <div class="image-upload-wrap">
            <div id="dropzone-cover" class="dropzone">
              <span>Regija za <em>Drag and Drop</em></span>
            </div>
          </div>
        </div>
        
        <div class="form-group">
          <label for="alt_tag_dodaj">Alt Tag <sup>*</sup></label>
          <span class="error-poruka-dodaj">Morate unijeti alt tag</span><br>
          <input id="alt_tag_dodaj" class="form-control form-element-dodaj" name="alt_tag_dodaj" type="text">
        </div>
        
        <div class="form-group">
          <label for="tagovi">Tagovi <sup>*</sup></label>
          <span id="err-tagovi" class="tagovi-stil">Morate unijeti bar jedan tag</span><br>
          
          <div id="tagovi_div_dodaj" class="tags-input" data-name="tags-input">
          </div>

        </div>

      </div>
      
      <div id="engleski" class="col-md-6">
        <h4><img src="<?php echo URLROOT; ?>/images/engleski.png" alt="" width="24"> English</h4>

        <div class="form-group">
          <label for="title_dodaj">Blog Title <sup>*</sup></label>
          <span class="error-poruka-dodaj">Please Enter Blog Title</span><br>
          <input id="title_dodaj" class="form-control form-element-dodaj" name="title_dodaj" type="text">
        </div>

        <div class="form-group">
          <label for="full_name_dodaj">Author's Full Name <sup>*</sup></label>
          <span class="error-poruka-dodaj">Please Enter Author's Full Name</span><br>
          <input id="full_name_dodaj" class="form-control form-element-dodaj" name="full_name_dodaj" type="text">
        </div>

        <div class="form-group">
          <label>Blog Creating Date</label><br>
          <input class="" type="date" disabled>
        </div>

        <div class="form-group">
          <label for="introductory_text_dodaj">Introductory Text <sup>*</sup></label>
          <span class="error-poruka-dodaj">Please Enter Introductory Text</span><br>
          <textarea id="introductory_text_dodaj" class="form-control form-element-dodaj" name="introductory_text_dodaj"></textarea>
        </div>

        <div class="form-group">
          <label for="main_text_dodaj">Blog Text <sup>*</sup></label>
          <span class="error-poruka-dodaj">Please Enter Blog Text</span><br>
          <textarea id="main_text_dodaj" class="form-control form-element-dodaj" name="main_text_dodaj"></textarea>
        </div>
        
        <div class="form-group">
          <label for="alt_tag_eng_dodaj">Alt Tag <sup>*</sup></label>
          <span class="error-poruka-dodaj">Please Enter Alt Tag</span>
          <input id="alt_tag_eng_dodaj" class="form-control form-element-dodaj" name="alt_tag_eng_dodaj" type="text">
        </div>

        <div class="form-group">
          <label for="tags_dodaj">Tags <sup>*</sup><span> (separated by comma)</span></label>
          <span id="err-tags" class="tagovi-stil">You Must Insert At Least one Tag</span>
          <div id="tags_div_dodaj" class="tags-input" data-name="tags-input">

          </div>
        </div>

      </div>
      <div class="row pull-right dugmad-potvrde">
        <button id="odustani_blog" class="btn btn-default cd-popup-potvrda-trigger" type="button">Odustani</button>
        <button id="dodaj_submit" class="btn btn-primary" type="button" form="dodaj_blog_forma">Sačuvaj</button>
      </div>
    </form>
    <a href="#0" class="cd-popup-dodaj-close img-replace-dodaj">Close</a>
  </div>
</div>
