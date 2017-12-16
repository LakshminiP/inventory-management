<?php
//Connect with MYSQL
	     $con = mysqli_connect('localhost','root','');
		 
		 mysqli_select_db($con,'ims');
		 
		 $sql = "UPDATE viewcomp SET Company='$_POST[Company]',Component='$_POST[Component]',Cost='$_POST[Cost]',Quantity='$_POST[Quantity]' WHERE Component='$_POST[Component]'";
		 
		 if(mysqli_query($con,$sql))
			 header("refresh:1; url=update.php");
		 else
			  echo "NOT Update";
?>