  var myPassword = document.getElementById("password");
  var letter = document.getElementById("letter");
  var capital = document.getElementById("capital");
  var number = document.getElementById("number");
  var length = document.getElementById("length"); 

  //When user clicks on password field, show message box
  userPassword.onfocus = function() {
    document.getElementById("message").style.display = "block";
  }

  //When user clicks outside of password field
  userPassword.onblur = function() {
    document.getElementById("message").style.display = "none";
  }

  //When the user starts to type something in password field
  userPassword.onkeyup = function() {
    //validate lowercase letters
    var lowercase = /[a-z]/g;
    if(userPassword.value.match(lowercase)) {
      letter.classList.remove("invalid");
      letter.classList.add("valid");
    }
    else {
      letter.classList.remove("valid");
      letter.classList.add("invalid");
    }
    //validate uppercase letters
    var uppercase = /[A-Z]/g;
    if(userPassword.value.match(uppercase)) {
      capital.classList.remove("invalid");
      capital.classList.add("valid");
    } 
    else {
      capital.classList.remove("valid");
      capital.classList.add("invalid");
    }
    //validate numbers
    var numbers = /[0-9]/g;
    if(userPassword.value.match(numbers)) {
      number.classList.remove("invalid");
      number.classList.add("valid");
    } 
    else {
      number.classList.remove("valid");
      number.classList.add("invalid");
    }
    //validate length
    if(userPassword.value.lenght >= 8) {
      length.classList.remove("invalid");
      length.classList.add("valid");
    }
    else {
      length.classList.remove("valid");
      length.classList.add("invalid");
    }
  }

/* do i need to include <html> and <head> and stuff> */
/* <script src="myscripts.js"></script> -- use to call js from html*/

