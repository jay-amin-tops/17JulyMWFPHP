<?php
// $marks = 51;
$marks = null;
if ($marks > 50) {
    echo "Pass";
} else {
    echo "Try again";
}
// if (condition) { echo "true blog"; } else { echo "fasle/else blog"; }
echo "<br>";
// echo (condition) ? "true blog": "false/else blog";
echo ($marks > 50) ? "Pass": "Try again";

echo "<br>";

echo $marks  ?? "Try again";


?>