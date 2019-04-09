(function() {
  const aktiviraj_deaktiviraj = document.querySelectorAll('tr td:nth-of-type(7) a');
  for (let i = 0; i < aktiviraj_deaktiviraj.length; i++) {
    const status_elementa = aktiviraj_deaktiviraj[i].getAttribute('status-vrijednost');
    if(status_elementa.toLowerCase() == 'aktivan') {
      aktiviraj_deaktiviraj[i].classList.add('btn-success');
      aktiviraj_deaktiviraj[i].innerHTML = 'Deaktiviraj';
    } else {
      aktiviraj_deaktiviraj[i].classList.add('btn-warning');
      aktiviraj_deaktiviraj[i].innerHTML = 'Aktiviraj';
    }
    
    aktiviraj_deaktiviraj[i].addEventListener('mouseover', function(e) {
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
    });
    
    aktiviraj_deaktiviraj[i].addEventListener('mouseout', function(e) {
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
    });
  }
})();