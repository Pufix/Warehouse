<html>
	<head><link rel="stylesheet" href="phpstyles.css"></head>
	<body style="padding: 0px;">
		<center>
        <table width=100% class="tabelprod" style="zoom: 1.75; -moz-transform: scale(1.75); -moz-transform-origin: 0 0;" cellspacing=0>
            <tr class="headtabelprod">
                <th>
                    Id
                </th>
                <th>
                    Nume
                </th>
            </tr>
            <br>
            <?php
                $conn = new mysqli("localhost","root","12mii2021","depozit_atestat");    
                if ($conn->connect_error) {
                  die("Connection failed: " . $conn->connect_error);
                }
                $sql = "SELECT * FROM produse";
                $result = $conn->query($sql);
                if ($result->num_rows > 0)
                  while($row = $result->fetch_assoc()) {
                    echo "<tr><td>";
                    echo "" . $row["id"] . "";
                    echo ".</td><td>";
					echo "" . $row["denumire"] . "";
                    echo "</th></tr>";
                  }
                  else 
                    echo "0 results";
            ?>
		</table></center>
	</body>
	
</html>