<html>
	<head><link rel="stylesheet" href="phpstyles.css"></head>
	<body style="padding: 0px;">
		<center>
        <form target="_self" style="display: inline;">
        <div style="font-size: 5vh;color: white;">Categorii produse:</div>
        <select style="font-size: 5vh;"name="cat" id="cat">
        <?php
            ini_set('display_errors','no');
						$conn = new mysqli("localhost","root","","depozit_atestat");    
						if ($conn->connect_error) {
						  die("Connection failed: " . $conn->connect_error);
						}
            $cat=$_REQUEST['cat'];
                if($cat!=NULL&&$cat!="NULL")
                  echo "<option value='".$cat."'>".$cat."</option><option value='NULL'>Toate</option>";
                else
                  echo "<option value='NULL'>Toate</option>";
						$sql="SELECT DISTINCT produse.categorie FROM produse";
						$result = $conn->query($sql);
						if ($result->num_rows > 0)
						  while($row = $result->fetch_assoc()) {
							echo "<option value='".$row["categorie"]."'>".$row["categorie"] ."</option>";
						  }
						  else 
							echo "0 results";
					?>
        </select><input type="submit" value="Actualizeaza" style="font-size:5vh">
      </form>
        <table width=100% class="tabelprodred" style="zoom: 1.75; -moz-transform: scale(1.75); -moz-transform-origin: 0 0;" cellspacing=0>
            <tr class="headtabelprodred">
                <th>
                    Id
                </th>
				<th>
					Stock
				</th>
                <th>
                    Nume
                </th>
            </tr>
            <br>
            <?php
    $conn = new mysqli("localhost","root","","depozit_atestat");    
                if ($conn->connect_error) {
                  die("Connection failed: " . $conn->connect_error);
                }
                ini_set('display_errors','no');
                $cat=$_REQUEST['cat'];
                if($cat!=NULL&&$cat!="NULL")
                  $sql = "SELECT * FROM produse WHERE produse.categorie = '".$cat."'";
                else
                  $sql = "SELECT * FROM produse";
                $result = $conn->query($sql);
                if ($result->num_rows > 0)
                  while($row = $result->fetch_assoc()) {
                    echo "<tr><td>";
                    echo "" . $row["id"] . "";
                    echo ".</td><td>";
					echo "" . $row["stock"] . "";
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