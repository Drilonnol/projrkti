document.getElementById('loginn').addEventListener('click', function() {
    var loginFormContainer = document.getElementById('loginFormContainer');
    loginFormContainer.classList.add('active');
    document.body.classList.add('blur');
});

document.getElementById('cancelBtn').addEventListener('click', function() {
    var loginFormContainer = document.getElementById('loginFormContainer');
    loginFormContainer.classList.remove('active');
    document.body.classList.remove('blur');
});
