<?php
require 'connect.inc.php';
echo '<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="frontpage.css">
<title>View Purchase</title>
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

<body style="background-color:white">
<div class="container">
<div class="row xx"><br><br>
<div class="jumbotron">

<div class="row">
    <h2 class="h2"><center>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Inventory managment system</center></h2>
     
     </div>
  
   </div>
<div class="hd">
<p align="center"><font color="white">COMPONENTS LIST</font></p>
</div>
</div>

<table>
<tr>
<th>Username</th>
<th>Component</th>
<th>Company</th>
<th>Quantity</th>

</tr>';
	$sql="SELECT * from  viewpur;"; 
		   if($query_run=mysql_query($sql))
		   {
				while($users=mysql_fetch_assoc($query_run))
				{
					echo "<tr>";
echo "<td>".$users['username']."</td>";
echo "<td>".$users['Component']."</td>";
echo "<td>".$users['Company']."</td>";
echo '<td>'.$users['Quantity'].'</td>';
echo "</tr>";
				}
			}
		   else
	      {
		     echo '<b>Query failed :-(</b>';
	      }
echo'</table><br><a href="adminlog.php"  class="btn btn-danger" role="button"> <span class="glyphicon glyphicon-menu-left" ></span>BACK TO ADMIN LOGIN</a><br>
<br></body>
</html>';
?>