<?php

if(isset($_POST['sub'])) {
	 $a=$_POST['math'];
 	 $b=$_POST['account'];
 	 $c=$_POST['comp'];
 	 $d=$_POST['eco'];
 	 $e=$_POST['eng'];
	}

	else{
		@header('location:form.php');
	}
	 $t=$a+$b+$c+$d+$e;
 	 $p=$t/500*100;


		 if(100<=$a||100<=$b||100<=$c||100<=$d||100<=$e){
			echo "Invalid input";
			exit();
		}

 		elseif ($a<40||$b<40||$c<40||$d<40||$e<40) {
			$Result="FAILED";
			
		
		}
		elseif ($a>=40&&$b>=40&&$c>=40&&$d>=40&&$e>=40) {
			$Result= "PASSED";
		}
		

		if ($p>=40&&$p<60) {
			$div="Second";
		}
		elseif ($p>=60&&$p<80) {
			$div="First";
		}
		elseif ($p>=80) {
			$div="Distinction";
		}

		?>
	

<!DOCTYPE html>
<html>
<head>
	<title>Result</title>
	</head>
	<body>
	<table border="solid 3" align="center" width="50%">
	<caption style="font-size: 40px;">Marksheet</caption>
	<tr>
	<th>S.N</th>
	<th>Subject</th>
	<th>Fullmark</th>
	<th>Pass mark</th>
	<th>Obtained marks</th>
</tr>
<tr>
	<th>1.</th>
	<th>Maths</th>
	<th>100</th>
	<th>40</th>
	<th><?php echo $_POST['math']; ?></th>

</tr>
<tr>
	<th>2.</th>
	<th>Account</th>
	<th>100</th>
	<th>40</th>
	<th><?php echo $_POST['account']; ?></th>

</tr>
<tr>
	<th>3.</th>
	<th>Computer</th>
	<th>100</th>
	<th>40</th>
	<th><?php echo $_POST['comp']; ?></th>

</tr>
<tr>
	<th>4.</th>
	<th>Economics</th>
	<th>100</th>
	<th>40</th>
	<th><?php echo $_POST['eco']; ?></th>

</tr>
<tr>
	<th>5.</th>
	<th>English</th>
	<th>100</th>
	<th>40</th>
	<th><?php echo $_POST['eng']; ?></th>

</tr>

<tr align="center">
	<th colspan="4">
	Total</th>
<th>
 	<?php
 	
 	 echo $t;
 	 echo '<tr><th colspan="4">'.'Percentage'.'</th><th>'.'</b>'.$p.'<b>%</b>'.'</th></tr>';
 	 echo'<tr><th colspan="4">'.'Result'.'</th><th>'.$Result.'</th</tr>';
 	  echo'<tr><th colspan="4">'.'Division'.'</th><th>'.$div.'</th</tr>';

 					?></th></tr>
	

</table>
</body>
</html>