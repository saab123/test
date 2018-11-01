<?php


$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}








?>

<!DOCTYPE html>
<html>
<head>

    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
<header>

    <nav>
        <div class="main-wrapper">
            <ul>
                <li><a href="loginsysteem.php">Home</a></li>
            </ul>
            <div class="nav-login">
                <form>

                    <INPUT type="text" name="uid" placeholder="Username/e-mail">
                    <INPUT type="password" name="pwd" placeholder="password">
                    <button type="submit" name="submit">Login</button>
                </form>

                <a href="singup.php">Sign up</a>
            </div>


        </div>

    </nav>
</header>

<section>
    <div class="main-wrapper">
        <h2>Home</h2>
    </div>
</section>

<h1></h1>

<p></p>

</body>
</html>





