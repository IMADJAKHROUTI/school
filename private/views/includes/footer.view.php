</div>

<script>
// Sélectionner les éléments du DOM
const mobileMenuButton = document.getElementById('mobile-menu-button');
const mobileMenu = document.getElementById('mobile-menu');
const userMenuButton = document.getElementById('open-menu-button');
const userMenu = document.getElementById('user-menu');

// Ajouter un événement de clic au bouton du menu mobile
mobileMenuButton.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
});

// Ajouter un événement de clic au bouton du menu utilisateur
userMenuButton.addEventListener('click', () => {
    userMenu.classList.toggle('hidden');
});

// Fermer le menu mobile lorsqu'on clique en dehors de celui-ci
document.addEventListener('click', (event) => {
    const target = event.target;
    const isMobileMenu = target === mobileMenuButton || mobileMenuButton.contains(target);
    const isUserMenu = target === userMenuButton || userMenuButton.contains(target);

    if (!isMobileMenu && !isUserMenu) {
        mobileMenu.classList.add('hidden');
        userMenu.classList.add('hidden');
    }
});
</script>
</body>

</html>
<div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start"></div>