<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="main.css">
</head>
<body>
<div class="topnav">
	  <a class="active" href="#">Home</a>
	  <a href="faq.php">FAQ</a>
	  <a href="forum.php">Forum</a>
	  <a id="signin" style = "float:right;" href="login.php">Login/SignUp</a>
	  <a  class ="user_name" id="user_name" style = "float:right;"><?php echo $_SESSION['username']; ?></a>
	</div>
	
	<?php if (isset($_SESSION['success'])): ?>
	<div class="header">
		<h2>Welcome <?php echo $_SESSION['username']; ?></h2>
	<h4>
					<?php 
						echo $_SESSION['success'];						
						unset($_SESSION['success']);
					?>
				</h4>
	</div>
	<?php endif ?>

		<!-- logged in user information -->
		<?php  if (isset($_SESSION['username'])) : ?>
			<script> 
			 var log = document.getElementById('signin');
			 log.innerHTML = "Log out";
			 log.href = "index.php?logout='1'";
			 log.style = "margin-left:0;float:right;background-color: red;";
			 var user_style = document.getElementById('user_name');
			 user_style.style = "float:right;background:0;color: white;font: bold;outline: 3px dashed white;outline-offset: -3px;";
			</script>
		<?php endif ?>
	<div class="piechart" id="piechart" style="width: 900px; height: 500px;"></div>

	
		
</body>
</html>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        /*var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Work',     11],
          ['Eat',      2],
          ['Commute',  2],
          ['Watch TV', 2],
          ['Sleep',    7]
        ]);*/
		

		var data = google.visualization.arrayToDataTable([
      ['Name', 'Comments'] <?php

//fetch_comment.php

$connect = new PDO('mysql:host=localhost;dbname=testing', 'root', '');

$query = "
SELECT comment_sender_name, COUNT(comment_id) AS total
FROM tbl_comment
GROUP BY comment_sender_name
";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();
$output = "";
foreach($result as $row)
{
            $output .= ",['".$row['comment_sender_name']."', ".$row['total']."]";
          }
		  echo ($output);

?>
    ]);

        var options = {
          title: 'Username-Comments Pie Chart',
		  backgroundColor: 'transparent',
		  titleColor: 'white',
		  forceIFrame: true
		  
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
	
