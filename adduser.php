<!DOCTYPE html>
<html>
        <head>
                <title>Zalco Merchandising Manager</title>
                <link rel = "stylesheet" type = "text/css" href = "style.css" />
                
                
        </head>
       
        <body>
            
                <!--Header-->
                <div class = "header">
                        <h1><img class="icon" id="homeimg" src="logo.jpg" alt="home icon"></h1>
                </div>
                <!--Menu/Sidebar-->
    <div class="left">
    <a id="supermarket" href="adduser.php"><h5><img class="side-icon" id="superimg" src="adduser.png" alt="home icon">Add User</h5></a>
    <a id = "addinv" href="scripts/addinv.php"><h5><img class="side-icon" id="addinv" src="inv.png" alt="add inventory">Inventory</h5></a>
    <a id = "super" href="scripts/super.php"><h5><img class="side-icon" id="superm" src="supermarket.png" alt="supermarket info">Supermarket</h5></a>
    <a id = "expire" href="scripts/expire.php"><h5><img class="side-icon" id="expiren" src="expire.png" alt="product expire">Product Expiry Report</h5></a>

    <a id = "logout" href="login.php"><h5><img class="side-icon" id="logoutimg" src="logout.png" alt="logout icon">Logout</h5></a>
</div>
                
              
                    <div class = "main">
                    <br>
                    <form action="add.inc.php" method="post">
                    Full Name :<br><input class="inputField" type="text"  id="username" name="username" ><br>
                    Username:<br><input class="inputField" type="text" id="uid" name="uid" ><br>
                    Email:<br><input class="inputField" type="text"  id="email" name="email" ><br>
                    Password:<br><input class="inputField" type="text" id="password" name="password" ><br>


        <button type="submit" name="submit"> Submit </button> 
    </form> 


<?php   
    if (isset($_GET["error"])){
        if($_GET["error"]=="emptyinput"){
            echo "<p> Fill in all fields!</p>";
}
else if ($_GET["error"]=="invaliduid"){
    echo "<p>Choose a proper username</p>";
}
else if ($_GET["error"]=="invalidemail"){
    echo "<p>Choose a proper email</p>";
}
else if ($_GET["error"]=="stmtfailed"){
    echo "<p>Something went wrong try again</p>";
}
else if ($_GET["error"]=="usernametaken"){
    echo "<p>Choose another username</p>";
}
else if ($_GET["error"]=="none"){
    echo "<p>You have signed up!</p>";
}
}
?>
   </div>


        </body>
    
</html>