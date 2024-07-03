<?php
session_start();
include("db_connect.php");
$db=new DB_Connect();
$con=$db->connect();
$date=date("Y-m-d h:i:sa");

$Bqryradius="SELECT AVG(radius_mean) FROM bc_dataset where diagnosis='B'";
$Brunradius=mysqli_query($con,$Bqryradius);
$Browradius=mysqli_fetch_array($Brunradius);
$Bqrytexture="SELECT AVG(texture_mean) FROM bc_dataset where diagnosis='B'";
$Bruntexture=mysqli_query($con,$Bqrytexture);
$Browtexture=mysqli_fetch_array($Bruntexture);
$Bqryperimeter="SELECT AVG(perimeter_mean) FROM bc_dataset where diagnosis='B'";
$Brunperimeter=mysqli_query($con,$Bqryperimeter);
$Browperimeter=mysqli_fetch_array($Brunperimeter);
$Bqryarea="SELECT AVG(area_mean) FROM bc_dataset where diagnosis='B'";
$Brunarea=mysqli_query($con,$Bqryarea);
$Browarea=mysqli_fetch_array($Brunarea);
$Bqrysmoothness="SELECT AVG(smoothness_mean) FROM bc_dataset where diagnosis='B'";
$Brunsmoothness=mysqli_query($con,$Bqrysmoothness);
$Browsmoothness=mysqli_fetch_array($Brunsmoothness);
$Bqrycompactness="SELECT AVG(compactness_mean) FROM bc_dataset where diagnosis='B'";
$Bruncompactness=mysqli_query($con,$Bqrycompactness);
$Browcompactness=mysqli_fetch_array($Bruncompactness);
$Bqryconcavity="SELECT AVG(concavity_mean) FROM bc_dataset where diagnosis='B'";
$Brunconcavity=mysqli_query($con,$Bqryconcavity);
$Browconcavity=mysqli_fetch_array($Brunconcavity);
$Bqryconcave_points="SELECT AVG(concave_points_mean) FROM bc_dataset where diagnosis='B'";
$Brunconcave_points=mysqli_query($con,$Bqryconcave_points);
$Browconcave_points=mysqli_fetch_array($Brunconcave_points);
$Bqrysymmetry="SELECT AVG(symmetry_mean) FROM bc_dataset where diagnosis='B'";
$Brunsymmetry=mysqli_query($con,$Bqrysymmetry);
$Browsymmetry=mysqli_fetch_array($Brunsymmetry);

$Mqryradius="SELECT AVG(radius_mean) FROM bc_dataset where diagnosis='M'";
$Mrunradius=mysqli_query($con,$Mqryradius);
$Mrowradius=mysqli_fetch_array($Mrunradius);
$Mqrytexture="SELECT AVG(texture_mean) FROM bc_dataset where diagnosis='M'";
$Mruntexture=mysqli_query($con,$Mqrytexture);
$Mrowtexture=mysqli_fetch_array($Mruntexture);
$Mqryperimeter="SELECT AVG(perimeter_mean) FROM bc_dataset where diagnosis='M'";
$Mrunperimeter=mysqli_query($con,$Mqryperimeter);
$Mrowperimeter=mysqli_fetch_array($Mrunperimeter);
$Mqryarea="SELECT AVG(area_mean) FROM bc_dataset where diagnosis='M'";
$Mrunarea=mysqli_query($con,$Mqryarea);
$Mrowarea=mysqli_fetch_array($Mrunarea);
$Mqrysmoothness="SELECT AVG(smoothness_mean) FROM bc_dataset where diagnosis='M'";
$Mrunsmoothness=mysqli_query($con,$Mqrysmoothness);
$Mrowsmoothness=mysqli_fetch_array($Mrunsmoothness);
$Mqrycompactness="SELECT AVG(compactness_mean) FROM bc_dataset where diagnosis='M'";
$Mruncompactness=mysqli_query($con,$Mqrycompactness);
$Mrowcompactness=mysqli_fetch_array($Mruncompactness);
$Mqryconcavity="SELECT AVG(concavity_mean) FROM bc_dataset where diagnosis='M'";
$Mrunconcavity=mysqli_query($con,$Mqryconcavity);
$Mrowconcavity=mysqli_fetch_array($Mrunconcavity);
$Mqryconcave_points="SELECT AVG(concave_points_mean) FROM bc_dataset where diagnosis='M'";
$Mrunconcave_points=mysqli_query($con,$Mqryconcave_points);
$Mrowconcave_points=mysqli_fetch_array($Mrunconcave_points);
$Mqrysymmetry="SELECT AVG(symmetry_mean) FROM bc_dataset where diagnosis='M'";
$Mrunsymmetry=mysqli_query($con,$Mqrysymmetry);
$Mrowsymmetry=mysqli_fetch_array($Mrunsymmetry);

