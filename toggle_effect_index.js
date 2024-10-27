// check for saved 'darkMode' in localStorage
let dark_theme = localStorage.getItem('dark_theme'); 
let imageSource = localStorage.getItem('imageSource');

const darkModeToggle = document.querySelector('#icon');
const img=document.querySelector("img");


const enableDarkMode = () => {
  // 1. Add the class to the body
  document.body.classList.add('dark_theme');
  img.src = imageSource;
  // 2. Update darkMode in localStorage
  localStorage.setItem('dark_theme', 'enabled');
}

const disableDarkMode = () => {
  // 1. Remove the class from the body
  document.body.classList.remove('dark_theme');
  // 2. Update darkMode in localStorage 
  img.src = "https://media.licdn.com/dms/image/D4D12AQEkBAY2ONkR4A/article-cover_image-shrink_720_1280/0/1686379752495?e=2147483647&v=beta&t=BIcFX4n1toskTGh0AI1lbdNW1nN80hUwkyynMD7fWfA";

  localStorage.setItem('dark_theme', null);
}

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


const setDarkModeImageSource = (source) => {
    imageSource = source;
    localStorage.setItem('imageSource', source);
  }
  
  // Call setDarkModeImageSource function with the specified image source
setDarkModeImageSource("image/dark_mode.png");


