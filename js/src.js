let menu = document.getElementById("acc");
let cont = document.getElementsByClassName("menu")[0];
let turn = true;
menu.onclick = function() {
    if(turn){cont.style.display="inline";turn=!turn;}
    else {cont.style.display="none";turn=!turn;}
};