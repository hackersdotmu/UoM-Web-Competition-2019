<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portal</title>

    <!-- Google fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">

    <!-- Semantic ui cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.css" />

    <!-- date picker -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui-calendar/0.0.8/calendar.min.css">

    <!-- defaults.css -->
    <link rel="stylesheet" href="styles/defaults.css">

    <!-- nav.css-->
    <link rel="stylesheet" href="styles/homepage/nav.css">

    <!-- hero.css-->
    <link rel="stylesheet" href="styles/homepage/hero.css">

    <!-- stats.css-->
    <link rel="stylesheet" href="styles/homepage/stats.css">

    <link rel="stylesheet" href="styles/footer.css">
		


</head>
<body>

    <?php
    // session_destroy();

    // <!-- db connection -->
    include("includes/config.php"); //done
    
    // <!-- Navbar -->
    include("includes/navbar/nav.php"); //done

    // <!-- Hero.php -->
    include("includes/homepage/hero.php"); //done
    
    
    // <!-- stats.php -->
    include("includes/homepage/stats.php"); //done
    
    // <!-- footer.php -->
    // include("includes/footer.php"); 
    
    // <!-- login.php -->
    include("includes/navbar/login.php"); 
    
    // <!-- register.php -->
    include("includes/navbar/registration.php"); 

    ?>

    <script src='https://www.google.com/recaptcha/api.js'></script>

    <!-- Semantic ui -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.11.8/semantic.min.js"></script>

    <!-- calendar.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui-calendar/0.0.8/calendar.min.js"></script>

    <!-- initSemantic.js -->
    <script src="js/homepage/init.js"></script>

    <!-- Chart.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>

    <!-- piechart.js -->
    <script src="js/homepage/chart.js"></script>

    <!-- login.js -->
    <script src="js/homepage/login.js"></script>

    <!-- register.js -->
    <script src="js/homepage/register.js"></script>

    <!-- search.js -->
    <script src="js/search.js"></script>

</body>
</html>

