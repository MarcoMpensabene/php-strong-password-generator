<?php 
session_start();


?>

<header>
    <?php echo "Welcome, " . $_SESSION['username']; ?></h1>
    <div>
        <a href="./logout.php">LOGOUT</a>
    </div>
</header>
