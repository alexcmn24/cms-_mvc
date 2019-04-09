(function() {
  // VALIDACIJA FORME ZA DODAVANJE PROIZVODA
  const dodaj_submit = document.getElementById('dodaj_submit');
  const error_poruka_dodaj  = document.getElementsByClassName('error-poruka-dodaj');
  const form_elements_dodaj = document.getElementsByClassName('form-element-dodaj');
  let validacija_dodaj;
  
  dodaj_submit.addEventListener('click', function(e) {
    validacija_dodaj  = true;
    
    // Validacija Cover Fotografije
    const cvr_foto    = document.getElementById('cover_fotografija_dodaj');
    const cvr_err_por = document.querySelector('#cover_dodaj .error-poruka-dodaj');
    const cvr_slika   = document.querySelector('#cover_dodaj .prikaz-slike');
    if((cvr_foto.files[0] == undefined || cvr_foto.files[0] == '' || cvr_foto.files[0] == null)
    && (cover_slika_dodaj == undefined || cover_slika_dodaj == '' || cover_slika_dodaj == null)) {
      validacija_dodaj = false;
      cvr_err_por.style.visibility = 'visible';
      cvr_err_por.style.opacity    = 1;
      cvr_err_por.style.color      = 'rgb(221,75,57)';
    }
    cvr_foto.addEventListener('input', function(e) {
      cvr_err_por.style.visibility = 'hidden';
      cvr_err_por.style.opacity    = 0;
    });
    cvr_slika.addEventListener('load', function(e) {
      cvr_err_por.style.visibility = 'hidden';
      cvr_err_por.style.opacity    = 0;
    });

    // Validacija Uvodne Fotografije
    const uvd_foto    = document.getElementById('uvodna_fotografija_dodaj');
    const uvd_err_por = document.querySelector('#uvodna_dodaj .error-poruka-dodaj');
    const uvd_slika   = document.querySelector('#uvodna_dodaj .prikaz-slike');
    if((uvd_foto.files[0] == undefined || uvd_foto.files[0] == '' || uvd_foto.files[0] == null)
    && (uvodna_slika_dodaj == undefined || uvodna_slika_dodaj == '' || uvodna_slika_dodaj == null)) {
      validacija_dodaj = false;
      uvd_err_por.style.visibility = 'visible';
      uvd_err_por.style.opacity    = 1;
      uvd_err_por.style.color      = 'rgb(221,75,57)';
    }
    uvd_foto.addEventListener('input', function(e) {
      uvd_err_por.style.visibility = 'hidden';
      uvd_err_por.style.opacity    = 0;
    });
    uvd_slika.addEventListener('load', function(e) {
      uvd_err_por.style.visibility = 'hidden';
      uvd_err_por.style.opacity    = 0;
    });

    // Validacija Tekstualnih Polja
    for (let i = 0; i < form_elements_dodaj.length; i++) {
      if((form_elements_dodaj[i].value === '' || form_elements_dodaj[i].value === null)) {
        e.preventDefault();
        if(i == 4 || i == 10) {
          continue;
        }
        validacija_dodaj = false;
        
        error_poruka_dodaj[i].style.visibility = 'visible';
        error_poruka_dodaj[i].style.opacity = 1;
        error_poruka_dodaj[i].style.color = 'rgb(221,75,57)';
        form_elements_dodaj[i].style.borderColor = 'rgb(221,75,57)';
        form_elements_dodaj[i].addEventListener('click', function(e) {
          error_poruka_dodaj[i].style.opacity = 0;
          error_poruka_dodaj[i].style.visibility = 'hidden';
          form_elements_dodaj[i].style.borderColor = 'rgb(60,141,188)';
          form_elements_dodaj[i].addEventListener('blur', function(e) {
            form_elements_dodaj[i].style.borderColor = 'rgb(210,214,222)';
            if(form_elements_dodaj[i].value === '' || form_elements_dodaj[i].value === null) {
              error_poruka_dodaj[i].style.visibility = 'visible';
              error_poruka_dodaj[i].style.opacity = 1;
              error_poruka_dodaj[i].style.color = 'rgb(221,75,57)';
              form_elements_dodaj[i].style.borderColor = 'rgb(221,75,57)';
            }
          });
        });
      }
    }

    if(validacija_dodaj) {
      const naziv_dodaj             = document.getElementById('naziv_dodaj').value;
      const name_dodaj              = document.getElementById('name_dodaj').value;
      const opis_dodaj              = document.getElementById('opis_dodaj').value;
      const description_dodaj       = document.getElementById('description_dodaj').value;
      const uvodni_tekst_dodaj      = document.getElementById('uvodni_tekst_dodaj').value;
      const introductory_text_dodaj = document.getElementById('introductory_text_dodaj').value;
      const tekst_proizvoda_dodaj   = document.getElementById('tekst_proizvoda_dodaj').value;
      const product_text_dodaj      = document.getElementById('product_text_dodaj').value;
      const alt_tag_dodaj           = document.getElementById('alt_tag_dodaj').value;
      const alt_tag_eng_dodaj       = document.getElementById('alt_tag_eng_dodaj').value;
      
      if(!(document.getElementById('cover_fotografija_dodaj').files[0] == null)) {
        const cover_fotografija_dodaj = document.getElementById('cover_fotografija_dodaj').files[0].name;
      }
      if(!(document.getElementById('uvodna_fotografija_dodaj').files[0] == null)) {
        const uvodna_fotografija_dodaj = document.getElementById('uvodna_fotografija_dodaj').files[0].name;
      }
      
      const data = new FormData();

      data.append('naziv_dodaj',             naziv_dodaj);
      data.append('name_dodaj',              name_dodaj);
      data.append('opis_dodaj',              opis_dodaj);
      data.append('description_dodaj',       description_dodaj);
      data.append('uvodni_tekst_dodaj',      uvodni_tekst_dodaj);
      data.append('introductory_text_dodaj', introductory_text_dodaj);
      data.append('product_text_dodaj',      product_text_dodaj);
      data.append('tekst_proizvoda_dodaj',   tekst_proizvoda_dodaj);
      data.append('alt_tag_dodaj',           alt_tag_dodaj);
      data.append('alt_tag_eng_dodaj',       alt_tag_eng_dodaj);

      if(document.getElementById('cover_fotografija_dodaj').value == '') {
        data.append('cover_fotografija_dodaj', cover_slika_dodaj);
      } else {
        data.append('cover_fotografija_dodaj', document.getElementById('cover_fotografija_dodaj').files[0]);
      }

      if(document.getElementById('uvodna_fotografija_dodaj').value == '') {
        data.append('uvodna_fotografija_dodaj', uvodna_slika_dodaj);
      } else {
        data.append('uvodna_fotografija_dodaj', document.getElementById('uvodna_fotografija_dodaj').files[0]);
      }
      
      const xhr = new XMLHttpRequest();
      xhr.open('POST', 'ajax_php/proizvodDodaj.php', true);
      
      xhr.onload = function() {
        const dodaj = JSON.parse(this.responseText);
        console.log(dodaj);
        if(dodaj) {
          $('.cd-popup-dodaj-uspjeh').addClass('is-visible-dodaj-uspjeh');
        }
      }

      xhr.send(data);
    } else {
      console.log('greska.');
    }
  });
  
  
  const dodaj_proizvod_forma = document.getElementById('dodaj_proizvod_forma');
  const odustani_proizvod    = document.getElementById('odustani_proizvod');
  odustani_proizvod.addEventListener('click', function(e) {
    dodaj_proizvod_forma.reset();
  });


  // DODAVANJE EVENT-A NA SVAKO 'Izmijeni' DUGME
  const proizvod_izmijeni_dugme = document.getElementsByClassName('proizvod-izmijeni-dugme');
  for (let i = 0; i < proizvod_izmijeni_dugme.length; i++) {
    proizvod_izmijeni_dugme[i].addEventListener('click', proizvodSelektuj);
  }

  // UČITAVANJE PROIZVODA ZA IZMIJENI FORMU
  function proizvodSelektuj(e) {
    e.preventDefault();

    const proizvod_id = e.target.getAttribute('proizvod-id');
    let params        = 'proizvod_id=' + proizvod_id;
    
    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'ajax_php/proizvodSelektuj.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    xhr.onload = function() {
      const proizvod = JSON.parse(this.responseText);
      
      document.getElementById('proizvod-sacuvaj').setAttribute('proizvod-id', proizvod[0]['id']);
      document.getElementById('naziv_izmjena').value             = proizvod[0]['naziv'];
      document.getElementById('name_izmjena').value              = proizvod[0]['name'];
      document.getElementById('opis_izmjena').value              = proizvod[0]['opis'];
      document.getElementById('description_izmjena').value       = proizvod[0]['description'];
      document.getElementById('uvodni_tekst_izmjena').value      = proizvod[0]['uvodni_tekst'];
      document.getElementById('introductory_text_izmjena').value = proizvod[0]['introductory_text'];
      document.getElementById('tekst_proizvoda_izmjena').value   = proizvod[0]['tekst_proizvoda'];
      document.getElementById('product_text_izmjena').value      = proizvod[0]['product_text'];
      document.getElementById('alt_tag_izmjena').value           = proizvod[0]['alt_tag'];
      document.getElementById('alt_tag_eng_izmjena').value       = proizvod[0]['alt_tag_eng'];

      document.getElementById('prikaz-cover-slike-izmijeni').setAttribute('src', 'http://localhost/cms/public/images/' + proizvod[0]['cover_fotografija']);
      if(proizvod[0]['cover_fotografija'].length > 25) {
        document.querySelector('#cover_izmijeni .custom-text').innerHTML   = '&quot;' + proizvod[0]['cover_fotografija'].substr(0, 25) + '...' + proizvod[0]['cover_fotografija'].substring(proizvod[0]['cover_fotografija'].lastIndexOf('.')+1, proizvod[0]['cover_fotografija'].length) + '&quot;';
        document.querySelector('#cover_izmijeni .button-ukloni').innerHTML = 'Ukloni &quot;' + proizvod[0]['cover_fotografija'].substr(0, 25) + '...' + proizvod[0]['cover_fotografija'].substring(proizvod[0]['cover_fotografija'].lastIndexOf('.')+1, proizvod[0]['cover_fotografija'].length) + '&quot;';
      } else {
        document.querySelector('#cover_izmijeni .custom-text').innerHTML   = '&quot;' + proizvod[0]['cover_fotografija'] + '&quot;';
        document.querySelector('#cover_izmijeni .button-ukloni').innerHTML = 'Ukloni &quot;' + proizvod[0]['cover_fotografija'] + '&quot;';
      }
      
      document.getElementById('prikaz-uvodne-slike-izmijeni').setAttribute('src', 'http://localhost/cms/public/images/' + proizvod[0]['uvodna_fotografija']);
      if(proizvod[0]['uvodna_fotografija'].length > 25) {
        document.querySelector('#uvodna_izmijeni .custom-text').innerHTML   = '&quot;' + proizvod[0]['uvodna_fotografija'].substr(0, 25) + '...' + proizvod[0]['uvodna_fotografija'].substring(proizvod[0]['uvodna_fotografija'].lastIndexOf('.')+1, proizvod[0]['uvodna_fotografija'].length) + '&quot;';
        document.querySelector('#uvodna_izmijeni .button-ukloni').innerHTML = 'Ukloni &quot;' + proizvod[0]['uvodna_fotografija'].substr(0, 25) + '...' + proizvod[0]['uvodna_fotografija'].substring(proizvod[0]['uvodna_fotografija'].lastIndexOf('.')+1, proizvod[0]['uvodna_fotografija'].length) + '&quot;';
      } else {
        document.querySelector('#uvodna_izmijeni .custom-text').innerHTML   = '&quot;' + proizvod[0]['uvodna_fotografija'] + '&quot;';
        document.querySelector('#uvodna_izmijeni .button-ukloni').innerHTML = 'Ukloni &quot;' + proizvod[0]['uvodna_fotografija'] + '&quot;';
      }
    }
    xhr.send(params);
  }


  // VALIDACIJA FORME ZA IZMJENU PROIZVODA
  const proizvod_sacuvaj = document.getElementById('proizvod-sacuvaj');
  proizvod_sacuvaj.addEventListener('click', proizvodSacuvaj);
  const error_poruka_izmijeni  = document.getElementsByClassName('error-poruka-izmjena');
  const form_elements_izmijeni = document.getElementsByClassName('form-element-izmjena');
  let validacija_izmijeni;
  
  function proizvodSacuvaj(event) {
    validacija_izmijeni = true;
    
    // Validacija Cover Fotografije
    const cvr_foto_    = document.getElementById('cover_fotografija_izmjena');
    const cvr_err_por = document.getElementById('cvr_err_por');
    const cvr_slika   = document.getElementById('prikaz-cover-slike-izmijeni');

    if((cvr_foto_.files[0] == undefined || cvr_foto_.files[0] == '')
    && (cover_slika_izmijeni == undefined || cover_slika_izmijeni == '')
    && (cvr_slika.getAttribute('src') == undefined || cvr_slika.getAttribute('src') == '')) {
      validacija_izmijeni = false;
      cvr_err_por.style.visibility = 'visible';
      cvr_err_por.style.opacity    = 1;
      cvr_err_por.style.color      = 'rgb(221,75,57)';
      cvr_err_por.classList.add('photo_err');
    }
    cvr_foto_.addEventListener('input', function(e) {
      cvr_err_por.style.visibility = 'hidden';
      cvr_err_por.style.opacity    = 0;
    });
    cvr_slika.addEventListener('load', function(e) {
      cvr_err_por.style.visibility = 'hidden';
      cvr_err_por.style.opacity    = 0;
    });
    
    // Validacija Uvodne Fotografije
    const uvd_foto    = document.getElementById('uvodna_fotografija_izmjena');
    const uvd_err_por = document.getElementById('uvd_err_por');
    const uvd_slika   = document.getElementById('prikaz-uvodne-slike-izmijeni');

    if((uvd_foto.files[0] == undefined || uvd_foto.files[0] == '')
    && (uvodna_slika_izmijeni == undefined || uvodna_slika_izmijeni == '')
    && (uvd_slika.getAttribute('src') == undefined || uvd_slika.getAttribute('src') == '')) {
      validacija_izmijeni = false;
      uvd_err_por.style.visibility = 'visible';
      uvd_err_por.style.opacity    = 1;
      uvd_err_por.style.color      = 'rgb(221,75,57)';
      uvd_err_por.classList.add('photo_err');
    }
    uvd_foto.addEventListener('input', function(e) {
      uvd_err_por.style.visibility = 'hidden';
      uvd_err_por.style.opacity    = 0;
    });
    uvd_slika.addEventListener('load', function(e) {
      uvd_err_por.style.visibility = 'hidden';
      uvd_err_por.style.opacity    = 0;
    });

    // Validacija Tekstualnih polja
    for (let i = 0; i < form_elements_izmijeni.length; i++) {
      if((form_elements_izmijeni[i].value === '' || form_elements_izmijeni[i].value === null)) {
        event.preventDefault();

        validacija_izmijeni = false;
        
        error_poruka_izmijeni[i].style.visibility = 'visible';
        error_poruka_izmijeni[i].style.opacity = 1;
        error_poruka_izmijeni[i].style.color = 'rgb(221,75,57)';
        form_elements_izmijeni[i].style.borderColor = 'rgb(221,75,57)';

        form_elements_izmijeni[i].addEventListener('click', function(e) {
          error_poruka_izmijeni[i].style.opacity = 0;
          error_poruka_izmijeni[i].style.visibility = 'hidden';
          form_elements_izmijeni[i].style.borderColor = 'rgb(60,141,188)';
          form_elements_izmijeni[i].addEventListener('blur', function(e) {
            form_elements_izmijeni[i].style.borderColor = 'rgb(210,214,222)';
            if(form_elements_izmijeni[i].value === '' || form_elements_izmijeni[i].value === null) {
              error_poruka_izmijeni[i].style.visibility = 'visible';
              error_poruka_izmijeni[i].style.opacity = 1;
              error_poruka_izmijeni[i].style.color = 'rgb(221,75,57)';
              form_elements_izmijeni[i].style.borderColor = 'rgb(221,75,57)';
            }
          });
        });
      }
    }

    if(validacija_izmijeni) {
      proizvod_id = event.target.getAttribute('proizvod-id');

      const naziv_izmjena             = document.getElementById('naziv_izmjena').value;
      const name_izmjena              = document.getElementById('name_izmjena').value;
      const opis_izmjena              = document.getElementById('opis_izmjena').value;
      const description_izmjena       = document.getElementById('description_izmjena').value;
      const uvodni_tekst_izmjena      = document.getElementById('uvodni_tekst_izmjena').value;
      const introductory_text_izmjena = document.getElementById('introductory_text_izmjena').value;
      const tekst_proizvoda_izmjena   = document.getElementById('tekst_proizvoda_izmjena').value;
      const product_text_izmjena      = document.getElementById('product_text_izmjena').value;
      const alt_tag_izmjena           = document.getElementById('alt_tag_izmjena').value;
      const alt_tag_eng_izmjena       = document.getElementById('alt_tag_eng_izmjena').value;
      
      if(!(document.getElementById('cover_fotografija_izmjena').files[0] == null)) {
        const cover_fotografija_izmjena = document.getElementById('cover_fotografija_izmjena').files[0].name;
      }
      if(!(document.getElementById('uvodna_fotografija_izmjena').files[0] == null)) {
        const uvodna_fotografija_izmjena = document.getElementById('uvodna_fotografija_izmjena').files[0].name;
      }
      
      const data = new FormData();

      data.append('naziv_izmjena',             naziv_izmjena);
      data.append('name_izmjena',              name_izmjena);
      data.append('opis_izmjena',              opis_izmjena);
      data.append('description_izmjena',       description_izmjena);
      data.append('uvodni_tekst_izmjena',      uvodni_tekst_izmjena);
      data.append('introductory_text_izmjena', introductory_text_izmjena);
      data.append('tekst_proizvoda_izmjena',   tekst_proizvoda_izmjena);
      data.append('product_text_izmjena',      product_text_izmjena);
      data.append('tekst_proizvoda_izmjena',   tekst_proizvoda_izmjena);
      data.append('product_text_izmjena',      product_text_izmjena);
      data.append('alt_tag_izmjena',           alt_tag_izmjena);
      data.append('alt_tag_eng_izmjena',       alt_tag_eng_izmjena);
      data.append('proizvod_id',               proizvod_id);
      
      if(document.getElementById('cover_fotografija_izmjena').value == '') {
        data.append('cover_fotografija_izmjena', cover_slika_izmijeni);
      } else {
        data.append('cover_fotografija_izmjena', document.getElementById('cover_fotografija_izmjena').files[0]);
      }
      
      if(document.getElementById('uvodna_fotografija_izmjena').value == '') {
        data.append('uvodna_fotografija_izmjena', uvodna_slika_izmijeni);
      } else {
        data.append('uvodna_fotografija_izmjena', document.getElementById('uvodna_fotografija_izmjena').files[0]);
      }
      
      const xhr = new XMLHttpRequest();
      xhr.open('POST', 'ajax_php/proizvodSacuvaj.php', true);
      
      xhr.onload = function() {
        const izmjena = JSON.parse(this.responseText);
        if(izmjena) {
          $('.cd-popup-uspjeh').addClass('is-visible-uspjeh');
        }
      }

      xhr.send(data);
    } else {
      console.log('Doslo je do greske pri validaciji forme.')
    } 
  }


}());