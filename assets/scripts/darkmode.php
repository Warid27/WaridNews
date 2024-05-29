<script>
// Dark Mode Toggle Button
const toggleDark = document.getElementById('toggleDark');

// Function to enable dark mode
function enableDarkMode() {
    document.body.classList.add('darkMode');
    localStorage.setItem('darkMode', 'enabled');
    <?php $_SESSION['darkMode'] = true; ?> // Update dark mode state in PHP
    toggleDark.classList.remove('fa-sun');
    toggleDark.classList.add('fa-moon');
}

// Function to disable dark mode
function disableDarkMode() {
    document.body.classList.remove('darkMode');
    localStorage.setItem('darkMode', 'disabled');
    <?php $_SESSION['darkMode'] = false; ?> // Update dark mode state in PHP
    toggleDark.classList.remove('fa-moon');
    toggleDark.classList.add('fa-sun');
}

// Function to toggle dark mode
function toggleDarkMode() {
    const isDarkModeEnabled = document.body.classList.contains('darkMode');
    if (isDarkModeEnabled) {
        disableDarkMode();
    } else {
        enableDarkMode();
    }
}

// Add event listener to toggle dark mode on button click
toggleDark.addEventListener('click', toggleDarkMode);

// Apply dark mode state on page load
window.addEventListener('DOMContentLoaded', () => {
    const darkModePreference = localStorage.getItem('darkMode');
    if (darkModePreference === 'enabled') {
        enableDarkMode();
    } else {
        disableDarkMode();
    }
});

</script>