<!DOCTYPE html>
<html>
<head>
	<title>TEKOTEK</title>
</head>
<body>
	<?php
		echo "<font face ='Helvetica'>Tekotek-kotek anak ayam turun 100</font> <br>";
		$tekotek = 99;
		for ($i=$tekotek;$i > 0 ; $i--) { 
			//echo "<font-family : Helvetica>"
			if($i % 2 == 0)
                {echo "<font face ='Helvetica'><font color='#964B00'>Mati satu tinggal $i</font>"; echo "<br>";}
            else
                { echo "<font face ='Helvetica'><font color='#FF8C00'>Mati satu tinggal $i</font>"; echo "<br>";}
           
		}
	?>
</body>
</html>