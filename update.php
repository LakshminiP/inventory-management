<DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="frontpage.css">
<title>Update Components</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style >
 body{
	padding-top:30px;
	padding-bottom:30px;
	}
	table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}
tr:nth-child(even){background-color:#f2f2f2;}


th {
    background-color: black;
    color: white;
}
</style>
</head>
<body >
<div class="container">
<div class="row xx">
	
  <div class="jumbotron">

<div class="row">
    <h2 class="h2"><center>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Inventory managment system</center></h2>
      
     </div>
  
   </div>
<div class="hd">
<p align="center"><font color="white">UPDATE COMPONENTS</font></p>
</div>
</div>
<?php
     //Connect with MYSQL
	     $con = mysqli_connect('localhost','root','');
		 
		 mysqli_select_db($con,'ims');
		 
		 $sql = "SELECT * FROM viewcomp";
		 
		 $records = mysqli_query($con,$sql);
?>
<table>
<tr>
<th>Component</th>
<th>Company</th>
<th>Cost</th>
<th>Quantity</th></tr>
  <?php
  while($row = mysqli_fetch_array($records))
  {
        echo "<tr><form action=up1.php method=post>";
		echo "<td><input type=text name=Component value='".$row['Component']."'></td>";
		echo "<td><input type=text name=Company value='".$row['Company']."'></td>";
		echo "<td><input type=text name=Cost value='".$row['Cost']."'></td>";
		echo "<td><input type=text name=Quantity value='".$row['Quantity']."'></td>";
		echo "<td><input type=submit>";
		echo "</form></tr>";
		}
		
		?>
	</table><br><a href="adminlog.php"  class="btn btn-danger" role="button"> <span class="glyphicon glyphicon-menu-left" ></span>BACK TO ADMIN LOGIN</a><br>
</body>
	</html>