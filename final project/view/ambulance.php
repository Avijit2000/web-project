<!DOCTYPE html>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="../js/jq.js"></script>
<head>
    <link rel="stylesheet" type="text/css" href="../Css/service.css">
    
    
    
    

</head>
<body>

<div clas="num1">

<h2>Welcome to Ambulance dispatcher service</h2>

<form action="" method="post">

  <div>
    
<h2> Ambulance dispatcher service Request Form</h2>
<br>
<h3> <a href="ambulancereq.php">Send Request</a></h3>

   Search for our services <input type="text" name="pname"  >
  
    <input name="fub" type="submit" value="Search">
    <input name="rub" type="button" value="Click" placeholder="To see all availables">
</form>
  

</div>
<br>
<h3> <a href="pageone.php">Back</a></h3>

</body>



</html>
<?php
include('../control/ambsearch.php');

?>
<div clas="num1">
<p > This is Ambulance dispatcher service Request Form. From here you can call for ambulance services.  </p>
<button   id="h"> Hide Instructions</button>
<button   id="s">Show Instructions</button>