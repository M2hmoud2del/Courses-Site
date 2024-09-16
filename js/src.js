let menu = document.getElementById("acc");
let cont = document.getElementsByClassName("menu")[0];
let turn = true;
menu.onclick = function() {
    if(turn){cont.style.display="inline";turn=!turn;}
    else {cont.style.display="none";turn=!turn;}
};
console.log("JS file is loaded correctly!");


document.getElementById('toggleCurrentPassword').addEventListener('click', function() {
    let input = document.getElementById('currentPassword');
    input.type = input.type === 'password' ? 'text' : 'password';
  });
  document.getElementById('toggleNewPassword').addEventListener('click', function() {
    let input = document.getElementById('newPassword');
    input.type = input.type === 'password' ? 'text' : 'password';
  });
  document.getElementById('toggleConfirmNewPassword').addEventListener('click', function() {
    let input = document.getElementById('confirmNewPassword');
    input.type = input.type === 'password' ? 'text' : 'password';
  });
  
  const passwordField = document.getElementById('newPassword');
  const strengthBar = document.getElementById('passwordStrengthBar');
  const strengthText = document.getElementById('passwordStrengthText');
  
  passwordField.addEventListener('input', function() {
    const password = passwordField.value;
    let strength = 0;
    if (password.length >= 8) strength += 20;
    if (/[A-Z]/.test(password)) strength += 20;
    if (/[0-9]/.test(password)) strength += 20;
    if (/[@$!%*?&]/.test(password)) strength += 20;
    if (password.length >= 12) strength += 20;
  
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
  });