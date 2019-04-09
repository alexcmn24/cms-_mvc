<a class="btn btn-sm btn-info btn-flat pull-right" href="javascript:void(0)" data-toggle="modal" data-target="#dodaj_proizvod_modal">Dodaj Proizvod</a>

<div id="dodaj_proizvod_modal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Dodaj Proizvod</h4>
      </div>
      <div class="modal-body clearfix">
        <form id="dodaj_proizvod_forma" action="<?php echo URLROOT; ?>/proizvodi/dodaj" method="POST" enctype="multipart/form-data">
          
          <div id="crnogorski" class="col-md-6">
            <h4><img src="<?php echo URLROOT; ?>/images/crnogorski.png" alt="" width="24"> Crnogorski</h4>
            <div class="form-group"> 
              <label for="naziv">Naziv Proizvoda <sup>*</sup></label>
              <span class="error-poruka-dodaj">Morate unijeti naziv proizvoda</span><br>
              <input id="naziv" class="form-control form-element-dodaj" name="naziv" type="text">
            </div>
            <div class="form-group">
              <label for="opis">Opis Proizvoda <sup>*</sup></label>
              <span class="error-poruka-dodaj">Morate unijeti opis proizvoda</span><br>
              <input id="opis" class="form-control form-element-dodaj" name="opis" type="text">
            </div>
            <div class="form-group">
              <label for="uvodni_tekst">Uvodni Tekst <sup>*</sup></label>
              <span class="error-poruka-dodaj">Morate unijeti uvodni tekst</span><br>
              <textarea id="uvodni_tekst" class="form-control form-element-dodaj" name="uvodni_tekst"></textarea>
            </div>
            <div class="form-group">
              <label for="tekst_proizvoda">Tekst Proizvoda <sup>*</sup></label>
              <span class="error-poruka-dodaj">Morate unijeti tekst proizvoda</span><br>
              <textarea id="tekst_proizvoda" class="form-control form-element-dodaj" name="tekst_proizvoda"></textarea>
            </div>
            
            <div id="cover_dodaj" class="form-group">
              <label for="">Upload Cover Fotografije:</label><br>
              <input class="real-file" name="cover_fotografija" type="file" hidden="hidden">
              <button class="custom-button" type="button">Upload</button>
              <span class="custom-text">Izaberite fotografiju.</span>
              <img class="prikaz_slike" src="" alt="">
              <div class="fill" draggable="true"></div>
              <div class="empty"></div>
            </div>
            
            <div class="form-group">
              <label for="alt_tag">Alt Tag <sup>*</sup></label>
              <span class="error-poruka-dodaj">Morate unijeti alt tag</span><br>
              <input id="alt_tag" class="form-control form-element-dodaj" name="alt_tag" type="text">
            </div>
          </div>
          
          <div id="engleski" class="col-md-6">
            <h4><img src="<?php echo URLROOT; ?>/images/engleski.png" alt="" width="24"> English</h4>

            <div class="form-group">
              <label for="name">Product Name <sup>*</sup></label>
              <span class="error-poruka-dodaj">Please enter the name of product</span><br>
              <input id="name" class="form-control form-element-dodaj" name="name" type="text">
            </div>
            <div class="form-group">
              <label for="description">Product Description <sup>*</sup></label>
              <span class="error-poruka-dodaj">Please enter product description</span><br>
              <input id="description" class="form-control form-element-dodaj" name="description" type="text">
            </div>
            <div class="form-group">
              <label for="introductory_text">Introductory Text <sup>*</sup></label>
              <span class="error-poruka-dodaj">Please enter introductory text</span><br>
              <textarea id="introductory_text" class="form-control form-element-dodaj" name="introductory_text"></textarea>
            </div>
            <div class="form-group">
              <label for="product_text">Product Text <sup>*</sup></label>
              <span class="error-poruka-dodaj">Please enter product text</span><br>
              <textarea id="product_text" class="form-control form-element-dodaj" name="product_text"></textarea>
            </div>

            <div id="uvodna_dodaj" class="form-group">
              <label for="">Upload Cover Fotografije:</label><br>
              <input id="uvodna_fotografija_dodaj" class="real-file" name="uvodna_fotografija" type="file" hidden="hidden">
              <button class="custom-button" type="button">Upload</button>
              <span class="custom-text">Izaberite fotografiju.</span>
              <img id="prikaz-uvodne-slike-dodaj" class="prikaz-slike" src="" alt="">
            </div>

            <div class="form-group">
              <label for="alt_tag_eng">Alt Tag <sup>*</sup></label>
              <span class="error-poruka-dodaj">Please add Alt Tag</span>
              <input id="alt_tag_eng" class="form-control form-element-dodaj" name="alt_tag_eng" type="text">
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button id="odustani_proizvod" class="btn btn-default" type="button" data-dismiss="modal">Odustani</button>
        <button class="btn btn-primary" id="dodaj_submit" name="dodaj_proizvod" type="submit" form="dodaj_proizvod_forma">Sačuvaj</button>
      </div>
    </div>
  </div>
</div>


