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
	<title>Forum</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="main.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 
</head>
<body>
<div class="topnav">
	  <a href="index.php">Home</a>
	  <a href="faq.php">FAQ</a>
	  <a class="active" href="#">Forum</a>
	  <a id="signin" style = "float:right;" href="login.php">Login/SignUp</a>
	  <a  class ="user_name" id="user_name" style = "float:right;"><?php echo $_SESSION['username']; ?></a>
	</div>

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
<!--live comment system-->
	<br />
  <h2 align="center"><a href="#">Discussion</a></h2>
  <br />
  <div class="container">
   <form method="POST" style="padding-top:0px;" id="comment_form">
    <div class="form-group">
     <input type="text" style="visibility:hidden;padding:0px;width:0;height:0;" name="comment_name" value="<?php echo $_SESSION['username']; ?>" id="comment_name" class="form-control" placeholder="Enter Name" />
    </div>
    <div class="form-group">
     <textarea name="comment_content" style="padding-top:2px;" id="comment_content" class="form-control" placeholder="Enter Comment" rows="5"></textarea>
    </div>
    <div class="form-group">
     <input type="hidden" name="comment_id" id="comment_id" value="0" />
     <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
    </div>
   </form>
   <span id="comment_message"></span>
   <br />
   <div id="display_comment"></div>
  </div>
		
</body>
</html>

<script>
$(document).ready(function(){
	
	setInterval(function() {
	load_comment();
}, 200);
var comment_placeholder = "Enter Comment";
var c_content = document.getElementById('comment_content');
 $('#comment_form').on('submit', function(event){
	 comment_placeholder = "Enter Comment";
  c_content.placeholder = comment_placeholder;
	 
  event.preventDefault();
  var form_data = $(this).serialize();
  $.ajax({
   url:"add_comment.php",
   method:"POST",
   data:form_data,
   dataType:"JSON",
   success:function(data)
   {
    if(data.error != '')
    {
     $('#comment_form')[0].reset();
     $('#comment_message').html(data.error);
     $('#comment_id').val('0');
     load_comment();
    }
   }
  })
 });

 load_comment();

 function load_comment()
 {
  $.ajax({
   url:"fetch_comment.php",
   method:"POST",
   success:function(data)
   {
    $('#display_comment').html(data);
   }
  })
 }
 $(document).on('click', '.reply', function(){
  var comment_id = $(this).attr("id");
  var c_content = document.getElementById('comment_content');
  comment_placeholder = "Enter Reply";
  c_content.placeholder = comment_placeholder;
  $('#comment_id').val(comment_id);
  $('#comment_content').focus();
 });
 
});
</script>