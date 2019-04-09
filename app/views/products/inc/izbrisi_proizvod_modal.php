<div id="izbrisi_proizvod_modal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Brisanje</h4>
      </div>
      <div class="modal-body clearfix">
        <p>Da li ste sigurni da želite da izbrišete proizvod?</p>
      </div>
      <div class="modal-footer">
        <a class="btn btn-primary" type="button" href="<?php echo URLROOT; ?>/proizvodi/izbrisi/<?php echo $data['selektovan_proizvod']->id; ?>">Da</a>
        <button class="btn btn-primary" type="button" data-dismiss="modal">Ne</button>
      </div>
    </div>
  </div>
</div>