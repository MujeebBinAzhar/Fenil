// JavaScript to enable hover on non-touch devices
const dropdowns = document.querySelectorAll('.navbar .dropdown');

dropdowns.forEach(dropdown => {
    dropdown.addEventListener('mouseover', function() {
        if (!('ontouchstart' in document.documentElement)) {
            this.classList.add('show');
            this.querySelector('.dropdown-menu').classList.add('show');
        }
    });

    dropdown.addEventListener('mouseleave', function() {
        if (!('ontouchstart' in document.documentElement)) {
            this.classList.remove('show');
            this.querySelector('.dropdown-menu').classList.remove('show');
        }
    });
});
