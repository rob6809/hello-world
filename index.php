<!DOCTYPE html>
<html>
<head>
<!–– All this code borrowed from:    https://www.w3resource.com ––>
   <title>Version 3</title>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   </head>
   <body>
   <h4>Version 3</h4>
   <form method='POST'>
   <h2>Please input your name:</h2>
 <input type="text" name="name">
 <input type="submit" value="Submit Name">
 </form>
<?php
//Retrieve name from query string and store to a local variable
$name = $_POST['name'];
echo "<h3> Hello $name World.</h3>";
?>
</body>
</html>



