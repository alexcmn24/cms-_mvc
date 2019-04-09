const profilna_foto_dropzone = document.getElementById('dropzone-slike');
profilna_foto_dropzone.addEventListener('drop', dragDropDodajCover);
// document.querySelector('#cover_dodaj .image-upload-wrap').style.display = 'block';

function dragDropDodajCover(event) {
	event.preventDefault();

	// Provjera dokumenta za fotografiju
	const profilna_drop      = event.dataTransfer.files[0];
	const profilna_drop_type = profilna_drop['type'];
	const validImageTypes    = ['image/gif', 'image/jpeg', 'image/png'];
	if(validImageTypes.includes(profilna_drop_type)) {
		// Provjera veličine dokumenta
		if(profilna_drop.size < 2097152) {
			this.className = 'dropzone';
			// Učitavanje Fotografije
			const reader = new FileReader();
			reader.onload = function(e) {
				console.log(e.target.result);
				const profilna_foto_el = document.getElementById('profilna-foto');
				const ukloni_dugme     = document.getElementById('ukloni-dugme');
				const image_text       = document.getElementById('image-text');
				profilna_foto_el.setAttribute('src', e.target.result);
				document.getElementsByClassName('image-upload-wrap')[0].style.display = 'none';
				ukloni_dugme.style.display = 'block';
				if(event.dataTransfer.files[0].name.length > 24) {
					image_text.innerHTML   = '&quot;' + event.dataTransfer.files[0].name.substr(0, 24) + '...' + event.dataTransfer.files[0].name.substring(event.dataTransfer.files[0].name.lastIndexOf('.')+1, event.dataTransfer.files[0].name.length) + '&quot;';
					ukloni_dugme.innerHTML = 'Ukloni &quot;' + event.dataTransfer.files[0].name.substr(0, 24) + '...' + event.dataTransfer.files[0].name.substring(event.dataTransfer.files[0].name.lastIndexOf('.')+1, event.dataTransfer.files[0].name.length) + '&quot;';
				} else {
					image_text.innerHTML   = '&quot;' + event.dataTransfer.files[0].name + '&quot;';
					ukloni_dugme.innerHTML = 'Ukloni &quot;' + event.dataTransfer.files[0].name + '&quot;';
				}
				
				// Slanje slike putem AJAX-a .php dokumentu za promjenu
				const xhr = new XMLHttpRequest();
				xhr.open('POST', 'ajax_php/profilPromjenaFotografije.php', true);
				
				const data = new FormData();
				const profilna_foto = event.dataTransfer.files[0];
				data.append('profilna_foto', profilna_foto);
				
				xhr.onload = function() {
					if(this.status == 200) {
						const profilna_foto = JSON.parse(this.responseText);
						if(profilna_foto) {
							// alert('Profilna fotografija je uspješno izmijenjena.');
							window.location.href = 'http://localhost/cms/profil';
						}
					}
				};
				xhr.send(data);
			};
			reader.readAsDataURL(event.dataTransfer.files[0]);
		} else {
			alert('Slika ne smije biti veća od 2 MB');
		}
	} else {
		alert('Dokument koji ste unijeli nije fotografija.');
	}
}

profilna_foto_dropzone.ondragover = function() {
	this.className = 'dropzone dragover';
	return false;
}

profilna_foto_dropzone.ondragleave = function() {
	this.className = 'dropzone';
	return false;
}
