<html>
	<head>
		<title>
			Home
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
		<table class="tabelindex"><tr >
			<td>
				<center>
					<table class="tabelindexmic">
						<th style="background: #324960; color:#ffffff">
							Comenzi recente
						</th>
						<tr>
							<td>da</td>
						</tr>
						<tr>
							<td>da</td>
						</tr>
					
					
					</table>
				
				
				
				</center>
				<?php
					$conn = new mysqli("localhost","root","12mii2021","magazin");    
					if ($conn->connect_error) {
						die("Connection failed: " . $conn->connect_error);
					}

				?>
			</td><td>
				<center	>
					<table class="tabelindexmic">
						<th style="background: #324960; color:#ffffff">
							Comenzi recente
						</th>
						<tr>
							<td>da</td>
						</tr>
						<tr>
							<td>da</td>
						</tr>
					
					
					
					</table>
				
				
				
				</center>
			
			</td>
		</tr></table>
	</body>
</html>