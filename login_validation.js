// see if the form inputs were properly
// validate the form inputs
function validateForm() {
    // get the form element
    let form = document.frmLogin;

    // get the values of username and password
    let username = form.txtUserName.value.trim();
    let password = form.pwdUser.value.trim();

    // get the message output element
    let msg = document.getElementById("msgOutput");

    // clear any previous messages
    msg.textContent = "";

    // Validation: Username
    if (username.length === 0) {
        msg.textContent = "Please enter your username.";
        return false; // prevent form submission
    }

    // Validation: Password
    if (password.length === 0) {
        msg.textContent = "Please enter your password.";
        return false; // prevent form submission
    }

    // If we get here, the form is valid and will submit
    return true;
}
