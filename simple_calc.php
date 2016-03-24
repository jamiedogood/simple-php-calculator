<html>
<title>This is my calculator</title>
<body>
<form method="post" action="test.php">
<input type="text" name="value1">
<br/>
<br/>
<select name="action">
<option>+</option>
<option>-</option>
<option>*</option>
<option>/</option>
</select>
<br/>
<br/>
<input type="text" name="value2">
<br/>
<br/>
<input type="submit" name="submit" value="Calculate">
</form>
<?php
if (isset($_POST['submit'])) {
	$value1=$_POST['value1'];
	$value2=$_POST['value2'];
	$action=$_POST['action'];
if ($action=="+"){
	echo "<b>The Value is: <b><br/>";
	echo $value1+$value2;
	}
if ($action=="-"){
	echo "<b>The Value is: <b><br/>";
	echo $value1-$value2;
	}
if ($action=="/"){
	echo "<b>The Value is: <b><br/>";
	echo $value1/$value2;
	}
if ($action=="*"){
	echo "<b>The Value is: <b><br/>";
	echo $value1*$value2;
	}	
	
}else {echo "Please input something";}

?>
<br/>
<a href="test.php"> Clear</a>
</body>
</html>