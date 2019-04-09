// DODAJ FORMA
const cover_dodaj_dropzone = document.getElementById('dropzone-dodaj-cover');
cover_dodaj_dropzone.addEventListener('drop', dragDropDodajCover);
let cover_slika_dodaj;

function dragDropDodajCover(event) {
  event.preventDefault();
  // Provjera dokumenta za fotografiju
  cover_slika_dodaj            = event.dataTransfer.files[0];
  const cover_slika_dodaj_type = cover_slika_dodaj['type'];
  const validImageTypes        = ['image/gif', 'image/jpeg', 'image/png'];
  if(validImageTypes.includes(cover_slika_dodaj_type)) {
    // Provjera veličine dokumenta
    if(cover_slika_dodaj.size < 2097152) {
      this.className = 'dropzone';
      
      const reader = new FileReader();
      reader.onload = function(e) {
        const cover_dodaj_img    = document.getElementById('prikaz-cover-foto-dodaj');
        const cover_dodaj_ukloni = document.querySelector('#cover_dodaj button:nth-of-type(2)');
        const cover_dodaj_span   = document.querySelector('#cover_dodaj span:nth-of-type(2)');
        
        cover_dodaj_img.setAttribute('src', e.target.result);
        document.getElementsByClassName('image-upload-wrap')[0].style.display = 'none';
        cover_dodaj_ukloni.style.display = 'block';
        if(event.dataTransfer.files[0].name.length > 25) {
          cover_dodaj_span.innerHTML   = '&quot;' + event.dataTransfer.files[0].name.substr(0, 25) + '...' + event.dataTransfer.files[0].name.substring(event.dataTransfer.files[0].name.lastIndexOf('.')+1, event.dataTransfer.files[0].name.length) + '&quot;';
          cover_dodaj_ukloni.innerHTML = 'Ukloni &quot;' + event.dataTransfer.files[0].name.substr(0, 25) + '...' + event.dataTransfer.files[0].name.substring(event.dataTransfer.files[0].name.lastIndexOf('.')+1, event.dataTransfer.files[0].name.length) + '&quot;';
        } else {
          cover_dodaj_span.innerHTML   = '&quot;' + event.dataTransfer.files[0].name + '&quot;';
          cover_dodaj_ukloni.innerHTML = 'Ukloni &quot;' + event.dataTransfer.files[0].name + '&quot;';
        }
      };
      reader.readAsDataURL(event.dataTransfer.files[0]);
    } else {
      alert('Fotografija ne smije biti veća od 2 MB');
    }
  } else {
    alert('Dokument koji ste unijeli nije fotografija.');
  }
}

cover_dodaj_dropzone.ondragover = function() {
  return false;
}

cover_dodaj_dropzone.ondragleave = function() {
  return false;
}

const uvodna_dodaj_dropzone = document.getElementById('dropzone-dodaj-uvodna');

uvodna_dodaj_dropzone.addEventListener('drop', dragDropDodajUvodna);

let uvodna_slika_dodaj;

function dragDropDodajUvodna(event) {
  event.preventDefault();
  uvodna_slika_dodaj            = event.dataTransfer.files[0];
  const uvodna_slika_dodaj_type = uvodna_slika_dodaj['type'];
  const validImageTypes         = ['image/gif', 'image/jpeg', 'image/png'];
  if(validImageTypes.includes(uvodna_slika_dodaj_type)) {
    if(uvodna_slika_dodaj.size < 2097152) {
      this.className = 'dropzone';
      
      const reader = new FileReader();

      reader.onload = function(e) {
        const uvodna_dodaj_img    = document.querySelector('#uvodna_dodaj img');
        const uvodna_dodaj_ukloni = document.querySelector('#uvodna_dodaj button:nth-of-type(2)');
        const uvodna_dodaj_span   = document.querySelector('#uvodna_dodaj span:nth-of-type(2)');
        
        uvodna_dodaj_img.setAttribute('src', e.target.result);
        document.getElementsByClassName('image-upload-wrap')[1].style.display = 'none';
        uvodna_dodaj_ukloni.style.display = 'block';
        if(event.dataTransfer.files[0].name.length > 25) {
          uvodna_dodaj_span.innerHTML   = '&quot;' + event.dataTransfer.files[0].name.substr(0, 25) + '...' + event.dataTransfer.files[0].name.substring(event.dataTransfer.files[0].name.lastIndexOf('.')+1, event.dataTransfer.files[0].name.length) + '&quot;';
          uvodna_dodaj_ukloni.innerHTML = 'Ukloni &quot;' + event.dataTransfer.files[0].name.substr(0, 25) + '...' + event.dataTransfer.files[0].name.substring(event.dataTransfer.files[0].name.lastIndexOf('.')+1, event.dataTransfer.files[0].name.length) + '&quot;';
        } else {
          uvodna_dodaj_span.innerHTML   = '&quot;' + event.dataTransfer.files[0].name + '&quot;';
          uvodna_dodaj_ukloni.innerHTML = 'Ukloni &quot;' + event.dataTransfer.files[0].name + '&quot;';
        }
      };
      reader.readAsDataURL(event.dataTransfer.files[0]);
      console.log(document.getElementById('dropzone-uvodna'));
    } else {
      alert('Fotografija ne smije biti veća od 2 MB');
    }
  } else {
    alert('Dokument koji ste unijeli nije fotografija.');
  }
}

