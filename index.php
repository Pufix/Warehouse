<html>
	<head>
		<title>
			Home
		</title>
		<link rel="stylesheet" href="phpstyles.css">
	</head>
	<body>
		<div class="scrollmenu">
		  	<a href="index.php">Home</a>
		  	<a href="tabel_produse.php">Produse actuale</a>
		  	<a href="input.php">Primire produse</a>
		 	<a href="output.php">Trimitere produse</a>
			<a href="produs_nou.php">Produs nou</a>
		</div>
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