
document.getElementById('loginn').addEventListener('click', function () {
    var loginFormContainer = document.getElementById('loginFormContainer');
    loginFormContainer.classList.add('active');
   
});

document.getElementById('cancelBtn').addEventListener('click', function () {
    var loginFormContainer = document.getElementById('loginFormContainer');
    loginFormContainer.classList.remove('active');

});



document.addEventListener("DOMContentLoaded", function () {
    const loginBtnSubmit = document.querySelector('.loginnow button');

    const loginValidate = (event) => {
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

    loginBtnSubmit.addEventListener('click', loginValidate);
});

document.addEventListener("DOMContentLoaded", function () {
    const singinBtnSubmit = document.querySelector('.singin button');

    
    const singinValidate = (event) => {
        event.preventDefault();
        const emrimbiemri = document.getElementById('emrimbi');
        const PASSWORD = document.getElementById('passr');
        const EMAIL = document.getElementById('emailr');
        const confirmpas = document.getElementById('passr2');

        if (PASSWORD.value.length === 0) {
            alert("Ju lutem shtoni Fjalkalimin.");
            PASSWORD.focus();
            return false;
        }
        if (confirmpas.value !== PASSWORD.value) {
            alert("Ju lutem ta shkruani mire passwordin");
            confirmpas.focus();
            return false;
        }

        if (emrimbiemri.value.length === 0) {
            alert("Shkruani emrin dhe mbiemrin");
            emrimbiemri.focus();
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
    singinBtnSubmit.addEventListener('click', singinValidate);
});

document.getElementById('Singinn').addEventListener('click', function () {
    var registerContainer = document.getElementById('registerContainer');
    registerContainer.classList.add('active');

});
document.getElementById('cancelBtnSingin').addEventListener('click',function(){
var registerContainer = document.getElementById('registerContainer');
registerContainer.classList.remove('active');
});

function showPopup(popupId) {
    document.getElementById(popupId).style.display = 'block';
}

function closePopup(popupId) {
    document.getElementById(popupId).style.display = 'none';
}

document.getElementById('button1').addEventListener('click', function () {
    showPopup('popup1');
    closePopup('popup2');
    closePopup('popup3');
});

document.getElementById('button2').addEventListener('click', function () {
    showPopup('popup2');
    closePopup('popup1');
    closePopup('popup3');
});

document.getElementById('button3').addEventListener('click', function () {
    showPopup('popup3');
    closePopup('popup1');
    closePopup('popup2');
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

