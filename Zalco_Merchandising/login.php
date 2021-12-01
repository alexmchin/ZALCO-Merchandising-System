<!DOCTYPE html>
<html>
        <head>
                <title>Zalco Merchandising Log In</title>
                <link rel = "stylesheet" type = "text/css" href = "style.css" />
                
                
        </head>
        
        <body>
        
                <!--Header-->
                <div class = "header">
                        <h1><img class="icon" id="homeimg" src="logo.jpg" alt="home icon"></h1>
                </div>
                <!--Menu/Sidebar-->
                <!--Log In-->
                <div class = "body">
                    <br><br>
                    <h1>Log In</h1>

                    <form action="login.inc.php" method="post"> <!--/action_page.php-->
                        <br>
                        Username :<br><input class="inputField" type="text"  id="uid" name="uid" ><br>
                        Password:<br><input class="inputField" type="text" id="password" name="password" ><br>
                        <br>
                        <button type="submit" name="submit"> Submit </button> 
                    </form>
            <?php   
    if (isset($_GET["error"])){
        if($_GET["error"]=="emptyinput"){
            echo "<p> Fill in all fields!</p>";
}
else if ($_GET["error"]=="wronglogin"){
    echo "<p>Incorrect Login Information</p>";
}

}
?>
            </div>
         
        </body>
    
</html>