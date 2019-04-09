// DODAJ FORMA
jQuery(document).ready(function($){
	// Otvori popup
	$('.cd-popup-dodaj-trigger').on('click', function(event){
		event.preventDefault();
		$('.cd-popup-dodaj').addClass('is-visible-dodaj');
	});
	
	// Zatvori popup
	$('.cd-popup-dodaj').on('click', function(event){
		if( $(event.target).is('.cd-popup-dodaj-close') || $(event.target).is('.cd-popup-dodaj') ) {
			event.preventDefault();
			$(this).removeClass('is-visible-dodaj');

			setTimeout( function() {
				if(window.location.href == 'http://localhost/cms/proizvodi') {
					window.location = 'http://localhost/cms/proizvodi';
				} else if(window.location.href == 'http://localhost/cms/blog') {
					window.location = 'http://localhost/cms/blog';
				} else if(window.location.href == 'http://localhost/cms/karijera') {
					window.location = 'http://localhost/cms/karijera';
				}
			}, 100);
		}
	});

	// Zatvori oba popupa
	$('.dodaj_uspjeh').on('click', function(event) {
		if($(event.target).is('.odustani_da')) {
			event.preventDefault();
			$('.cd-popup-dodaj').removeClass('is-visible-dodaj');
			$('.cd-popup-potvrda').removeClass('is-visible-potvrda');
			
			setTimeout( function() {
				if(window.location.href == 'http://localhost/cms/proizvodi') {
					window.location = 'http://localhost/cms/proizvodi';
				} else if(window.location.href == 'http://localhost/cms/blog') {
					window.location = 'http://localhost/cms/blog';
				} else if(window.location.href == 'http://localhost/cms/karijera') {
					window.location = 'http://localhost/cms/karijera';
				}
			}, 100);
			
		}
	});
	
	// Zatvori pritiskom na 'Escape' dugme
	$(document).keyup(function(event){
  	if(event.which == '27'){
  		$('.cd-popup-dodaj').removeClass('is-visible-dodaj');

  		setTimeout( function() {
				if(window.location.href == 'http://localhost/cms/proizvodi') {
					window.location = 'http://localhost/cms/proizvodi';
				} else if(window.location.href == 'http://localhost/cms/blog') {
					window.location = 'http://localhost/cms/blog';
				} else if(window.location.href == 'http://localhost/cms/karijera') {
					window.location = 'http://localhost/cms/karijera';
				}
			}, 100);
    }

  });
});

// IZMIJENI FORMA
jQuery(document).ready(function($){
	// Otvori popup
	$('.cd-popup-izmijeni-trigger').on('click', izmjenaTriger);
	function izmjenaTriger(event) {
		event.preventDefault();
		$('.cd-popup-izmijeni').addClass('is-visible-izmijeni');
	};
	
	// Zatvori popup
	$('.cd-popup-izmijeni').on('click', function(event){
		if( $(event.target).is('.cd-popup-izmijeni-close') || $(event.target).is('.cd-popup-izmijeni') ) {
			event.preventDefault();
			$(this).removeClass('is-visible-izmijeni');
			setTimeout( function() {
				if(window.location.href == 'http://localhost/cms/proizvodi') {
					window.location = 'http://localhost/cms/proizvodi';
				} else if(window.location.href == 'http://localhost/cms/blog') {
					window.location = 'http://localhost/cms/blog';
				} else if(window.location.href == 'http://localhost/cms/karijera') {
					window.location = 'http://localhost/cms/karijera';
				}
			}, 100);
		}
	});
	
	// Zatvori oba popupa
	$('.izmjene_uspjeh').on('click', function(event) {
		if($(event.target).is('.odustani_da')) {
			event.preventDefault();
			$('.cd-popup-izmijeni').removeClass('is-visible-izmijeni');
			$('.cd-popup-potvrda').removeClass('is-visible-potvrda');
			setTimeout( function() {
				if(window.location.href == 'http://localhost/cms/proizvodi') {
					window.location = 'http://localhost/cms/proizvodi';
				} else if(window.location.href == 'http://localhost/cms/blog') {
					window.location = 'http://localhost/cms/blog';
				} else if(window.location.href == 'http://localhost/cms/karijera') {
					window.location = 'http://localhost/cms/karijera';
				}
			}, 100);
		}
	});
	
	// Zatvori pritiskom na 'Escape' dugme
	$(document).keyup(function(event){
  	if(event.which == '27'){
  		$('.cd-popup-izmijeni').removeClass('is-visible-izmijeni');
  		setTimeout( function() {
			if(window.location.href == 'http://localhost/cms/proizvodi') {
					window.location = 'http://localhost/cms/proizvodi';
				} else if(window.location.href == 'http://localhost/cms/blog') {
					window.location = 'http://localhost/cms/blog';
				} else if(window.location.href == 'http://localhost/cms/karijera') {
					window.location = 'http://localhost/cms/karijera';
				}
			}, 100);
    }
  });
});

