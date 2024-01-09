

// var login = document.getElementById('loginn');
// login.addEventListener('click ',function(){ balabalabal });


document.getElementById('loginn').addEventListener('click', function () {

    var loginFormContainer = document.getElementById('loginFormContainer');
    loginFormContainer.classList.add('active');

    var coverImage = document.getElementById('coverImage');
    coverImage.style.display = 'none'; 

    var coverImag = document.getElementById('coverImag');
    coverImag.style.display = 'block'; 


    var registerContainer = document.getElementById('registerContainer');
    registerContainer.classList.remove('active');

    var coverImage = document.getElementById('coverImage');
   coverImage.style.display = 'none';
    document.body.style.overflow ='';

    if(coverImag.style.display === 'block'){
        document.body.style.overflow ='hidden';
    }

    
    var registerContainer = document.getElementById('registerContainer');
    registerContainer.classList.remove('active');

});
document.getElementById('cancelBtn').addEventListener('click', function () {
    var loginFormContainer = document.getElementById('loginFormContainer');
    loginFormContainer.classList.remove('active');


    var coverImage = document.getElementById('coverImag');
    coverImage.style.display = 'none'; 
    document.body.style.overflow = '';



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

    var loginFormContainer = document.getElementById('loginFormContainer');
    loginFormContainer.classList.remove('active');

    var coverImag = document.getElementById('coverImag');
    coverImag.style.display = 'none'; 
    document.body.style.overflow = '';

    var coverImage = document.getElementById('coverImage');
    coverImage.style.display = 'block';

    if(coverImage.style.display === 'block'){
        document.body.style.overflow ='hidden';
    }


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





// tre butonat flight hotel end car 
var button1 = document.getElementById('button1');
var button2 = document.getElementById('button2');
var button3 = document.getElementById('button3');
var popup1 = document.getElementById('popup1');
var popup2 = document.getElementById('popup2');
var popup3 = document.getElementById('popup3');


button1.addEventListener('click', function() {
    shfaqPopup(popup1);
});

button2.addEventListener('click', function() {
    shfaqPopup(popup2);
});

button3.addEventListener('click', function() {
    shfaqPopup(popup3);
});


function shfaqPopup(popupToShow) {
    var popups = document.querySelectorAll('.divi');
    for (var i = 0; i < popups.length; i++) {
        popups[i].style.display = 'none';
    }
    popupToShow.style.display = 'block';
    var hap = document.getElementById('hapsir');

    if (popupToShow === document.getElementById('popup1')) {
        hap.style.display = 'none';
    } else {
        hap.style.display = 'block';
    }
}