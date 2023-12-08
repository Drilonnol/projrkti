
document.getElementById('loginn').addEventListener('click', function () {

    var loginFormContainer = document.getElementById('loginFormContainer');
    loginFormContainer.classList.add('active');

    var coverImage = document.getElementById('coverImage');
    coverImage.style.display = 'none'; 

    var registerContainer = document.getElementById('registerContainer');
    registerContainer.classList.remove('active');

    var coverImage = document.getElementById('coverImage');
   coverImage.style.display = 'none';
    document.body.style.overflow ='';

    var video=document.getElementById('video');
    video.style.display ='block';

    if(video.style.display === 'block'){
        document.body.style.overflow ='hidden';
    }
});
document.getElementById('cancelBtn').addEventListener('click', function () {
    var loginFormContainer = document.getElementById('loginFormContainer');
    loginFormContainer.classList.remove('active');

    var video=document.getElementById('video');
    video.style.display ='none';
    document.body.style.overflow='';

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

    var loginFormContainer = document.getElementById('loginFormContainer');
    loginFormContainer.classList.remove('active');

    var coverImage = document.getElementById('coverImage');
    coverImage.style.display = 'block';

    if(coverImage.style.display === 'block'){
        document.body.style.overflow ='hidden';
    }

    var video=document.getElementById('video');
    video.style.display ='none';
    document.style.overflow='';
});
document.getElementById('cancelBtnSingin').addEventListener('click',function(){
var registerContainer = document.getElementById('registerContainer');
registerContainer.classList.remove('active');

var coverImage = document.getElementById('coverImage');
coverImage.style.display = 'none';

document.body.style.overflow ='';
});

let slideIndex = 0;

function showSlides() {
    let slides = document.getElementsByClassName("mySlides");
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {
        slideIndex = 1;
    }
    slides[slideIndex - 1].style.display = "block";
    setTimeout(showSlides, 6000); // Change slide every 2 seconds
}

document.addEventListener("DOMContentLoaded", function () {
    showSlides();
});