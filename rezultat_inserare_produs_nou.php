<html>
    <head>
		<title></title>
		<link rel="stylesheet" href="phpstyles.css">
    </head>
    <body>
		<div class="scrollmenu">
		  	<a href="index.php">Acasa</a>
		  	<a href="tabel_produse.php">Produse actuale</a>
		  	<a href="input.php">Primire produse</a>
		 	<a href="output.php">Trimitere Produse</a>
			<a href="produs_nou.php">Produs nou</a>
		</div>
        <?php
            $conn = new mysqli("localhost","root","","magazin");    
            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }
            $idprod = $_REQUEST['codprod'];
            $nameprod = $_REQUEST['numeprod'];
            $idfurn = $_REQUEST['codfurn'];
            $sql = "INSERT INTO produse (codp, denumire, codf) VALUES ($idprod, '$nameprod', $idfurn)";
            if(mysqli_query($conn, $sql)){
                echo "<h3>Date actualizate cu succes!</h3>";
            } else{
                echo "ERROR: " 
                    . mysqli_error($conn);
            }
        ?>
    </body>
</html>