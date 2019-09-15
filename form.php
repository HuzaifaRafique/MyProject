<?php

$nameError ="";
$emailError ="";
$genderError ="";
$selectError ="";
$complete = false;
$text = $name = $email = $gender = $select = "";


function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

if(isset($_POST['submit'])){
	
	if(empty($_POST["name"])){
		$nameError = "Your name is required here";
	} else {
		$name = test_input($_POST["name"]);
		
	}
	
	if (empty($_POST["email"])) {
		$emailError = "Your email is required here";
	} else {
		$email = test_input($_POST["email"]);
		
	}
	
	if (empty($_POST["gender"])) {
		$genderError = "Your gender is required here";
	} else {
		$gender = test_input($_POST["gender"]);
	}
	
	if (empty($_POST["select"])) {
		$selectError = "Select your subject here";
	} else {
		$gender = test_input($_POST["select"]);
	}
	
	if($nameError == "" && $emailError == "" && $genderError == "" && $SelectError == ""){
		$text = $name = $email = $gender = $select = "";
		$complete = true;
	}
}


?>



<!DOCTYPE html>
<html>
<head>
<title>Form</title>

<style>
		.error{
            color: red;
        }
</style>

</head>
<body>

<form method="post" action="#">
	<div>
	<input type="text" name="name" placeholder="User_name" value="<?php echo $name; ?>">
	<span class="error">* <?php echo $nameError;?></span>
	</div>
	<div>
	<input type="text" name="email" placeholder="User_Email" value="<?php echo $email; ?>">
	<span class="error">* <?php echo $emailError;?></span>
	</div>
	<div>
	<input type="radio" name="gender" value="male" <?php echo $gender ?>>Male
	<input type="radio" name="gender" value="female" <?php echo $gender ?>>Female
	<span class="error">* <?php echo $genderError;?></span>
	</div>
	<div>
	<select name="select">
		<option value= "" >Select Options</option>
		<option value="option_1">English</option>
		<option value="option_2">Maths</option>
		<option value="option_3">Biology</option>
		<option value="option_4">Chemistry</option>
		<option value="option_4">Physics</option>
	</select>
	<span class="error">* <?php echo $selectError;?></span>
	</div>
	<div>
	<input  type="submit" name="submit" value="Click Here To Submit">
	</div>
</form>


					 <script src="https://code.jquery.com/jquery-3.4.1.min.js">
			  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
			  crossorigin="anonymous"></script>
			  
			  <script src="jquery.validate.min"></script>


<script>
        $('form').validate({
            rules: {
                name: 'required',
                email: {
                    required: true,
                    email: true
                },
                gender: {
                    required: true,
                },
                select: {
                    required: true,        
                }
            }
        });



    </script>

</body>
</html>