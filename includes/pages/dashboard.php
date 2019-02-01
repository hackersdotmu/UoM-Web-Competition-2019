<?php include('../config.php'); ?>

<html>
<head>
	<title>
		Dashboard
	</title>

		<!-- Semantic ui cdn -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.css" />
        <link rel="stylesheet" type="text/css" href="../../styles/dashboard/dash.css">
        <link rel="stylesheet" type="text/css" href="../../styles/homepage/nav2.css">
            
</head>

<body>

    <!-- navbar -->
    <?php include('../navbar/nav2.php'); ?>

    <div class="ui container">
        <div id="all">
            
            <div class="ui top attached tabular menu">
                <a class="item active" data-tab="first">Related Posts</a>
                <a class="item " data-tab="second">My Posts</a>
                <a class="item ui button" data-tab="third">
                    <button class="ui primary button">Create New Post</button>
                </a>
            </div>

                <!-- First Tab Own Post -->
                <div class="ui bottom attached tab segment" data-tab="second">
                    <br>
                    <div class="ui relaxed divided list" id="myPosts"></div>
                </div>

                <!-- Second Tab Related Posts -->
                <div class="ui bottom attached tab segment active" data-tab="first">
                    <br>
                    <div class="ui relaxed divided list" id="relatedPosts"></div>
                </div>

                <!-- New Posts -->
                <div class="ui bottom attached tab segment" data-tab="third">
                    <br>
                    <div class="ui relaxed divided list" id="relatedPosts">
                    <form class="ui form" id="postForm">

                        <!-- Title -->
                        <div class="field">
                            <label>Title</label>
                            <input id="post_title" type="text" required>
                        </div>

                        <!-- Description -->
                        <div class="field">
                            <label>Description</label>
                            <textarea id="post_description" cols="30" rows="10" required></textarea>
                        </div>

                        <div class="field">
                            <div class="ui left icon input">
                                <i class="user icon"></i>
                            <select class="ui dropdown" id="post_tag" required>

                                <option value="">Tags</option>
                                <option value="it">IT</option>
                                <option value="finance">Finance</option>
                                <option value="agriculture">Agriculture</option>
                                <option value="law">Law</option>
                                <option value="science">Science</option>
                                <option value="engineering">Engineering</option>
                            </select>
                        </div>
                                            
                        </div>


                        <button type="submit" class="ui button primary" name="submitPost">Save Post</button>

                        </form>
                        <div class="ui blue message" id="postSuccess" style="display:none;"></div>
                    </div>
                </div>

            
            </div>
        </div>
    </div>


    
    <!-- Semantic ui -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.11.8/semantic.min.js"></script>

    <script>
      $('.menu .item')
    .tab();
      $('.ui .dropdown')
    .dropdown();
    </script>

    <script src="../../js/dashboard/posts.js"></script>
    <script src="../../js/dashboard/sendPost.js"></script>
    <script src="../../js/search.js"></script>
</body>
</html>