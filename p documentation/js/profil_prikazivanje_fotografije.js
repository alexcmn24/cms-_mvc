	const xhr = new XMLHttpRequest();
	xhr.open('GET', 'ajax_php/profilPrikazivanjeFotografije.php', true);
	xhr.onload = function() {
			const odgovor        = JSON.parse(this.responseText);
			console.log(this.responseText);
			const profilna_slika = odgovor[0]['image'];
			const profilna_foto  = document.getElementById('profilna-foto');
			const image_text     = document.getElementById('image-text');
			const ukloni_dugme   = document.getElementById('ukloni-dugme');
			if(profilna_slika != '') {
				profilna_foto.setAttribute('src', 'http://localhost/cms/public/images/' + profilna_slika);
				if(profilna_slika.length > 23) {
					image_text.innerHTML   = '&quot;' + profilna_slika.substr(0, 23) + '...' + profilna_slika.substring(profilna_slika.lastIndexOf('.')+1, profilna_slika.length) + '&quot;';
					ukloni_dugme.innerHTML = 'Ukloni &quot;' + profilna_slika.substr(0, 23) + '...' + profilna_slika.substring(profilna_slika.lastIndexOf('.')+1, profilna_slika.length) + '&quot;';
				} else {
					image_text.innerHTML   = '&quot;' + profilna_slika + '&quot;';
					ukloni_dugme.innerHTML = 'Ukloni &quot;' + profilna_slika + '&quot;';
				}
			} else {
				profilna_foto.setAttribute('src', 'http://localhost/cms/public/images/default_user.png');
			}
	}
	xhr.send();
	

