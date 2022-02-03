<html>
	<head>
		<title>
			Primire Produse
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
		<form action=rezultat_inserare_produs_nou.php  method= POST/GET>
            <label for="codprod">Id Produs:</label>
            <input type="text" id="codprod" name="codprod"><br>
            <label for="numeprod">Nume Produs:</label>
            <input type="text" id="numeprod" name="numeprod"><br>
            <label for="codfurn">Id Furnizor</label>
            <input type="text" id="codfurn" name="codfurn"><br>
            <input type="submit" value="submit">
        </form>
	</body>
</html>