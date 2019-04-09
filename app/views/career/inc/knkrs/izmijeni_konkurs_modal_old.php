<div id="izmijeni_konkurs_modal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Izmijeni Konkurs</h4>
      </div>
      <div class="modal-body clearfix">
        <form id="izmijeni_konkurs_forma" action="<?php echo URLROOT; ?>/karijera/izmijeni/<?php echo $data['izmijeni_id']; ?>" method="POST" enctype="multipart/form-data">
          
          <div id="crnogorski" class="col-md-6">
            <h4><img src="<?php echo URLROOT; ?>/images/crnogorski.png" alt="" width="24"> Crnogorski</h4>
            <div class="form-group"> 
              <label for="naslov">Naslov Konkursa <sup>*</sup></label>
              <span class="error-poruka-izmijeni">Morate unijeti naslov konkursa</span><br>
              <input id="naslov" class="form-control form-element-izmijeni" name="naslov" type="text" value="<?php echo $data['selektovan_konkurs']->naslov; ?>">
            </div>
            <div class="form-group">
              <label for="pocetak_konkursa">Početak Konkursa <sup>*</sup></label>
              <span class="error-poruka-izmijeni">Morate Unijeti Datum Početka Konkursa</span><br>
              <input id="pocetak_konkursa" class="form-element-izmijeni" name="pocetak_konkursa" type="date" value="<?php echo $data['selektovan_konkurs']->pocetak_konkursa; ?>">
            </div>
            <div class="form-group">
              <label for="kraj_konkursa">Završetak Konkursa <sup>*</sup></label>
              <span class="error-poruka-izmijeni">Morate Unijeti Datum Završetka Konkursa</span><br>
              <input id="kraj_konkursa" class="form-element-izmijeni" name="kraj_konkursa" type="date" value="<?php echo $data['selektovan_konkurs']->kraj_konkursa; ?>">
            </div>
            <div class="form-group">
              <label for="radno_mjesto">Opis Radnog Mjesta <sup>*</sup></label>
              <span class="error-poruka-izmijeni">Morate Unijeti Opis Radnog Mjesta</span><br>
              <textarea id="radno_mjesto" class="form-control form-element-izmijeni" name="radno_mjesto"><?php echo $data['selektovan_konkurs']->radno_mjesto; ?></textarea>
            </div>
            <div class="form-group">
              <label>Upload Cover Fotografije <sup>*</sup></label>
              <span class="error-poruka-izmijeni">Morate dodati Cover Fotografiju</span><br>
              <label class="custom-file-upload" for="cover_fotografija">
                <i class="fa fa-upload"></i> Upload
              </label>
              <input id="cover_fotografija" class="form-element-izmijeni" name="cover_fotografija" type="file">
            </div>
          </div>
          
          <div id="engleski" class="col-md-6">
            <h4><img src="<?php echo URLROOT; ?>/images/engleski.png" alt="" width="24"> English</h4>
            <div class="form-group"> 
              <label for="title">Title Competition <sup>*</sup></label>
              <span class="error-poruka-izmijeni">You Must Enter Contest Title</span><br>
              <input id="title" class="form-control form-element-izmijeni" name="title" type="text" value="<?php echo $data['selektovan_konkurs']->title; ?>">
            </div>
            <div class="form-group">
              <label for="competition_start">Competition Start<sup>*</sup></label>
              <span class="error-poruka-izmijeni">You Must Enter the Beginning of the Competition</span><br>
              <input id="competition_start" class="form-element-izmijeni" name="competition_start" type="date" value="<?php echo $data['selektovan_konkurs']->competition_start; ?>">
            </div>
            <div class="form-group">
              <label for="competition_end">Competition End <sup>*</sup></label>
              <span class="error-poruka-izmijeni">You Must Enter the End of the Competition</span><br>
              <input id="competition_end" class="form-element-izmijeni" name="competition_end" type="date" value="<?php echo $data['selektovan_konkurs']->competition_end; ?>">
            </div>
            <div class="form-group">
              <label for="work_position">Work Position <sup>*</sup></label>
              <span class="error-poruka-izmijeni">You Must Enter Work Position</span><br>
              <textarea id="work_position" class="form-control form-element-izmijeni" name="work_position"><?php echo $data['selektovan_konkurs']->work_position; ?></textarea>
            </div>
            <div class="form-group">
              <label>Upload Cover Photo <sup>*</sup></label>
              <span class="error-poruka-izmijeni">You Must Add Cover Photo</span><br>
              <label class="custom-file-upload" for="cover_photo">
                <i class="fa fa-upload"></i> Upload
              </label>
              <input id="cover_photo" class="form-element-izmijeni" name="cover_photo" type="file">
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button id="odustani_konkurs" class="btn btn-default" href="<?php echo URLROOT; ?>/karijera" data-dismiss="modal">Odustani</button>
        <button id="izmijeni_submit" class="btn btn-primary" name="izmijeni_konkurs" type="submit" form="izmijeni_konkurs_forma">Sačuvaj</button>
      </div>
    </div>
  </div>
</div>

