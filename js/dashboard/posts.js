fetchMyPosts();
fetchRelatedPosts();


function fetchMyPosts(callback) {
    let http = new XMLHttpRequest();
    http.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var res = JSON.parse(http.responseText);

            res.forEach(item => {
                let id = item['title'].replace(' ', '_');



                document.getElementById('myPosts').innerHTML += `            
                <div class="item data " id=${id}>
                <div class="content">
                <a class="header" href=../../includes/pages/postDetails.php?title=${replaceSpaces(item['title'])}&postId=${replaceSpaces(item['id'])}&createdBy=${replaceSpaces(item['createdBy'])}>${item['title']}</a>
                <div class="description">${reduce(item['description'])}</div>
                </div>
                </div>
                <div class="content" >
                <div class="ui label">
                     Votes: <span id="votes" >${item['votes']}</span>
                     </div>
                     <div class="ui label teal" id="tagLabel" style="float:right">#
                     ${item['tag']}
                    </div>
                    <div class="ui label basic"style="float:right; margin-right:10px;">By &nbsp;
                    ${item['createdBy']}
                   </div>
                </div>`
            })
        }
    }
    http.open('GET', '../handlers/displayMyPosts.php');
    http.send();
}

function fetchRelatedPosts() {
    let http = new XMLHttpRequest();
    http.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var res = JSON.parse(http.responseText);

            // console.log(res)

            res.forEach(item => {

                document.getElementById('relatedPosts').innerHTML += `            
                <div class="item data" >
                <div class="content">
                <a class="header" href=../../includes/pages/postDetails.php?title=${replaceSpaces(item['title'])}&postId=${replaceSpaces(item['id'])}&createdBy=${replaceSpaces(item['createdBy'])}>${item['title']}</a>
                <div class="description">${reduce(item['description'])}</div>
                </div>
                </div>
                <div class="content" >
                <div class="ui label">
                     Votes: <span id="votes" >${item['votes']}</span>
                     </div>
                     <div class="ui label teal" id="tagLabel" style="float:right">#
                     ${item['tag']}
                    </div>
                    <div class="ui label basic"style="float:right; margin-right:10px;">By &nbsp;
                    ${item['createdBy']}
                   </div>
                </div>`

            })
        }
    }
    http.open('GET', '../handlers/displayRelatedPosts.php');
    http.send();
}

function replaceSpaces(str) {
    return str.split(' ').join('%20');
}

function reduce(str) {
    let ending = '...';
    if (str.length > 150) {
        return str.substring(0, 150) + ending;
    } else {
        return str;
    }
}
$('.ui.styled.accordion')
    .accordion();