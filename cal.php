<?php

	class calculator{
		
		public function add($num1, $num2){
			echo "Addition is: " .($num1+$num2) ."<br/>";
			
		}
		
		public function sub($num1, $num2){
			echo "Subtraction is: " .($num1-$num2) ."<br/>";
		}
		
		public function mul($num1, $num2){
			echo "Multiplication is: " .($num1*$num2) ."<br/>";
		}
		
		public function div($num1, $num2){
			echo "Division is: " .($num1/$num2) ."<br/>";
		}

	}


?>