<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="frontpage.css">
<head>
<title>Inventory Management System</title>
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
<br>
    <h2 class="h2"><center>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Inventory managment system</center></h2>
      </div>
  
   </div>

<br><br>

<div class="col-md-3">
<?php
require 'connect.inc.php';

if(isset($_POST['adminname'])&& isset($_POST['password']))
{
	$adminname=$_POST['adminname'];
	
	$password=$_POST['password'];

	
	if(!empty($adminname)&&  !empty($password))
	{
	$query="select adminname from admin where adminname='$adminname' and password='$password'";
		
		if($query_run=mysql_query($query))
		{
			$query_num_rows=mysql_num_rows($query_run);
			
			if($query_num_rows==0)
			{
				echo '<b>Invalid Admin or password</b>';
			}
			else
			{
				header('Location:adminlog.php');
			}
		
		}
				
	}
	
	else
	{
		echo '<b>Empty Field!!!</b>';
	}
	
}
?>
<form  method="POST" action="index.php">
<fieldset>
<legend align="center">Administrator</legend>
<label><b>Username</b></label><br>
      <input type="text" placeholder="Enter Username" name="adminname" maxlength="20" value="<?php if(isset($adminname)){ echo $adminname; } ?>" required>
	  <br><br>

      <label><b>Password</b></label><br>
      <input type="password" placeholder="Enter Password" name="password" required><br><br>
        
      <button type="submit">Login</button><br><br>
      <input type="checkbox" checked="checked"> Remember me &nbsp &nbsp
      <span class="psw"><a href="forgot.php">Forgot Password?</a></span>
	  </fieldset>
	  </form>
</div>
<div class="col-md-6 xx">
 <p align="center" style="color:blue;"><font size="5"><b>"If Necessity is the mother of Invention then,
         Adversity is the mother of Innovation...</b></font>"</p>
         

         <p><font color="black"> This is the driving force behind the working of the Robotics Club of SNIST.Besides making a serious
		 endeavour to spread knowledge on Robotics and its diverse applications,where the TEAM stands true to 
		 its meaning- "Together Everyone Achieves More". It is this exemplary virtue, that has bound the club
		 and helped it to grow to its present potential.The eleven and half year old club has created a sensation 
		 and is proud to be the first of its kind among all the regional engineering colleges of AP. Having been
		 established in March 2006, the club today is an active platform for students to display and develop their
		 practical machine building skills and knowledge.</font></p>

<p><b><font color="blue">"Failing to Plan is Planning to Fail."</font></b> It is the firm belief of the club that a planning and predefined
 risk management are the requisites for the smooth functioning of any organization.</p>

<p><b><font color="blue">Well defined goals, Organized Work Structure, Highly Motivated Members</font></b> and the ability to shrewdly harness
 the skill and creativity of the work force are the clubs' distinguished FORTE, that have contributed to 
 its achievements.</p>


<p><b><font color="blue">The primary objective is to foster the scientific temper among its members and collectively achieve
 success in their long stride ahead....</font></b></p>
</div>
<div class="col-md-3">
<?php
require 'connect.inc.php';

if(isset($_POST['username'])&& isset($_POST['password']))
{
	$username=$_POST['username'];
	
	$password=$_POST['password'];

	
	if(!empty($username)&&  !empty($password))
	{
	$query="select username from viewreg where username='$username' and password='$password'";
		
		if($query_run=mysql_query($query))
		{
			$query_num_rows=mysql_num_rows($query_run);
			
			if($query_num_rows==0)
			{
				echo '<b> invalid username or password</b>';
			}
			else
			{
				header('Location:userlog.php');
			}
		
		}
				
	}
	
	else
	{
		echo '<b>Enter valid usename and password</b>';
	}
	
}
?>	
<form method="POST" action="index.php">
<fieldset>
<legend align="center">User</legend>
<label><b>Username</b></label><br>
      <input type="text" placeholder="Enter Username" name="username" maxlength="20" value="<?php if(isset($username)){ echo $username; } ?>" required>
	  <br><br>

      <label><b>Password</b></label><br>
      <input type="password" placeholder="Enter Password" name="password" required><br><br>
        
      <p><button type="submit">Login</button>&nbsp &nbsp
	       New User:<a href="userreg.php">Register</a>.</p>
	  
	 
      <input type="checkbox" checked="checked"> Remember me &nbsp &nbsp
      <span class="psw"><a href="forgot1.php">Forgot Password?</a></span>
	  </fieldset>
	  </form>
</div>


</body>
</html>