$Browradius=$Browradius["AVG(radius_mean)"];
$Browtexture=$Browtexture["AVG(texture_mean)"];
$Browperimeter=$Browperimeter["AVG(perimeter_mean)"];
$Browarea=$Browarea["AVG(area_mean)"];
$Browsmoothness=$Browsmoothness["AVG(smoothness_mean)"];
$Browcompactness=$Browcompactness["AVG(compactness_mean)"];
$Browconcavity=$Browconcavity["AVG(concavity_mean)"];
$Browconcavepoints=$Browconcave_points["AVG(concave_points_mean)"];
$Browsymmetry=$Browsymmetry["AVG(symmetry_mean)"];

$Mrowradius=$Mrowradius["AVG(radius_mean)"];
$Mrowtexture=$Mrowtexture["AVG(texture_mean)"];
$Mrowperimeter=$Mrowperimeter["AVG(perimeter_mean)"];
$Mrowarea=$Mrowarea["AVG(area_mean)"];
$Mrowsmoothness=$Mrowsmoothness["AVG(smoothness_mean)"];
$Mrowcompactness=$Mrowcompactness["AVG(compactness_mean)"];
$Mrowconcavity=$Mrowconcavity["AVG(concavity_mean)"];
$Mrowconcavepoints=$Mrowconcave_points["AVG(concave_points_mean)"];
$Mrowsymmetry=$Mrowsymmetry["AVG(symmetry_mean)"];

/* $Browradius=round($Browradius, 4);
$Browtexture=round($Browtexture, 4);
$Browperimeter=round($Browperimeter, 4);
$Browarea=round($Browarea, 4);
$Browsmoothness=round($Browsmoothness, 4);
$Browcompactness=round($Browcompactness, 4);
$Browconcavity=round($Browconcavity, 4);
$Browconcavepoints=round($Browconcavepoints, 4);
$Browsymmetry=round($Browsymmetry, 4);

$Mrowradius=round($Mrowradius, 4);
$Mrowtexture=round($Mrowtexture, 4);
$Mrowperimeter=round($Mrowperimeter, 4);
$Mrowarea=round($Mrowarea, 4);
$Mrowsmoothness=round($Mrowsmoothness, 4);
$Mrowcompactness=round($Mrowcompactness, 4);
$Mrowconcavity=round($Mrowconcavity, 4);
$Mrowconcavepoints=round($Mrowconcavepoints, 4);
$Mrowsymmetry=round($Mrowsymmetry, 4); */

$radius=array($Mrowradius,$Browradius);
$texture=array($Mrowtexture,$Browtexture);
$perimeter=array($Mrowperimeter,$Browperimeter);
$area=array($Mrowarea,$Browarea);
$smoothness=array($Mrowsmoothness,$Browsmoothness);
$compactness=array($Mrowcompactness,$Browcompactness);
$concavity=array($Mrowconcavity,$Browconcavity);
$concavepoints=array($Mrowconcavepoints,$Browconcavepoints);
$symmetry=array($Mrowsymmetry,$Browsymmetry);
$m=0;
$b=0;
$userradius = $_POST["radius"];    
$usertexture = $_POST["texture"];    
$userperimeter = $_POST["perimeter"];    
$userarea = $_POST["area"];    
$usersmoothness = $_POST["smoothness"];    
$usercompactness = $_POST["compactness"];    
$userconcavity = $_POST["concavity"];    
$userconcavepoints = $_POST["concavepoints"]; 
$usersymmetry = $_POST["symmetry"];

