<section class="content-header">
  <h1>Profil</h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo URLROOT; ?>/admin"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Profil</li>
  </ol>
</section>

<div class="box box-info">
<section class="content clearfix">
  <form id="promijeni_lozinku_forma" enctype="multipart/form-data">
    <div class="col-md-4">
      <div class="form-group">
        <label for="ime_i_prezime">Ime i Prezime:</label><br>
        <input id="ime_i_prezime" class="form-control" type="text" value="<?php echo $data['logovani_korisnik']->name; ?>" readonly>
      </div>
      <div class="form-group">
        <label for="pozicija">Pozicija u Firmi:</label><br>
        <input id="pozicija" class="form-control" type="text" value="<?php echo $data['logovani_korisnik']->pozicija; ?>" readonly>
      </div>
      <div class="form-group">
        <label for="username">Korisničko Ime:</label><br>
        <input id="username" class="form-control" type="text" value="<?php echo $data['logovani_korisnik']->username; ?>" readonly>
      </div>
      <div class="form-group">
        <label for="lozinka">Lozinka:</label><br>
        <input id="lozinka" class="form-control" type="text" value="<?php echo $data['logovani_korisnik']->password; ?>" readonly>
      </div>
      <div class="form-group">
        <a id="promijeni_lozinku" class="btn btn-primary cd-popup-lozinka-trigger" href="">Promijeni Lozinku</a>
      </div>
      <div id="" class="form-group">
        <label for="">Profilna Fotografija:</label><br>
        <div id="success-poruka"></div>
        <input id="image-input" class="real-file form-element-dodaj" name="image-input" type="file" hidden="hidden">
        <button id="upload-dugme" class="custom-button" type="button">Upload</button>
        <span id="image-text" class="custom-text">Izaberite fotografiju.</span><br>
        <img id="profilna-foto" src="" alt="Profilna Fotografija"><br>
        <button id="ukloni-dugme" class="button-ukloni" type="button">Ukloni</button>
        <div class="image-upload-wrap">
          <div id="dropzone-slike" class="dropzone">
            <span>Regija za <em>Drag and Drop</em></span>
          </div>
        </div>
      </div>
    </div>
  </form>
</section>
</div>

<?php require APPROOT . '/views/profil/password-reset_modal.php'; ?>

<script src='http://localhost/cms/js/profil_prikazivanje_fotografije.js'></script>
<script src='http://localhost/cms/js/profil_fotografija.js'></script>
<script src='http://localhost/cms/js/profil_drag_and_drop.js'></script>
<script src='http://localhost/cms/js/profil_promjena_lozinke.js'></script>