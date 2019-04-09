(function() {
  const trenutna_lozinka_polje = document.getElementById('trenutna_lozinka');
  trenutna_lozinka_polje.addEventListener('keyup', getPassword);
  function getPassword(e) {
    e.preventDefault();
    const trenutna_lozinka = trenutna_lozinka_polje.value;
    let params = 'trenutna_lozinka=' + trenutna_lozinka;
    
    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'ajax_php/profil.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    
    xhr.onload = function() {
      const odgovor = JSON.parse(this.responseText);
      if(odgovor) {
        document.getElementsByClassName('checkmark')[0].style.visibility = 'visible';
      } else {
        document.getElementsByClassName('checkmark')[0].style.visibility = 'hidden';
      }
    }
    xhr.send(params);
  }

  const nova_lozinka_polje   = document.getElementById('nova_lozinka');
  const nova_lozinka_potvrda = document.getElementById('nova_lozinka_potvrda');
  const error_potvrda        = document.getElementById('error_potvrda');

  nova_lozinka_potvrda.addEventListener('keyup', function(e) {
    if (nova_lozinka_polje.value !== nova_lozinka_potvrda.value) {
      error_potvrda.style.display = 'block';
    } else {
      error_potvrda.style.display = 'none';
    }
  });
  
  document.getElementById('promjena_lozinke').addEventListener('submit', promijeniPassword);

  function promijeniPassword(e) {
    e.preventDefault();
    const nova_lozinka = document.getElementById('nova_lozinka').value;
    params = 'nova_lozinka=' + nova_lozinka;

    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'ajax_php/profil.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    xhr.onload = function() {
      const poruka = JSON.parse(this.responseText);
      if(poruka) {
        document.querySelector('#success-poruka-lozinka span').style.display = 'block';
      } else {
        document.querySelector('#success-poruka-lozinka span').style.display = 'none';
      }
    }
    xhr.send(params);
  }

})();