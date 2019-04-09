const cover_dodaj          = document.getElementById('cover_dodaj');
const cover_dodaj_button   = document.querySelector('#cover_dodaj button:first-of-type');
let cover_dodaj_input      = document.querySelector('#cover_dodaj input');
const cover_dodaj_span     = document.querySelector('#cover_dodaj span:nth-of-type(2)');
const cover_dodaj_img      = document.querySelector('#cover_dodaj img');
const cover_dodaj_ukloni   = document.querySelector('#cover_dodaj button:nth-of-type(2)');
const cover_dodaj_drop     = document.querySelector('#cover_dodaj .image-upload-wrap');
const cover_dodaj_dropzona = document.getElementById('dropzone-cover');

cover_dodaj_button.argument = cover_dodaj_input;
cover_dodaj_button.addEventListener('click', pokreniInput);

cover_dodaj_input.arg1 = cover_dodaj_input;
cover_dodaj_input.arg2 = cover_dodaj_span;
cover_dodaj_input.arg3 = cover_dodaj_img;
cover_dodaj_input.arg4 = cover_dodaj_ukloni;
cover_dodaj_input.arg5 = cover_dodaj_drop;
cover_dodaj_input.addEventListener('change', nazivSlika);

cover_dodaj_ukloni.arg1 = cover_dodaj_input;
cover_dodaj_ukloni.arg2 = cover_dodaj_img;
cover_dodaj_ukloni.arg3 = cover_dodaj_span;
cover_dodaj_ukloni.arg4 = cover_dodaj_drop;
cover_dodaj_ukloni.arg5 = cover_dodaj_dropzona;
cover_dodaj_ukloni.addEventListener('click', ukloniSliku);

document.querySelector('#cover_dodaj .button-ukloni').addEventListener('click', function(e) {
  document.querySelector('#cover_dodaj .image-upload-wrap').style.display = 'block';
});

const cover_izmijeni          = document.getElementById('cover_izmijeni');
const cover_izmijeni_button   = document.querySelector('#cover_izmijeni button:first-of-type');
let cover_izmijeni_input      = document.querySelector('#cover_izmijeni input');
const cover_izmijeni_span     = document.querySelector('#cover_izmijeni span:nth-of-type(2)');
const cover_izmijeni_img      = document.querySelector('#cover_izmijeni img');
const cover_izmijeni_ukloni   = document.querySelector('#cover_izmijeni button:nth-of-type(2)');
const cover_izmijeni_drop     = document.querySelector('#cover_izmijeni .image-upload-wrap');
const cover_izmijeni_dropzona = document.getElementById('dropzone-cover');

cover_izmijeni_button.argument = cover_izmijeni_input;
cover_izmijeni_button.addEventListener('click', pokreniInput);

cover_izmijeni_input.arg1 = cover_izmijeni_input;
cover_izmijeni_input.arg2 = cover_izmijeni_span;
cover_izmijeni_input.arg3 = cover_izmijeni_img;
cover_izmijeni_input.arg4 = cover_izmijeni_ukloni;
cover_izmijeni_input.arg5 = cover_izmijeni_drop;
cover_izmijeni_input.addEventListener('change', nazivSlika);

cover_izmijeni_ukloni.arg1 = cover_izmijeni_input;
cover_izmijeni_ukloni.arg2 = cover_izmijeni_img;
cover_izmijeni_ukloni.arg3 = cover_izmijeni_span;
cover_izmijeni_ukloni.arg4 = cover_izmijeni_drop;
cover_izmijeni_ukloni.arg5 = cover_izmijeni_dropzona;
cover_izmijeni_ukloni.addEventListener('click', ukloniSliku);

document.querySelector('#cover_izmijeni .button-ukloni').addEventListener('click', function(e) {
  document.querySelector('#cover_izmijeni .image-upload-wrap').style.display = 'block';
});


function pokreniInput(e) {
  e.target.argument.click();
}

function nazivSlika(e) {
  const slika_drop      = e.target.arg1.files[0];
  const slika_drop_type = slika_drop['type'];
  const validImageTypes = ['image/gif', 'image/jpeg', 'image/png'];
  if(validImageTypes.includes(slika_drop_type)) {
    // Provjera veličine dokumenta
    if(slika_drop.size < 2097152) {
      if(e.target.arg1.value) {
        const reader = new FileReader();
        reader.onload = function(evt) {
          console.log(evt.target.result);
          e.target.arg3.setAttribute('src', evt.target.result);
        }
        reader.readAsDataURL(e.target.arg1.files[0]);
        document.getElementById('dropzone-cover').value = '';
        e.target.arg2.innerHTML     = e.target.arg1.files[0].name;
        e.target.arg4.style.display = 'block';
        cover_slika_izmijeni = '';
        if(e.target.arg1.files[0].name.length > 25) {
          e.target.arg2.innerHTML = '&quot;' + e.target.arg1.files[0].name.substr(0, 25) + '...' + e.target.arg1.files[0].name.substring(e.target.arg1.files[0].name.lastIndexOf('.')+1, e.target.arg1.files[0].name.length) + '&quot;';
          e.target.arg4.innerHTML = 'Ukloni &quot;' + e.target.arg1.files[0].name.substr(0, 25) + '...' + e.target.arg1.files[0].name.substring(e.target.arg1.files[0].name.lastIndexOf('.')+1, e.target.arg1.files[0].name.length) + '&quot;';
        } else {
          e.target.arg2.innerHTML = '&quot;' + e.target.arg1.files[0].name.substr(0, 25) + '&quot;';
          e.target.arg4.innerHTML = 'Ukloni &quot;' + e.target.arg1.files[0].name.substr(0, 25) + '&quot;';
        }
        e.target.arg5.style.display = 'none';
      } else {
        e.target.arg2.innerHTML = 'Izaberite fotografiju.';
      }
    } else {
      e.target.arg1.value = null;
      alert('Fotografija ne smije biti veća od 2 MB');
    }
  } else {
    e.target.arg1.value = null;
    alert('Dokument koji ste unijeli nije fotografija.');
  }
}

function ukloniSliku(e) {
  e.target.arg2.setAttribute('src', '');
  cover_slika_dodaj           = '';
  cover_slika_izmijeni        = '';
  e.target.style.display      = 'none';
  e.target.arg1.value         = '';
  e.target.arg3.innerHTML     = 'Izaberite fotografiju.';
  e.target.arg2.style.display = 'block';
  e.target.arg4.style.color   = 'rgb(255,255,255)';
}
