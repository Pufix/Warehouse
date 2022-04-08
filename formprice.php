<html>
	<head>
		<link rel="stylesheet" href="phpstyles.css">
	</head>
	<body>
		<center>
			<?php
   ini_set("display_errors", "Off");
   $conn = new mysqli("localhost", "root", "", "depozit_atestat");
   if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
   }
   $idprod = $_REQUEST["idprod"];
   $ok = 1;
   $pret = $_REQUEST["cantitate"];
   if ($idprod != null) {
       $array = explode(" ", $pret);
       ///UPDATE `produse` SET `pret` = '1997' WHERE `produse`.`id` = 1
       $sql =
           "UPDATE `produse` SET `pret`= `pret`" .
           $array[0] .
           "(`pret`*(" .
           $array[1] .
           "/100)) WHERE `produse`.`id` = " .
           $idprod;
       if ($array[0] == "+") {
           mysqli_query($conn, $sql);
       } elseif ($array[1] < 100) {
           mysqli_query($conn, $sql);
       }
       echo "<script>parent.f2.location.reload();</script>";
   }
   ?>
			<form action=formprice.php method= POST/GET style="margin: 0;
			  position: absolute;
			  top: 50%;
			  left: 50%;
			  -ms-transform: translate(-50%, -50%);
			  transform: translate(-50%, -50%);zoom: 1.75; -moz-transform: scale(1.75); -moz-transform-origin: 0 0;"> 
				<table style="background-color:white; border-radius:5px;border:3px solid #ea6153">
					<tr><td>
						Cod produs actualizat:<br>
						<input type="number" id="idprod" name="idprod"><br>
					</td></tr>
					<tr><td>
						Diferenta pret:<br>
						<input type="numer" pattern="[+-]+ +[0-9]+ +%" id="cantitate" name="cantitate" placeholder="± numar %">
					</td></tr>
					<?php
     ini_set("display_errors", "Off");
     $conn = new mysqli("localhost", "root", "", "depozit_atestat");
     if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
     }
     $idprod = $_REQUEST["idprod"];
     $cant = $_REQUEST["cantitate"];
     if ($idprod != null) {
         if ($cant > 0) {
             echo "<tr><td colspan='2'><center>Produs trimis!</center></td></tr>";
         }
     }
     ?>
					<tr><td colspan="2"><center><input type="submit"></center></td></tr>
				</table>
			</form>
		</center>
	</body>
</html>