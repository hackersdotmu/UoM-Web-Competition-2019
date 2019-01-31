document.getElementById('loginForm').addEventListener('submit', validate)

function validate(e) {
    let loginUsername = document.getElementById('loginUsername').value;
    let loginPassword = document.getElementById('loginPassword').value;

    let http = new XMLHttpRequest();
    http.open('POST', 'includes/handlers/login-handler.php', true);
    http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded')

    http.onload = function() {
        if (http.responseText == 'false') {
            let errorBox = document.getElementById('loginError');
            errorBox.style.display = 'block';
            errorBox.textContent = "Invalid Username or Password";
        } else {
            window.location.assign("includes/pages/dashboard.php")
        }
    }

    let data = 'loginUsername=' + loginUsername + '&loginPassword=' + loginPassword;

    http.send(data)
    e.preventDefault();
}