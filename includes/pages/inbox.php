<?php include('../config.php');?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inbox</title>

     <!-- Semantic ui cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.css" />
    <link rel="stylesheet" type="text/css" href="../../styles/homepage/nav2.css">
</head>
<body>
        <!-- navbar -->
        <?php include('../navbar/nav2.php'); ?>

        <div class="ui container" style="margin-top:5%;">
            <div id="main"></div>
        </div>


    <!-- Semantic ui -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.11.8/semantic.min.js"></script>

    <script src="../../js/search.js"></script>
    <script>
      $('.ui.dropdown')
    .dropdown();
    </script>

    <script>
        let http = new XMLHttpRequest();
        http.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                let arr = JSON.parse(http.responseText);
                let main = document.getElementById('main');
                arr.forEach(item => {
                    main.innerHTML += `
                    <div class='ui card' style="width:100%">
                    <div class='content'>
                        <div class='header' id='title'>${item['title']}</div>
                        <div class='description' id='message'>Message: &nbsp; ${item['message']}</div>
                    </div>
                    <div class='content'>
                        <div class='description' id='message'  style="display:inline-block;">Sender:  &nbsp; ${item['sender']}</div>
                        <div class='description' id='date' style="float:right">Date:  &nbsp; ${item['date']}</div>
                    </div>
                </div>`
                });
            }
        }
        http.open('GET', '../handlers/inbox-handler.php');
        http.send();
    </script>
</body>
</html>

