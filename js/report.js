document.getElementById('report').addEventListener('click', reportPost);


function reportPost() {
    let postId = document.querySelector('.ui.card').id;

    let http = new XMLHttpRequest();
    http.open('POST', '../handlers/report-handler.php', true);
    http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded')

    http.onload = function() {
        if (http.responseText == 'success') {
            let msg = "Report was successful.";
            document.getElementById('successMsg').style.display = "block";
            document.getElementById('successMsg').textContent = msg;
        } else {
            let msg = "You already reported this post."
            document.getElementById('successMsg').style.display = "none";
            document.getElementById('errorMsg').style.display = "block";
            document.getElementById('errorMsg').textContent = msg;
        }

    }
    let data = 'postId=' + postId;
    http.send(data);
};