const loginForm = document.getElementById("login-form");
const loginButton = document.getElementById("login-form-submit");
const loginErrorMsg = document.getElementById("login-error-msg");

loginButton.addEventListener("click", (e) => {
    e.preventDefault();
    const id = loginForm.id.value;
    const psw = loginForm.psw.value;

    if (id === "user" && psw === "web_dev") {
        alert("Welcome!");
        location.reload();
    } else {
        document.getElementById('error-msg-holder').style.display="block";
    }
})

//save data from registration-form-submit
const registerForm = document.getElementById("register-form");
const registerButton = document.getElementById("register-form-submit");
const registerErrorMsg = document.getElementById("register-error-msg");


function send_data() {
    var id = document.getElementById("id").value;
    var email = document.getElementById("email").value;
    var psw = document.getElementById("psw").value;
    var conf_psw = document.getElementById("conf_psw").value;
    var data = {
        "id": id,
        "email": email,
        "psw": psw,
        "conf_psw": conf_psw
    };
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "http://localhost:3000/registration", true);
    xhr.setRequestHeader('Content-Type', 'application/json');
    xhr.send(JSON.stringify(data));
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            var response = JSON.parse(xhr.responseText);
            if (response.success) {
                alert("Registration successful");
            } else {
                alert("Registration failed");
            }
        }
    }
}
