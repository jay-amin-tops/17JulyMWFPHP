<?php include_once("header.php"); 

// echo "<pre>";
// print_r($_SESSION);
?>

<h2>Welcome to dashboard</h2>
<p>

    hello , <?php echo  $_SESSION['UserData']['username']; ?>
</p>    
</body>
</html>