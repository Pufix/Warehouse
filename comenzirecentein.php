<html>
	<head><link rel="stylesheet" href="phpstyles.css"></head>
	<body style="padding: 0px;">
		<center>
        <table width=100% class="tabelprod" style="zoom: 1.75; -moz-transform: scale(1.75); -moz-transform-origin: 0 0;" cellspacing=0>
            <tr class="headtabelprod">
				<th colspan="3">Produse primite recent</th>
			</tr>
			<tr class="headtabelprod">
                <th>
                    Denumire Produs
                </th>
                <th>
                    Cantitate
                </th>
				<th>
					Furnizor
				</th>
            </tr>
            <br>
            <?php
            function custom_echo($x, $length)
            {
                if (strlen($x) <= $length) {
                    echo $x;
                } else {
                    $y = substr($x, 0, $length) . "...";
                    echo $y;
                }
            }
            $conn = new mysqli("localhost", "root", "", "depozit_atestat");
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $sql =
                "SELECT comenziprimite.idprod AS ID_Produs , comenziprimite.cantitate AS Cantitate , comenziprimite.furnizor AS Destinatar FROM `comenziprimite` ORDER BY `comenziprimite`.`id` DESC";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr><td>";
                    ///echo "" . $row["ID_Produs"] . "";
                    $sql2 =
                        "SELECT produse.denumire FROM produse WHERE produse.id =";
                    $sql2 .= $row["ID_Produs"];
                    custom_echo(
                        $conn->query($sql2)->fetch_assoc()["denumire"],
                        90
                    );
                    echo ".</td><td>";
                    echo "" . $row["Cantitate"] . "";
                    echo ".</td><td>";
                    echo "" . $row["Destinatar"] . "";
                    echo "</th></tr>";
                };
            } else {
                echo "0 results";
            }
            ?>
		</table></center>
	</body>
	
</html>