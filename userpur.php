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

	
  <div class="jumbotron">

<div class="row">
    <h2 class="h2"><center>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Inventory managment system</center></h2>

    
   </div>
   </div>
<div class="hd">
<p align="center"><font color="white">PURCHASE COMPONENTS</font></p>
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
    if(!empty($Company)&&  !empty($Component)&&  !empty($Quantity)&&  !empty($username))
	{
		$sql="SELECT Cost from viewcomp WHERE Component='$Component' AND Company='$Company';";
	       if($query_run=mysql_query($sql))
		   {
				while($query_row=mysql_fetch_assoc($query_run))
				{
					$costi=$query_row['Cost'];
					$Cost=$costi*$Quantity;
					
					echo '<b>Total cost for the purchase is : Rs. <b>'.$Cost;
				}
			}
			else
	      {
		     echo '<b>Query failed :-(</b>';
	      }
	}
	else
	{
	echo '<b>Fill complete data</b>';	
	}
}
?>	 
<form method="POST" action="userpur.php"   >
<div><br>
<center><font color="#663300"><b>USER NAME : </b></font><input type="text" value="<?php if(isset($username)){ echo $username; } ?>" name="username"/></br></br></br></center>
<center><font color="#663300"><b>COMPONENT NAME : </b></font><input type="text" value="<?php if(isset($Component)){ echo $Component; } ?>" name="Component"/></br></br></br></center>
<center><font color="#663300"><b>COMPONENT COMPANY : </b></font><input type="text" value="<?php if(isset($Company)){ echo $Company; } ?>" name="Company"/></br></br></br></center>
<center><font color="#663300"><b>QUANTITY : </b></font><input type="text" value="<?php if(isset($Quantity)){ echo $Quantity; } ?>" name="Quantity"/></br></br></br></center>
<center><input type="submit" class="btn btn-info"  value="Total Purchase Cost" ></td></center><br>
<center><input type="submit" class="btn btn-success" formmethod="post"  formaction="purchase.php" value="Purchase" ></td></center><br>
</table><br><a href="userlog.php"  class="btn btn-danger" role="button"> <span class="glyphicon glyphicon-menu-left" ></span>BACK TO USER LOGIN</a><br>

</div>


</div><br><br>
</body>
</html>