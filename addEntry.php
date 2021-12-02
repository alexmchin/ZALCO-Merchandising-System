<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
		<title>Supermarket Database</title>

		<!-- you can modify this as needed or to your preference -->
		<link href="supermarket.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
		

		<!-- you write this -->
		<script src="supermarket.js" type="text/javascript"></script>
	</head>

	<body>
	<section class = "overview">
		<header>
		<div class="container" id="Head">
			<h1>Supermarket Database</h1>
		</div>
		</header>
	</section>
        
              
                    <div class = "main">
                    <br>
                    <form action="add.inc.php" method="post">
                    Store Name :<br><input class="inputField" type="text"  id="store" name="store" ><br>
                    Planogram:<br><input class="inputField" type="text"  id="picture" name="picture" ><br>


        <button type="submit" name="submit"> Submit </button> 
    </form>
    <div>
        <a id="return" href="marketInterface.html">Return</h5></a>
    </div>

	<?php   
    if (isset($_GET["error"])){
        if($_GET["error"]=="emptyinput"){
            echo "<p> Fill in all fields!</p>";
	}
	else if ($_GET["error"]=="invalidStore"){
    	echo "<p>Choose a proper storename</p>";
	}	
	
	else if ($_GET["error"]=="stmtfailed"){
    	echo "<p>Something went wrong try again</p>";
	}
	else if ($_GET["error"]=="nameTaken"){
    	echo "<p>Choose another storename</p>";
	}
	else if ($_GET["error"]=="none"){
    	echo "<p>Entry Made!</p>";
	}
}
?>


</div>




</body>

</html> 