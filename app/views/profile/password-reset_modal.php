<div class="cd-popup-lozinka clearfix" role="alert">
  <div class="cd-popup-lozinka-container">
    <p>Promjena Lozinke</p>
    <div id="success-poruka-lozinka">
      <span class="bg-success">Lozinka Uspješno izmijenjena</span>
    </div>
    <form id="promjena_lozinke" method="POST">
      <div class="form-group">
        <label for="trenutna_lozinka">Unesite Trenutnu Lozinku: </label><br>
        <input id="trenutna_lozinka" type="password">
        <span class="checkmark"></span>
      </div>
      <div class="form-group">
        <label for="nova_lozinka">Unesite Novu Lozinku: </label><br>
        <input id="nova_lozinka" type="password">
      </div>
      <div class="form-group">
        <label for="nova_lozinka_potvrda">Potvrdite Novu Lozinku: </label><br>
        <input id="nova_lozinka_potvrda" type="password"><br>
        <span id="error_potvrda">Unijeli ste Različit Password</span>
      </div>
      <input class="btn btn-secondary " type="reset" value="Poništi Polja">
      <input id="dugme_promjena" class="btn btn-primary" type="submit" value="Promijeni">
    </form>
    <a href="#0" class="cd-popup-lozinka-close img-replace-lozinka">Close</a>
  </div>
</div>