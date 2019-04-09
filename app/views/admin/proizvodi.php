<section class="content-header">
  <h1>Proizvodi</h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Proizvodi</li>
  </ol>
</section>

<section class="content">

  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">Svi Proizvodi</h3>
      
      <a class="btn btn-sm btn-info btn-flat pull-right" href="javascript:void(0)" data-toggle="modal" data-target="#dodaj_proizvod_modal">Dodaj Proizvod</a>
      
      <div id="dodaj_proizvod_modal" class="modal fade">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Dodaj Proizvod</h4>
            </div>
            <div class="modal-body clearfix">
              <form id="myform" action="<?php echo URLROOT; ?>/admins/proizvodi" method="POST" enctype="multipart/form-data" role="form">
                <div id="crnogorski" class="col-md-6">
                  <h4><img src="<?php echo URLROOT; ?>/images/crnogorski.png" alt="" width="24"> Crnogorski</h4>
                  <div class="form-group">
                    <label for="naziv">Naziv Proizvoda <sup>*</sup></label>
                    <input id="naziv" class="form-control" name="naziv" type="text">
                  </div>
                  <div class="form-group">
                    <label for="opis">Opis Proizvoda <sup>*</sup></label>
                    <input id="opis" class="form-control" name="opis" type="text">
                  </div>
                  <div class="form-group">
                    <label for="uvodni_tekst">Uvodni Tekst <sup>*</sup></label>
                    <textarea id="uvodni_tekst" class="form-control" name="uvodni_tekst"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="tekst_proizvoda">Tekst Proizvoda <sup>*</sup></label>
                    <textarea id="tekst_proizvoda" class="form-control" name="tekst_proizvoda"></textarea>
                  </div>
                  <div class="form-group">
                    <p><strong>Upload cover fotografije <sup>*</sup></strong></p>
                    <label class="custom-file-upload" for="cover_fotografija">
                      <i class="fa fa-upload"></i> Upload
                    </label>
                    <input id="cover_fotografija" name="cover_fotografija" type="file">
                  </div>
                  <div class="form-group">
                    <p><strong>Upload uvodne fotografije <sup>*</sup></strong></p>
                    <label class="custom-file-upload" for="uvodna_fotografija">
                      <i class="fa fa-upload"></i> Upload
                    </label>
                    <input id="uvodna_fotografija" name="uvodna_fotografija" type="file" value="Upload">
                  </div>
                  <div class="form-group">
                    <label for="alt_tag">Alt tag <sup>*</sup></label>
                    <input id="alt_tag" class="form-control" name="alt_tag" type="text">
                  </div>
                </div>
                
                <div id="engleski" class="col-md-6">
                  <h4><img src="<?php echo URLROOT; ?>/images/engleski.png" alt="" width="24"> English</h4>

                  <div class="form-group">
                    <label for="name">Product Name <sup>*</sup></label>
                    <input id="name" class="form-control" name="name" type="text">
                  </div>
                  <div class="form-group">
                    <label for="description">Product Description <sup>*</sup></label>
                    <input id="description" class="form-control" name="description" type="text">
                  </div>
                  <div class="form-group">
                    <label for="introductory_text">Introductory Text <sup>*</sup></label>
                    <textarea id="introductory_text" class="form-control" name="introductory_text"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="product_text">Product Text <sup>*</sup></label>
                    <textarea id="product_text" class="form-control" name="product_text"></textarea>
                  </div>
                  <div class="form-group">
                    <p><strong>Upload Cover Photo <sup>*</sup></strong></p>
                    <label class="custom-file-upload" for="cover_photo">
                      <i class="fa fa-upload"></i> Upload
                    </label>
                    <input id="cover_photo" name="cover_photo" type="file">
                  </div>
                  <div class="form-group">
                    <p><strong>Upload Introductory Photo <sup>*</sup></strong></p>
                    <label class="custom-file-upload" for="introductory_photo">
                      <i class="fa fa-upload"></i> Upload
                    </label>
                    <input id="introductory_photo" name="introductory_photo" type="file" value="Upload">
                  </div>
                  <div class="form-group">
                    <label for="alt_tag_eng">Alt tag <sup>*</sup></label>
                    <input id="alt_tag_eng" class="form-control" name="alt_tag_eng" type="text">
                  </div>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button class="btn btn-default" type="button" data-dismiss="modal">Odustani</button>
              <button class="btn btn-primary" name="dodaj_proizvod" type="submit" form="myform">Sačuvaj</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="box-body">
      <div class="table-responsive">
        <div class="box-header clearfix pull-right">
          
        </div>
        <table class="table no-margin table-bordered">
          <thead>
            <tr>
              <th class="text-center">ID</th>
              <th class="text-center">Naziv Proizvoda</th>
              <th class="text-center">Datum Unosa Proizvoda</th>
              <th class="text-center">Opcija Izmijeni</th>
              <th class="text-center">Opcija Deaktiviraj</th>
              <th class="text-center">Opcija Izbriši</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($data['proizvodi'] as $proizvod): ?>
              <tr>
                <td class="text-center"><?php echo $proizvod->id; ?></td>
                <td class="text-center"><?php echo $proizvod->naziv; ?></td>
                <td class="text-center"><?php echo $proizvod->datum_unosa; ?></span></td>
                <td class="text-center"><a class="btn btn-sm btn-info" href="#">Izmijeni</a></td>
                <td class="text-center"><a class="btn btn-sm btn-warning" href="#">Deaktiviraj</a></td>
                <td class="text-center"><a class="btn btn-sm btn-danger" href="<?php echo URLROOT ?>/admin/proizvodi/<?php echo $data['proizvod']->id; ?>">Izbriši</a></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>

<div id="modalSuccess" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Čestitamo</h4>
      </div>
      <div class="modal-body clearfix">
        <p>Proizvod je uspješno dodat.</p>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" type="button" data-dismiss="modal">U Redu</button>
      </div>
    </div>
  </div>
</div>
</div>

