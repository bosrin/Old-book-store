function signup() {
    var pass = document.getElementById("password").value;
    var confPass = document.getElementById("confpassword").value;
  
    var uppercase = /[A-Z]/.test(pass);
    var lowercase = /[a-z]/.test(pass);
    var digit = /[0-9]/.test(pass);
    var sign = /[@$]/.test(pass);
    if (!uppercase || !lowercase || !digit || !sign) {
      alert("[A-Z][a-z][0-9][@$]");
      event.preventDefault();
  }

    if (pass != confPass) {
      document.getElementById("para").innerHTML = "Password not matched";
      event.preventDefault();
    } else {
      alert("Successful Registration");
      return true;
    }
  }
  console.log ('123')