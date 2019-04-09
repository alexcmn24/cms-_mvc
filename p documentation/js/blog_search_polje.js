	const tbody = document.getElementById('tbody');
	const search_blog_polje = document.getElementById('search_blog_polje');
	search_blog_polje.addEventListener('keyup', searchBlog);
	let search_blog;

	function searchBlog(e) {
		if(!search_blog_polje.value !== '') {
			let params = 'keyword=' + search_blog_polje.value;

			const xhr = new XMLHttpRequest();
			xhr.open('POST', 'ajax_php/blogSearch.php', true);
			xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
			xhr.onload = function() {
				if(this.status == 200) {
					search_blog = JSON.parse(this.responseText);
					populateBlog(search_blog)
				}
			};
			xhr.send(params);
		} else {
			console.log('cao');
		}
	}

	function populateBlog(json) {
		while(tbody.firstChild) {
			tbody.removeChild(tbody.firstChild)
		}

		const paginacija = document.querySelectorAll('.pagination.pull-right');
		if(paginacija[0] !== '' || paginacija[0] !== undefined || paginacija[0] !== null) {
			while(paginacija[0].firstChild) {
				paginacija[0].removeChild(paginacija[0].firstChild)
			}
		} else {
			while(paginacija[1].firstChild) {
				paginacija[1].removeChild(paginacija[1].firstChild)
			}
		}

		json.forEach((row) => {
			const tr = document.createElement('tr');
			
			const td_id       = document.createElement('td');
			td_id.textContent = row.id;
			td_id.classList.add('text-center');
			
			const td_naslov       = document.createElement('td');
			td_naslov.textContent = row.naslov;
			td_naslov.classList.add('text-center');
			
			const td_vrijeme = document.createElement('td');
			const datum      = row.vrijeme.split('-').reverse();
			switch(datum[1]) {
				case '01': datum[1] = 'Jan'; break;
				case '02': datum[1] = 'Feb'; break;
				case '03': datum[1] = 'Mar'; break;
				case '04': datum[1] = 'Apr'; break;
				case '05': datum[1] = 'May'; break;
				case '06': datum[1] = 'Jun'; break;
				case '07': datum[1] = 'Jul'; break;
				case '08': datum[1] = 'Aug'; break;
				case '09': datum[1] = 'Sep'; break;
				case '10': datum[1] = 'Oct'; break;
				case '11': datum[1] = 'Nov'; break;
				case '12': datum[1] = 'Dec'; break;
			}
			
			td_vrijeme.textContent = datum.join(' ');
			td_vrijeme.classList.add('text-center');
			
			const td_ime_i_prezime       = document.createElement('td');
			td_ime_i_prezime.textContent = row.ime_i_prezime;
			td_ime_i_prezime.classList.add('text-center');
			
			const td_izmijeni = document.createElement('td');
			td_izmijeni.classList.add('text-center');
			const button_izmijeni = document.createElement('button');
			button_izmijeni.textContent = 'Izmijeni';
			button_izmijeni.classList.add('blog-izmijeni-dugme');
			button_izmijeni.classList.add('btn');
			button_izmijeni.classList.add('btn-sm');
			button_izmijeni.classList.add('btn-info');
			button_izmijeni.classList.add('cd-popup-izmijeni-trigger');
			button_izmijeni.setAttribute('type', 'button');
			button_izmijeni.setAttribute('blog-id', row.id);
			
			button_izmijeni.addEventListener('click', izmjenaTriger);
			$('.cd-popup-izmijeni-trigger').on('click', izmjenaTriger);
			function izmjenaTriger(event) {
				event.preventDefault();
				$('.cd-popup-izmijeni').addClass('is-visible-izmijeni');
			};

			const td_deaktiviraj = document.createElement('td');
			td_deaktiviraj.classList.add('text-center');
			const deaktiviraj_link = document.createElement('a');
			deaktiviraj_link.classList.add('btn');
			deaktiviraj_link.classList.add('btn-sm');
			deaktiviraj_link.setAttribute('href', 'http://localhost/cms/blog/deaktiviraj/' + row.id);
			deaktiviraj_link.setAttribute('status-vrijednost', row.status);

			const td_izbrisi = document.createElement('td');
			td_izbrisi.classList.add('text-center');
			const izbrisi_link = document.createElement('a');
			izbrisi_link.textContent = 'Izbriši';
			izbrisi_link.classList.add('btn');
			izbrisi_link.classList.add('btn-sm');
			izbrisi_link.classList.add('btn-danger');
			izbrisi_link.setAttribute('href', 'http://localhost/cms/blog/selektuj/' + row.id + '/brisanje');

			tr.appendChild(td_id);
			tr.appendChild(td_naslov);
			tr.appendChild(td_vrijeme);
			tr.appendChild(td_ime_i_prezime);
			tr.appendChild(td_izmijeni);
			td_izmijeni.appendChild(button_izmijeni);
			tr.appendChild(td_deaktiviraj);
			td_deaktiviraj.appendChild(deaktiviraj_link);
			tr.appendChild(td_izbrisi);
			td_izbrisi.appendChild(izbrisi_link);
			tbody.appendChild(tr);

		});

		const blog_izmijeni_dugme = document.getElementsByClassName('blog-izmijeni-dugme');
		for (let i = 0; i < blog_izmijeni_dugme.length; i++) {
			blog_izmijeni_dugme[i].addEventListener('click', blogSelektuj);
		}

	  function blogSelektuj(e) {
	    e.preventDefault();

	    const blog_id = e.target.getAttribute('blog-id');
	    let params    = 'blog_id=' + blog_id;
	    
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
	      
	      const vrijeme_izmjena = document.getElementById('vrijeme_izmjena');
	      const datum_izmjena   = blog[0]['vrijeme'].split('-').reverse().join('/');
	      vrijeme_izmjena.value = datum_izmjena
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

		const aktiviraj_deaktiviraj = document.querySelectorAll('tr td:nth-of-type(6) a');
		for (let i = 0; i < aktiviraj_deaktiviraj.length; i++) {
			const status_elementa = aktiviraj_deaktiviraj[i].getAttribute('status-vrijednost');
			if(status_elementa.toLowerCase() == 'aktivan') {
				aktiviraj_deaktiviraj[i].classList.add('btn-success');
				aktiviraj_deaktiviraj[i].innerHTML = 'Deaktiviraj';
			} else {
				aktiviraj_deaktiviraj[i].classList.add('btn-warning');
				aktiviraj_deaktiviraj[i].innerHTML = 'Aktiviraj';
			}

	    aktiviraj_deaktiviraj[i].addEventListener('mouseover', deaktivirajMouseOver)
	    
	    function deaktivirajMouseOver(e) {
	      if(aktiviraj_deaktiviraj[i].textContent == 'Aktiviraj') {
	        e.target.style.backgroundColor = 'white';
	        e.target.style.color           = 'rgb(224, 142, 11)';
	        e.target.style.borderColor     = 'rgb(208, 208, 208)';
	        e.target.style.transition      = 'background-color 0.2s ease-out';
	      } else {
	        e.target.style.backgroundColor = 'white';
	        e.target.style.color           = 'rgb(0,141,76)';
	        e.target.style.borderColor     = 'rgb(208, 208, 208)';
	        e.target.style.transition      = 'background-color 0.2s ease-out';
	      }
	    };
	    
	    aktiviraj_deaktiviraj[i].addEventListener('mouseout', deaktivirajMouseOut);
	    
	    function deaktivirajMouseOut(e) {
	      if(aktiviraj_deaktiviraj[i].textContent == 'Aktiviraj') {
	        e.target.style.backgroundColor = 'rgb(243, 156, 18)';
	        e.target.style.color           = 'white';
	        e.target.style.borderColor     = 'rgb(224, 142, 11)';
	        e.target.style.transition      = 'background-color 0.2s ease-out';
	      } else {
	        e.target.style.backgroundColor = 'rgb(0,166,90)';
	        e.target.style.color           = 'white';
	        e.target.style.borderColor     = 'rgb(0,141,76)';
	        e.target.style.transition      = 'background-color 0.2s ease-out';
	      }
	    };
	  }
	}

	