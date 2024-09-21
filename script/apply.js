function myFunction() {
  // Declare variables
  var input, filter,li, a, i;
  filter = input.value.toUpperCase();
  li = ul.getElementsByTagName("li");

  // Loop through all list items, and hide those who don't match the search query
  for (i = 0; i < li.length; i++) {
    a = li[i].getElementsByTagName("a")[0];
    if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
  }
  /* Toggle between adding and removing the "responsive" class to sidenav when the user clicks on the icon */
	
	  var x = document.getElementById("sidenav");
	  if (x.className === "sidenav") {
		x.className += " responsive";
	  } else {
		x.className = "sidenav";
		}
	
}


 //Variable to count number of attempts.
//Below function Executes on click of login button.

var attempt = 3;
function validate(){

    
    var result = true;

    var uname = document.getElementById("uname").value;
var psw = document.getElementById("psw").value;

if ( attempt != 1){
  if (uname == "User1" && psw == "user123"){
    alert ("Login successfully");
	
    result = true;

} else {
    attempt --;
    alert("You have left "+attempt+" attempt");
    result = false;
}

} else {
  alert("You are out of attempt please contact administrator");

  result = false
}



return result;
}
// Decrementing by one.
// Disabling fields after 3 attempts.
// if( attempt == 0){
// document.getElementById("uname").disabled = true;
// document.getElementByI    d("psw").disabled = true;
// document.getElementById("submit").disabled = true;
// return false;
//         }
//     }
// }
function init() {
  myFunction;
   var enquireForm = document.getElementById("enquireForm");//get refto the HTMLelement
   enquireForm.onsubmit = validate;//register the event listener
}

window.addEventListener("load",init);