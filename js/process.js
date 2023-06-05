var active = 0;
var t;
var slideIndex = 0;

window.onload = function(){
   focusPart();
} 


function focusPart(){
var path = [];
path[0] = document.getElementById("part-1");
path[1] = document.getElementById("part-2");
path[2] = document.getElementById("part-3");
path[3] = document.getElementById("part-4");
path[4] = document.getElementById("part-5");
path[5] = document.getElementById("part-6");

var text = [];
text[0] = document.getElementById("parttxt-1");
text[1] = document.getElementById("parttxt-2");
text[2] = document.getElementById("parttxt-3");
text[3] = document.getElementById("parttxt-4");
text[4] = document.getElementById("parttxt-5");
text[5] = document.getElementById("parttxt-6");

if (window.active !=0){
    path[window.active-1].style.fill = null;
    text[window.active-1].style.fill = null;
}
else {
    path[5].style.fill = null;
    text[5].style.fill = null;
}

path[window.active].style.fill = "white";
text[window.active].style.fill = "black";

window.active++;
if (window.active > 5) window.active = 0;

var i;
var x = document.getElementsByClassName("txts");
for (i = 0; i < x.length; i++) {
    x[i].style.display = "none"; 
}
window.slideIndex++;
    if (window.slideIndex > x.length) {window.slideIndex = 1}
    x[window.slideIndex-1].style.display = "block";

t = setTimeout (focusPart, 5000);
}