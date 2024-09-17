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
// JavaScript for Change Information
const informationForm = document.getElementById('changeInfoForm');
const infoInputs = informationForm.querySelectorAll('input');
const changesMessage = document.getElementById('changesMessage');
const initialValues = {};
infoInputs.forEach(input => {
    initialValues[input.id] = input.value;
});
function checkChanges() {
    let hasChanges = false;
    infoInputs.forEach(input => {
        if (input.value !== initialValues[input.id]) {
            hasChanges = true;
        }
    });
    return hasChanges;
}
infoInputs.forEach(input => {
    input.addEventListener('input', function () {
        if (checkChanges()) {
          changesMessage.innerText = 'You have unsaved changes!';
            changesMessage.style.display = 'block';
        } else {
            changesMessage.style.display = 'none';
        }
    });
});
function preventInfoSubmit(event) {
    if (!checkChanges()) {
        event.preventDefault();
        changesMessage.style.display = 'block';
        changesMessage.innerText = 'No changes detected. Please make some changes before submitting.';
    }
}
informationForm.addEventListener('submit', preventInfoSubmit);

// JavaScript for Registration
function validatePhoneNumber() {
  const phoneInput = document.getElementById('register-phone');
  const validationMessage = document.getElementById('phone-validation-message');
  const phoneValue = phoneInput.value;


  const phoneRegex = /^\d{11}$/;

  if (!phoneRegex.test(phoneValue)) {
      validationMessage.textContent = 'Phone number must be exactly 11 digits and contain no letters.'; return false;
  } else {
      validationMessage.textContent = ''; return true;
  }
}
document.querySelector('#checks').addEventListener('onfoucs',function(){
  document.querySelector('#checks').style.display = 'block';
});
//js for course details
document.querySelector(".card").addEventListener("click",function(){
  let courseid=document.querySelector(".idcard").value;
  document.querySelector(".key").value=courseid;
  
});  