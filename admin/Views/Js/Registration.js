function ValidateRegistraion()
{
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;
    var email = document.getElementById('email').value;

    var error = document.getElementById('error');

    let flag = true;

    if (username == "" || password == "" || email == "") {
        flag = false;
        error.innerHTML = "Please fill all fields";
        error.style.color = "red";
        return false;
    }
    else {
        error.innerHTML = "";
    }

    if (username == "") {
        flag = false;
        error.innerHTML = "Please enter username";
        error.style.color = "red";
        return false;
    }
    else {
        error.innerHTML = "";
    }
    if (password == "") {
        flag = false;
        error.innerHTML = "Please enter password";
        error.style.color = "red";
        return false;
    }
    else {
        error.innerHTML = "";
    }
    if (email == "") {
        flag = false;
        error.innerHTML = "Please enter email";
        error.style.color = "red";
        return false;
    }
    else {
        error.innerHTML = "";
    }

    

    return flag;
}
