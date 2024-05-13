
function validateForm() 
{
            var fullName = document.getElementById('fullName').value;
            var gender = document.getElementById('gender').value;
            var contactNo = document.getElementById('contactNo').value;
            var username = document.getElementById('username').value;
            var email = document.getElementById('email').value;
            var password = document.getElementById('password').value;
            var confirmPassword = document.getElementById('confirmPassword').value;
            var address = document.getElementById('address').value;

            var errorElement = document.getElementById('error');
            let flag = true;

            if (fullName === '' || gender === '' || contactNo === '' || username === '' || email === '' || password === '' || confirmPassword === '' || address === '') {
                flag = false;
                errorElement.innerHTML = 'All fields are required';
                return false;
            }

            if(fullName === '') 
            {
                flag = false;
                errorElement.textContent = 'Please enter full name';
                return false;

            }

            if(email === '')
            {
                flag = false;
                errorElement.textContent = 'Please enter email';
                return false;
            }

            if (password !== confirmPassword) {
                flag = false;
                errorElement.textContent = 'Passwords do not match';
                return false;
            }

            return true;
}