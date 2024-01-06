import { myMap } from './components/map.js';
import { sendEmail } from './components/email.js';
import { setLanguageCookie } from './components/language.js';
import { hamburger } from './components/hamburger.js';

document.addEventListener('DOMContentLoaded', () => {
    //myMap();
    setLanguageCookie();
    hamburger();
});

const emailButton = document.getElementById('sendEmailButton');
if (emailButton) {
    emailButton.addEventListener('click', sendEmail);
}
