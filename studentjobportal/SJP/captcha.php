<?php 
session_start(); 
$first_num = rand(1, 10); 
$second_num = rand(1, 10); 
$operators = array("+", "-", "*"); 
$operator = rand(0, count($operators) - 1); 
$operator = $operators[$operator]; 
$answer = 0; 
switch($operator) { 
case "+": 
$answer = $first_num + $second_num; 
break; 
case "-": 
$answer = $first_num - $second_num;
break; 
case "*": 
$answer = $first_num * $second_num; 
break; 
} 
$_SESSION["answer"] = $answer; 
?> 
<form method="post" action="process.php" >
<?php 
echo $first_num . " " . $operator . " " . $second_num . " = " ; ?>
<input type="text" name="answer" />
<input type="submit" value="Submit" />
</form>

