<style>
  @import "<?php echo URLROOT; ?>/css/izmijeni_proizvod.css";
</style>

<div class="cd-popup" role="alert">
  <div class="cd-popup-container clearfix">
    <p>Izmijeni Proizvod</p>
    <form id="izmijeni_blog_forma" action="<?php echo URLROOT; ?>/blog/izmijeni/<?php echo $data['izmijeni']->id ?>" method="POST" enctype="multipart/form-data">
          
      <div id="crnogorski" class="col-md-6">
        <h4><img src="<?php echo URLROOT; ?>/images/crnogorski.png" alt="" width="24"> Crnogorski</h4>
        <div class="form-group"> 
          <label for="naslov_izmjena">Naslov Bloga <sup>*</sup></label>
          <span class="error-poruka-dodaj">Morate unijeti naslov bloga</span><br>
          <input id="naslov_izmjena" class="form-control form-element-izmijeni" name="naslov_izmjena" type="text">
        </div>
        <div class="form-group">
          <label for="ime_i_prezime_izmjena">Ime i Prezime Autora <sup>*</sup></label>
          <span class="error-poruka-dodaj">Morate unijeti Ime i Prezime Autora</span><br>
          <input id="ime_i_prezime_izmjena" class="form-control form-element-izmijeni" name="ime_i_prezime_izmjena" type="text">
        </div>
        <div class="form-group">
          <label for="vrijeme_izmjena">Datum Kreiranja Bloga <sup>*</sup></label>
          <span class="error-poruka-dodaj">Morate Unijeti Datum Kreiranja Bloga</span><br>
          <input id="vrijeme_izmjena" class="form-element-izmijeni" name="vrijeme_izmjena" type="date">
        </div>
        <div class="form-group">
          <label for="uvodni_tekst_izmjena">Uvodni Tekst <sup>*</sup></label>
          <span class="error-poruka-dodaj">Morate Unijeti Uvodni Tekst</span><br>
          <textarea id="uvodni_tekst_izmjena" class="form-control form-element-izmijeni" name="uvodni_tekst_izmjena"></textarea>
        </div>
        <div class="form-group">
          <label for="glavni_tekst_izmjena">Tekst Bloga <sup>*</sup></label>
          <span class="error-poruka-dodaj">Morate Unijeti Tekst Novosti</span><br>
          <textarea id="glavni_tekst_izmjena" class="form-control form-element-izmijeni" name="glavni_tekst_izmjena"></textarea>
        </div>
        <div class="form-group">
          <label>Upload Cover Fotografije <sup>*</sup></label>
          <span class="error-poruka-dodaj">Morate dodati Cover Fotografiju</span><br>
          <label class="custom-file-upload" for="cover_fotografija_izmjena">
            <i class="fa fa-upload"></i> Upload
          </label>
          <input id="cover_fotografija_izmjena" class="form-element-izmijeni" name="cover_fotografija_izmjena" type="file">
        </div>
        <div class="form-group">
          <label for="alt_tag_izmjena">Alt Tag <sup>*</sup></label>
          <span class="error-poruka-dodaj">Morate unijeti alt tag</span><br>
          <input id="alt_tag_izmjena" class="form-control form-element-izmijeni" name="alt_tag_izmjena" type="text">
        </div>
        <div class="form-group">
          <label for="tagovi_izmjena">Tagovi <sup>*</sup></label>
          <span class="error-poruka-dodaj">Morate unijeti tagove</span><br>
          
          <div id="tagovi_div" class="tags-input" data-name="tags-input">
          </div>

        </div>
      </div>
      
      <div id="engleski" class="col-md-6">
        <h4><img src="<?php echo URLROOT; ?>/images/engleski.png" alt="" width="24"> English</h4>

        <div class="form-group">
          <label for="title_izmjena">Blog Title <sup>*</sup></label>
          <span class="error-poruka-dodaj">Please Enter Blog Title</span><br>
          <input id="title_izmjena" class="form-control form-element-izmijeni" name="title_izmjena" type="text">
        </div>
        <div class="form-group">
          <label for="full_name_izmjena">Author's Full Name <sup>*</sup></label>
          <span class="error-poruka-dodaj">Please Enter Author's Full Name</span><br>
          <input id="full_name_izmjena" class="form-control form-element-izmijeni" name="full_name_izmjena" type="text">
        </div>
        <div class="form-group">
          <label>Blog Creating Date</label><br>
          <input class="" type="date" disabled>
        </div>
        <div class="form-group">
          <label for="introductory_text_izmjena">Introductory Text <sup>*</sup></label>
          <span class="error-poruka-dodaj">Please Enter Introductory Text</span><br>
          <textarea id="introductory_text_izmjena" class="form-control form-element-izmijeni" name="introductory_text_izmjena"></textarea>
        </div>
        <div class="form-group">
          <label for="main_text_izmjena">Blog Text <sup>*</sup></label>
          <span class="error-poruka-dodaj">Please Enter Blog Text</span><br>
          <textarea id="main_text_izmjena" class="form-control form-element-izmijeni" name="main_text_izmjena"></textarea>
        </div>
        <div class="form-group">
          <label for="alt_tag_eng_izmjena">Alt Tag <sup>*</sup></label>
          <span class="error-poruka-dodaj">Please Enter Alt Tag</span>
          <input id="alt_tag_eng_izmjena" class="form-control form-element-izmijeni" name="alt_tag_eng_izmjena" type="text">
        </div>
        <div class="form-group">
          <label for="tags_izmjena">Tags <sup>*</sup></label>
          <span class="error-poruka-dodaj">Please Insert Tags</span>
          <input id="tags_izmjena" class="form-control form-element-izmijeni" name="tags_izmjena" type="text">
        </div>
      </div>

      <div id="dugmad-forme" class="form-group pull-right">
        <button id="odustani-izmjena" class="btn btn-default cd-popup2-trigger" type="button">Odustani</button>
        <button id="blog-sacuvaj" class="btn btn-primary" name="dodaj_blog" type="submit" form="izmijeni_blog_forma">Sačuvaj</button>
      </div>
    </form>

    <a href="#0" class="cd-popup-close img-replace">Close</a>
  </div>
</div>
