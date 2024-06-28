<?php 
session_start();
include_once __DIR__ . "/login.php";


?>

<header>
    <?php echo "Welcome, " . $_SESSION['username']; ?></h1>
    <div>
        <a href="./logout.php">LOGOUT</a>
    </div>
</header>
