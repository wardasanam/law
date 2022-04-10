<?php include ("includes/header.php"); ?>
<html>
<head>

<style type="text/css">
	.inputFields{
		padding: 15px;
		color: #ffffff;
		height: 25px;
	}
	
	.inputFields input{
		width: 100%;
		border-radius: 10px;
		padding-left: 20px;
		height: 25px;
	}
	.inputFields input:focus{
		width: 100%;
		height: 25px;
		border-radius: 10px;
		border:1px solid purple; 
		outline: none;
		/*background-color: yellow;*/
	}
	.inputDiv{
		width: 400px;
		float: left;
	}
</style>
</head>
<body>
<div style="position: absolute; z-index: -999; height: auto;">
		<img style="width: 100%; height: auto;" src="images/skills-bg.jpg">
	</div>
	<!--body-Start-->
	<div style="overflow-x: hidden; overflow-y: hidden;" id="body">
		<!--leftBar-start-Start-->
		<?php include("includes/sidebar.php"); ?>
		<!--leftBar-start-End-->

		<!--RightBar-start-Start-->
		<div id="rightbar" class="section ">
			<h1 style="padding: 20px; color: #ffffff;">contact us</h1>
			<div id="reg_form">
				<form method="POST" action="ThankYou.php">
					
					<div class="inputFields">
						<div style="float: left; width: 150px; font-size: 20px;"><label>Name</label></div>
						<div class="inputDiv">
						<input required type="text" id="name" name="cname">
						<span id="name_error" style="font-size:12px; color: red;"></span>
						</div>
					</div>

					<div style="height: 45px;" class="inputFields">
					<div style="float: left; width: 150px; font-size: 20px;">
						<label>Email</label>
					</div>
					<div class="inputDiv">
						<input required id="address" type="email" name="caddress">
						<span id="address_error" style="font-size:12px; color: red;"></span>
					</div>
					</div>

					<div class="inputFields">
					<div style="float: left; width: 150px; font-size: 20px;">
						<label>Text</label>
					</div>
					<textarea placeholder="enter your message" style="height: 100px !important; resize: none; text-align: justify; margin:auto; width: 400px; border-radius: 7px;" class="inputfields">
						 </textarea>


					<input type="button" name="button" value="submit" style="float: right; 
					background-color: #ab0769; color: white; width: 70px; margin-top: 150px; margin-left: 50px; padding: 3px;">
					
				</form>
			</div>
		</form>
	</div>
</div>
</div>
</body>
<?php include ("includes/footer.php"); ?>

</html>

			
		
		<!--RightBar-start-End-->
		
	</div>



