(function() {
	// Profilna Sidebar
	const div_slike = document.getElementById('profilna-sidebar-div');
	const profilna_sidebar = document.createElement('img');
	profilna_sidebar.setAttribute('id', 'profilna-sidebar');
	profilna_sidebar.classList.add('img-circle');
	profilna_sidebar.setAttribute('alt', 'User Image');
	div_slike.appendChild(profilna_sidebar);

	// Profilna Navbar
	const link_slike = document.getElementById('profilna-navbar-link');
	const profilna_navbar_1 = document.createElement('img');
	profilna_navbar_1.setAttribute('id', 'profilna-navbar-1');
	profilna_navbar_1.classList.add('user-image');
	profilna_navbar_1.setAttribute('alt', 'User Image');
	link_slike.appendChild(profilna_navbar_1);

	// Profilna i Link Navbar
	const div_slike_i_linka = document.getElementById('profilna-i-link-navbar');
	const link_navbar = document.createElement('a');
	link_navbar.classList.add('slika-link');
	link_navbar.setAttribute('href', 'http://localhost/cms/profil');
	const profilna_navbar_2 = document.createElement('img');
	profilna_navbar_2.setAttribute('id', 'profilna-navbar-2');
	profilna_navbar_2.classList.add('img-circle');
	profilna_navbar_2.setAttribute('alt', 'User Image');
	div_slike_i_linka.appendChild(link_navbar);
	link_navbar.appendChild(profilna_navbar_2);

	const xhr = new XMLHttpRequest();
	xhr.open('GET', 'ajax_php/profilPrikazivanjeFotografije.php', true);

	xhr.onload = function() {
		if(this.status == 200) {
			const profilna_foto = JSON.parse(this.responseText);
			
			if(profilna_foto[0].image != '') {
				profilna_sidebar.setAttribute('src', 'http://localhost/cms/public/images/' + profilna_foto[0].image);
				profilna_navbar_1.setAttribute('src', 'http://localhost/cms/public/images/' + profilna_foto[0].image);
				profilna_navbar_2.setAttribute('src', 'http://localhost/cms/public/images/' + profilna_foto[0].image);
			} else {
				profilna_sidebar.setAttribute('src', 'http://localhost/cms/public/images/default_user.png');
				profilna_navbar_1.setAttribute('src', 'http://localhost/cms/public/images/default_user.png');
				profilna_navbar_2.setAttribute('src', 'http://localhost/cms/public/images/default_user.png');
			}
		}
	}
	xhr.send();

})();