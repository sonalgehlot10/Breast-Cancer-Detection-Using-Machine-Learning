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

/* $Browradius=round($Browradius["AVG(radius_mean)"],2);
$Browtexture=round($Browtexture["AVG(texture_mean)"],2);
$Browperimeter=round($Browperimeter["AVG(perimeter_mean)"],2);
$Browarea=round($Browarea["AVG(area_mean)"],2);
$Browsmoothness=round($Browsmoothness["AVG(smoothness_mean)"],2);
$Browcompactness=round($Browcompactness["AVG(compactness_mean)"],2);
$Browconcavity=round($Browconcavity["AVG(concavity_mean)"],2);
$Browconcavepoints=round($Browconcave_points["AVG(concave_points_mean)"],2);
$Browsymmetry=round($Browsymmetry["AVG(symmetry_mean)"],2);

$Mrowradius=round($Mrowradius["AVG(radius_mean)"],2);
$Mrowtexture=round($Mrowtexture["AVG(texture_mean)"],2);
$Mrowperimeter=round($Mrowperimeter["AVG(perimeter_mean)"],2);
$Mrowarea=round($Mrowarea["AVG(area_mean)"],2);
$Mrowsmoothness=round($Mrowsmoothness["AVG(smoothness_mean)"],2);
$Mrowcompactness=round($Mrowcompactness["AVG(compactness_mean)"],2);
$Mrowconcavity=round($Mrowconcavity["AVG(concavity_mean)"],2);
$Mrowconcavepoints=round($Mrowconcave_points["AVG(concave_points_mean)"],2);
$Mrowsymmetry=round($Mrowsymmetry["AVG(symmetry_mean)"],2);


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
$userradius =round($_POST["radius"],2);   
$usertexture =round($_POST["texture"],2);   
$userperimeter =round($_POST["perimeter"],2);   
$userarea =round($_POST["area"],2);   
$usersmoothness =round($_POST["smoothness"],2);   
$usercompactness =round($_POST["compactness"],2);   
$userconcavity =round($_POST["concavity"],2);   
$userconcavepoints =round($_POST["concavepoints"],2);
$usersymmetry =round($_POST["symmetry"],2);
 */
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

$NameRadius="Radius";
$NameTexture="Texture";
$NamePerimeter="Perimeter";
$NameArea="Area";
$NameSmoothness="Smoothness";
$NameCompactness="Compactness";
$NameConcavity="Concavity";
$NameConcavepoints="Concavepoints";
$NameSymmetry="Symmetry";

$response=array();

/* array_push($response,array('y'=>$NameRadius,'a'=>$Mrowradius,'b'=>$Browradius,'c'=>$userradius));
array_push($response,array('y'=>$NameTexture,'a'=>$Mrowtexture,'b'=>$Browtexture,'c'=>$usertexture));
array_push($response,array('y'=>$NamePerimeter,'a'=>$Mrowperimeter,'b'=>$Browperimeter,'c'=>$userperimeter));
array_push($response,array('y'=>$NameArea,'a'=>$Mrowarea,'b'=>$Browarea,'c'=>$userarea));
 */array_push($response,array('y'=>$NameSmoothness,'a'=>$Mrowsmoothness,'b'=>$Browsmoothness,'c'=>$usersmoothness));
array_push($response,array('y'=>$NameCompactness,'a'=>$Mrowcompactness,'b'=>$Browcompactness,'c'=>$usercompactness));
array_push($response,array('y'=>$NameConcavity,'a'=>$Mrowconcavity,'b'=>$Browconcavity,'c'=>$userconcavity));
array_push($response,array('y'=>$NameConcavepoints,'a'=>$Mrowconcavepoints,'b'=>$Browconcavepoints,'c'=>$userconcavepoints));
array_push($response,array('y'=>$NameSymmetry,'a'=>$Mrowsymmetry,'b'=>$Browsymmetry,'c'=>$usersymmetry));

echo json_encode($response);

?>