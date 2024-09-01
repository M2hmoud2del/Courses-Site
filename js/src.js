let menu = document.getElementById("acc");
let cont = document.getElementsByClassName("menu")[0];
let turn = true;
menu.onclick = function() {
    if(turn){cont.style.display="inline";turn=!turn;}
    else {cont.style.display="none";turn=!turn;}
};
let submitButton = document.getElementById("submit");

submitButton.onclick = function(event) {
    event.preventDefault(); // Prevent the form from submitting and refreshing the page
    
    let users = {
        'ahmed2003@gmail.com': ["1234","Ahmed","Adel","01513013101","Egypt","Helwan"],
        'mohamed2004@gmail.com': ["1234","Mohamed","Sayed","01210014951","Egypt","Helwan"]
    };
    
    let x = document.getElementById("email").value; // Get the user's email input
    let pass = document.getElementById("password").value; // Get the user's password input
    
    if (users[x]) { // Check if the email exists in the 'users' object
        if (pass === users[x][0]) {
            // Store user data in localStorage
            localStorage.setItem("fName", users[x][1]);
            localStorage.setItem("lName", users[x][2]);
            localStorage.setItem("phone", users[x][3]);
            localStorage.setItem("email", x); // Store the email address
            localStorage.setItem("country", users[x][4]);
            localStorage.setItem("uni", users[x][5]);
            localStorage.setItem("username", users[x][1]); // Store the username

            // Redirect to profile.html
            window.location.href = "profile.html";
        } else {
            // Password does not match
            alert("Wrong password");
        }
    } else {
        // Email not found in the 'users' object
        alert("Email not found");
    }
}
