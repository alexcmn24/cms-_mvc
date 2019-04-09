<div class="cd-popup-izmijeni" role="alert">
  <div class="cd-popup-izmijeni-container clearfix">
    <h3 id="dod-pr-naslov">Izmijeni Blog</h3>
    <form id="izmijeni_blog_forma" method="POST" enctype="multipart/form-data">
      <div id="crnogorski" class="col-md-6">
        <h4><img src="<?php echo URLROOT; ?>/images/crnogorski.png" alt="" width="24"> Crnogorski</h4>
        
        <div class="form-group"> 
          <label for="naslov_izmjena">Naslov Bloga <sup>*</sup></label>
          <span class="error-poruka-izmjena">Morate unijeti naslov bloga</span><br>
          <input id="naslov_izmjena" class="form-control form-element-izmjena" name="naslov_izmjena" type="text">
        </div>
        
        <div class="form-group">
          <label for="ime_i_prezime_izmjena">Ime i Prezime Autora <sup>*</sup></label>
          <span class="error-poruka-izmjena">Morate unijeti Ime i Prezime Autora</span><br>
          <input id="ime_i_prezime_izmjena" class="form-control form-element-izmjena" name="ime_i_prezime_izmjena" type="text">
        </div>

        <div class="form-group dates">
          <label for="vrijeme_izmjena">Datum Kreiranja Bloga <sup>*</sup></label>
          <span id="datum_blog_izm" class="">Morate Unijeti Datum Kreiranja Bloga</span><br>
          <input id="vrijeme_izmjena" type="text" placeholder="DD/MM/YYYY" readonly="readonly">
        </div>
        
        <div class="form-group">
          <label for="uvodni_tekst_izmjena">Uvodni Tekst <sup>*</sup></label>
          <span class="error-poruka-izmjena">Morate Unijeti Uvodni Tekst</span><br>
          <textarea id="uvodni_tekst_izmjena" class="form-control form-element-izmjena" name="uvodni_tekst_izmjena"></textarea>
        </div>

        <div class="form-group">
          <label for="glavni_tekst_izmjena">Tekst Bloga <sup>*</sup></label>
          <span class="error-poruka-izmjena">Morate Unijeti Tekst Novosti</span><br>
          <textarea id="glavni_tekst_izmjena" class="form-control form-element-izmjena" name="glavni_tekst_izmjena"></textarea>
        </div>

        <div id="cover_izmijeni" class="form-group">
          <label for="cover_fotografija_izmjena">Upload Cover Fotografije:</label>
          <span id="cvr_err_por_izm" class="">Morate dodati cover fotografiju</span><br>
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
        
        <div class="form-group">
          <label for="alt_tag_izmjena">Alt Tag <sup>*</sup></label>
          <span class="error-poruka-izmjena">Morate unijeti alt tag</span><br>
          <input id="alt_tag_izmjena" class="form-control form-element-izmjena" name="alt_tag_izmjena" type="text">
        </div>
        
        <div class="form-group">
          <label for="tagovi">Tagovi <sup>*</sup> (razdvojeni zarezima)</label>
          <span id="err-tagovi-izm" class="tagovi-stil">Morate unijeti tagove</span><br>
          
          <div id="tagovi_div_izmijeni" class="tags-input" data-name="tags-input">
          </div>

        </div>

      </div>
      
      <div id="engleski" class="col-md-6">
        <h4><img src="<?php echo URLROOT; ?>/images/engleski.png" alt="" width="24"> English</h4>

        <div class="form-group">
          <label for="title_izmjena">Blog Title <sup>*</sup></label>
          <span class="error-poruka-izmjena">Please Enter Blog Title</span><br>
          <input id="title_izmjena" class="form-control form-element-izmjena" name="title_izmjena" type="text">
        </div>

        <div class="form-group">
          <label for="full_name_izmjena">Author's Full Name <sup>*</sup></label>
          <span class="error-poruka-izmjena">Please Enter Author's Full Name</span><br>
          <input id="full_name_izmjena" class="form-control form-element-izmjena" name="full_name_izmjena" type="text">
        </div>

        <div class="form-group">
          <label>Blog Creating Date</label><br>
          <input class="" type="date" disabled>
        </div>

        <div class="form-group">
          <label for="introductory_text_izmjena">Introductory Text <sup>*</sup></label>
          <span class="error-poruka-izmjena">Please Enter Introductory Text</span><br>
          <textarea id="introductory_text_izmjena" class="form-control form-element-izmjena" name="introductory_text_izmjena"></textarea>
        </div>

        <div class="form-group">
          <label for="main_text_izmjena">Blog Text <sup>*</sup></label>
          <span class="error-poruka-izmjena">Please Enter Blog Text</span><br>
          <textarea id="main_text_izmjena" class="form-control form-element-izmjena" name="main_text_izmjena"></textarea>
        </div>
        
        <div class="form-group">
          <label for="alt_tag_eng_izmjena">Alt Tag <sup>*</sup></label>
          <span class="error-poruka-izmjena">Please Enter Alt Tag</span>
          <input id="alt_tag_eng_izmjena" class="form-control form-element-izmjena" name="alt_tag_eng_izmjena" type="text">
        </div>

        <div class="form-group">
          <label for="tags_izmjena">Tags <sup>*</sup> (separated by comma)</label>
          <span id="err-tags-izm" class="tagovi-stil">Please Insert Tags</span>
          <div id="tags_div_izmijeni" class="tags-input" data-name="tags-input">
            
          </div>
        </div>

      </div>
      <div class="row pull-right dugmad-potvrde">
        <button id="odustani_blog" class="btn btn-default cd-popup-potvrda-trigger" type="button">Odustani</button>
        <button id="blog-sacuvaj" class="btn btn-primary" type="button" form="izmijeni_blog_forma">Sačuvaj</button>
      </div>
    </form>

    <a href="#0" class="cd-popup-izmijeni-close img-replace-izmijeni">Close</a>
  </div>
</div>