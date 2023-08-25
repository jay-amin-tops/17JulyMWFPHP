<?php
include("header.php");
echo "<pre>";
print_r($_SESSION);
if (isset($_REQUEST['emptycart'])) {
    unset($_SESSION['cartData']);
}
?>

<form method="post">
    <input type="submit" name="emptycart" value="Empty Cart" id="">
</form>