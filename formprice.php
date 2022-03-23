<html>
	<head>
		<link rel="stylesheet" href="phpstyles.css">
	</head>
	<body>
		<center>
			<?php
				ini_set('display_errors', 'Off');
				$conn = new mysqli("localhost","root","","depozit_atestat");    
				if ($conn->connect_error) {
				  die("Connection failed: " . $conn->connect_error);
				}
				$idprod = $_REQUEST['idprod'];
				$ok = 1;
				$pret = $_REQUEST['cantitate'];

				if($idprod != NULL)
					if($cant >0){
						mysqli_query($conn, $sql);
						mysqli_query($conn, $sql2);
						mysqli_query($conn, $sql3);
						echo '<script>parent.f2.location.reload();</script>';
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
						<input type="numer" id="cantitate" name="cantitate" placeholder="±*%">
					</td></tr>
					<?php
						ini_set('display_errors', 'Off');
						$conn = new mysqli("localhost","root","","depozit_atestat");   
						if ($conn->connect_error) {
						  die("Connection failed: " . $conn->connect_error);
						}
						$idprod = $_REQUEST['idprod'];
						$cant = $_REQUEST['cantitate'];
						if($idprod != NULL)
							if($cant >0){
								echo "<tr><td colspan='2'><center>Produs trimis!</center></td></tr>";
							}
					?>
					<tr><td colspan="2"><center><input type="submit"></center></td></tr>
				</table>
			</form>
		</center>
	</body>
</html>