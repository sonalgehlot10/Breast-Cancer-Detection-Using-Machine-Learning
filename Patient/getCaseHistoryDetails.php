<?php
session_start();	
	include("db_connect.php");
	$db=new DB_Connect();
	$con=$db->connect();
	
	//$id=$_POST["ID"];
	$qry="Select * from bc_medical_view Order by Date Desc";
	//echo $qry;
	$run=mysqli_query($con,$qry);
	$i=1;
	$table="";
	$table.="<thead><tr><th>SR.NO</th><th>Date</th><th>Dignostic</th><th>View</th></tr></thead><tbody>";
	while($row=mysqli_fetch_array($run)){
		
		$table.="<tr>";
		$table.="<td>".$i."</td>"; 
		$table.="<td id='Date".$row["ID"]."'>".$row["Date"]."</td>";
		$table.="<td id='Dignostic".$row["ID"]."'>".$row["Dignostic"]."</td>";
		$table.="<td><a href='pgCaseView.php?id=".$row["ID"]." '  target='_self'>View</a></td>";		
		$i++;
		$table.="</tr>";
	}
	$table.="</tbody>";
	echo $table;
?>