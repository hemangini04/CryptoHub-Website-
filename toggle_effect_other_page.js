// check for saved 'darkMode' in localStorage
let dark_theme = localStorage.getItem('dark_theme'); 

const darkModeToggle = document.querySelector('#icon');



const enableDarkMode = () => {
  // 1. Add the class to the body
  document.body.classList.add('dark_theme');
  
  // 2. Update darkMode in localStorage
  localStorage.setItem('dark_theme', 'enabled');
}

const disableDarkMode = () => {
  // 1. Remove the class from the body
  document.body.classList.remove('dark_theme');
  // 2. Update darkMode in localStorage 
  localStorage.setItem('dark_theme', null);
}
 
// If the user already visited and enabled darkMode
// start things off with it on
if (dark_theme === 'enabled') {
  enableDarkMode();
  
}

// When someone clicks the button
darkModeToggle.addEventListener('click', () => {
  // get their darkMode setting
  dark_theme= localStorage.getItem('dark_theme'); 
  
  // if it not current enabled, enable it
  if (dark_theme !== 'enabled') {
    enableDarkMode();
  // if it has been enabled, turn it off  
  } else {  
    disableDarkMode(); 
  }
});


const sidebarIcon = document.querySelector('.sidebar #icon');

sidebarIcon.addEventListener('click', () => {
  // get their darkMode setting
  dark_theme = localStorage.getItem('dark_theme');

  // if it not currently enabled, enable it
  if (dark_theme !== 'enabled') {
    enableDarkMode();
  // if it has been enabled, turn it off  
  } else {  
    disableDarkMode(); 
  }
});
