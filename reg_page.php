<?php include ("includes/header.php"); ?>
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

<div style="position: absolute; z-index: -999; height: auto;">
		<img style="width: 100%; height: auto;" src="images/bg.jpg">
	</div>
	<!--body-Start-->
	<div style="overflow-x: hidden; overflow-y: hidden;" id="body">
		<!--leftBar-start-Start-->
		<?php include("includes/sidebar.php"); ?>
		<!--leftBar-start-End-->

		<!--RightBar-start-Start-->
		<div id="rightbar" class="section ">
			<h1 style="padding: 20px; color :#ab0769; font-weight: bolder;">Registration</h1>
			<div id="reg_form">
				<form method="POST" action="ThankYou.php">
					<div class="inputFields">
						<div style="float: left; width: 150px; font-size: 20px;">
							<label>Student ID</label>
						</div>
						<div class="inputDiv">
							<input required type="number" name="stdId">
						</div>
					</div>
					<div class="inputFields">
						<div style="float: left; width: 150px; font-size: 20px;"><label>Name</label></div>
						<div class="inputDiv">
						<input required type="text" id="name" name="name">
						<span id="name_error" style="font-size:12px; color: red;"></span>
						</div>
					</div>

					<div class="inputFields">
					<div style="float: left; width: 150px; font-size: 20px;">
						<label>Father Name</label>
					</div>
					<div class="inputDiv">
						<input required type="text" id="fname" name="fname">
						<span id="fname_error" style="font-size:12px; color: red;"></span>
					</div>
					</div>


					<div style="height: 45px;" class="inputFields">
					<div style="float: left; width: 150px; font-size: 20px;">
						<label>Address</label>
					</div>
					<div class="inputDiv">
						<input required id="address" style="height: 50px;" type="text" name="address">
						<span id="address_error" style="font-size:12px; color: red;"></span>
					</div>
					</div>


					

					<div class="inputFields">
					<div style="float: left; width: 150px; font-size: 20px;">
						<label>CNIC</label>
					</div>
					<div class="inputDiv">	
						<input required id="cnic" type="text" name="cnic">
						<span id="cnic_error" style="font-size:12px; color: red;"></span>
					</div>
					</div>

					<div class="inputFields">
					<div style="float: left; width: 150px; font-size: 20px;">
						<label>Date</label>
					</div>
					<div class="inputDiv">	
						<input  required id="dob" type="text" name="dob">
						<span id="dob_error" style="font-size:12px; color: red;"></span>
					</div>
					</div>

					<div class="inputFields">
					<div style="float: left; width: 150px; font-size: 20px;">
						<label>Gender</label>
					</div>
					<div class="inputDiv">	
						<input  required type="text" name="gender">
					</div>
					</div>

					<div style="clear: both;"></div>
					<div style="float: right;">
						<input style="background-color: green; color: #ffffff; padding: 10px; margin-right:30px; cursor: pointer; border:none;" type="submit" name="submit" value="Save">
						<input style="background-color: purple; color: #ffffff; padding: 10px; margin-right:30px; cursor: pointer; border:none;" type="reset" name="reset" value="Reset">
					</div>
				</form>
			</div>
		</div>
		<!--RightBar-start-End-->
		
	</div>
	<!--body-End-->

<?php include ("includes/footer.php"); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $("#name").keypress(function(event){
        var inputValue = event.which;
        var namee = $("#name").val();
        var namelength=namee.length;
        // allow letters and whitespaces only.
        if(!(inputValue >= 65 && inputValue <= 122) && (inputValue != 32 && inputValue != 0)) { 
          $("#name_error").html("Please Enter Valid Name");
            event.preventDefault(); 
        }
        else if(namelength>150){
        	alert("Limit exceeded");
        	return false;
        }
        else{
          $("#name_error").html("");
        }
    });


     $("#fname").keypress(function(event){
        var inputValue = event.which;
        // allow letters and whitespaces only.
        if(!(inputValue >= 65 && inputValue <= 122) && (inputValue != 32 && inputValue != 0)) { 
          $("#fname_error").html("Please Enter Valid Name");
            event.preventDefault(); 
        }
         else if(namelength>150){
        	alert("Limit exceeded");
        	return false;
        }

        else{
          $("#fname_error").html("");
        }
    });



    

$("#address").keypress(function (e) {
            var keyCode = e.keyCode || e.which;
 
            $("#address_error").html("");
 
            //Regex for Valid Characters i.e. Alphabets and Numbers.
            var regex = /^[a-zA-Z0-9 ]*$/;
 
            //Validate TextBox value against the Regex.
            var isValid = regex.test(String.fromCharCode(keyCode));
            if (!isValid) {
                $("#address_error").html("Only Alphabets and Numbers allowed.");
            }else{
	          $("#address_error").html("");
	        }
 
            return isValid;
        });


$("#cnic").keypress(function (e) {
            var keyCode = e.keyCode || e.which;
 
            $("#cnic_error").html("");
 			var cnic = $("#cnic").val();
 			var cniclength = cnic.length;
             var regex = /^[0-9-]*$/;
 
            //Validate TextBox value against the Regex.
            var isValid = regex.test(String.fromCharCode(keyCode));
            if (!isValid) {
                $("#cnic_error").html("Only Digits and Dashes allowed.");
            }else if(cniclength > 17){
            	$("#cnic_error").html("length can't be greater than 17 Characters");
            	return false;
            }else{
            	$("#cnic_error").html("");
            }
 
            return isValid;
        });


$("#dob").keypress(function (e) {
            var keyCode = e.keyCode || e.which;
 			var dob = $("#dob").val()
 			var doblength = dob.length;
            $("#dob_error").html("");
 
             var regex = /^[0-9-]*$/;
 
            //Validate TextBox value against the Regex.
            var isValid = regex.test(String.fromCharCode(keyCode));
            if (!isValid ) {
                $("#dob_error").html("Only Digits and Dashes allowed.");
            }else if(doblength > 17){
            	$("#dob_error").html("length can't be greater than 17 Characters");
            	return false;
            }else{
            	 $("#dob_error").html("");
            }
 
            return isValid;
        });
});






</script>