foreach ($radius as $i) {
	$radiussmallest[$i] = abs($i - $userradius);
}
asort($radiussmallest);
$radiussmallest=key($radiussmallest);
if($radiussmallest==$Mrowradius){
	$m++;
	
}else {
	$b++;
}

foreach ($texture as $i) {
	$texturesmallest[$i] = abs($i - $usertexture);
}
asort($texturesmallest);
$texturesmallest=key($texturesmallest);
if($texturesmallest==$Mrowtexture){
	$m++;
}else{
	$b++;
}

//print key($texturesmallest)."asd";
foreach ($perimeter as $i) {
	$perimetersmallest[$i] = abs($i - $userperimeter);
}
asort($perimetersmallest);
$perimetersmallest=key($perimetersmallest);
if($perimetersmallest==$Mrowperimeter){
	$m++;
}else{
	$b++;
}
//print key($texturesmallest)."asd";
foreach ($area as $i) {
	$areasmallest[$i] = abs($i - $userarea);
}
asort($areasmallest);
$areasmallest=key($areasmallest);
if($areasmallest==$Mrowarea){
	$m++;
}else{
	$b++;
}
//print key($texturesmallest)."asd";
foreach ($smoothness as $i) {
	$smoothnesssmallest[$i] = abs($i - $usersmoothness);
}
asort($smoothnesssmallest);
$smoothnesssmallest=key($smoothnesssmallest);
if($smoothnesssmallest==$Mrowsmoothness){
	$m++;
}else{
	$b++;
}

//print key($texturesmallest)."asd";
foreach ($compactness as $i) {
	$compactnesssmallest[$i] = abs($i - $usercompactness);
}
asort($compactnesssmallest);
$compactnesssmallest=key($compactnesssmallest);
if($compactnesssmallest==$Mrowcompactness){
	$m++;
}else{
	$b++;
}
//print key($texturesmallest)."asd";
foreach ($concavity as $i) {
	$concavitysmallest[$i] = abs($i - $userconcavity);
}
asort($concavitysmallest);
$concavitysmallest=key($concavitysmallest);
if($concavitysmallest==$Mrowconcavity){
	$m++;
}else{
	$b++;
}
//print key($texturesmallest)."asd";	
foreach ($concavepoints as $i) {
	$concavepointssmallest[$i] = abs($i - $userconcavepoints);
}
asort($concavepointssmallest);
$concavepointssmallest=key($concavepointssmallest);
if($concavepointssmallest==$Mrowconcavepoints){
	$m++;
}else{
	$b++;
}
//print key($texturesmallest)."asd";   
foreach ($symmetry as $i) {
	$symmetrysmallest[$i] = abs($i - $usersymmetry);
}
asort($symmetrysmallest);
$symmetrysmallest=key($symmetrysmallest);
if($symmetrysmallest==$Mrowsymmetry){
	$m++;
}else{
	$b++;
}  
//print key($texturesmallest)."asd";

if($m>$b){
	$type="M";	
}else{
	$type="B";
}


$date2=date("d/m/Y");
$qry=" Update bc_check_output set Date='".$date2."',Radius='".$_POST["radius"]."', Texture='".$_POST["texture"]."',Perimeter='".$_POST["perimeter"]."',Area='".$_POST["area"]."',Smoothness='".$_POST["smoothness"]."',Compactness='".$_POST["compactness"]."',Concavity='".$_POST["concavity"]."',Concave_Points='".$_POST["concavepoints"]."',Symmetry='".$_POST["symmetry"]."',Diagnosis='".$type."' where  Case_ID='".$_POST["caseid"]."' And  Patient_ID='".$_SESSION["bcuid"]."' ";

//echo $qry;
if(mysqli_query($con,$qry)){
	echo $type;
}
else{
	echo "Error";
}
	

?>