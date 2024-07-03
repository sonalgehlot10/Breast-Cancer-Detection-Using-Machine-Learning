<?php
	session_start();
	if(!isset($_SESSION["bcusername"])){
		header("Location:index.php");
	}
	include("db_connect.php");
	$db=new DB_Connect();
	$con=$db->connect();
	
	$number="Select * from bc_check_output where Case_ID='". $_REQUEST["caseid"]."' ";
	$rnumber=mysqli_query($con,$number);
	$rownumber=mysqli_fetch_array($rnumber);
	//echo $number;
	//echo $_REQUEST["caseid"];
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Breast Cancer Detection System</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="../css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="../css/clean-blog.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Morris charts -->
	<link rel="stylesheet" href="../graph/morris.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="../graph/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="../graph/ionicons.min.css">
<style>
* {
    box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
    float: left;
    width: 12.5%;
    padding: 10px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}
/* Style the buttons */
.btn {
    border: none;
    outline: none;
    padding: 12px 16px;
    background-color: #f1f1f1;
    cursor: pointer;
}

.btn:hover {
    background-color: #ddd;
}

.btn.active {
    background-color: #666;
    color: white;
}


</style>
  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="pgAdminPanel.php">Breast Cancer Detection System</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="pgAdminPanel.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pgCustomerInfo.php">Patient Info</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pgChangePassword.php">Change Password</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pgLogout.php">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('../img/home-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h2>Final Output</h2>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <div class="container">
      <div class="row"style=" border:2px solid black;  border-radius: 25px;">
	  
        <div class="col-lg-6 col-md-6 mx-auto" >

			<div class="control-group">
				  <div class="form-group floating-label-form-group controls">
					<label>Radius</label>
					<input type="text" class="form-control" placeholder="Radius" value="<?php echo $rownumber["Radius"]; ?>" id="txtRadius" required data-validation-required-message="Please enter your name."/>
					<p class="help-block text-danger"></p>
				  </div>
            </div>
			
			<div class="control-group">
				  <div class="form-group floating-label-form-group controls">
					<label>Texture</label>
					<input type="text" class="form-control" placeholder="Texture" value="<?php echo $rownumber["Texture"]; ?>" id="txtTexture" required data-validation-required-message="Please enter your email address.">
					<p class="help-block text-danger"></p>
				  </div>
			</div>
			<div class="control-group">
				  <div class="form-group floating-label-form-group controls">
					<label>Perimeter</label>
					<input type="text" class="form-control" placeholder="Perimeter" value="<?php echo $rownumber["Perimeter"]; ?>" id="txtPerimeter" required data-validation-required-message="Please enter your email address.">
					<p class="help-block text-danger"></p>
				  </div>
			</div>
			<div class="control-group">
				  <div class="form-group floating-label-form-group controls">
					<label>Area</label>
					<input type="text" class="form-control" placeholder="Area" value="<?php echo $rownumber["Area"]; ?>" id="txtArea" required data-validation-required-message="Please enter your email address.">
					<p class="help-block text-danger"></p>
				  </div>
			</div>
			<div class="control-group">
				  <div class="form-group floating-label-form-group controls">
					<label>Smoothness</label>
					<input type="text" class="form-control" placeholder="Smoothness" value="<?php echo $rownumber["Smoothness"]; ?>" id="txtSmoothness" required data-validation-required-message="Please enter your email address.">
					<p class="help-block text-danger"></p>
				  </div>
			</div>
			
			
				 
	</div>
	<div class="col-lg-6 col-md-6 mx-auto" >
		<div class="control-group">
				  <div class="form-group floating-label-form-group controls">
					<label>Compactness</label>
					<input type="text" class="form-control" placeholder="Compactness" value="<?php echo $rownumber["Compactness"]; ?>" id="txtCompactness" required data-validation-required-message="Please enter your email address.">
					<p class="help-block text-danger"></p>
				  </div>
			</div>
           
		   <div class="control-group">
				  <div class="form-group floating-label-form-group controls">
					<label>Concavity</label>
					<input type="text" class="form-control" placeholder="Concavity" value="<?php echo $rownumber["Concavity"]; ?>" id="txtConcavity" required data-validation-required-message="Please enter your email address.">
					<p class="help-block text-danger"></p>
				  </div>
			</div>
			<div class="control-group">
				  <div class="form-group floating-label-form-group controls">
					<label>Concave Points</label>
					<input type="text" class="form-control" placeholder="Concave Points" value="<?php echo $rownumber["Concave_Points"]; ?>" id="txtConcavePoints" required data-validation-required-message="Please enter your email address.">
					<p class="help-block text-danger"></p>
				  </div>
			</div>
			<div class="control-group">
				  <div class="form-group floating-label-form-group controls">
					<label>Symmetry</label>
					<input type="text" class="form-control" placeholder="Symmetry" value="<?php echo $rownumber["Symmetry"]; ?>" id="txtSymmetry" required data-validation-required-message="Please enter your email address.">
					<p class="help-block text-danger"></p>
				  </div>
			</div>
			
	</div>
				  
	</div>
	<br>
			<input type="hidden" id="hdnID" value="<?php echo $_REQUEST["caseid"]; ?>">
			<div class="form-group">
              <center><button type="submit" id="btnSubmit" class="btn btn-primary" onclick="saveOutPutDetails();"  style="background-color: #0085a1;;">Save</button></center>
            </div>
			
			<div class="form-group">
              <center><h3 id="msg"></h3> <h3 style="color:#c20000;"id="msg2"></h3></center>
            </div>
			
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12">
			<div class="box box-success">
				<div class="box-header with-border">
					<h3 class="box-title"></h3>
					<div class="box-tools pull-right">
					</div>
				</div>
				<div class="box-body chart-responsive">
					 <div class="chart" id="bar-chart" style="height: 300px; position: relative;"></div>
				</div>
			</div>
		</div>
	</div>		
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12">
			<div class="box box-success">
				<div class="box-header with-border">
					<h3 class="box-title"></h3>
					<div class="box-tools pull-right">
					</div>
				</div>
				<div class="box-body chart-responsive">
					 <div class="chart" id="bar-chart2" style="height: 300px; position: relative;"></div>
				</div>
			</div>
		</div>
	</div>
	<!--<div class="row">
		<div class="col-lg-3 col-md-3 mx-auto">
		</div>
		<div class="col-lg-6 col-md-6 mx-auto" style=" border:2px solid black;  border-radius: 25px;"><br>
			<center><Font size ="5 px" color="blue">The diagnosis of breast tissues is <font color="red">Benign</font></font></center><br>
		</div>
		<div class="col-lg-3 col-md-3 mx-auto">
		</div>
	</div>-->
			
          <!-- Pager -->
        </div>

    <hr>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <ul class="list-inline text-center">
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
            </ul>
            <p class="copyright text-muted">Copyright &copy; Your Website 2020</p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="../css/jquery/jquery.min.js"></script>
    <script src="../css/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="../js/clean-blog.min.js"></script>
	<!-- Morris.js charts -->
	<script src="../graph/raphael.min.js"></script>
	<script src="../graph/morris.min.js"></script>
	<script src="../graph/jquery.flot.js"></script>
	<script src="../graph/jquery.flot.resize.js"></script>
	<script src="../graph/jquery.flot.categories.js"></script>
<script>
$(document).ready(function(){
	
});

	$("#txtName").blur(function(){
	var val=$("#txtName").val();
	if(val!=""){
		if (/^[a-zA-Z ]{2,30}$/.test(val)) {

		} 
		else {
		$("#txtName").val("");
		alert("name must have alphabates");
		console.log("Wrong");
		$("#txtName").focus();

	}
}
});//name validate

// email valid
$("#txtEmail").blur(function(){ 
	var val=$("#txtEmail").val();
	if(val!=""){
		if (/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(val)) {

		} else {
			$("#txtEmail").val("");
			alert("email must be proper");
			console.log("Wrong");
			$("#txtEmail").focus();

		}
	}
});// email valid

$("#txtMobile").blur(function(){
	var val=$("#txtMobile").val();
	if(val!=""){
		if (/^\d{10}$/.test(val)) {

		} else{
			$("#txtMobile").val("");
			alert("Mobile must be ten digits");
			console.log("Wrong");
			$("#txtMobile").focus();

		}
	}
});// Mobile validate

	var flag = 0;
	//alert(flag);
	function saveOutPutDetails(){
	
		if($("#txtRadius").val()==""){
			alert("Enter Radius");
			$("#txtRadius").focus();
		}
		else if($("#txtTexture").val()==""){
			alert("Enter Texture");
			$("#txtTexture").focus();
		}
		else if($("#txtPerimeter").val()==""){
			alert("Enter Perimeter");
			$("#txtPerimeter").focus();
		}
		else if($("#txtArea").val()==""){
			alert("Enter Area");
			$("#txtArea").focus();
		}
		else if($("#txtSmoothness").val()==""){
			alert("Enter Smoothness");
			$("#txtSmoothness").focus();
		}
		else if($("#txtCompactness").val()==""){
			alert("Enter Compactness");
			$("#txtCompactness").focus();
		}
		else if($("#txtConcavity").val()==""){
			alert("Enter Concavity");
			$("#txtConcavity").focus();
		}
		else if($("#txtConcavePoints").val()==""){
			alert("Enter Concave Points");
			$("#txtConcavePoints").focus();
		}
		else if($("#txtSymmetry").val()==""){
			alert("Enter Symmetry");
			$("#txtSymmetry").focus();
		}
		else{ 
		
		//console.log("val");
			if($("#btnSubmit").html()=="Save"){
				$.ajax({
				type:"POST",
				url:"saveOutPutDetails.php",
					data:{caseid:$("#hdnID").val(),radius:$("#txtRadius").val(),texture:$("#txtTexture").val(),perimeter:$("#txtPerimeter").val(),area:$("#txtArea").val(),smoothness:$("#txtSmoothness").val(),compactness:$("#txtCompactness").val(),concavity:$("#txtConcavity").val(),concavepoints:$("#txtConcavePoints").val(),symmetry:$("#txtSymmetry").val()},
					success:function(response){
					},
					complete:function(response){
					//console.log(response);
					var resp=response.responseText;
					//console.log(resp);
						if($.trim(resp)=="M"){
							$("#msg").html("Breast Cancer ");
							$("#msg2").html("Malignant");
							graph();
						}else if($.trim(resp)=="B"){
							$("#msg").html("Breast Cancer ");
							$("#msg2").html("Benign");
							graph();
						}else{
							alert("Details Not Saved");
						}
					}
				});			
			}
		}
		
	} 
	function graph(){
	$("#bar-chart").empty();
	$("#bar-chart2").empty();
	$.ajax({
		type:"POST",
		url:"getSearchReportbygraph.php",
		dataType:"JSON",
		data:{caseid:$("#hdnID").val(),radius:$("#txtRadius").val(),texture:$("#txtTexture").val(),perimeter:$("#txtPerimeter").val(),area:$("#txtArea").val(),smoothness:$("#txtSmoothness").val(),compactness:$("#txtCompactness").val(),concavity:$("#txtConcavity").val(),concavepoints:$("#txtConcavePoints").val(),symmetry:$("#txtSymmetry").val()},
		success:function(response){
				console.log(response);
				var bar = new Morris.Bar({
				  element: 'bar-chart',
				  resize: true,
				  data: response,
				  barColors: ['#d9ad7c', '#a2836e', '#674d3c'],
				  xkey: 'y',
				  ykeys: ['a','b','c'],
				  labels: ['Malignant','Benign','My Value'],
				  hideHover: 'auto'
				});
		}
	});
	$.ajax({
		type:"POST",
		url:"getSearchReportbygraph2.php",
		dataType:"JSON",
		data:{caseid:$("#hdnID").val(),radius:$("#txtRadius").val(),texture:$("#txtTexture").val(),perimeter:$("#txtPerimeter").val(),area:$("#txtArea").val(),smoothness:$("#txtSmoothness").val(),compactness:$("#txtCompactness").val(),concavity:$("#txtConcavity").val(),concavepoints:$("#txtConcavePoints").val(),symmetry:$("#txtSymmetry").val()},
		success:function(response){
				console.log(response);
				var bar = new Morris.Bar({
				  element: 'bar-chart2',
				  resize: true,
				  data: response,
				  barColors: ['#c6bcb6', '#96897f', '#625750'],
				  xkey: 'y',
				  ykeys: ['a','b','c'],
				  labels: ['Malignant','Benign','My Value'],
				  hideHover: 'auto'
				});
		}
	});	

}


function showData(){
var id = getUrlVars()["id"];
	$.ajax({
		type:"POST",
		url:"getCustomerDetails.php",
		data:{ID:id},
		success:function(response){
			$("#tableData").html(response);
		}
	});
}

function editRecord(id){
flag=1;
//alert(flag);
	$("#hdnID").val(id);
	$("#txtName").val($("#Name"+id).html());
	$("#txtMobile").val($("#Mobile"+id).html());
	$("#txtEmail").val($("#Email"+id).html());
	$("#txtAddress").val($("#Address"+id).html());
	$("input[name=Gender][value=" + $("#Gender"+id).html()+ "]").attr('checked', 'checked');
	$("#txtDOB").val($("#DOB"+id).html());
	$("#txtAadharCard").val($("#AadharCard"+id).html());
	$("#selStatus").val($("#Status"+id).html());
	$("#btnSubmit").html("Edit");
}
function deleteRecord(id){
	var ans= confirm("are you sure to delete file");
	if(ans==true){
	$.ajax({
		type:"POST",
		url:"deleteCustomerDetails.php",
		data:{id:id},
		success:function(response){
		if($.trim(response)=="Success"){
			alert("delete successfully");
			showData();
		}
		}
	});
}
}
</script>	
	
  </body>
</html>