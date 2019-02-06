document.getElementById('registerForm').addEventListener('submit', validate)

function validate(e) {
    let fname = document.getElementById('fname').value;
    let lname = document.getElementById('lname').value;
    let username = document.getElementById('username').value;
    let dob = document.getElementById('dob').value;
    let mobile = document.getElementById('mobile').value;
    let email = document.getElementById('email').value;
    let pwd = document.getElementById('pwd').value;
    let pwd2 = document.getElementById('pwd2').value;
    let current = document.getElementById('current').value;
    let completed = document.getElementById('completed').value;
    let institution = document.getElementById('institution').value;
    let sector = document.getElementById('sector').value;

    var response = grecaptcha.getResponse();


    let http = new XMLHttpRequest();
    http.open('POST', 'includes/handlers/register-handler.php', true);
    http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded')

    http.onload = function() {

        let res = (http.responseText.replace(/[^a-zA-Z,0-9 ]/g, "").split(','));
        let errorBox2 = document.getElementById('errorBox2');
        let errorBox3 = document.getElementById('errorBox3');

        if (res == "true") {
            errorBox2.style.display = 'none';
            errorBox3.style.display = 'block';
            errorBox3.textContent = "Account Created Successfully";


            setTimeout(() => {
                window.location.assign("includes/pages/dashboard.php")
            }, 2000);
        } else {
            errorBox2.style.display = 'block';

            let temp = '';
            res.forEach(r => {
                let str = r + '</br>';
                temp += str;
            })
            errorBox2.innerHTML = temp;
        }

    }

    let data = 'fname=' + fname + '&lname=' + lname + '&username=' + username + '&dob=' + dob + '&mobile=' + mobile + '&email=' + email +
        '&pwd=' + pwd + '&pwd2=' + pwd2 + '&current=' + current + '&completed=' + completed + '&institution=' + institution + '&sector=' + sector + '&g-recaptcha-response=' + response;

    http.send(data)
    e.preventDefault();
}