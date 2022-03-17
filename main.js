const form = document.getElementById("form");
const fullName = document.getElementById('fullName');
const email = document.getElementById('email');
const phone = document.getElementById('phone');
const password = document.getElementById('password');
const passwordConfirm = document.getElementById('passwordConfirm');
let isValid = true;

const isValidEmail = email => {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

const isValidPhone = phone => {
    const re = /(\+212|0)([ \-_/]*)(\d[ \-_/]*){9}/g;
    return re.test(String(phone).toLowerCase());
}

form.addEventListener("submit", e => {
    e.preventDefault();
    validateInputs()
});

const validateInputs = () => {
    //former variable + Value = former variable + trim();
    const fullNameValue = fullName.value.trim();
    const emailValue = email.value.trim();
    const phoneValue = phone.value.trim();
    const passwordValue = password.value.trim();
    const passwordConfirmValue = passwordConfirm.value.trim();

    // checking the full name
    if (fullNameValue === ''){
        setError(fullName, 'please provide your full name');
    } else {
        setSuccess(fullName);
    }
    //checking the email
    if(emailValue === '') {
        setError(email, 'Email is required');
    } else if (!isValidEmail(emailValue)) {
        setError(email, 'Provide a valid email address');
    } else {
        setSuccess(email);
    }
    //checking the phone number
    if(phoneValue === '') {
        setError(phone, 'Phone number is required');
    } else if (!isValidPhone(phoneValue)) {
        setError(phone, 'Provide a valid phone number');
    } else {
        setSuccess(phone);
    }

    if(passwordValue === '') {
        setError(password, 'Password is required');
    } else if (passwordValue.length < 8 ) {
        setError(password, 'Password must be at least 8 character.')
    } else {
        setSuccess(password);
    }

    if(passwordConfirmValue === '') {
        setError(passwordConfirm, 'Please confirm your password');
    } else if (passwordConfirmValue !== passwordValue) {
        setError(passwordConfirm, "Passwords doesn't match");
    } else {
        setSuccess(passwordConfirm);
    }
    return true;
}

function setError(element, message){
    const inputControl = element.parentElement;//parent of the field that has an invalid value
    const errorDisplay = inputControl.querySelector(".error"); //the empty div which was made to show error messages
    errorDisplay.innerText = message;
    //we remove success class and add error class if the first present
    inputControl.classList.add('error');
    inputControl.classList.remove('success');
}

function setSuccess(element){
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector(".error");

    errorDisplay.innerText = '';
    inputControl.classList.add('success');
    inputControl.classList.remove('error');
}


const form = document.getElementById("llj")


form.addEventListener()