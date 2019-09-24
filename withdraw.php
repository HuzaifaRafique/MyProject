
<?php

$depositeErr = '';
$wdrawErr = '';


			if(isset($_POST['submit'])){
					$deposite = ($_POST['balance']);
					if(!empty($_POST['deposite'])){
						if(!empty($_POST['deposite'])){
			$deposite=($_POST['deposite'])+($_POST['balance']);
			
		}
		
		if(!empty($_POST['withdraw'])){
			if(($_POST['withdraw'])<=$deposite){
				$deposite=$deposite-($_POST['withdraw']);
				
				
			}
			else{
				echo 'You have insufficient balance';
			}
			
		}
		echo "Balance  " . $deposite;
	
	
	if(empty($_POST['deposite' && 'withdraw']) && empty($_POST['withdraw'])){
		$depositeErr = $wdrawErr = "Any field is required";
	
	}
			}
					}
								
?>
<!DOCTYPE html>
<html>
<head>
<style>
	.error{
		color:red;
	}
</style>
</head>
<body>

<form method="POST" action="#">

	<div>
		<label id="lblDeposit">Deposite: </label>
		<input type="number" autocomplete="off" name="deposite" placeholder="Enter Your Deposite" value="<?php echo $deposite;?>">
		<span class="error">* <?php echo $depositeErr;?></span>
	</div>
	<div>
	<label id="lblWithdraw">Withdraw:</label>
		<input type="number" autocomplete="off" name="withdraw" placeholder="Enter Your Withdraw" value="<?php echo $withdraw;?>">
		<span class="error">* <?php echo $wdrawErr;?></span>
	</div>
	<div>
		<input type="hidden" name="balance" value="<?php echo $balance;?>">
	</div>
	<div>
		<input type="submit" name="submit" value="submit">
	</div>
</form>


					 <script src="https://code.jquery.com/jquery-3.4.1.min.js">
			  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
			  crossorigin="anonymous"></script>
			  
			  <script src="jquery.validate.min"></script>


<script>
        $('form').validate({
            rules: {
                deposite: 'required',
                withdraw: {
                    required: true,
                    withdraw: true,
                }
            }
        });
    </script>




 
</body>
</html>