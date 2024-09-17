let menu = document.getElementById("acc");
let cont = document.getElementsByClassName("menu")[0];
let turn = true;
menu.onclick = function() {
    if(turn){cont.style.display="inline";turn=!turn;}
    else {cont.style.display="none";turn=!turn;}
};

  //JS For Change Password
function togglePasswordVisibility(inputFieldId, toggleButtonId) {
  const inputField = document.getElementById(inputFieldId);
  const toggleButton = document.getElementById(toggleButtonId);
  let isVisible = false;
  toggleButton.addEventListener('click', function() {
      isVisible = !isVisible;
      inputField.type = isVisible ? 'text' : 'password';
      toggleButton.innerHTML = isVisible ? '<i class="fa fa-eye-slash"></i>' : '<i class="fa fa-eye"></i>';
  });
}
togglePasswordVisibility('currentPassword', 'toggleCurrentPassword');
togglePasswordVisibility('newPassword', 'toggleNewPassword');
togglePasswordVisibility('confirmNewPassword', 'toggleConfirmNewPassword');
  
  const passwordField = document.getElementById('newPassword');
  const confirmPasswordField = document.getElementById('confirmNewPassword');
  const strengthBar = document.getElementById('passwordStrengthBar');
  const strengthText = document.getElementById('passwordStrengthText');
  const errorText = document.getElementById('passwordMatchError'); // New element for error messages

  function passwordValidation(password,strength=0){
    if (password.length >= 8) strength += 20;
    if (/[A-Z]/.test(password)) strength += 20;
    if (/[0-9]/.test(password)) strength += 20;
    if (/[@$!%*?&]/.test(password)) strength += 20;
    if (password.length >= 12) strength += 20;
    return strength;
  }
  function validatePasswordMatch() {
    const newPassword = passwordField.value;
    const confirmPassword = confirmPasswordField.value;
    
    if (newPassword !== confirmPassword) {
        errorText.style.display = 'block';
        errorText.innerText = 'Passwords do not match!';
        return false;
    } else {
        errorText.style.display = 'none';
        return true;
    }
}
  passwordField.addEventListener('input', function() {
    let strength = passwordValidation(passwordField.value);
    strengthBar.style.width = strength + '%';
    strengthBar.setAttribute('aria-valuenow', strength);
  
    if (strength < 40) {
      strengthText.innerText = 'Weak';
      strengthBar.classList.remove('bg-success', 'bg-warning');
      strengthBar.classList.add('bg-danger');
    } else if (strength < 80) {
      strengthText.innerText = 'Medium';
      strengthBar.classList.remove('bg-danger', 'bg-success');
      strengthBar.classList.add('bg-warning');
    } else {
      strengthText.innerText = 'Strong';
      strengthBar.classList.remove('bg-danger', 'bg-warning');
      strengthBar.classList.add('bg-success');
    }
    validatePasswordMatch(); // Check password match when new password is updated
  });
  confirmPasswordField.addEventListener('input', validatePasswordMatch);

  function preventPasswordSubmit(event){
    if(!validatePasswordMatch() || strengthText.innerText!=='Strong'){
      event.preventDefault();
    }
  }
  document.getElementById('changePasswordForm').addEventListener('submit',preventPasswordSubmit);

  window.onload = function(){
    const submissionStatus = document.getElementById('submissionStatus').value;
    if (submissionStatus === 'success' || submissionStatus === 'fail') {
      document.querySelector('.bPassword').click();
    }
  }
  //JS For Change Information
  const Informationform = document.getElementById('changeInfoForm');
  const Infoinputs = Informationform.querySelectorAll('input');
  const changesMessage = document.getElementById('changesMessage');
  const initialValues = {};
  Infoinputs.forEach(input => {
    initialValues[input.id] = input.value;
  });
  function checkChanges(){
    Infoinputs.forEach(input =>{
      if(input.value !== Infoinputs[input.id])return true;
    });
    return false;
  }
  Infoinputs.forEach(input =>{
    Infoinputs.addEventListener('input',function(){
      if(checkChanges()){
        changesMessage.style.display = 'block';
      }else {changesMessage.style.display = 'none';}
    });
  });
  // function preventInfoSubmit(event){
  //   if(!checkChanges()){
  //     event.preventDefault();
  //   }
  // }