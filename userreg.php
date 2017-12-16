<DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="userreg.css">
<title>Registration Form</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body >
<div class="container"><br>
	
  <div class="jumbotron">

<div class="row">
    <h2 class="h2"><center>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Inventory managment system</center></h2>
      
     </div>
  
   </div>
<div class="hd">
<p align="center"><font color="white">USER REGISTRATION</font></p>
</div>
<div class="row centered-form">
<div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title" align="center"><font color="blue"><b>Register for Inventory Management System </b></font></h3>
</div>
<div class="panel-body">
<?php
require 'connect.inc.php';

if(isset($_POST['username']) && isset($_POST['lname'])&& isset($_POST['email'])&& isset($_POST['password'])&& isset($_POST['cpsw']))
{
	$username=$_POST['username'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$cpsw=$_POST['cpsw'];
	 
	if(!empty($username) && !empty($lname)&& !empty($email)&& !empty($password)&& !empty($cpsw))
	{
		if(strlen($password)<8)
		{
			echo '<b>Password should contain min 8 characters.Think something bigger!!</b>';
		}
		else{
		if($password !=$cpsw)
		{
			echo '<b>                                      Passwords do not  match</b>';
		}
		else{
		
		
		$query="INSERT INTO viewreg VALUES('".mysql_real_escape_string($username)."','".mysql_real_escape_string($lname)."','".mysql_real_escape_string($email)."','".mysql_real_escape_string($password)."','".mysql_real_escape_string($cpsw)."');";
		if($query_run=mysql_query($query))
		{
            header('Location:reg_suc.php');
	
		}
		else
		{
			
			echo '<b>                                       Registration Failed</b>';
		}
		
		
		
	    }
		
			
	}
	}
	else{
		echo '<b>                                           Cannot leave any field blank</b>';
	}
	
}
?>
<form method="POST" action="userreg.php" >
<div class="row">
<div class="col-xs-6 col-sm-6 col-md-6">
<div class="form-group">
<input type="text" placeholder="First Name" name="username" maxlength="20" value="<?php if(isset($username)){ echo $username; } ?>" class="form-control input-sm">
</div>
</div>
<div class="col-xs-6 col-sm-6 col-md-6">
<div class="form-group">
<input type="text" placeholder="Last Name" name="lname" value="<?php if(isset($lname)){ echo $lname; } ?>" class="form-control input-sm">
</div>
</div>
</div>
<div class="form-group">
<input type="email" name="email" placeholder="Email Address" value="<?php if(isset($email)){ echo $email; } ?>" maxlength="30" class="form-control input-sm">
</div>
<div class="row">
<div class="col-xs-6 col-sm-6 col-md-6">
<div class="form-group">
<input type="password" placeholder="Password" name="password" class="form-control input-sm">
</div>
</div>
<div class="col-xs-6 col-sm-6 col-md-6">
<div class="form-group">
<input type="password" placeholder="Confirm Password" name="cpsw" class="form-control input-sm">			    					
</div>
</div>
</div>
<input type="submit" value="Register" class="btn btn-info btn-block" >
</form>

</table><br><a href="index.php"  class="btn btn-danger" role="button"> <span class="glyphicon glyphicon-menu-left" ></span>BACK TO HOME</a><br>        
    </div>
<br><br><br>	</body>
	</html>