// POPUP POTVRDA
jQuery(document).ready(function($){
	// Otvori popup
	$('.cd-popup-potvrda-trigger').on('click', function(event){
		event.preventDefault();
		$('.cd-popup-potvrda').addClass('is-visible-potvrda');
	});
	
	// Zatvori popup
	$('.cd-popup-potvrda').on('click', function(event){
		if( $(event.target).is('.cd-popup-potvrda-close') || $(event.target).is('.cd-popup-potvrda') ) {
			event.preventDefault();
			$(this).removeClass('is-visible-potvrda');
			setTimeout( function() {
				if(window.location.href == 'http://localhost/cms/proizvodi') {
					window.location = 'http://localhost/cms/proizvodi';
				} else if(window.location.href == 'http://localhost/cms/blog') {
					window.location = 'http://localhost/cms/blog';
				} else if(window.location.href == 'http://localhost/cms/karijera') {
					window.location = 'http://localhost/cms/karijera';
				}
			}, 100);
		}
	});

	// Zatvori sve popupe - opcija 'Da'
	$('.odustani_da').on('click', function(event){
		if($(event.target).is('.odustani_da')) {
			event.preventDefault();
			$('.cd-popup-izmijeni').removeClass('is-visible-izmijeni');
			$('.cd-popup-dodaj').removeClass('is-visible-dodaj');
			$('.cd-popup-potvrda').removeClass('is-visible-potvrda');
			setTimeout( function() {
				if(window.location.href == 'http://localhost/cms/proizvodi') {
					window.location = 'http://localhost/cms/proizvodi';
				} else if(window.location.href == 'http://localhost/cms/blog') {
					window.location = 'http://localhost/cms/blog';
				} else if(window.location.href == 'http://localhost/cms/karijera') {
					window.location = 'http://localhost/cms/karijera';
				}
			}, 100);
		}
	});
	
	// Zatvori samo popup potvrde - opcija 'Ne'
	$('.odustani_ne').on('click', function(event){
		if($(event.target).is('.odustani_ne')) {
			event.preventDefault();
			$('.cd-popup-potvrda').removeClass('is-visible-potvrda');
		}
	});

	// Zatvori popup pritiskom na 'Escape' dugme
	$(document).keyup(function(event){
  	if(event.which=='27'){
  		$('.cd-popup-potvrda').removeClass('is-visible-potvrda');
  		setTimeout( function() {
				if(window.location.href == 'http://localhost/cms/proizvodi') {
					window.location = 'http://localhost/cms/proizvodi';
				} else if(window.location.href == 'http://localhost/cms/blog') {
					window.location = 'http://localhost/cms/blog';
				} else if(window.location.href == 'http://localhost/cms/karijera') {
					window.location = 'http://localhost/cms/karijera';
				}
			}, 100);
    }
  });
});

// POPUP IZMIJENI USPJEH
jQuery(document).ready(function($){
	// Otvori popup
	$('.cd-popup-uspjeh-trigger').on('click', function(event){
		event.preventDefault();
		$('.cd-popup-uspjeh').addClass('is-visible-uspjeh');
	});
	
	// Zatvori popup
	$('.cd-popup-uspjeh').on('click', function(event){
		if( $(event.target).is('.cd-popup-uspjeh-close') || $(event.target).is('.cd-popup-uspjeh') ) {
			event.preventDefault();
			$(this).removeClass('is-visible-uspjeh');
		}
	});

	// Zatvori popup pritiskom na 'Escape' dugme
	$(document).keyup(function(event){
  	if(event.which == '27'){
  	$('.cd-popup-uspjeh').removeClass('is-visible-uspjeh');
    }
  });
});

// POPUP DODAJ USPJEH
jQuery(document).ready(function($){
	// Otvori popup
	$('.cd-popup-dodaj-uspjeh-trigger').on('click', function(event){
		event.preventDefault();
		$('.cd-popup-dodaj-uspjeh').addClass('is-visible-dodaj-uspjeh');
	});
	
	// Zatvori popup
	$('.cd-popup-dodaj-uspjeh').on('click', function(event){
		if( $(event.target).is('.cd-popup-dodaj-uspjeh-close') || $(event.target).is('.cd-popup-dodaj-uspjeh') ) {
			event.preventDefault();
			$(this).removeClass('is-visible-dodaj-uspjeh');
		}
	});

	// Zatvori popup pritiskom na 'Escape' dugme
	$(document).keyup(function(event){
  	if(event.which == '27'){
  		$('.cd-popup-dodaj-uspjeh').removeClass('is-visible-dodaj-uspjeh');
    }
  });
});

// PROMJENA LOZINKE
jQuery(document).ready(function($){
	// Otvori popup
	$('.cd-popup-lozinka-trigger').on('click', function(event){
		event.preventDefault();
		$('.cd-popup-lozinka').addClass('is-visible-lozinka');
	});
	
	// Zatvori popup
	$('.cd-popup-lozinka').on('click', function(event){
		if( $(event.target).is('.cd-popup-lozinka-close') || $(event.target).is('.cd-popup-lozinka') ) {
			event.preventDefault();
			$(this).removeClass('is-visible-lozinka');
		}
	});

	// Zatvori popup pritiskom na 'Escape' dugme
	$(document).keyup(function(event){
  	if(event.which == '27'){
  		$('.cd-popup-lozinka').removeClass('is-visible-lozinka');
    }
  });
});