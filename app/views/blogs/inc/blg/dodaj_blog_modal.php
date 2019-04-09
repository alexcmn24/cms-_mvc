<a class="btn btn-sm btn-info btn-flat pull-right" href="javascript:void(0)" data-toggle="modal" data-target="#dodaj_blog_modal">Dodaj Blog</a>

<div id="dodaj_blog_modal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Dodaj Blog</h4>
      </div>
      <div class="modal-body clearfix">
        <form id="dodaj_blog_forma" method="POST" enctype="multipart/form-data"> <!-- action="<?php echo URLROOT; ?>/blog/dodaj" -->
          
          <div id="crnogorski" class="col-md-6">
            <h4><img src="<?php echo URLROOT; ?>/images/crnogorski.png" alt="" width="24"> Crnogorski</h4>
            <div class="form-group"> 
              <label for="naslov">Naslov Bloga <sup>*</sup></label>
              <span id="naslov_error">Morate unijeti naslov bloga</span><br>
              <input id="naslov" class="form-control form-element-dodaj-blog" name="naslov" type="text">
            </div>
            <div class="form-group">
              <label for="ime_i_prezime">Ime i Prezime Autora <sup>*</sup></label>
              <span id="ime_i_prezime_error">Morate unijeti Ime i Prezime Autora</span><br>
              <input id="ime_i_prezime" class="form-control form-element-dodaj-blog" name="ime_i_prezime" type="text">
            </div>
            <div class="form-group">
              <label for="vrijeme">Datum Kreiranja Bloga <sup>*</sup></label>
              <span id="vrijeme_error">Morate Unijeti Datum Kreiranja Bloga</span><br>
              <input id="vrijeme" class="form-element-dodaj-blog" name="vrijeme" type="date">
            </div>
            <div class="form-group">
              <label for="uvodni_tekst">Uvodni Tekst <sup>*</sup></label>
              <span id="uvodni_tekst_error">Morate Unijeti Uvodni Tekst</span><br>
              <textarea id="uvodni_tekst" class="form-control form-element-dodaj-blog" name="uvodni_tekst"></textarea>
            </div>
            <div class="form-group">
              <label for="glavni_tekst">Tekst Bloga <sup>*</sup></label>
              <span id="glavni_tekst_error">Morate Unijeti Tekst Novosti</span><br>
              <textarea id="glavni_tekst" class="form-control form-element-dodaj-blog" name="glavni_tekst"></textarea>
            </div>
            <div class="form-group">
              <label>Upload Cover Fotografije <sup>*</sup></label>
              <span id="cover_fotografija_error">Morate dodati Cover Fotografiju</span><br>
              <label class="custom-file-upload" for="cover_fotografija">
                <i class="fa fa-upload"></i> Upload
              </label>
              <input id="cover_fotografija" class="form-element-dodaj-blog" name="cover_fotografija" type="file">
            </div>
            <div class="form-group">
              <label for="alt_tag">Alt Tag <sup>*</sup></label>
              <span id="alt_tag_error">Morate unijeti alt tag</span><br>
              <input id="alt_tag" class="form-control form-element-dodaj-blog" name="alt_tag" type="text">
            </div>
            <div class="form-group">
              <label for="tagovi">Tagovi <sup>*</sup></label>
              <span id="tagovi_error">Morate unijeti tagove</span><br>
              <input id="tagovi" class="form-control form-element-dodaj-blog" name="tagovi" type="text">
              

            </div>
          </div>
          
          <div id="engleski" class="col-md-6">
            <h4><img src="<?php echo URLROOT; ?>/images/engleski.png" alt="" width="24"> English</h4>

            <div class="form-group">
              <label for="title">Blog Title <sup>*</sup></label>
              <span id="title_error">Please Enter Blog Title</span><br>
              <input id="title" class="form-control form-element-dodaj-blog" name="title" type="text">
            </div>

            <div class="form-group">
              <label for="full_name">Author's Full Name <sup>*</sup></label>
              <span id="full_name_error">Please Enter Author's Full Name</span><br>
              <input id="full_name" class="form-control form-element-dodaj-blog" name="full_name" type="text">
            </div>

            <div class="form-group">
              <label>Blog Creating Date</label><br>
              <input class="" type="date" disabled>
            </div>

            <div class="form-group">
              <label for="introductory_text">Introductory Text <sup>*</sup></label>
              <span id="introductory_text_error">Please Enter Introductory Text</span><br>
              <textarea id="introductory_text" class="form-control form-element-dodaj-blog" name="introductory_text"></textarea>
            </div>

            <div class="form-group">
              <label for="main_text">Blog Text <sup>*</sup></label>
              <span id="main_text_error">Please Enter Blog Text</span><br>
              <textarea id="main_text" class="form-control form-element-dodaj-blog" name="main_text"></textarea>
            </div>

            <div class="form-group">
              <label>Upload Cover Photo <sup>*</sup></label>
              <span id="cover_photo_error">Please Add Cover Photo</span><br>
              <label class="custom-file-upload" for="cover_photo">
                <i class="fa fa-upload"></i> Upload
              </label>
              <input id="cover_photo" class="form-element-dodaj-blog" name="cover_photo" type="file">
            </div>

            <div class="form-group">
              <label for="alt_tag_eng">Alt Tag <sup>*</sup></label>
              <span id="alt_tag_eng_error">Please Enter Alt Tag</span>
              <input id="alt_tag_eng" class="form-control form-element-dodaj-blog" name="alt_tag_eng" type="text">
            </div>
            
            <div class="form-group">
              <label for="tags">Tags <sup>*</sup></label>
              <span id="tags_error">Please Insert Tags</span>
              <input id="tags" class="form-control form-element-dodaj-blog" name="tags" type="text">
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button id="odustani_blog" class="btn btn-default" data-dismiss="modal">Odustani</button>
        <button class="btn btn-primary" id="dodaj_submit" name="dodaj_blog" type="submit" form="dodaj_blog_forma">Sačuvaj</button>
      </div>
    </div>
  </div>
</div>

