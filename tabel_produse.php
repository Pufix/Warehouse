<html>
    <head>
        <title>Tabel produse</title>
        
		<link rel="stylesheet" href="phpstyles.css">
    </head>
    <body>
		<div class="navbar"><center>
		  	<a href="index.php">Home</a>
		  	<div class="dropdown">
				<button class="dropbtn">Produse</button>
				<div class="dropdown-content">
					<?php
						$conn = new mysqli("localhost","root","","depozit_atestat");    
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
		</center></div><center>
        <table class="tabelprod" style="zoom: 2; -moz-transform: scale(2); -moz-transform-origin: 0 0;" cellspacing=0>
            <tr class="headtabelprod">
                <th>
                    Id
                </th>
                <th>
                    Nume
                </th>
                <th>
                    Pret
                </th>
                <th>
                    Producator
                </th>
				<th>
					Stock
				</th>
				<th>
					Categorie
				</th>
            </tr>
            <br>
            <?php
                $conn = new mysqli("localhost","root","","depozit_atestat");    
                if ($conn->connect_error) {
                  die("Connection failed: " . $conn->connect_error);
                }
				$categorie = $_REQUEST['categorie'];
                $sql = "SELECT * FROM produse WHERE produse.categorie='";
				$sql .= $categorie;
				$sql .="'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0)
                  while($row = $result->fetch_assoc()) {
                    echo "<tr><td>";
                    echo "" . $row["id"] . "";
                    echo ".</td><td>";
					echo "" . $row["denumire"] . "";
                    echo "</td><td>";
                    echo "" . $row["pret"] ." RON";
                    echo "</td><td>";
                    echo "" . $row["producator"] ."";
                    echo "</td><td>";
					echo "" . $row["stock"] ."";
                    echo "</td><td>";
                    echo "" . $row["categorie"] ."";
                    echo "</th></tr>";
                  }
                  else 
                    echo "0 results";
            ?>
		</table></center>
    </body>
</html>