var usernameError= document.getElementById('username-error');
var emailError= document.getElementById('email-error');
var passwordError= document.getElementById('password-error');
var confirmationError= document.getElementById('confirm-error');
var signupError= document.getElementById('signup-error');

function validateName(){
    var name= document.getElementById('name').value;

    if(name.length == 0){
        usernameError.innerHTML = "Name is required!";
        return false;
    }
    usernameError.innerHTML = '<i class= "fas fa-check-circle"></i>';
    return true;
}
function validateEmail(){

    emailError.innerHTML = '<i class= "fas fa-check-circle"></i>';
    return true;

}
function validatePassword(){
    var password= document.getElementById('password').value;

    if(password.length == 0){
        passwordError.innerHTML= "Password is required!";
        return false;
    }
    if(password.length != 8){
        passwordError.innerHTML= "Password of 8 characters!";
        return false;
    }
    passwordError.innerHTML = '<i class= "fas fa-check-circle"></i>';
    return true;
}
function confirmPassword(){
    var password= document.getElementById('password').value;
    var confirm= document.getElementById('password-confirm').value;

    if(confirm.length == 0){
        confirmationError.innerHTML= "Confirmation required!";
        return false;
    }

    if (password != confirm){
        confirmationError.innerHTML= "Passwords unmatched!";
        return false
    }
    confirmationError.innerHTML = '<i class= "fas fa-check-circle"></i>';
    return true;  
}
function validateSignup(){
    if ( !validateName() || !validateEmail() || !validatePassword() || !confirmPassword()){
        signupError.style.display= 'block';
        signupError.innerHTML= "Fix errors to submit!";
        setTimeout(function(){signupError.style.display= 'none';}, 3000)
        return false;
    }
}