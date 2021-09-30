<html> 
<head>
	<title>Input/Ouput data</title></head>
<body>
<form>
	Your Name: <input type="test" name="Name" size=20 value="<?php if(isset($_GET['Name'])) echo $_GET['Name'];?>" />
	<br>
	<input type="submit" value="Submit">
</form>
<?php
	if (isset($_GET["Name"]))
		print "Hello " . $_GET["Name"];
?>
</body>
</html>