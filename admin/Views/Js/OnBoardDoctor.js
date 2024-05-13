function ValidRegisterDoctor() {
    var fullName = document.getElementById("fullName").value;
    var gender = document.getElementById("gender").value;
    var contactNo = document.getElementById("contactNo").value;
    var username = document.getElementById("username").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("confirmPassword").value;
    var address = document.getElementById("address").value;
    var speciality = document.getElementById("speciality").value;
    var error = document.getElementById("error");
    var flag = true;

    if (fullName == "" || gender == "" || contactNo == "" || username == "" || email == "" || password == "" || confirmPassword == "" || address == "" || speciality == "") {
        flag = false;
        error.innerHTML = "Please fill all fields";
        error.style.color = "red";
        return false;
    } else {
        error.innerHTML = "";
    }

    if (password != confirmPassword) {
        flag = false;
        error.innerHTML = "Password and Confirm Password do not match";
        error.style.color = "red";
        return false;
    } else {
        error.innerHTML = "";
    }

    return flag;
}
