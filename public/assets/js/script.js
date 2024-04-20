document.addEventListener("DOMContentLoaded", function(event) {
    const showNavbar = (toggleId, navId, bodyId, headerId) => {
      const toggle = document.getElementById(toggleId),
        nav = document.getElementById(navId),
        bodypd = document.getElementById(bodyId),
        headerpd = document.getElementById(headerId);
  
      if (toggle && nav && bodypd && headerpd) {
        toggle.addEventListener('click', () => {
          nav.classList.toggle('show');
          toggle.classList.toggle('bx-x');
          bodypd.classList.toggle('body-pd');
          headerpd.classList.toggle('body-pd');
        });
      }
    }
  
    showNavbar('header-toggle', 'nav-bar', 'body-pd', 'header');
  
    const linkColor = document.querySelectorAll('.nav_link');
  
    function colorLink(e) {
      if (linkColor) {
        e.preventDefault();  // Empêche le comportement par défaut du lien
  
        linkColor.forEach(l => l.classList.remove('active'));
        this.classList.add('active');
  
        // Stocker l'élément actif dans sessionStorage
        const activeLink = this.getAttribute('href');
        sessionStorage.setItem('activeLink', activeLink);
      }
    }
  
    linkColor.forEach(l => l.addEventListener('click', colorLink));
  
    // Récupérer l'élément actif depuis sessionStorage au chargement de la page
    const storedActiveLink = sessionStorage.getItem('activeLink');
    if (storedActiveLink) {
      linkColor.forEach(l => {
        if (l.getAttribute('href') === storedActiveLink) {
          l.classList.add('active');
        } else {
          l.classList.remove('active');
        }
      });
    }
  });