(function() {
  // VALIDATION FORM FOR CONCURSES
  const dodaj_submit = document.getElementById('dodaj_submit');
  
  let validacija_dodaj;
  
  const error_poruka_dodaj  = document.getElementsByClassName('error-poruka-dodaj');
  const form_elements_dodaj = document.getElementsByClassName('form-element-dodaj');

  dodaj_submit.addEventListener('click', function(e) {
    validacija_dodaj = true;
    
    // VALIDATION COVER PHOT0
    const cvr_foto  = document.getElementById('cover_fotografija_dodaj');
    const err_por   = document.getElementById('cvr_dodaj_err');
    const cvr_slika = document.getElementById('prikaz-cover-slike-dodaj');
    if((cvr_foto.files[0] == undefined || cvr_foto.files[0] == '' || cvr_foto.files[0] == null)
    && (cover_slika_dodaj == undefined || cover_slika_dodaj == '' || cover_slika_dodaj == null)) {
      validacija_dodaj         = false;
      err_por.style.visibility = 'visible';
      err_por.style.opacity    = 1;
      err_por.style.color      = 'rgb(221,75,57)';
      err_por.classList.add('photo_err');
    }
    cvr_foto.addEventListener('input', function(e) {
      err_por.style.visibility = 'hidden';
      err_por.style.opacity    = 0;
    });
    cvr_slika.addEventListener('load', function(e) {
      err_por.style.visibility = 'hidden';
      err_por.style.opacity    = 0;
    });

    // VALIDATION CONCURS START
    const pocetak_konkursa_dodaj = document.getElementById('pocetak_konkursa_dodaj');
    const poc_kon_dod_err        = document.getElementById('poc_kon_dod_err');
    if(pocetak_konkursa_dodaj.value === '' || pocetak_konkursa_dodaj.value === null || pocetak_konkursa_dodaj.value === undefined) {
      validacija_dodaj                 = false;
      poc_kon_dod_err.style.visibility = 'visible';
      poc_kon_dod_err.style.opacity    = 1;
      poc_kon_dod_err.style.color      = 'rgb(221,75,57)';
      poc_kon_dod_err.classList.add('photo_err');
      pocetak_konkursa_dodaj.addEventListener('click', function(e) {
        poc_kon_dod_err.style.visibility = 'hidden';
        poc_kon_dod_err.style.opacity    = 0;
        poc_kon_dod_err.style.color      = 'rgb(210,214,222)';
      });
    }

    // VALIDATIION CONCURS END
    const kraj_konkursa_dodaj = document.getElementById('kraj_konkursa_dodaj');
    const kraj_kon_dod_err    = document.getElementById('kraj_kon_dod_err');
    if(kraj_konkursa_dodaj.value === '' || kraj_konkursa_dodaj.value === null || kraj_konkursa_dodaj.value === undefined) {
      validacija_dodaj                  = false;
      kraj_kon_dod_err.style.visibility = 'visible';
      kraj_kon_dod_err.style.opacity    = 1;
      kraj_kon_dod_err.style.color      = 'rgb(221,75,57)';
      kraj_kon_dod_err.classList.add('photo_err');
      kraj_konkursa_dodaj.addEventListener('click', function(e) {
        kraj_kon_dod_err.style.visibility = 'hidden';
        kraj_kon_dod_err.style.opacity    = 0;
        kraj_kon_dod_err.style.color      = 'rgb(210,214,222)';
      });
    }

    // VALIDATION TEXT FIELD
    for (let i = 0; i < form_elements_dodaj.length; i++) {
      if((form_elements_dodaj[i].value === '' || form_elements_dodaj[i].value === null || form_elements_dodaj[i].value === undefined)) {
        e.preventDefault();
        validacija_dodaj = false;
        
        error_poruka_dodaj[i].style.visibility   = 'visible';
        error_poruka_dodaj[i].style.opacity      = 1;
        error_poruka_dodaj[i].style.color        = 'rgb(221,75,57)';
        form_elements_dodaj[i].style.borderColor = 'rgb(221,75,57)';
        form_elements_dodaj[i].addEventListener('click', function(e) {
          error_poruka_dodaj[i].style.opacity      = 0;
          error_poruka_dodaj[i].style.visibility   = 'hidden';
          form_elements_dodaj[i].style.borderColor = 'rgb(60,141,188)';
          form_elements_dodaj[i].addEventListener('blur', function(e) {
            form_elements_dodaj[i].style.borderColor = 'rgb(210,214,222)';
            if(form_elements_dodaj[i].value === '' || form_elements_dodaj[i].value === null) {
              error_poruka_dodaj[i].style.visibility   = 'visible';
              error_poruka_dodaj[i].style.opacity      = 1;
              error_poruka_dodaj[i].style.color        = 'rgb(221,75,57)';
              form_elements_dodaj[i].style.borderColor = 'rgb(221,75,57)';
            }
          });
        });
      }
    }

    if(validacija_dodaj) {
      const naslov_dodaj        = document.getElementById('naslov_dodaj').value;
      const radno_mjesto_dodaj  = document.getElementById('radno_mjesto_dodaj').value;
      const title_dodaj         = document.getElementById('title_dodaj').value;
      const work_position_dodaj = document.getElementById('work_position_dodaj').value;
      
      // TIME
      let pocetak_konkursa_dodaj = document.getElementById('pocetak_konkursa_dodaj').value;
      pocetak_konkursa_dodaj     = pocetak_konkursa_dodaj.split('/').reverse().join('-');
      let kraj_konkursa_dodaj    = document.getElementById('kraj_konkursa_dodaj').value;
      kraj_konkursa_dodaj        = kraj_konkursa_dodaj.split('/').reverse().join('-');
      
      // COVER PHOTO
      if(!(document.getElementById('cover_fotografija_dodaj').files[0] == null) || !(document.getElementById('cover_fotografija_dodaj').files[0] == undefined)) {
        const cover_fotografija_dodaj = document.getElementById('cover_fotografija_dodaj').files[0].name;
      }
      
      const data = new FormData();

      data.append('naslov_dodaj',           naslov_dodaj);
      data.append('pocetak_konkursa_dodaj', pocetak_konkursa_dodaj);
      data.append('kraj_konkursa_dodaj',    kraj_konkursa_dodaj);
      data.append('radno_mjesto_dodaj',     radno_mjesto_dodaj);
      data.append('title_dodaj',            title_dodaj);
      data.append('work_position_dodaj',    work_position_dodaj);

      console.log(cover_slika_dodaj);
      console.log(document.getElementById('cover_fotografija_dodaj').files[0]);

      if(document.getElementById('cover_fotografija_dodaj').value == '' || document.getElementById('cover_fotografija_dodaj').value == undefined) {
        data.append('cover_fotografija_dodaj', cover_slika_dodaj);
      } else {
        data.append('cover_fotografija_dodaj', document.getElementById('cover_fotografija_dodaj').files[0]);
      }
      
      const xhr = new XMLHttpRequest();
      xhr.open('POST', 'ajax_php/konkursDodaj.php', true);
      
      xhr.onload = function() {
        const dodaj_json = JSON.parse(this.responseText);
        if(dodaj_json) {
          $('.cd-popup-dodaj-uspjeh').addClass('is-visible-dodaj-uspjeh');
        }
      }

      xhr.send(data);
    } else {
      console.log('Došlo je do greške.');
    }
  });
  
  
  const dodaj_konkurs_forma = document.getElementById('dodaj_konkurs_forma');
  const odustani_konkurs    = document.getElementById('odustani_konkurs');
  odustani_konkurs.addEventListener('click', function(e) {
    dodaj_konkurs_forma.reset();
  });


  const konkurs_izmijeni_dugme = document.getElementsByClassName('konkurs-izmijeni-dugme');
  for (let i = 0; i < konkurs_izmijeni_dugme.length; i++) {
    konkurs_izmijeni_dugme[i].addEventListener('click', konkursSelektuj);
  }

  function konkursSelektuj(e) {
    e.preventDefault();
    const konkurs_id = e.target.getAttribute('konkurs-id');
    let params       = 'konkurs_id=' + konkurs_id;
    
    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'ajax_php/konkursSelektuj.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    xhr.onload = function() {
      if(this.status == 200) {
        const konkurs = JSON.parse(this.responseText);
        
        document.getElementById('konkurs-sacuvaj').setAttribute('konkurs-id', konkurs[0]['id']);
        document.getElementById('naslov_izmjena').value        = konkurs[0]['naslov'];
        document.getElementById('radno_mjesto_izmjena').value  = konkurs[0]['radno_mjesto'];
        document.getElementById('title_izmjena').value         = konkurs[0]['title'];
        document.getElementById('work_position_izmjena').value = konkurs[0]['work_position'];

        const pocetak_konkursa_izmjena  = document.getElementById('pocetak_konkursa_izmjena');
        const datum_pocetak_izmjena     = konkurs[0]['pocetak_konkursa'].split('-').reverse().join('/');
        pocetak_konkursa_izmjena.value  = datum_pocetak_izmjena
        pocetak_konkursa_izmjena.onblur = function(e) {
          e.target.value = datum_pocetak_izmjena;
        };

        const kraj_konkursa_izmjena  = document.getElementById('kraj_konkursa_izmjena');
        const datum_kraj_izmjena     = konkurs[0]['kraj_konkursa'].split('-').reverse().join('/');
        kraj_konkursa_izmjena.value  = datum_kraj_izmjena
        kraj_konkursa_izmjena.onblur = function(e) {
          e.target.value = datum_kraj_izmjena;
        };

        document.getElementById('prikaz-cover-slike-izmijeni').setAttribute('src', 'http://localhost/cms/public/images/' + konkurs[0]['cover_fotografija']);
        if(konkurs[0]['cover_fotografija'].length > 25) {
          document.querySelector('#cover_izmijeni .custom-text').innerHTML   = '&quot;' + konkurs[0]['cover_fotografija'].substr(0, 25) + '...' + konkurs[0]['cover_fotografija'].substring(konkurs[0]['cover_fotografija'].lastIndexOf('.')+1, konkurs[0]['cover_fotografija'].length) + '&quot;';
          document.querySelector('#cover_izmijeni .button-ukloni').innerHTML = 'Ukloni &quot;' + konkurs[0]['cover_fotografija'].substr(0, 25) + '...' + konkurs[0]['cover_fotografija'].substring(konkurs[0]['cover_fotografija'].lastIndexOf('.')+1, konkurs[0]['cover_fotografija'].length) + '&quot;';
        } else {
          document.querySelector('#cover_izmijeni .custom-text').innerHTML   = '&quot;' + konkurs[0]['cover_fotografija'] + '&quot;';
          document.querySelector('#cover_izmijeni .button-ukloni').innerHTML = 'Ukloni &quot;' + konkurs[0]['cover_fotografija'] + '&quot;';
        }
      }
    }
    xhr.send(params);
  }


  const konkurs_sacuvaj = document.getElementById('konkurs-sacuvaj');
  konkurs_sacuvaj.addEventListener('click', konkursSacuvaj);
  const error_poruka_izmijeni  = document.getElementsByClassName('error-poruka-izmjena');
  const form_elements_izmijeni = document.getElementsByClassName('form-element-izmjena');
  
  let validacija_izmijeni;

  function konkursSacuvaj(event) {
    validacija_izmijeni = true;
    
    const cvr_foto  = document.getElementById('cover_fotografija_izmjena');
    const err_por   = document.getElementById('cvr_izmijeni_err');
    const cvr_slika = document.getElementById('prikaz-cover-slike-izmijeni');
    if((cvr_foto.files[0] == undefined || cvr_foto.files[0] == '')
    && (cover_slika_izmijeni == undefined || cover_slika_izmijeni == '')
    && (cvr_slika.getAttribute('src') == undefined || cvr_slika.getAttribute('src') == '')) {
      validacija_izmijeni      = false;
      err_por.style.visibility = 'visible';
      err_por.style.opacity    = 1;
      err_por.style.color      = 'rgb(221,75,57)';
      err_por.classList.add('photo_err');
    }
    cvr_foto.addEventListener('input', function(e) {
      err_por.style.visibility = 'hidden';
      err_por.style.opacity    = 0;
    });
    cvr_slika.addEventListener('load', function(e) {
      err_por.style.visibility = 'hidden';
      err_por.style.opacity    = 0;
    });

    for (let i = 0; i < form_elements_izmijeni.length; i++) {
      if((form_elements_izmijeni[i].value === '' || form_elements_izmijeni[i].value === null)) {
        event.preventDefault();
        validacija_izmijeni = false;
        
        error_poruka_izmijeni[i].style.visibility   = 'visible';
        error_poruka_izmijeni[i].style.opacity      = 1;
        error_poruka_izmijeni[i].style.color        = 'rgb(221,75,57)';
        form_elements_izmijeni[i].style.borderColor = 'rgb(221,75,57)';

        form_elements_izmijeni[i].addEventListener('click', function(e) {
          error_poruka_izmijeni[i].style.opacity      = 0;
          error_poruka_izmijeni[i].style.visibility   = 'hidden';
          form_elements_izmijeni[i].style.borderColor = 'rgb(60,141,188)';
          form_elements_izmijeni[i].addEventListener('blur', function(e) {
            form_elements_izmijeni[i].style.borderColor = 'rgb(210,214,222)';
            if(form_elements_izmijeni[i].value === '' || form_elements_izmijeni[i].value === null) {
              error_poruka_izmijeni[i].style.visibility   = 'visible';
              error_poruka_izmijeni[i].style.opacity      = 1;
              error_poruka_izmijeni[i].style.color        = 'rgb(221,75,57)';
              form_elements_izmijeni[i].style.borderColor = 'rgb(221,75,57)';
            }
          });
        });
      }
    }

    if(validacija_izmijeni) {
      konkurs_id = event.target.getAttribute('konkurs-id');

      const naslov_izmjena        = document.getElementById('naslov_izmjena').value;
      const radno_mjesto_izmjena  = document.getElementById('radno_mjesto_izmjena').value;
      const title_izmjena         = document.getElementById('title_izmjena').value;
      const work_position_izmjena = document.getElementById('work_position_izmjena').value;
      
      let pocetak_konkursa_izmjena = document.getElementById('pocetak_konkursa_izmjena').value;
      pocetak_konkursa_izmjena     = pocetak_konkursa_izmjena.split('/').reverse().join('-');
      
      let kraj_konkursa_izmjena = document.getElementById('kraj_konkursa_izmjena').value;
      kraj_konkursa_izmjena     = kraj_konkursa_izmjena.split('/').reverse().join('-');
      
      if(!(document.getElementById('cover_fotografija_izmjena').files[0] == null) || !(document.getElementById('cover_fotografija_izmjena').files[0] == undefined)) {
        const cover_fotografija_izmjena = document.getElementById('cover_fotografija_izmjena').files[0].name;
      }
      
      const data = new FormData();

      data.append('konkurs_id',               konkurs_id);
      data.append('naslov_izmjena',           naslov_izmjena);
      data.append('pocetak_konkursa_izmjena', pocetak_konkursa_izmjena);
      data.append('kraj_konkursa_izmjena',    kraj_konkursa_izmjena);
      data.append('radno_mjesto_izmjena',     radno_mjesto_izmjena);
      data.append('title_izmjena',            title_izmjena);
      data.append('work_position_izmjena',    work_position_izmjena);
      
      if(document.getElementById('cover_fotografija_izmjena').value == '' || document.getElementById('cover_fotografija_izmjena').files[0] == undefined) {
        data.append('cover_fotografija_izmjena', cover_slika_izmijeni);
      } else {
        data.append('cover_fotografija_izmjena', document.getElementById('cover_fotografija_izmjena').files[0]);
      }
      
      const xhr = new XMLHttpRequest();
      xhr.open('POST', 'ajax_php/konkursSacuvaj.php', true);
      
      xhr.onload = function() {
        const izmjena_json = JSON.parse(this.responseText);
        if(izmjena_json) {
          $('.cd-popup-uspjeh').addClass('is-visible-uspjeh');
        }
      }
      
      xhr.send(data);
    } else {
      console.log('Doslo je do greske pri validaciji forme.')
    } 
  }
  

}());