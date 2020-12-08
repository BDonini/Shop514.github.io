function validateBusinessForm() {
//event.preventDefault();
 
  var businessName = document.getElementById("business-name").value;
  var phoneNumber = document.getElementById("phone-number").value;
  var businessEmail = document.getElementById("business-email").value;
  var businessAddress = document.getElementById("business-address").value;

  var result = document.getElementById("result");
  var form = document.getElementById("form");

  for (var i = 0; i < form.length; i++) {
    if (form.elements[i].required && form.elements[i].value == "" ) {
     // alert("called");
      form.elements[i].setAttribute("style", "border : 3px solid tomato");
    }
    else if (form.elements[i].required && !form.elements[i].value == "" ){
      form.elements[i].setAttribute("style", "border : 0px solid tomato");
    }
  }

  if (
    businessName == "" ||
    phoneNumber == "" ||
    businessEmail == "" ||
    businessAddress == ""
  ) {
   
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    result.textContent = "Please fill all the required fields";
   // event.preventDefault();
  } else {
  //  event.preventDefault();
    result.textContent = "";
    validatePhoneNumber();
  }
}

function validPhoneNumber(phoneNumber) {
  var regx = /^\s*(?:\+?(\d{1,3}))?[-. (]*(\d{3})[-. )]*(\d{3})[-. ]*(\d{4})(?: *x(\d+))?\s*$/;
  return regx.test(phoneNumber);
}

function validEmail(email) {
  var regx = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
  return regx.test(email);
}
function validPassword(password) {
  var regx = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
  return regx.test(password);
}
//  alert("success");
//  alert("fail");
function validatePhoneNumber() {
  var phoneNumber = document.getElementById("phone-number").value;

  if (validPhoneNumber(phoneNumber)) {
    result.textContent = "";
    validateEmail();
  } else {
    result.textContent = "Please enter a valid phone number";
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    document.getElementById("phone-number").focus();
    document.getElementById("phone-number").setAttribute("style", "border : 3px solid tomato");
  }
}

  function validateEmail() {
    var businessEmail = document.getElementById("business-email").value;

    if (validEmail(businessEmail)) {
      result.textContent = "";
     // alert("try to submet to db")
      return true;
    } else {
      result.textContent = "Please enter a valid email address";
      document.body.scrollTop = 0; // For Safari
      document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
      document.getElementById("business-email").focus();
      document.getElementById("business-email").setAttribute("style", "border : 3px solid tomato");
    }
  }


function validateLogin() {
  var result = document.getElementById("result");
  var form = document.getElementById("form");
  for (var i = 0; i < form.length; i++) {
    if (form.elements[i].required && form.elements[i].value == "" ) {
      form.elements[i].setAttribute("style", "border : 3px solid tomato");
      
    }
    else if (form.elements[i].required && !form.elements[i].value == ""){
    //  form.elements[i].setAttribute("style", "border : 0px solid tomato");
    }
  }
  result.textContent = "Please enter a valid email and password"
  validateLoginEmail();
}

function validateLoginEmail() {
  var result = document.getElementById("result");
  var businessEmail = document.getElementById("user-email").value;

  if (businessEmail == "") {
    result.textContent = "Please enter an email address";
    
  }
  if (validEmail(businessEmail)) {
    result.textContent = "";
    
    document.getElementById("user-email").setAttribute("style", "border : 0px solid tomato");
    validatePassword();
  } else {
   // event.preventDefault();
    result.textContent = "Please enter a valid email address";
    document.getElementById("user-email").focus();
    document.getElementById("user-email").setAttribute("style", "border : 3px solid tomato");
  }
}


function validatePassword() {
  var result = document.getElementById("result");
  var password = document.getElementById("password").value;

  if (password == "") {
    result.textContent = "Please enter a valid password";
    
  }
  // var regx = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$");

  if (validPassword(password)) {
    result.textContent = "";
    document.getElementById("user-email").setAttribute("style", "border : 0px solid tomato");
  } else {
   // event.preventDefault();
    document.getElementById("password").focus();
    result.textContent = "Please enter a valid password";
    document.getElementById("password").setAttribute("style", "border : 3px solid tomato");
  }
}

function validateContactForm(){

  var result = document.getElementById("result");
  var form = document.getElementById("form");
  for (var i = 0; i < form.length; i++) {
    if (form.elements[i].required && form.elements[i].value == "" ) {
      form.elements[i].setAttribute("style", "border : 3px solid tomato");
      result.textContent = "Please fill all the required fields"
    }
    else if (form.elements[i].required && !form.elements[i].value == ""){
      form.elements[i].setAttribute("style", "border : 0px solid tomato");
    validateContactEmail();
    }
  }
 
 
 // document.getElementById("subject").setAttribute("style","height:200px", "border : 3px solid tomato");
 // document.getElementById("subject").setAttribute( "border : 3px solid tomato");
  
}
function validateContactEmail() {
  var result = document.getElementById("result");
  var email = document.getElementById("email").value;

  if (email == "") {
    result.textContent = "Please enter an email address";
    
  }
  if (validEmail(email)) {
    //result.textContent = "";
    
    document.getElementById("email").setAttribute("style", "border : 0px solid tomato");
    validateContactPhone();
  } else {
   //event.preventDefault();
    result.textContent = "Please enter a valid email address";
    document.getElementById("email").focus();
    document.getElementById("email").setAttribute("style", "border : 3px solid tomato");
  }
}

function validateContactPhone() {
  
  var result = document.getElementById("result");
  var phoneNumber = document.getElementById("pnumber").value;

  if (phoneNumber == "") {
    result.textContent = "Please enter a valid phone number";
    
  }
  // var regx = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$");

  if (validPhoneNumber(phoneNumber)) {
    result.textContent = "";
    document.getElementById("pnumber").setAttribute("style", "border : 0px solid tomato");
   // alert("try to submit to the db");
  } else {
    //event.preventDefault();
    document.getElementById("pnumber").focus();
    result.textContent = "Please enter a valid phone number";
    document.getElementById("pnumber").setAttribute("style", "border : 3px solid tomato");
  }
}

