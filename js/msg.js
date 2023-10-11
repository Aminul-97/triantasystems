function sentmessage() {
  var xhttp;
   
   var a = document.getElementById("name").value;
   var b = document.getElementById("email").value;
   var c = document.getElementById("query").value;
   var data = a+"<br>"+b+"<br>"+c+"<br>";

      if (b == "") {
      document.getElementById("msg").innerHTML = "Enter mail.";
      }
   else {
         xhttp = new XMLHttpRequest();
         xhttp.onreadystatechange = function() {
         if (this.readyState == 4 && this.status == 200) {
             document.getElementById("msg").innerHTML = null;
         }
        };
       xhttp.open("GET", "http://triantasystems.com/js/message.php?q="+data, true);
       xhttp.send();
       //document.getElementById("contact").reset();
       document.getElementById("msg").value = "";
       document.getElementById("name").value = "";
       document.getElementById("email").value = "";
       document.getElementById("query").value = "";
       document.getElementById("modal-note").style.display = "block";
   }
 }