uvodna_dodaj_dropzone.ondragover = function() {
  return false;
}

uvodna_dodaj_dropzone.ondragleave = function() {
  return false;
}

// IZMIJENI FORMA
const cover_izmijeni_dropzone = document.getElementById('dropzone-izmijeni-cover');
cover_izmijeni_dropzone.addEventListener('drop', dragDropIzmijeniCover);
let cover_slika_izmijeni;

function dragDropIzmijeniCover(event) {
  event.preventDefault();
  
  cover_slika_izmijeni            = event.dataTransfer.files[0];
  const cover_slika_izmijeni_type = cover_slika_izmijeni['type'];
  const validImageTypes           = ['image/gif', 'image/jpeg', 'image/png'];
  if(validImageTypes.includes(cover_slika_izmijeni_type)) {
    if(cover_slika_izmijeni.size < 2097152) {
      this.className = 'dropzone';
      
      const reader = new FileReader();

      reader.onload = function(e) {
        cover_izmijeni_img.setAttribute('src', e.target.result);
        document.getElementsByClassName('image-upload-wrap')[2].style.display = 'none';
        cover_izmijeni_ukloni.style.display = 'block';
        if(event.dataTransfer.files[0].name.length > 25) {
          cover_izmijeni_span.innerHTML   = '&quot;' + event.dataTransfer.files[0].name.substr(0, 25) + '...' + event.dataTransfer.files[0].name.substring(event.dataTransfer.files[0].name.lastIndexOf('.')+1, event.dataTransfer.files[0].name.length) + '&quot;';
          cover_izmijeni_ukloni.innerHTML = 'Ukloni &quot;' + event.dataTransfer.files[0].name.substr(0, 25) + '...' + event.dataTransfer.files[0].name.substring(event.dataTransfer.files[0].name.lastIndexOf('.')+1, event.dataTransfer.files[0].name.length) + '&quot;';
        } else {
          cover_izmijeni_span.innerHTML   = '&quot;' + event.dataTransfer.files[0].name + '&quot;';
          cover_izmijeni_ukloni.innerHTML = 'Ukloni &quot;' + event.dataTransfer.files[0].name + '&quot;';
        }
      };
      reader.readAsDataURL(event.dataTransfer.files[0]);
    } else {
      alert('Fotografija ne smije biti veća od 2 MB');
    }
  } else {
    alert('Dokument koji ste unijeli nije fotografija.');
  }
}

cover_izmijeni_dropzone.ondragover = function() {
  return false;
}

cover_izmijeni_dropzone.ondragleave = function() {
  return false;
}

const uvodna_izmijeni_dropzone = document.getElementById('dropzone-izmijeni-uvodna');

uvodna_izmijeni_dropzone.addEventListener('drop', dragDropIzmijeniUvodna);

let uvodna_slika_izmijeni;

function dragDropIzmijeniUvodna(event) {
  event.preventDefault();

  uvodna_slika_izmijeni            = event.dataTransfer.files[0];
  const uvodna_slika_izmijeni_type = uvodna_slika_izmijeni['type'];
  const validImageTypes            = ['image/gif', 'image/jpeg', 'image/png'];
  if(validImageTypes.includes(uvodna_slika_izmijeni_type)) {
    if(uvodna_slika_izmijeni.size < 2097152) {
      this.className = 'dropzone';
      
      const reader = new FileReader();
      reader.onload = function(e) {
        uvodna_izmijeni_img.setAttribute('src', e.target.result);
        document.getElementsByClassName('image-upload-wrap')[3].style.display = 'none';
        uvodna_izmijeni_ukloni.style.display = 'block';
        if(event.dataTransfer.files[0].name.length > 25) {
          uvodna_izmijeni_span.innerHTML   = '&quot;' + event.dataTransfer.files[0].name.substr(0, 25) + '...' + event.dataTransfer.files[0].name.substring(event.dataTransfer.files[0].name.lastIndexOf('.')+1, event.dataTransfer.files[0].name.length) + '&quot;';
          uvodna_izmijeni_ukloni.innerHTML = 'Ukloni &quot;' + event.dataTransfer.files[0].name.substr(0, 25) + '...' + event.dataTransfer.files[0].name.substring(event.dataTransfer.files[0].name.lastIndexOf('.')+1, event.dataTransfer.files[0].name.length) + '&quot;';
        } else {
          uvodna_izmijeni_span.innerHTML   = '&quot;' + event.dataTransfer.files[0].name + '&quot;';
          uvodna_izmijeni_ukloni.innerHTML = 'Ukloni &quot;' + event.dataTransfer.files[0].name + '&quot;';
        }
      };
      reader.readAsDataURL(event.dataTransfer.files[0]);
    } else {
      alert('Fotografija ne smije biti veća od 2 MB');
    }
  } else {
    alert('Dokument koji ste unijeli nije fotografija.');
  }
}

uvodna_izmijeni_dropzone.ondragover = function() {
  return false;
}

uvodna_izmijeni_dropzone.ondragleave = function() {
  return false;
}