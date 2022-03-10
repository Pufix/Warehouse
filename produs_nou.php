<html>
	<head>
		<title>
			Primire Produse
		</title>
		<link rel="stylesheet" href="phpstyles.css">
	</head>
	<body>
		<div class="navbar"><center>
		  	<a href="index.php">Home</a>
		  	<div class="dropdown">
				<button class="dropbtn">Produse</button>
				<div class="dropdown-content">
					<?php
						$conn = new mysqli("localhost","root","12mii2021","depozit_atestat");    
						if ($conn->connect_error) {
						  die("Connection failed: " . $conn->connect_error);
						}
						$sql="SELECT DISTINCT produse.categorie FROM produse";
						$result = $conn->query($sql);
						if ($result->num_rows > 0)
						  while($row = $result->fetch_assoc()) {
							echo "<a href='tabel_produse.php?categorie=". $row["categorie"] ."'>". $row["categorie"] ."</a>";
						  }
						  else 
							echo "0 results";


					?>
				</div>
			</div>
		  	<a href="input.php">Primire produse</a>
		 	<a href="output.php">Trimitere produse</a>
			<a href="produs_nou.php">Produs nou</a>
		</center></div>
		<br><br>
		<center>
			<?php
				ini_set('display_errors', 'Off');
				$conn = new mysqli("localhost","root","12mii2021","depozit_atestat");    
				if ($conn->connect_error) {
				  die("Connection failed: " . $conn->connect_error);
				}
				$den = $_REQUEST['denum'];
				$cant = $_REQUEST['cant'];
				$prod = $_REQUEST['prod'];
				$pret = $_REQUEST['pret'];
				$cat =$_REQUEST['categ'];
				if($den != NULL){
					$sql = "INSERT INTO `produse` (`id`, `denumire`, `pret`, `producator`, `categorie`, `stock`) VALUES (NULL, '";
					$sql .=$den;
					$sql .="','";
					$sql .=$pret;
					$sql .="','";
					$sql .=$prod;
					$sql .="','";
					$sql .=$cat;
					$sql .="','";
					$sql .=$cant;
					$sql .="');";
					mysqli_query($conn, $sql);
				}
			?>
			<form action=produs_nou.php  method= POST/GET style="margin: 0;
			  position: absolute;
			  top: 50%;
			  left: 50%;
			  -ms-transform: translate(-50%, -50%);
			  transform: translate(-50%, -50%);zoom: 2; -moz-transform: scale(2	); -moz-transform-origin: 0 0;"> 
				<table style="background-color:white; border-radius:5px;border:3px solid #2980b9">
					<tr wight=100%><td wight=100%>
						Nume produs nou:<br>
						<textarea wight=100% id="denum" name="denum"></textarea><br>
					</td></tr>
					<tr><td>
						Cantitate initiala:<br>
						<input type="number" id="cant" name="cant">
					</td></tr>
					<tr><td>
						Pret:<br>
						<input type="number" id="pret" name="pret">
					</td></tr>
					<tr><td>
						Producator:<br>
						<input type="text" id="prod" name="prod">
					</td></tr>
					<tr><td>
						Categorie:<br>
						<input type="text" id="categ" name="categ">
					</td></tr>
					<?php
						ini_set('display_errors', 'Off');
						$conn = new mysqli("localhost","root","12mii2021","depozit_atestat");   
						if ($conn->connect_error) {
						  die("Connection failed: " . $conn->connect_error);
						}
						$idprod = $_REQUEST['denum'];
						if($idprod != NULL)
							if($cant >0){
								echo "<tr><td colspan='2'><center>Produs primit!</center></td></tr>";
							}
					?>
					<tr><td colspan="2"><center><input type="submit"></center></td></tr>
				</table>
			</form>
		</center>
		
		
	</body>
</html>