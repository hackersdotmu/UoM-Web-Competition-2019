document.getElementById('replyForm').addEventListener('submit', sendReply)

document.getElementById('share').addEventListener('change', getContactDetails)

let sender = document.querySelector('#user').textContent;
let counter = 0;

function sendReply(e) {
    let receiver = document.querySelector('#receiver').textContent;
    let title = document.getElementById('postTitle').textContent;
    let message = document.getElementById('messageBox').value;

    // console.log(sender);
    // console.log(receiver);
    // console.log(message);
    // console.log(title);

    let http = new XMLHttpRequest();
    http.open('POST', '../handlers/reply-handler.php', true);
    http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    http.onload = function() {
        let msg;
        if (http.responseText == 'success') {
            msg = "Message was sent successfully";
            document.getElementById('successMsg').style.display = "block";
            document.getElementById('successMsg').textContent = msg;
            document.getElementById('messageBox').value = '';
        }
    }

    let data = 'message=' + message + '&sender=' + sender + '&receiver=' + receiver + '&title=' + title;
    http.send(data)
    e.preventDefault();
}

function getContactDetails(e) {
    let details = '';
    let box = document.getElementById('messageBox');

    if (e.target.checked) {

        let http = new XMLHttpRequest();
        http.open('POST', '../handlers/fetchDetails.php', true);
        http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

        http.onload = function() {
            let res = JSON.parse(http.responseText);

            details += 'Name: ' + res['fname'] + ' ' + res['lname'] + '\n';
            details += 'Mobile: ' + res['mobile'] + '\n';
            details += 'Email: ' + res['email'] + '\n'
            details += 'Course: ' + res['current'];

            if (counter == 0) {
                box.value += details;
                counter++;
            }
        }
        let data = 'sender=' + sender;
        http.send(data)

    }
}