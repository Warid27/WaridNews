document.addEventListener('DOMContentLoaded', function() {
    // Dropdown
    const userProfile = document.querySelector('.imgBx');
    const dropdownProfile = document.querySelector('.dropdownProfile');

    userProfile.addEventListener('click', function() {
        dropdownProfile.classList.toggle('active');
    });

    document.addEventListener('click', function(event) {
        if (!event.target.closest('.userProfile')) {
            dropdownProfile.classList.remove('active');
        }
    });

    // Hide Navbar
    const navbar = document.querySelector('header');
    let lastScrollPos = 0;

    window.addEventListener('scroll', () => {
        const scrollTop = window.pageYOffset;
        if (scrollTop > lastScrollPos) {
            navbar.style.transition = 'all .5s ease';
            navbar.style.transform = "translateY(-100%)";
            dropdownProfile.classList.remove('active');
        } else {
            navbar.style.transition = 'all .5s ease';
            navbar.style.transform = "translateY(0)";
        }
        lastScrollPos = scrollTop;
    });

    // Role-based element visibility
    const userInElements = document.querySelectorAll('.userIn');
    const notSignElements = document.querySelectorAll('.notSign');
    const superadminElements = document.querySelectorAll('.superadmin');

    function hideElements(elements) {
        elements.forEach(element => {
            element.style.display = 'none';
        });
    }

    if (role === 'notSign') {
        hideElements(userInElements);
    } else if (role === 'admin' || role === 'operator') {
        hideElements(notSignElements);
    } else if (role === 'superadmin'){
        hideElements(superadminElements);
    }


    // Apply CKEditor to the textarea with id "deskripsi"
    if (document.getElementById('deskripsi')) {
        CKEDITOR.replace('deskripsi');
    }
    CKEDITOR.config.autoGrow_onStartup = false,
    CKEDITOR.config.resize_enabled = false,
    CKEDITOR.config.height = '50vh';
    // Checkbox Pilihan
    const fotoLamaCheck = document.getElementById('fotoLamaCheck');
    const fotoGantiCheck = document.getElementById('fotoGantiCheck');
    const fotoDefaultCheck = document.getElementById('fotoDefaultCheck');

    // Add an event listener for the 'click' event
    fotoLamaCheck.addEventListener('click', function() {
        // Execute this code when fotoLamaCheck is clicked
        document.querySelectorAll("#fotoLama").forEach(function(element) {
            element.classList.remove("hidden");
        });
        document.querySelectorAll("#fotoGanti").forEach(function(element) {
            element.classList.add("hidden");
        });
        document.querySelectorAll("#fotoDefault").forEach(function(element) {
            element.classList.add("hidden");
        });
    });
    fotoGantiCheck.addEventListener('click', function() {
        // Execute this code when fotoLamaCheck is clicked
        document.querySelectorAll("#fotoLama").forEach(function(element) {
            element.classList.add("hidden");
        });
        document.querySelectorAll("#fotoGanti").forEach(function(element) {
            element.classList.remove("hidden");
        });
        document.querySelectorAll("#fotoDefault").forEach(function(element) {
            element.classList.add("hidden");
        });
    });
    fotoDefaultCheck.addEventListener('click', function() {
        // Execute this code when fotoLamaCheck is clicked
        document.querySelectorAll("#fotoLama").forEach(function(element) {
            element.classList.add("hidden");
        });
        document.querySelectorAll("#fotoGanti").forEach(function(element) {
            element.classList.add("hidden");
        });
        document.querySelectorAll("#fotoDefault").forEach(function(element) {
            element.classList.remove("hidden");
        });
    });

});
