function sendPost(e) {
    // body
    let title = document.getElementById('post_title');
    let description = document.getElementById('post_description');
    let tag = document.getElementById('post_tag');

    let http = new XMLHttpRequest();
    http.open('POST', '../handlers/post-handler.php', true);
    http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded')

    http.onload = function() {
        if (http.responseText == 'true') {
            let box = document.getElementById('postSuccess');
            box.style.display = 'block';
            box.textContent = "Post Created Successfully";

            setTimeout(() => {
                location.reload();
            }, 1500);
        }
    }

    let data = 'title=' + title.value + '&description=' + description.value + '&tag=' + tag.value;
    http.send(data);

    document.getElementById('postForm').reset();
    e.preventDefault();
}

document.getElementById('postForm').addEventListener('submit', sendPost);