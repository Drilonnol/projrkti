
  document.getElementById('loginn').addEventListener('click', function () {
    var loginFormContainer = document.getElementById('loginFormContainer');
    loginFormContainer.classList.add('active');
    document.body.classList.add('blur');
});

document.getElementById('cancelBtn').addEventListener('click', function () {
    var loginFormContainer = document.getElementById('loginFormContainer');
    loginFormContainer.classList.remove('active');
    document.body.classList.remove('blur');
});

document.addEventListener("DOMContentLoaded", function () {
    const BtnSubmit = document.querySelector('.loginnow button');

    /*Funksioni per te e validuar fushat e formes */
    const validate = (event) => {
        event.preventDefault();

        const PASSWORD = document.getElementById('pass');
        const EMAIL = document.getElementById('email');

        if (PASSWORD.value.length === 0) {
            alert("Ju lutem shtoni Fjalkalimin.");
            PASSWORD.focus();
            return false;
        }
        if (EMAIL.value.length === 0) {
            alert("Ju lutem shtoni email'in.");
            EMAIL.focus();
            return false;
        }
        if (!emailValid(EMAIL.value)) {
            alert("Ju lutem te shtoni email'in valid.");
            EMAIL.focus();
            return false;
        }
        return true;
    };

    const emailValid = (email) => {
        const emailRegex = /^([A-Za-z0-9_\-.])+@([A-Za-z0-9_\-.])+\.([A-Za-z]{2,4})$/;
        return emailRegex.test(email.toLowerCase());
    };

    BtnSubmit.addEventListener('click', validate);
});









let slideIndex = 0;

function showSlides() {
  let slides = document.querySelectorAll('.slideshow-container .slide');
  
  for (let i = 0; i < slides.length; i++) {
    slides[i].style.display = 'none';  
  }
  
  slideIndex++;
  
  if (slideIndex > slides.length) {
    slideIndex = 1;
  }  
  
  slides[slideIndex - 1].style.display = 'block';  
  setTimeout(showSlides, 2000); // Ndrysho slide çdo 2 sekonda
}

// Thirr showSlides që të fillojë animacioni kur ngarkohet faqja
showSlides();

