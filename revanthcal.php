<html>
<head>
<title>Simple PHP Calculator</title>
</head>
<body>
<form method=’post’ action=’calculator.php’>
<input type=’text’ name=’value1′>
<input type=’text’ name=’value2′><select name=’action’>
<option>+</option>
<option>-</option>
<option>*</option>
<option>/</option>
</select>
<input type=’submit’ name=’submit’ value=’Calculate Now’></form>
<?php
if(isset($_POST[‘submit’])){$value1 = $_POST[‘value1’];
$value2 = $_POST[‘value2’];
$action = $_POST[‘action’];
if($action==”+”){
echo “<b>Your Answer is:</b><br>”;
echo $value1+$value2;
}
if($action==”-“){
echo “<b>Your Answer is:</b><br>”;
echo $value1-$value2;
}
if($action==”*”){
echo “<b>Your Answer is:</b><br>”;
echo $value1*$value2;
}
if($action==”/”){
echo “<b>Your Answer is:</b><br>”;
echo $value1/$value2;
}
}
?>
</body>
</html>
