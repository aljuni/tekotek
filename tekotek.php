<!DOCTYPE html>
<html>
<head>
	<title>TEKOTEK</title>
</head>
<body>
	<?php
		echo '<p style="font-family:"Helvetica";">Tekotek-kotek anak ayam turun 100</p> <br>';
		$tekotek = 99;
		for ($i=$tekotek;$i > 0 ; $i--) { 
			if($i % 2 == 0){
				echo '<p style=font-family:"Helvetica";color:brown;>'."Mati satu tinggal $i</p>";
				echo "<br>";
			}else{
				echo '<p style=font-family:"Helvetica";color:orange;>'."Mati satu tinggal $i</p>";
				echo "<br>";
			}
			//if($i % 2 == 0)
              //  {echo "<font face ='Helvetica'><font color='#964B00'>Mati satu tinggal $i</font>"; echo "<br>";}
            //else
             //   { echo "<font face ='Helvetica'><font color='#FF8hC00'>Mati satu tinggal $i</font>"; echo "<br>";}
           
		}
	?>
</body>
</html>