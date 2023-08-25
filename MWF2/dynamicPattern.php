<?php

if (isset($_POST['btn'])) {
    # code...
    // $n = $_REQUEST['inpval'];
    $n = $_POST['inpval'];
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j <= $i; $j++) {
            echo " * ";
        }
        echo " <br> ";
    }
    // $n = 10;
    $m = 1;
    for ($i = $n; $i >= 1; $i--) {
        for ($j = 1; $j <= $i - 1; $j++) {
            print("&nbsp;");
        }
        for ($k = 1; $k <= $m; $k++) {
            echo (" * ");
        }
        echo ("<br>");
        $m++;
    }
}
?>

<form method="post">
    <input type="text" name="inpval" id="">
    <input type="submit" name="btn" id="">
</form>