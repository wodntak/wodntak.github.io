function navthrough(){
    document.getElementById("externalbutton").click();
}

// function validate(){
//     var regName = /^[A-Za-z]+$/;
//     var firstname = document.getElementById("firstName").value;
//     var lastname =  document.getElementById('lastName').value;
//     if(!regName.test(firstname) || !regName.test(lastname)){
//         alert('Invalid name given.');
//     }
//     else{
//         validateEmail();
//     }
// }

// function validateEmail(){
//     var email = document.getElementById("email").value;

//     if(!email.includes(".com") && !email.includes(".net") && !email.includes(".edu")){
//         alert("invalid email");
//     }
//     else{
//         submit();
//     }
// }

// function submit(){
//     // var form = document.getElementById("contact-form");
//     // var firstName = document.getElementById("firstName").value;
//     // var lastName = document.getElementById("lastName").value;
//     // var email = document.getElementById("email").value;
//     // var text = document.getElementById("textmessage").value;
//     // var page = document.getElementById("page4");

//     // form.reset();

//     // alert("The form was submitted \n \n" + "First Name : " + firstName + "\n Last Name : " + lastName 
//     // + "\n Email : " + email + "\n Message : " + text);
    
//     // location.href="#page4";
// }

function linkedin(){
    location.replace("https://www.linkedin.com/in/jaehyeon-yang-63a5b413b/");
}

function facebook(){
    location.replace("https://www.facebook.com/yang.jaehyeon.7");
}

function instagram(){
    location.replace("https://www.instagram.com/ywogus96/");
}

function handshake(){
    location.replace("https://unl.joinhandshake.com/stu/users/11350066");
}

function Register(){
    var first = document.getElementById('fname').value;
    var last = document.getElementById("lname").value;
    var password = document.getElementById("PasswordReg").value;
    var regName = /^[A-Za-z]+$/;
    var emailreg = document.getElementById("EmailReg").value;

    if(!regName.test(first) || !regName.test(last)){
        alert('Invalid name given.');
        closeregi();
    }
    if(!emailreg.includes(".com") && !emailreg.includes(".net") && !emailreg.includes(".edu")){
        alert("invalid email");
        closeregi();

    }

}

function Signin(){
   // action="scripts/registrationFormResponse.php"

}

function closesign(){
    document.getElementById("signin-form").reset();
}

function closeregi(){
    document.getElementById("register-form").reset();

}

function logout(){

    alert("Successfully logged out");
    location.replace("./index.php");
                    
}