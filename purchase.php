<DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="frontpage.css">
<title>Purchae Components</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body >
<div class="container">
<div class="row xx"><br>
	
  <div class="jumbotron">

<div class="row">
    <h2 class="h2"><center>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Inventory managment system</center></h2>
      
     </div>
  
   </div>
<div class="hd">
<p align="center"><font color="white">PURCHASE COMPONENTS</font></p>
</div>
</div>
<?php
require 'connect.inc.php';
if( isset($_POST['username']) && isset($_POST['Company'])&& isset($_POST['Component'])&& isset($_POST['Quantity']))
{
	$username=$_POST['username'];
	$Component=$_POST['Component'];
	$Company=$_POST['Company'];
	$Quantity=$_POST['Quantity'];
		$query="INSERT INTO viewpur VALUES('".mysql_real_escape_string($username)."','".mysql_real_escape_string($Component)."','".mysql_real_escape_string($Company)."','".mysql_real_escape_string($Quantity)."');";
		
		if(mysql_query($query))
		{

		echo '<b>Component name   :  </b> '.'<b><i>'.$Component.'</i></b>';
		echo '<br> <b>Company name :    </b>'.'<b><i>'.$Company.'</i></b>';
		echo '<br> <b>Quantity :    </b>'.'<b><i>'.$Quantity.'</i></b>';
		echo '<br> <b>    is purchased successfully by  </b>'.'<b><i>'.$username.'</i></b>';
		}
		else{
			echo 'Purchase failed!!';
		} 
}
?>	 
</body>
</html>