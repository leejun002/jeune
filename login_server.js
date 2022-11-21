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
