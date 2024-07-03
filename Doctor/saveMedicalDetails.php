<?php
	session_start();
	include("db_connect.php");
	$db=new DB_Connect();
	$con=$db->connect();
	
		 //echo $_SESSION["bcuid"];
			$qry=" Update bc_medical_info set Height='".$_POST["height"]."',Weight='".$_POST["weight"]."', BMI='".$_POST["bmi"]."',Low_BP='".$_POST["lowbp"]."',High_BP='".$_POST["highbp"]."' where User_ID='".$_SESSION["bcuid"]."' ";
			
			if(mysqli_query($con,$qry)){
				echo "Success";
			}
			else{
				echo "Error";
			}
		
	
?>