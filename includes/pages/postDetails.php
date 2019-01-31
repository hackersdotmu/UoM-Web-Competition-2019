<?php include('../config.php');?>
        
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Details</title>

        <!-- Semantic ui cdn -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.css" />
        <link rel="stylesheet" type="text/css" href="../../styles/homepage/nav2.css">
</head>
<body>

    <!-- navbar -->
    <?php include('../navbar/nav2.php'); ?>


    <div class="ui container" style="margin-top:5%">
        <div class="ui card" style="width:100%;" id=<?php echo $_GET['postId']; ?>>
            <div class="content">
                <div class="header" style="font-size:20px" id="postTitle"><?php echo $_GET['title']?></div><br>
                <div class="meta">By <span id="receiver" ><?php echo $_GET['createdBy']?></span></div>
                <div class="description" style="font-size:16px">                
                    <?php
                        $postId =  $_GET['postId'];
                        
                        $tag = mysqli_query($GLOBALS['con'], "SELECT description FROM post WHERE id = '$postId'");
                        $row=mysqli_fetch_array($tag,MYSQLI_ASSOC); 
                        

                        echo $row['description'];
                        ?>
                </div><br>

            </div>
            <div class="content" style="float: right; margin-top:10px;">
                <button class="ui button report" id="upvote">Upvote</button>
                <button class="ui button report" id="report">Report</button>
            </div>
                    
        </div>
        <div class="ui blue message" id="successMsg" style="display:none;"></div>
        <div class="ui error message" id="errorMsg" style="display:none;"></div>

            <form class="ui form" id="replyForm">
                <textarea  id="messageBox" cols="30" rows="10" required></textarea><br><br>
                <div class="ui checkbox">
                    <input type="checkbox" id="share">
                    <label>Share my personal details</label>
                </div><br><br>

                <button class="ui button primary" type="submit">Reply</button>
            </form>
    </div>

        
    <!-- Semantic ui -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.11.8/semantic.min.js"></script>

    <script src="../../js/reply.js"></script>
    <script src="../../js/search.js"></script>
    <script src="../../js/upvote.js"></script>
    <script src="../../js/report.js"></script>
    <script>
      $('.menu .item')
    .tab();
      $('.ui.dropdown')
    .dropdown();
      $('.ui.styled.accordion')
    .accordion();
    </script>
</body>
</html>