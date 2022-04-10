<?php include ("includes/header.php"); ?>
<?php 

if(isset($_POST['submit'])){
	$stdId = $_POST['stdId'];
	$name = $_POST['name'];
	 $fname = $_POST['fname'];

	 $address = $_POST['address'];
	$cnic = $_POST['cnic'];
	 $dob = $_POST['dob'];


	 $gender = $_POST['gender'];

	 $sql = "INSERT INTO `student` (`std_id`,`name`,`father_name`,`cnic`,`address`,`date`,`gender`) VALUES ('$stdId','$name','$fname','$cnic','$address','$dob','$gender')";
	$result = mysqli_query($con,$sql);
}else{
	echo "Access Denied";
	die;
}

 ?>
<style type="text/css">
	body{
		background-color: #cccccc;
	}
	.purple
	{
		color: purple;
		font-size: bolder;
	}
</style>


	<!--body-Start-->
	<div style="overflow-x: hidden; overflow-y: hidden;" id="body">
		<!--leftBar-start-Start-->
		<?php include("includes/sidebar.php"); ?>
		<!--leftBar-start-End-->

		<!--RightBar-start-Start-->
		<div id="rightbar" class="section ">
			<h1 style="padding: 20px;" class="purple">Thanks For Registration</h1>
			
		</div>
		<!--RightBar-start-End-->
		
	</div>
	<!--body-End-->

<?php include ("includes/footer.php"); ?>