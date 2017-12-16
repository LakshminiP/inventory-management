<?php
require 'connect.inc.php';
echo '<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="frontpage.css">
<title>View Components</title>
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
tr:nth-child(even){background-color: #ffcc66;}


th {
    background-color: #800000;
    color: white;
}
</style>
</head>
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
tr:nth-child(even){background-color: #ffcc66;}


th {
    background-color: #800000;
    color: white;
}
</style>
<body style="background-color:ivory">
<div class="container">
<div class="row xx"><br><br>
<div class="hd">
<p align="center"><font color="white">INVENTORY MANAGEMENT SYSTEM</font></p>
</div><br><br>
<div class="row">
<marquee scrolldelay="1" scrollamount="" loop="infinite" dir="ltr" behavior="alternate" bgcolor="ivory"> <img src="d.jpg" width="100%" height="250"> </marquee>
</div><br><br>
<div class="hd">
<p align="center"><font color="white">COMPONENTS LIST</font></p>
</div>
</div>

<table>
<tr>
<th>Component</th>
<th>Company</th>
<th>Cost</th>
<th>Quantity</th>
</tr>';
       	$sql="SELECT * from viewcomp;";
	       
		   if($query_run=mysql_query($sql))
		   {
				while($users=mysql_fetch_assoc($query_run))
				{
					echo "<tr>";
echo "<td>".$users['Component']."</td>";
echo "<td>".$users['Company']."</td>";
echo "<td>".$users['Cost']."</td>";
echo "<td>".$users['Quantity']."</td>";
echo "</tr>";
                }
				
		   }
		   else
	      {
		     echo '<b>Query failed :-(</b>';
	      }
echo '<p align="right"><font color="#663300"><a href="userlog.php"><b>BACK</b></a></font></p>
</body>
</html>';
?>