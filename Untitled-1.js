
<div class="singin">
    <form action="ing"> 
    
        <h2>Singin Form</h2>
        <label><p>EMRI DHE MBIEMRI</p></label>
        <input type="text" class="email" id="emrimbi">
        <label><p>EMAIL</p></label>
        <input type="text" class="email" id="emailr">
      <label><p>PASSWORD</p></label> 
    
      <input type="password" class="pass" id="passr">
      <label ><p>CONFIRM PASSWORD</p></label>
      <input type="password" class="pass" id="passr2">
      
   <div>
    <button type="button" id="singin">SINGIN</button>
</div>

    <button type="button" id="cancelBtn">CANCEL</button>
     
    </form>
   </div>document.getElementById('loginn').addEventListener('click', function () {
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