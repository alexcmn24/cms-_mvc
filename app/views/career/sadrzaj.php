<section class="content-header">
  <h1>Karijera</h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo URLROOT; ?>/admin"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Karijera</li>
  </ol>
</section>
<section class="content">
  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">Administracija Konkursa</h3>
      <button id="konkurs-dodaj-dugme" class="btn btn-sm btn-info btn-flat pull-right cd-popup-dodaj-trigger" type="button">Dodaj Konkurs</button>
    </div>
    <div class="box-body">
      <div class="table-responsive">
        <div class="box-header clearfix pull-right">
        </div>
        <table class="table no-margin table-bordered"> 
          <thead>
            <tr>
              <th class="text-center">Redni Broj Konkursa</th>
              <th class="text-center">Naslov Konkursa</th>
              <th class="text-center">Početak Konkursa</th>
              <th class="text-center">Kraj Konkursa</th>
              <th class="text-center">Status Konkursa</th>
              <th class="text-center">Opcija Izmijeni</th>
              <th class="text-center">Aktiviraj/Deaktiviraj</th>
              <th class="text-center">Opcija Izbriši</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($data['svi_konkursi'] as $konkurs): ?>
              <tr>
                <td class="text-center"><?php echo $konkurs->id; ?></td>
                <td class="text-center"><?php echo $konkurs->naslov; ?></td>
                <td class="text-center"><?php echo $konkurs->pocetak_konkursa; ?></td>
                <td class="text-center"><?php echo $konkurs->kraj_konkursa; ?></td>
                <td class="text-center"><?php echo $data['status_konkursa']["$konkurs->id"]; ?></td>
                <td class="text-center">
                  <button class="btn btn-sm btn-info konkurs-izmijeni-dugme cd-popup-izmijeni-trigger" type="button" konkurs-id="<?php echo $konkurs->id; ?>">Izmijeni</button>
                </td>
                <td class="text-center">
                  <a class="btn btn-sm" href="<?php echo URLROOT; ?>/karijera/deaktiviraj/<?php echo $konkurs->id; ?>" status-vrijednost="<?php echo $konkurs->status; ?>"></a>
                </td>
                <td class="text-center">
                  <a class="btn btn-sm btn-danger" href="<?php echo URLROOT; ?>/karijera/selektuj/<?php echo $konkurs->id . '/' . 'brisanje'; ?>" >Izbriši</a>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <?php require APPROOT . '/views/karijera/inc/dodaj_konkurs_modal.php'; ?>
  <?php require APPROOT . '/views/karijera/inc/izmijeni_konkurs_modal.php'; ?>
  <?php require APPROOT . '/views/karijera/inc/popup_potvrda.php'; ?>
  <?php require APPROOT . '/views/karijera/inc/popup_uspjeh.php'; ?>
  <?php require APPROOT . '/views/karijera/inc/popup_dodaj_uspjeh.php'; ?>
</section>

<?php require APPROOT . '/views/karijera/inc/success_modal.php'; ?>
<?php require APPROOT . '/views/karijera/inc/izbrisi_konkurs_modal.php'; ?>
<?php require APPROOT . '/views/karijera/inc/potvrda_modal.php'; ?>

<script src='http://localhost/cms/js/konkursi_aktiviraj_deaktiviraj.js'></script>
<script src='http://localhost/cms/js/konkursi_drag_and_drop.js'></script>
<script src='http://localhost/cms/js/konkursi_fotografije.js'></script>
<script src='http://localhost/cms/js/konkursi_validacija_forme.js'></script>
<script src='http://localhost/cms/js/upload_slike.js'></script>
