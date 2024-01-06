export function setLanguageCookie(){
    let languageSelect = document.querySelector('.header-language select');
    
    // Retrieve the language from the cookie
    let selectedLanguage = getCookie('language');
    
    // Set the selected option based on the retrieved language
    if (selectedLanguage) {
        languageSelect.value = selectedLanguage;
    }
    
    languageSelect.addEventListener('change', function(){
        let selectedLanguage = this.value;
        
        // Set the selected language in a cookie
        document.cookie = `language=${selectedLanguage}; path=/; expires=Fri, 31 Dec 9999 23:59:59 GMT`;

        // Reload the page to apply the language change
        window.location.reload();
    });
}

// Function to get the value of a cookie by name
function getCookie(name) {
    const cookies = document.cookie.split(';');
    for (const cookie of cookies) {
        const [cookieName, cookieValue] = cookie.trim().split('=');
        if (cookieName === name) {
            return cookieValue;
        }
    }
    return null;
}
