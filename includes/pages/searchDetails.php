<html>
<head>
	<title>
		Search
	</title>

		<!-- Semantic ui cdn -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.css" />
        <link rel="stylesheet" type="text/css" href="../../styles/dashboard/dash.css">
        <link rel="stylesheet" type="text/css" href="../../styles/homepage/nav.css">
            
</head>

<body>

    <!-- navbar -->
    <?php include('../navbar/nav.php'); ?>

    <div class="ui container">
        <div id="all">
        
                <div class="ui relaxed divided list" id="searchPosts"></div>
            
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

    <script src="../../js/search.js"></script>
    <script src="../../js/displaySearch.js"></script>
</body>
</html>
