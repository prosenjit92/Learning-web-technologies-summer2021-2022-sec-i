<?php
	$num1= 10;
	$num2 = 60;
	$num3 = 20;
	if($num1 > $num2 && $num1 > $num3)
	{
		echo $num1;
		echo " is the Largest number.";
	}
	else if($num2>$num3 && $num2>$num1)
	{
		echo $num2;
		echo " is the Largest number.";
	}
	else
	{
		echo $num3;
		echo " is the Largest number.";
	}
?> 