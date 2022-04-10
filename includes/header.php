<?php include("includes/connection.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Law college</title>
	<style type="text/css">
		body{
			margin:0px;
			padding: 0px; 
		
		}
		#mainContainer{
			width: 100%;
			margin:0px;
			padding: 0px;
		}

		#mainContainer #header{
			height: 100px;
			width: 100%;
			margin:0px;
			padding: 0px;
			background-color: #ab0769;
		}

		#mainContainer #header h1{
			margin: 0px;
			padding: 0px;
			text-align: center;
			color: #ffffff;
			line-height: 100px;
		}

		#mainContainer #body{
			min-height: 400px;
			width: 100%;
			margin:0px;
			padding: 0px;
			overflow-y: hidden;
			/*background-color: blue;*/
		}
		#mainContainer #body .section{
			float: left;
			height: 500px;



			/*background-color: yellow;*/
		}



		#mainContainer #body #leftbar{
			width: 25%;
			height: 100%;
			
		}

		#mainContainer #body #leftbar ul{
			width: 100%;
			height: 100%;
			list-style: none;
			padding: 0px;
			margin:0px;
			background-color: #dea2be;

		}

		#mainContainer #body #leftbar ul li{
			
			
			border-bottom:1px solid #ab0769;

			
		}

		#mainContainer #body #leftbar ul li:hover{
			
			border-bottom:0px solid ;
			
		}
		#mainContainer #body #leftbar ul li a{
		display: block;
		padding: 10px;	
		}
			#mainContainer #body #leftbar ul li a:hover{
			color:#d5d5d5;
			display: block;
			text-decoration: underline;
			background-color:#ab0769
			
		}

		#mainContainer #body #leftbar ul li a{
			color:#ab0769
			display: block;
			text-decoration: none;
			
		}

		#mainContainer #body #rightbar{
			width: 70%;
			
		}
		.orange{
			background-color: orange !important;
		}


		.yellow{
			background-color: yellow;
		}
		


		

		#mainContainer #footer{
			height: 100px;
			width: 100%;
			margin:0px;
			padding: 0px;
			background-color: #ab0769;
		}
		
	</style>
</head>
<body>
<!--MianContainer-Start-->
<div id="mainContainer">

	<!--header-Start-->
	<div id="header">

		<h1>Law College</h1>
	</div>
	<!--header-End-->
