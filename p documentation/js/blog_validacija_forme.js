(function() {
  const dodaj_submit = document.getElementById('dodaj_submit');
  let validacija_dodaj;

  const tagovi_input  = document.querySelector('#tagovi_div_dodaj .main-input');
  const tgv_div       = document.getElementById('tagovi_div_dodaj');
  const err_tagovi    = document.getElementById('err-tagovi');

  dodaj_submit.addEventListener('click', function(e) {
    validacija_dodaj = true;
    if(document.querySelectorAll('#tagovi_div_dodaj span').length == 0){
      validacija_dodaj = false;
      err_tagovi.classList.add('error-poruka-tag');
      err_tagovi.style.visibility = 'visible';
      err_tagovi.style.opacity    = 1;
      tgv_div.style.borderColor   = 'rgb(221,75,57)';
    } else {
      validacija_dodaj = true;
      err_tagovi.classList.remove('error-poruka-tag');
      err_tagovi.style.visibility = 'hidden';
      err_tagovi.style.opacity    = 0;
      tgv_div.style.borderColor   = 'rgb(210,214,222)';
    }
    tagovi_input.addEventListener('click', function(e) {
      if(document.querySelectorAll('#tagovi_div_dodaj span').length == 0) {
        err_tagovi.classList.remove('error-poruka-tag');
        err_tagovi.style.visibility = 'hidden';
        err_tagovi.style.opacity    = 0;
        tgv_div.classList.remove('error-polje-tag');
        tgv_div.style.borderColor = 'rgb(60,141,188)';
      } else {
        tgv_div.style.border = '1px solid rgb(60,141,188)'; 
      }
    });
    tagovi_input.addEventListener('blur', function(e) {
      if(document.querySelectorAll('#tagovi_div_dodaj span').length == 0) {
        err_tagovi.classList.add('error-poruka-tag');
        err_tagovi.style.visibility = 'visible';
        err_tagovi.style.opacity    = 1;
        tgv_div.style.borderColor   = 'rgb(221,75,57)';
      } else {
        tgv_div.style.borderColor = 'rgb(210,214,222)';
      }
    });
  });

  const tags_input = document.querySelector('#tags_div_dodaj .main-input');
  const tgs_div    = document.getElementById('tags_div_dodaj');
  const err_tags   = document.getElementById('err-tags');

  dodaj_submit.addEventListener('click', function(e) {
    validacija_dodaj = true;
    if(document.querySelectorAll('#tags_div_dodaj span').length == 0){
      validacija_dodaj = false;
      err_tags.classList.add('error-poruka-tag');
      err_tags.style.visibility = 'visible';
      err_tags.style.opacity    = 1;
      tgs_div.style.borderColor = 'rgb(221,75,57)';
    } else {
      validacija_dodaj = true;
      err_tags.classList.remove('error-poruka-tag');
      err_tags.style.visibility = 'hidden';
      err_tags.style.opacity    = 0;
      tgs_div.style.borderColor = 'rgb(210,214,222)';
    }
    tags_input.addEventListener('click', function(e) {
      if(document.querySelectorAll('#tags_div_dodaj span').length == 0) {
        err_tags.classList.remove('error-poruka-tag');
        err_tags.style.visibility = 'hidden';
        err_tags.style.opacity    = 0;
        tgs_div.classList.remove('error-polje-tag');
        tgs_div.style.borderColor = 'rgb(60,141,188)';
      } else {
        tgs_div.style.border = '1px solid rgb(60,141,188)';
      }
    });
    tags_input.addEventListener('blur', function(e) {
      if(document.querySelectorAll('#tags_div_dodaj span').length == 0) {
        err_tags.classList.add('error-poruka-tag');
        err_tags.style.visibility = 'visible';
        err_tags.style.opacity    = 1;
        tgs_div.style.borderColor = 'rgb(221,75,57)';
      } else {
        tgs_div.style.borderColor = 'rgb(210,214,222)';
      }
    });
  });
  
  const error_poruka_dodaj  = document.getElementsByClassName('error-poruka-dodaj');
  const form_elements_dodaj = document.getElementsByClassName('form-element-dodaj');
  
  dodaj_submit.addEventListener('click', function(e) {
    validacija_dodaj = true;
    
    const cvr_foto  = document.getElementById('cover_fotografija_dodaj');
    const err_por   = document.querySelector('#cover_dodaj .err-cover');
    const cvr_slika = document.querySelector('#cover_dodaj .prikaz-slike');
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
    
    const vrijeme_dodaj = document.getElementById('vrijeme_dodaj');
    const vrm_err_dod   = document.getElementById('vrm_err_dod');
    if(vrijeme_dodaj.value === '' || vrijeme_dodaj.value === null || vrijeme_dodaj.value === undefined) {
      validacija_dodaj             = false;
      vrm_err_dod.style.visibility = 'visible';
      vrm_err_dod.style.opacity    = 1;
      vrm_err_dod.style.color      = 'rgb(221,75,57)';
      vrm_err_dod.classList.add('photo_err');
      vrijeme_dodaj.addEventListener('click', function(e) {
        vrm_err_dod.style.visibility = 'hidden';
        vrm_err_dod.style.opacity    = 0;
        vrm_err_dod.style.color      = 'rgb(210,214,222)';
      });
    }
    
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
      const naslov_dodaj            = document.getElementById('naslov_dodaj').value;
      const title_dodaj             = document.getElementById('title_dodaj').value;
      const ime_i_prezime_dodaj     = document.getElementById('ime_i_prezime_dodaj').value;
      const full_name_dodaj         = document.getElementById('full_name_dodaj').value;
      const uvodni_tekst_dodaj      = document.getElementById('uvodni_tekst_dodaj').value;
      const introductory_text_dodaj = document.getElementById('introductory_text_dodaj').value;
      const glavni_tekst_dodaj      = document.getElementById('glavni_tekst_dodaj').value;
      const main_text_dodaj         = document.getElementById('main_text_dodaj').value;
      const alt_tag_dodaj           = document.getElementById('alt_tag_dodaj').value;
      const alt_tag_eng_dodaj       = document.getElementById('alt_tag_eng_dodaj').value;
      
      let vrijeme_dodaj = document.getElementById('vrijeme_dodaj').value;
      vrijeme_dodaj     = vrijeme_dodaj.split('/').reverse().join('-');

      const tagovi_objekat   = {};
      const tagovi_niz       = [];
      const tagovi_div_dodaj = document.getElementById('tagovi_div_dodaj');
      const tagovi_span      = tagovi_div_dodaj.getElementsByClassName('tag');
      for(let i = 0; i < tagovi_span.length; i++) {
        tagovi_niz.push(tagovi_span[i].textContent);
      }
      tagovi_objekat['tagovi'] = tagovi_niz;
      const tagovi_dodaj       = JSON.stringify(tagovi_objekat);

      const tags_objekat   = {};
      const tags_niz       = [];
      const tags_div_dodaj = document.getElementById('tags_div_dodaj');
      const tags_span      = tags_div_dodaj.getElementsByClassName('tag');
      for(let i = 0; i < tags_span.length; i++) {
        tags_niz.push(tags_span[i].textContent);
      }
      tags_objekat['tags'] = tags_niz;
      const tags_dodaj     = JSON.stringify(tags_objekat);

      if(!(document.getElementById('cover_fotografija_dodaj').files[0] == null)) {
        const cover_fotografija_dodaj = document.getElementById('cover_fotografija_dodaj').files[0].name;
      }
      
      const data = new FormData();

      data.append('naslov_dodaj',            naslov_dodaj);
      data.append('title_dodaj',             title_dodaj);
      data.append('ime_i_prezime_dodaj',     ime_i_prezime_dodaj);
      data.append('full_name_dodaj',         full_name_dodaj);
      data.append('vrijeme_dodaj',           vrijeme_dodaj);
      data.append('uvodni_tekst_dodaj',      uvodni_tekst_dodaj);
      data.append('introductory_text_dodaj', introductory_text_dodaj);
      data.append('glavni_tekst_dodaj',      glavni_tekst_dodaj);
      data.append('main_text_dodaj',         main_text_dodaj);
      data.append('alt_tag_dodaj',           alt_tag_dodaj);
      data.append('alt_tag_eng_dodaj',       alt_tag_eng_dodaj);
      data.append('tagovi_dodaj',            tagovi_dodaj);
      data.append('tags_dodaj',              tags_dodaj);

      console.log(cover_slika_dodaj);

      if(document.getElementById('cover_fotografija_dodaj').value == '') {
        data.append('cover_fotografija_dodaj', cover_slika_dodaj);
      } else {
        data.append('cover_fotografija_dodaj', document.getElementById('cover_fotografija_dodaj').files[0]);
      }
      
      const xhr = new XMLHttpRequest();
      xhr.open('POST', 'ajax_php/blogDodaj.php', true);

      xhr.onload = function() {
        if(this.status == 200) {
          const dodaj_json = JSON.parse(this.responseText);
          if(dodaj_json) {
            $('.cd-popup-dodaj-uspjeh').addClass('is-visible-dodaj-uspjeh');
          }
        }
      }

      xhr.send(data);
    } else {
      console.log('Doslo je do greske.');
    }
  });
  
  
  const dodaj_blog_forma = document.getElementById('dodaj_blog_forma');
  const odustani_blog    = document.getElementById('odustani_blog');
  odustani_blog.addEventListener('click', function(e) {
    dodaj_blog_forma.reset();
  });

  const blog_izmijeni_dugme = document.getElementsByClassName('blog-izmijeni-dugme');
  for (let i = 0; i < blog_izmijeni_dugme.length; i++) {
    blog_izmijeni_dugme[i].addEventListener('click', blogSelektuj);
  }

  function blogSelektuj(e) {
    e.preventDefault();

    const blog_id = e.target.getAttribute('blog-id');
    let params = 'blog_id=' + blog_id;
    
    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'ajax_php/blogSelektuj.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    xhr.onload = function() {
      const blog = JSON.parse(this.responseText);
      
      document.getElementById('blog-sacuvaj').setAttribute('blog-id', blog[0]['id']);
      document.getElementById('naslov_izmjena').value            = blog[0]['naslov'];
      document.getElementById('title_izmjena').value             = blog[0]['title'];
      document.getElementById('ime_i_prezime_izmjena').value     = blog[0]['ime_i_prezime'];
      document.getElementById('full_name_izmjena').value         = blog[0]['full_name'];
      document.getElementById('uvodni_tekst_izmjena').value      = blog[0]['uvodni_tekst'];
      document.getElementById('introductory_text_izmjena').value = blog[0]['introductory_text'];
      document.getElementById('glavni_tekst_izmjena').value      = blog[0]['glavni_tekst'];
      document.getElementById('main_text_izmjena').value         = blog[0]['main_text'];
      document.getElementById('alt_tag_izmjena').value           = blog[0]['alt_tag'];
      document.getElementById('alt_tag_eng_izmjena').value       = blog[0]['alt_tag_eng'];
      
      const vrijeme_izmjena  = document.getElementById('vrijeme_izmjena');
      const datum_izmjena    = blog[0]['vrijeme'].split('-').reverse().join('/');
      vrijeme_izmjena.value  = datum_izmjena
      vrijeme_izmjena.onblur = function(e) {
        e.target.value = datum_izmjena;
      };

      const blog_tagovi = JSON.parse(blog[0]['tagovi']).tagovi;
      for(let i = 0; i < blog_tagovi.length; i++) {
        const tagovi_span = document.createElement('span');
        tagovi_span.classList.add('tag');
        const tagovi_text = document.createTextNode(blog_tagovi[i]);
        const unutrasnji_span_tagovi = document.createElement('span');
        unutrasnji_span_tagovi.classList.add('close');
        const tagovi_div = document.getElementById('tagovi_div_izmijeni');
        tagovi_div.prepend(tagovi_span);
        tagovi_span.prepend(tagovi_text);
        tagovi_span.prepend(unutrasnji_span_tagovi);
        unutrasnji_span_tagovi.addEventListener('click', function(e) {
          e.target.parentNode.remove();
        });
      }

      const blog_tags = JSON.parse(blog[0]['tags']).tags;
      for(let i = 0; i < blog_tags.length; i++) {
        const tags_span = document.createElement('span');
        tags_span.classList.add('tag');
        const tags_text = document.createTextNode(blog_tags[i]);
        const unutrasnji_span_tags = document.createElement('span');
        unutrasnji_span_tags.classList.add('close');
        const tags_div = document.getElementById('tags_div_izmijeni');
        tags_div.prepend(tags_span);
        tags_span.prepend(tags_text);
        tags_span.prepend(unutrasnji_span_tags);
        unutrasnji_span_tags.addEventListener('click', function(e) {
          e.target.parentNode.remove();
        });
      }

      document.getElementById('prikaz-cover-slike-izmijeni').setAttribute('src', 'http://localhost/cms/public/images/' + blog[0]['cover_fotografija']);
      if(blog[0]['cover_fotografija'].length > 25) {
        document.querySelector('#cover_izmijeni .custom-text').innerHTML   = '&quot;' + blog[0]['cover_fotografija'].substr(0, 25) + '...' + blog[0]['cover_fotografija'].substring(blog[0]['cover_fotografija'].lastIndexOf('.')+1, blog[0]['cover_fotografija'].length) + '&quot;';
        document.querySelector('#cover_izmijeni .button-ukloni').innerHTML = 'Ukloni &quot;' + blog[0]['cover_fotografija'].substr(0, 25) + '...' + blog[0]['cover_fotografija'].substring(blog[0]['cover_fotografija'].lastIndexOf('.')+1, blog[0]['cover_fotografija'].length) + '&quot;';
      } else {
        document.querySelector('#cover_izmijeni .custom-text').innerHTML   = '&quot;' + blog[0]['cover_fotografija'] + '&quot;';
        document.querySelector('#cover_izmijeni .button-ukloni').innerHTML = 'Ukloni &quot;' + blog[0]['cover_fotografija'] + '&quot;';
      }
    }
    xhr.send(params);
  }


  const blog_sacuvaj = document.getElementById('blog-sacuvaj');
  blog_sacuvaj.addEventListener('click', blogSacuvaj);
  let validacija_izmijeni;
  
  const error_poruka_izmijeni  = document.getElementsByClassName('error-poruka-izmjena');
  const form_elements_izmijeni = document.getElementsByClassName('form-element-izmjena');
  
  function blogSacuvaj(event) {
    validacija_izmijeni = true;
    const tagovi_izm_input = document.querySelector('#tagovi_div_izmijeni .main-input');
    const tgv_izm_div      = document.getElementById('tagovi_div_izmijeni');
    const err_tagovi_izm   = document.getElementById('err-tagovi-izm');
    if(document.querySelectorAll('#tagovi_div_izmijeni span').length == 0) {
      validacija_izmijeni = false;
      err_tagovi_izm.classList.add('error-poruka-tag');
      err_tagovi_izm.style.visibility = 'visible';
      err_tagovi_izm.style.opacity    = 1;
      tgv_izm_div.style.borderColor   = 'rgb(221,75,57)';
    } else {
      validacija_izmijeni = true;
      err_tagovi_izm.classList.remove('error-poruka-tag');
      err_tagovi_izm.style.visibility = 'hidden';
      err_tagovi_izm.style.opacity    = 0;
      tgv_izm_div.style.borderColor   = 'rgb(210,214,222)';
    }
    tagovi_izm_input.addEventListener('click', function(e) {
      if(document.querySelectorAll('#tagovi_div_izmijeni span').length == 0) {
        err_tagovi_izm.classList.remove('error-poruka-tag');
        err_tagovi_izm.style.visibility = 'hidden';
        err_tagovi_izm.style.opacity    = 0;
        tgv_izm_div.classList.remove('error-polje-tag');
        tgv_izm_div.style.borderColor = 'rgb(60,141,188)';
      } else {
        tgv_izm_div.style.border = '1px solid rgb(60,141,188)';
      }
    });
    tagovi_izm_input.addEventListener('blur', function(e) {
      if(document.querySelectorAll('#tagovi_div_izmijeni span').length == 0) {
        err_tagovi_izm.classList.add('error-poruka-tag');
        err_tagovi_izm.style.visibility = 'visible';
        err_tagovi_izm.style.opacity    = 1;
        tgv_izm_div.style.borderColor   = 'rgb(221,75,57)';
      } else {
        tgv_izm_div.style.borderColor = 'rgb(210,214,222)';
      }
    });

    const tags_izm_input = document.querySelector('#tags_div_izmijeni .main-input');
    const tags_izm_div   = document.getElementById('tags_div_izmijeni');
    const err_tags_izm   = document.getElementById('err-tags-izm');
    if(document.querySelectorAll('#tags_div_izmijeni span').length == 0){
      validacija_izmijeni = false;
      err_tags_izm.classList.add('error-poruka-tag');
      err_tags_izm.style.visibility  = 'visible';
      err_tags_izm.style.opacity     = 1;
      tags_izm_div.style.borderColor = 'rgb(221,75,57)';
    } else {
      err_tags_izm.classList.remove('error-poruka-tag');
      err_tags_izm.style.visibility  = 'hidden';
      err_tags_izm.style.opacity     = 0;
      tags_izm_div.style.borderColor = 'rgb(210,214,222)';
    }
    tags_izm_input.addEventListener('click', function(e) {
      if(document.querySelectorAll('#tags_div_izmijeni span').length == 0) {
        err_tags_izm.classList.remove('error-poruka-tag');
        err_tags_izm.style.visibility = 'hidden';
        err_tags_izm.style.opacity    = 0;
        tags_izm_div.classList.remove('error-polje-tag');
        tags_izm_div.style.borderColor = 'rgb(60,141,188)';
      } else {
        tags_izm_div.style.border = '1px solid rgb(60,141,188)';
      }
    });
    tags_izm_input.addEventListener('blur', function(e) {
      if(document.querySelectorAll('#tags_div_izmijeni span').length == 0) {
        err_tags_izm.classList.add('error-poruka-tag');
        err_tags_izm.style.visibility  = 'visible';
        err_tags_izm.style.opacity     = 1;
        tags_izm_div.style.borderColor = 'rgb(221,75,57)';
      } else {
        tags_izm_div.style.borderColor = 'rgb(210,214,222)';
      }
    });

    const cvr_foto  = document.getElementById('cover_fotografija_izmjena');
    const err_por   = document.getElementById('cvr_err_por_izm');
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
      blog_id = event.target.getAttribute('blog-id');
      
      const naslov_izmjena            = document.getElementById('naslov_izmjena').value;
      const title_izmjena             = document.getElementById('title_izmjena').value;
      const ime_i_prezime_izmjena     = document.getElementById('ime_i_prezime_izmjena').value;
      const full_name_izmjena         = document.getElementById('full_name_izmjena').value;
      const uvodni_tekst_izmjena      = document.getElementById('uvodni_tekst_izmjena').value;
      const introductory_text_izmjena = document.getElementById('introductory_text_izmjena').value;
      const glavni_tekst_izmjena      = document.getElementById('glavni_tekst_izmjena').value;
      const main_text_izmjena         = document.getElementById('main_text_izmjena').value;
      const alt_tag_izmjena           = document.getElementById('alt_tag_izmjena').value;
      const alt_tag_eng_izmjena       = document.getElementById('alt_tag_eng_izmjena').value;
      
      let vrijeme_izmjena = document.getElementById('vrijeme_izmjena').value;
      vrijeme_izmjena     = vrijeme_izmjena.split('/').reverse().join('-');

      if(!(document.getElementById('cover_fotografija_izmjena').files[0] == null)) {
        const cover_fotografija_izmjena = document.getElementById('cover_fotografija_izmjena').files[0].name;
      }
      
      const tagovi_objekat      = {};
      const tagovi_niz          = [];
      const tagovi_div_izmijeni = document.getElementById('tagovi_div_izmijeni');
      const tagovi_span         = tagovi_div_izmijeni.getElementsByClassName('tag');
      for(let i = 0; i < tagovi_span.length; i++) {
        tagovi_niz.push(tagovi_span[i].textContent);
      }
      tagovi_objekat['tagovi'] = tagovi_niz;
      const tagovi_izmjena     = JSON.stringify(tagovi_objekat);

      const tags_objekat      = {};
      const tags_niz          = [];
      const tags_div_izmijeni = document.getElementById('tags_div_izmijeni');
      const tags_span         = tags_div_izmijeni.getElementsByClassName('tag');
      for(let i = 0; i < tags_span.length; i++) {
        tags_niz.push(tags_span[i].textContent);
      }
      tags_objekat['tags'] = tags_niz;
      const tags_izmjena   = JSON.stringify(tags_objekat);

      const data = new FormData();

      data.append('naslov_izmjena',            naslov_izmjena);
      data.append('title_izmjena',             title_izmjena);
      data.append('ime_i_prezime_izmjena',     ime_i_prezime_izmjena);
      data.append('full_name_izmjena',         full_name_izmjena);
      data.append('vrijeme_izmjena',           vrijeme_izmjena);
      data.append('uvodni_tekst_izmjena',      uvodni_tekst_izmjena);
      data.append('introductory_text_izmjena', introductory_text_izmjena);
      data.append('glavni_tekst_izmjena',      glavni_tekst_izmjena);
      data.append('main_text_izmjena',         main_text_izmjena);
      data.append('alt_tag_izmjena',           alt_tag_izmjena);
      data.append('alt_tag_eng_izmjena',       alt_tag_eng_izmjena);
      data.append('tagovi_izmjena',            tagovi_izmjena);
      data.append('tags_izmjena',              tags_izmjena);
      data.append('blog_id',                   blog_id);

      if(document.getElementById('cover_fotografija_izmjena').value == '') {
        data.append('cover_fotografija_izmjena', cover_slika_izmijeni);
      } else {
        data.append('cover_fotografija_izmjena', document.getElementById('cover_fotografija_izmjena').files[0]);
      }
      
      const xhr = new XMLHttpRequest();
      xhr.open('POST', 'ajax_php/blogSacuvaj.php', true);
      
      xhr.onload = function() {
        if(this.status == 200) {
          const izmjena_json = JSON.parse(this.responseText);
          if(izmjena_json) {
            $('.cd-popup-uspjeh').addClass('is-visible-uspjeh');
          }
        }
      }
      xhr.send(data);
    } else {
      console.log('Doslo je do greske pri validaciji forme.')
    } 
  }


}());