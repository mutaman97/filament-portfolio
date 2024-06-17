// Site theme Color mode
if (localStorage.theme === 'dark' ) {
    document.documentElement.classList.add('dark')
} else {
    document.documentElement.classList.remove('dark');
}
function setDarkTheme() {
    document.documentElement.classList.add("dark");
    localStorage.theme = 'dark'
    $('#light_theme').removeClass('active');
    $('#dark_theme').addClass('active');
};
function setLightTheme() {
    document.documentElement.classList.remove("dark");
    localStorage.theme = 'light'
    $('#dark_theme').removeClass('active');
    $('#light_theme').addClass('active');
};
function onThemeSwitcherItemClick(e) {
    var theme = this.dataset.theme;
    if (theme == "dark") {
        setDarkTheme();        
    } else {
        setLightTheme();
    }
};

const themeSwitcherItems = document.querySelectorAll(".switcher-input");
themeSwitcherItems.forEach((item) => {
    item.addEventListener("click", onThemeSwitcherItemClick);
});

if ( localStorage.theme === 'dark' ) {
    $('#dark_theme').addClass('active');
} else  {
    $('#light_theme').addClass('active');
}