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
   $cant = $_REQUEST["cantitate"];
   $furn = $_REQUEST["furnizor"];
   $sql =
       "INSERT INTO `comenziprimite` (`id`, `furnizor`, `cantitate`, `idprod`) VALUES (NULL, '";
   $sql .= $furn;
   $sql .= "', '";
   $sql .= $cant;
   $sql .= "', '";
   $sql .= $idprod;
   $sql .= "');";
   //INSERT INTO `comenziprimite` (`id`, `furnizor`, `cantitate`, `idprod`) VALUES (NULL, NULL, NULL, NULL)
   $sql2 = "UPDATE `produse` SET `stock` = `stock`+'";
   $sql2 .= $cant;
   $sql2 .= "' WHERE `produse`.`id` = '";
   $sql2 .= $idprod;
   $sql2 .= "';";
   if ($idprod != null) {
       if ($cant > 0) {
           mysqli_query($conn, $sql);
           mysqli_query($conn, $sql2);
       }
   }
   ?>
			<form action=forminsert.php  method= POST/GET style="margin: 0;
			  position: absolute;
			  top: 50%;
			  left: 50%;
			  -ms-transform: translate(-50%, -50%);
			  transform: translate(-50%, -50%);zoom: 1.75; -moz-transform: scale(1.75); -moz-transform-origin: 0 0;"> 
				<table style="background-color:white; border-radius:5px;border:3px solid #27ae60">
					<tr><td>
						Cod produs primit:<br>
						<input type="number" id="idprod" name="idprod"><br>
					</td></tr>
					<tr><td>
						Cantitate produs primit:<br>
						<input type="number" id="cantitate" name="cantitate">
					</td></tr>
					<tr><td>
						Furnizor:<br>
						<input type="text" id="furnizor" name="furnizor">
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
             echo "<tr><td colspan='2'><center>Produs primit!</center></td></tr>";
         }
     }
     ?>
					<tr><td colspan="2"><center><input type="submit"></center></td></tr>
				</table>
			</form>
		</center>
	</body>
</html>