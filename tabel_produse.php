<html>
    <head>
        <title>Tabel produse</title>
        <style>
        table, th, td {
          border: 1px solid pink;
        }
		</style>
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
        <table>
            <tr>
                <th>
                    id
                </th>
                <th>
                    nume
                </th>
                <th>
                    codfurn
                </th>
                <th>
                    numefurn
                </th>
            </tr>
            <br>
            <?php
                $conn = new mysqli("localhost","root","12mii2021","magazin");    
                if ($conn->connect_error) {
                  die("Connection failed: " . $conn->connect_error);
                }
                $sql = "SELECT * FROM produse";
                $result = $conn->query($sql);
                if ($result->num_rows > 0)
                  while($row = $result->fetch_assoc()) {
                    echo "<tr><th>";
                    echo "" . $row["codp"] . "";
                    echo "</th><th>";
                    echo "" . $row["denumire"] ."";
                    echo "</th><th>";
                    echo "" . $row["codf"] ."";
                    echo "</th><th>";
                    $codfurn = $row["codf"];
                    $sql2 ="SELECT * FROM furnizori WHERE `codf` = $codfurn";
                    $result2 = $conn->query($sql2);
                    if($result2 ->num_rows ==0)
                        echo " error name furn";
                    else
                        echo "" . $result2->fetch_assoc()["nume"] . "";
                    echo "</th></tr>";
                  }
                  else 
                    echo "0 results";
            ?>
		</table>
    </body>
</html>