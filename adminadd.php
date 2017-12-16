<DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="frontpage.css">
<title>Add Components</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	
 <br> <div class="jumbotron">

<div class="row">
    <h2 class="h2"><center>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Inventory managment system</center></h2>
      
     </div>
  
   </div>
<div class="row xx">


<div class="hd">
<p align="center"><font color="white">ADD COMPONENTS</font></p>
</div>
</div>
<?php
require 'connect.inc.php';
if(isset($_POST['Component'])&& isset($_POST['Company'])&& isset($_POST['Cost']) && isset($_POST['Quantity']))
{
	$Component=$_POST['Component'];
	$Company=$_POST['Company'];
	$Cost=$_POST['Cost'];
	$Quantity=$_POST['Quantity'];
	if(!empty($Company)&&  !empty($Component)&&  !empty($Cost) &&  !empty($Quantity))
	{
	$query="INSERT INTO viewcomp VALUES('".mysql_real_escape_string($Component)."','".mysql_real_escape_string($Company)."','".mysql_real_escape_string($Cost)."','".mysql_real_escape_string($Quantity)."');";
		if(mysql_query($query))
		{
		echo '<b><align="center">Component name '.$Component.'  is inserted successfully into database!!!<b>';
		}
	else
	{
		echo '<b>Data insertion failed :-(</b>';
	}
	}
	else
	{
	echo '<b>Fill complete data</b>';	
	}	
}
?>	
<form method="POST" action="adminadd.php"   >
<div>
<br><br>
<center><font color="#663300"><b>COMPONENT NAME    :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </b></font><input type="text" value="<?php if(isset($Component)){ echo $Component; } ?>" name="Component"/></br></br></center> <br>
<center><font color="#663300"><b>COMPONENT COMPANY :&nbsp;&nbsp;&nbsp;&nbsp; </b></font><input type="text" value="<?php if(isset($Company)){ echo $Company; } ?>" name="Company"/></br></br></center> <br>
<center><font color="#663300"><b>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;COST   :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font><input type="text" value="<?php if(isset($Cost)){ echo $Cost; } ?>" name="Cost"/></br></br></center> <br>
<center><font color="#663300"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;QUANTITY  :&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </b></font><input type="text" value="<?php if(isset($Quantity)){ echo $Quantity; } ?>" name="Quantity"/><br><br></center> <br>
<center><button type="submit"><font color="#663300"><b> ADD</b></font></button></br></br></br></center>
</form>
</table><br><a href="adminlog.php"  class="btn btn-danger" role="button"> <span class="glyphicon glyphicon-menu-left" ></span>BACK TO ADMIN LOGIN</a><br>
</div><br>
</body>
</html>