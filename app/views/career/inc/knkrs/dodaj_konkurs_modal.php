<a class="btn btn-sm btn-info btn-flat pull-right" href="javascript:void(0)" data-toggle="modal" data-target="#dodaj_konkurs_modal">Dodaj Konkurs</a>

<div id="dodaj_konkurs_modal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Dodaj Konkurs</h4>
      </div>
      <div class="modal-body clearfix">
        <form id="dodaj_konkurs_forma" action="<?php echo URLROOT; ?>/karijera/dodaj" method="POST" enctype="multipart/form-data">
          
          <div id="crnogorski" class="col-md-6">
            <h4><img src="<?php echo URLROOT; ?>/images/crnogorski.png" alt="" width="24"> Crnogorski</h4>
            
            <div class="form-group"> 
              <label for="naslov">Naslov Konkursa <sup>*</sup></label>
              <span class="error-poruka-dodaj">Morate unijeti naslov konkursa</span><br>
              <input id="naslov" class="form-control form-element-dodaj" name="naslov" type="text">
            </div>
            
            <div class="form-group">
              <label for="pocetak_konkursa">Početak Konkursa <sup>*</sup></label>
              <span class="error-poruka-dodaj">Morate Unijeti Datum Početka Konkursa</span><br>
              <input id="pocetak_konkursa" class="form-element-dodaj" name="pocetak_konkursa" type="date">
            </div>
            
            <div class="form-group">
              <label for="kraj_konkursa">Završetak Konkursa <sup>*</sup></label>
              <span class="error-poruka-dodaj">Morate Unijeti Datum Završetka Konkursa</span><br>
              <input id="kraj_konkursa" class="form-element-dodaj" name="kraj_konkursa" type="date">
            </div>

            <div class="form-group">
              <label for="radno_mjesto">Opis Radnog Mjesta <sup>*</sup></label>
              <span class="error-poruka-dodaj">Morate Unijeti Opis Radnog Mjesta</span><br>
              <textarea id="radno_mjesto" class="form-control form-element-dodaj" name="radno_mjesto"></textarea>
            </div>
            
            <div class="form-group">
              <label>Upload Cover Fotografije <sup>*</sup></label>
              <span class="error-poruka-dodaj">Morate dodati Cover Fotografiju</span><br>
              <label class="custom-file-upload" for="cover_fotografija">
                <i class="fa fa-upload"></i> Upload
              </label>
              <input id="cover_fotografija" class="form-element-dodaj" name="cover_fotografija" type="file">
            </div>
          </div>
          
          <div id="engleski" class="col-md-6">
            <h4><img src="<?php echo URLROOT; ?>/images/engleski.png" alt="" width="24"> English</h4>
            <div class="form-group"> 
              <label for="title">Title Competition <sup>*</sup></label>
              <span class="error-poruka-dodaj">You Must Enter Contest Title</span><br>
              <input id="title" class="form-control form-element-dodaj" name="title" type="text">
            </div>

            <div class="form-group">
              <label for="competition_start">Competition Start <sup>*</sup></label>
              <span class="">You Must Enter the Beginning of the Competition</span><br>
              <input id="competition_start" class="" name="competition_start" type="date" disabled>
            </div>

            <div class="form-group">
              <label for="competition_end">Competition End <sup>*</sup></label>
              <span class="">You Must Enter the End of the Competition</span><br>
              <input id="competition_end" class="" name="competition_end" type="date" disabled>
            </div>
            
            <div class="form-group">
              <label for="work_position">Work Position <sup>*</sup></label>
              <span class="error-poruka-dodaj">You Must Enter Work Position</span><br>
              <textarea id="work_position" class="form-control form-element-dodaj" name="work_position"></textarea>
            </div>
            <div class="form-group">
              <label>Upload Cover Photo <sup>*</sup></label>
              <span class="error-poruka-dodaj">You Must Add Cover Photo</span><br>
              <label class="custom-file-upload" for="cover_photo">
                <i class="fa fa-upload"></i> Upload
              </label>
              <input id="cover_photo" class="form-element-dodaj" name="cover_photo" type="file">
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button id="odustani_konkurs" class="btn btn-default" href="<?php echo URLROOT; ?>/karijera" data-dismiss="modal">Odustani</button>
        <button class="btn btn-primary" id="dodaj_submit" name="dodaj_blog" type="submit" form="dodaj_konkurs_forma">Sačuvaj</button>
      </div>
    </div>
  </div>
</div>

