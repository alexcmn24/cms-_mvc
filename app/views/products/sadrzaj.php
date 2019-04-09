<section class="content-header">
  <h1>Proizvodi</h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo URLROOT; ?>/admin"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Proizvodi</li>
  </ol>
</section>
<section class="content">
  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">Administracija Proizvoda</h3>
      <button id="proizvod-dodaj-dugme" class="btn btn-sm btn-info btn-flat pull-right cd-popup-dodaj-trigger" type="button">Dodaj Proizvod</button>
    </div>
    <div class="box-body">
      <div class="table-responsive">
        <div class="box-header clearfix pull-right">
        </div>
        <table class="table no-margin table-bordered">
          <thead>
            <tr>
              <th class="text-center">Redni Broj Proizvoda</th>
              <th class="text-center">Naziv Proizvoda</th>
              <th class="text-center">Datum Unosa Proizvoda</th>
              <th class="text-center">Opcija Izmijeni</th>
              <th class="text-center">Opcija Deaktiviraj</th>
              <th class="text-center">Opcija Izbriši</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($data['svi_proizvodi'] as $proizvod): ?>
              <tr>
                <td class="text-center"><?php echo $proizvod->id; ?></td>
                <td class="text-center"><?php echo $proizvod->naziv; ?></td>
                <td class="text-center"><?php echo $proizvod->datum_unosa; ?></td>
                <td class="text-center">
                  <button class="proizvod-izmijeni-dugme btn btn-sm btn-info cd-popup-izmijeni-trigger" type="button" proizvod-id="<?php echo $proizvod->id; ?>">Izmijeni</button>
                </td>
                <td class="text-center">
                  <a class="btn btn-sm" href="<?php echo URLROOT; ?>/proizvodi/deaktiviraj/<?php echo $proizvod->id; ?>" status-vrijednost="<?php echo $proizvod->status; ?>"></a>
                </td>
                <td class="text-center">
                  <a class="btn btn-sm btn-danger" href="<?php echo URLROOT; ?>/proizvodi/selektuj/<?php echo $proizvod->id . '/' . 'brisanje'; ?>" >Izbriši</a>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <?php require APPROOT . '/views/proizvodi/inc/dodaj_proizvod_modal.php'; ?>
  <?php require APPROOT . '/views/proizvodi/inc/izmijeni_proizvod_modal.php'; ?>
  <?php require APPROOT . '/views/proizvodi/inc/popup_potvrda.php'; ?>
  <?php require APPROOT . '/views/proizvodi/inc/popup_uspjeh.php'; ?>
  <?php require APPROOT . '/views/proizvodi/inc/popup_dodaj_uspjeh.php'; ?>
</section>

<?php require APPROOT . '/views/proizvodi/inc/success_modal.php'; ?>
<?php require APPROOT . '/views/proizvodi/inc/izbrisi_proizvod_modal.php'; ?>
<?php require APPROOT . '/views/proizvodi/inc/potvrda_modal.php'; ?>

<script src='http://localhost/cms/js/proizvodi_aktiviraj_deaktiviraj.js'></script>
<script src='http://localhost/cms/js/proizvodi_drag_and_drop.js'></script>
<script src='http://localhost/cms/js/proizvodi_fotografije.js'></script>
<script src='http://localhost/cms/js/proizvodi_validacija_forme.js'></script>
<script src='http://localhost/cms/js/upload_slike.js'></script>