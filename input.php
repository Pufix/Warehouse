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
		<table width=100% height=80%>
			<tr width=100% height=100%>
				<td width=50% height=100%><iframe style="border:none;" width=100% height=100% src="forminsert.php"></iframe></td>
				<td width=50% height=100%><iframe style="border:none;" width=100% height=100% src="allproducts.php"></iframe></td>
			</tr>
		</table>
	</body>
</html>