const email = document.getElementById("email")
const password = document.getElementById("password")
const loginForm= document.getElementById("login")

const registerForm = document.getElementById("register")
const firstName = document.getElementById("fname")
const lastName = document.getElementById("lname")
const gender = document.getElementById("gender")
const newEmail = document.getElementById("newemail")//Same use of 'new' as below
const newPassword = document.getElementById("newpassword") //New is used to prevent confusion with the login form's passowrd id
const confPassword = document.getElementById("confpassword")

loginForm.addEventListener('submit', (e) =>{

    e.preventDefault()
    validateInputs()
});

registerForm.addEventListener('submit', (e)=>{
    e.preventDefault()
    validateInputs()
})

const setError = (element, message) => {
    const inputDiv= element.parentElement;
    const errorDisplay = inputDiv.querySelector('.error')

    errorDisplay.innerText = message;
    inputDiv.classList.add('error')
    inputDiv.classlist.remove('success')
}

const setSuccess = (element) => {
    const inputDiv= element.parentElement;
    const errorDisplay = inputDiv.querySelector('.error')

    errorDisplay.innerText = '';
    inputDiv.classList.add('success')
    inputDiv.classlist.remove('error')
}

const validEmail = (email) => { 
    const expressions = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    return expressions.test(String(email).toLowerCase())
}

const validateInputs = () => {
    const emailValue = email.value.trim();
    const passwordValue = password.value.trim();

    const firstNameValue = firstName.value.trim();
    const lastNameValue = lastName.value.trim()
    const genderValue = gender.value.trim()
    const newEmailValue = email.value.trim()
    const newPasswordValue = newPassword.value.trim()
    const confPasswordValue = confPassword.value.trim()



    //Login form validation
    if(emailValue === ''){
        setError(email, "Please enter your email.")
    }
    else if(!validEmail(emailValue)){
        setError(email, "Use a valid email address")
    }
    else{
        setSuccess(email)
    }

    if(passwordValue === ''){
        setError(password,"Please enter your password.")
    }
    else if(passwordValue.length < 8){
        setError(password,"Password must be at least 8 characters.")
    }
    else{
        setSuccess(password)
    }
    
    //Regsiter form validation
    if(firstNameValue === ''){
        setError(firstName, "Please enter your frst name.")
    }
    else{
        setSuccess(firstName)
    }

    if(lastNameValue === ''){
        setError(lastName, "Please enter your last name.")
    }
    else{
        setSuccess(lastName)
    }

    if(genderValue === ''){
        setError(gender,"Please select your gender.")
    }
    else{
        setSuccess(gender)
    }

    if(newEmailValue === ''){
        setError(newEmail, "Please enter your email.")
    }
    else if(!validEmail(newEmailValue)){
        setError(newEmail, "Use a valid email address")
    }
    else{
        setSuccess(newEmail)
    }

    if(newPasswordValue === ''){
        setError(newPassword,"Please enter your password.")
    }
    else if(newPasswordValue.length < 8){
        setError(newPassword,"Password must be at least 8 characters.")
    }
    else if(newPasswordValue === newEmailValue || newPasswordValue === firstName + lastName || newPasswordValue === firstName || newPasswordValue === lastName){
        setError(newPassword, "Password is obvious and easily guessable.")
    }
    else{
        setSuccess(password)
    }

    if(confPasswordValue === ''){
        setError(confPassword, "Please confirm your passowrd.")
    }
    else if(confPasswordValue !== newPasswordValue){
        setError(confPassword, "The passwords do not match.")
    }
    else{
        setSuccess(confPassword)
    }

}