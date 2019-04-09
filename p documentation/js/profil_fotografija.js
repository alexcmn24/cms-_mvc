(function() {
	// Dodavanje 'custom' upload dugmeta, naziva slike, 'drag & drop' regije itd. za cover sliku
	const upload_dugme   = document.getElementById('upload-dugme');
	let image_input      = document.getElementById('image-input');
	const image_text     = document.getElementById('image-text');
	const profilna_foto  = document.getElementById('profilna-foto');
	const ukloni_dugme   = document.getElementById('ukloni-dugme');
	const slika_drop     = document.getElementsByClassName('image-upload-wrap')[0];
	const dropzone_slike = document.getElementById('dropzone-slike');

	upload_dugme.argument = image_input;
	upload_dugme.addEventListener('click', pokreniInput);

	image_input.arg1 = image_input;
	image_input.arg2 = image_text;
	image_input.arg3 = profilna_foto;
	image_input.arg4 = ukloni_dugme;
	image_input.arg5 = slika_drop;
	image_input.addEventListener('change', nazivSlika);

	ukloni_dugme.arg1 = image_input;
	ukloni_dugme.arg2 = profilna_foto;
	ukloni_dugme.arg3 = image_text;
	ukloni_dugme.arg4 = slika_drop;
	ukloni_dugme.arg5 = dropzone_slike;
	ukloni_dugme.addEventListener('click', ukloniSliku);

	ukloni_dugme.addEventListener('click', function(e) {
	  slika_drop.style.display = 'block';
	});

	function pokreniInput(e) {
		e.target.argument.click();
	}

	function nazivSlika(e) {
		const input_slika      = e.target.arg1.files[0];
	  const input_slika_type = input_slika['type'];
	  const validImageTypes  = ['image/gif', 'image/jpeg', 'image/png'];
	  if(validImageTypes.includes(input_slika_type)) {
	    // Provjera veličine dokumenta
	    if(input_slika.size < 2097152) {
				if(e.target.arg1.value) {
					dropzone_slike.value = '';
					e.target.arg3.setAttribute('src', 'http://localhost/cms/public/images/' + e.target.arg1.files[0].name);
					e.target.arg2.innerHTML     = e.target.arg1.files[0].name;
					e.target.arg4.style.display = 'block';
					cover_slika_izmijeni = '';
					if(e.target.arg1.files[0].name.length > 24) {
						e.target.arg2.innerHTML = '&quot;' + e.target.arg1.files[0].name.substr(0, 24) + '...' + e.target.arg1.files[0].name.substring(e.target.arg1.files[0].name.lastIndexOf('.')+1, e.target.arg1.files[0].name.length) + '&quot;';
						e.target.arg4.innerHTML = 'Ukloni &quot;' + e.target.arg1.files[0].name.substr(0, 24) + '...' + e.target.arg1.files[0].name.substring(e.target.arg1.files[0].name.lastIndexOf('.')+1, e.target.arg1.files[0].name.length) + '&quot;';
					} else {
						e.target.arg2.innerHTML = '&quot;' + e.target.arg1.files[0].name.substr(0, 24) + '&quot;';
						e.target.arg4.innerHTML = 'Ukloni &quot;' + e.target.arg1.files[0].name.substr(0, 24) + '&quot;';
					}
					e.target.arg5.style.display = 'none';

					const xhr = new XMLHttpRequest();
					xhr.open('POST', 'ajax_php/profilPromjenaFotografije.php', true);

					const data = new FormData();
					const profilna_foto_input = document.getElementById('image-input').files[0];
					data.append('profilna_foto', profilna_foto_input);

					xhr.onload = function() {
						if(this.status == 200) {
							let profilna_foto = JSON.parse(this.responseText);
							location.reload();
							// document.getElementById('profilna-foto').setAttribute('src', 'http://localhost/cms/public/images/' + profilna_foto[0]['image']);
							// document.getElementById('profilna-sidebar').setAttribute('src', 'http://localhost/cms/public/images/' + profilna_foto[0]['image']);
							// document.getElementById('profilna-navbar-1').setAttribute('src', 'http://localhost/cms/public/images/' + profilna_foto[0]['image']);
							// document.getElementById('profilna-navbar-2').setAttribute('src', 'http://localhost/cms/public/images/' + profilna_foto[0]['image']);
							// if(profilna_foto[0]['image'].length > 24) {
							// 	document.getElementById('image-text').innerHTML   = '&quot;' + profilna_foto[0]['image'].substr(0, 24) + '...' + profilna_foto[0]['image'].substring(profilna_foto[0]['image'].lastIndexOf('.')+1, profilna_foto[0]['image'].length) + '&quot;';
							// 	document.getElementById('ukloni-dugme').innerHTML = 'Ukloni &quot;' + profilna_foto[0]['image'].substr(0, 24) + '...' + profilna_foto[0]['image'].substring(profilna_foto[0]['image'].lastIndexOf('.')+1, profilna_foto[0]['image'].length) + '&quot;';
							// } else {
							// 	document.getElementById('image-text').innerHTML   = '&quot;' + profilna_foto[0]['image'] + '&quot;';
							// 	document.getElementById('ukloni-dugme').innerHTML = 'Ukloni &quot;' + profilna_foto[0]['image'] + '&quot;';
							// }
						}
					}
					xhr.send(data);
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

})();