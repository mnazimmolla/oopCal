<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Calculator by Using OOP PHP</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<style>
	
	.form-control {
		margin-top: 30px;
	}
	.well{
		margin-top:200px;
	}
	.result{
		margin-top: 30px;
	}
	</style>
  </head>
  <body>
	<div class="container well">
	<div class="row">
		<div class="col-md-3">
			<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">

				<div class="form-group">
				
					<input class="form-control" type="number" name="numone" placeholder="Enter The First Number" />
					<input class="form-control" type="number" name="numtwo" placeholder="Enter The Second Number" />
					<input class="form-control" type="submit" value="Get Result" name="result"  />
				
				</div>

			</form>

		</div>
		<div class="col-md-6 result">
		
				<?php 
					require_once("cal.php");
					if(isset($_POST["result"])){
						
						$num1 = $_POST["numone"];
						$num2 = $_POST["numtwo"];
						
						if( empty($num1) or empty ($num2) ){
							echo "<p>Field Is not Empty</p>";
						}else{
							echo "First Number is " .$num1 ." Second Number is " .$num2 ."<br/>";
							$cal= new calculator;
							echo $cal->add($num1, $num2);
							echo $cal->sub($num1, $num2);
							echo $cal->mul($num1, $num2);
							echo $cal->div($num1, $num2);
						}
					}
				?>
		
		</div>
	</div>
	</div>
  </body>
</html>




