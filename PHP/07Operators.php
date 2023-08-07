<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .class {
            color: red !important;
        }
    </style>
</head>

<body>
    <ul class="points">
        <li><a href="#Arithmetic">Arithmetic Operators</a></li>
        <li><a href="#Assignment">Assignment Operators</a></li>
        <li><a href="#Bitwise">Bitwise Operators</a></li>
        <li><a href="#Comparison">Comparison Operators</a></li>
        <li><a href="#Incrementing">Incrementing/Decrementing Operators</a></li>
        <li><a href="#Logical">Logical Operators</a></li>
        <li><a href="#String">String Operators</a></li>
        <li><a href="#Array">Array Operators</a></li>
        <li><a href="#Type">Type Operators</a></li>
        <li><a href="#Execution">Execution Operators</a></li>
        <li><a href="#Error">Error Control Operators</a></li>
    </ul>
    <img src="PHP-operators-types.png" alt="">
    <!-- <img src="arthmatic.png" alt="">
    <img src="comparesion.png" width="100%" alt=""> -->

    <h2>Arithmetic Operator</h2>
    <table class="alt">
        <tbody>
            <tr>
                <th>Operator</th>
                <th>Name</th>
                <th>Example</th>
                <th>Explanation</th>
            </tr>
            <tr>
                <td>+</td>
                <td>Addition</td>
                <td>$a + $b</td>
                <td>Sum of operands</td>
            </tr>
            <tr>
                <td>-</td>
                <td>Subtraction</td>
                <td>$a - $b</td>
                <td>Difference of operands</td>
            </tr>
            <tr>
                <td>*</td>
                <td>Multiplication</td>
                <td>$a * $b</td>
                <td>Product of operands</td>
            </tr>
            <tr>
                <td>/</td>
                <td>Division</td>
                <td>$a / $b</td>
                <td>Quotient of operands</td>
            </tr>
            <tr>
                <td>%</td>
                <td>Modulus</td>
                <td>$a % $b</td>
                <td>Remainder of operands</td>
            </tr>
            <tr>
                <td>**</td>
                <td>Exponentiation</td>
                <td>$a ** $b</td>
                <td>$a raised to the power $b</td>
            </tr>
        </tbody>
    </table>

    <h2>Assignment Operators</h2>
    <table class="alt">
        <tbody>
            <tr>
                <th>Operator</th>
                <th>Name</th>
                <th>Example</th>
                <th>Explanation</th>
            </tr>
            <tr>
                <td>=</td>
                <td>Assign</td>
                <td>$a = $b</td>
                <td>The value of right operand is assigned to the left operand.</td>
            </tr>
            <tr>
                <td>+=</td>
                <td>Add then Assign</td>
                <td>$a += $b</td>
                <td>Addition same as $a = $a + $b</td>
            </tr>
            <tr>
                <td>-=</td>
                <td>Subtract then Assign</td>
                <td>$a -= $b</td>
                <td>Subtraction same as $a = $a - $b</td>
            </tr>
            <tr>
                <td>*=</td>
                <td>Multiply then Assign</td>
                <td>$a *= $b</td>
                <td>Multiplication same as $a = $a * $b</td>
            </tr>
            <tr>
                <td>/=</td>
                <td>Divide then Assign<br>
                    (quotient)</td>
                <td>$a /= $b</td>
                <td>Find quotient same as $a = $a / $b</td>
            </tr>
            <tr>
                <td>%=</td>
                <td>Divide then Assign<br>
                    (remainder)</td>
                <td>$a %= $b</td>
                <td>Find remainder same as $a = $a % $b</td>
            </tr>
        </tbody>
    </table>
    <h2>Bitwise Operators</h2>
    <table class="alt">
        <tbody>
            <tr>
                <th>Operator</th>
                <th>Name</th>
                <th>Example</th>
                <th>Explanation</th>
            </tr>
            <tr>
                <td>&amp;</td>
                <td>And</td>
                <td>$a &amp; $b</td>
                <td>Bits that are 1 in both $a and $b are set to 1, otherwise 0.</td>
            </tr>
            <tr>
                <td>|</td>
                <td>Or (Inclusive or)</td>
                <td>$a | $b</td>
                <td>Bits that are 1 in either $a or $b are set to 1</td>
            </tr>
            <tr>
                <td>^</td>
                <td>Xor (Exclusive or)</td>
                <td>$a ^ $b</td>
                <td>Bits that are 1 in either $a or $b are set to 0.</td>
            </tr>
            <tr>
                <td>~</td>
                <td>Not</td>
                <td>~$a</td>
                <td>Bits that are 1 set to 0 and bits that are 0 are set to 1</td>
            </tr>
            <tr>
                <td>&lt;&lt;</td>
                <td>Shift left</td>
                <td>$a &lt;&lt; $b</td>
                <td>Left shift the bits of operand $a $b steps</td>
            </tr>
            <tr>
                <td>&gt;&gt;</td>
                <td>Shift right</td>
                <td>$a &gt;&gt; $b</td>
                <td>Right shift the bits of $a operand by $b number of places</td>
            </tr>
        </tbody>
    </table>
    <h2>Comparison Operators</h2>
    <table class="alt">
        <tbody>
            <tr>
                <th>Operator</th>
                <th>Name</th>
                <th>Example</th>
                <th>Explanation</th>
            </tr>
            <tr>
                <td>==</td>
                <td>Equal</td>
                <td>$a == $b</td>
                <td>Return TRUE if $a is equal to $b</td>
            </tr>
            <tr>
                <td>===</td>
                <td>Identical</td>
                <td>$a === $b</td>
                <td>Return TRUE if $a is equal to $b, and they are of same data type</td>
            </tr>
            <tr>
                <td>!==</td>
                <td>Not identical</td>
                <td>$a !== $b</td>
                <td>Return TRUE if $a is not equal to $b, and they are not of same data type</td>
            </tr>
            <tr>
                <td>!=</td>
                <td>Not equal</td>
                <td>$a != $b</td>
                <td>Return TRUE if $a is not equal to $b</td>
            </tr>
            <tr>
                <td>&lt;&gt;</td>
                <td>Not equal</td>
                <td>$a &lt;&gt; $b</td>
                <td>Return TRUE if $a is not equal to $b</td>
            </tr>
            <tr>
                <td>&lt;</td>
                <td>Less than</td>
                <td>$a &lt; $b</td>
                <td>Return TRUE if $a is less than $b</td>
            </tr>
            <tr>
                <td>&gt;</td>
                <td>Greater than</td>
                <td>$a &gt; $b</td>
                <td>Return TRUE if $a is greater than $b</td>
            </tr>
            <tr>
                <td>&lt;=</td>
                <td>Less than or equal to</td>
                <td>$a &lt;= $b</td>
                <td>Return TRUE if $a is less than or equal $b</td>
            </tr>
            <tr>
                <td>&gt;=</td>
                <td>Greater than or equal to</td>
                <td>$a &gt;= $b</td>
                <td>Return TRUE if $a is greater than or equal $b</td>
            </tr>
            <tr>
                <td>&lt;=&gt;</td>
                <td>Spaceship</td>
                <td>$a &lt;=&gt;$b</td>
                <td>Return -1 if $a is less than $b<br>
                    Return 0 if $a is equal $b<br>
                    Return 1 if $a is greater than $b</td>
            </tr>
        </tbody>
    </table>
    <h2>Incrementing/Decrementing Operators</h2>
    <table class="alt">
        <tbody>
            <tr>
                <th>Operator</th>
                <th>Name</th>
                <th>Example</th>
                <th>Explanation</th>
            </tr>
            <tr>
                <td rowspan="2">++</td>
                <td rowspan="2">Increment</td>
                <td>++$a</td>
                <td>Increment the value of $a by one, then return $a</td>
            </tr>
            <tr>
                <td>$a++</td>
                <td>Return $a, then increment the value of $a by one</td>
            </tr>
            <tr>
                <td rowspan="2">--</td>
                <td rowspan="2">decrement</td>
                <td>--$a</td>
                <td>Decrement the value of $a by one, then return $a</td>
            </tr>
            <tr>
                <td>$a--</td>
                <td>Return $a, then decrement the value of $a by one</td>
            </tr>
        </tbody>
    </table>
    <h2>Logical Operators</h2>
    <table class="alt">
        <tbody>
            <tr>
                <th>Operator</th>
                <th>Name</th>
                <th>Example</th>
                <th>Explanation</th>
            </tr>
            <tr>
                <td>and</td>
                <td>And</td>
                <td>$a and $b</td>
                <td>Return TRUE if both $a and $b are true</td>
            </tr>
            <tr>
                <td>Or</td>
                <td>Or</td>
                <td>$a or $b</td>
                <td>Return TRUE if either $a or $b is true</td>
            </tr>
            <tr>
                <td>xor</td>
                <td>Xor</td>
                <td>$a xor $b</td>
                <td>Return TRUE if either $ or $b is true but not both</td>
            </tr>
            <tr>
                <td>!</td>
                <td>Not</td>
                <td>! $a</td>
                <td>Return TRUE if $a is not true</td>
            </tr>
            <tr>
                <td>&amp;&amp;</td>
                <td>And</td>
                <td>$a &amp;&amp; $b</td>
                <td>Return TRUE if either $a and $b are true</td>
            </tr>
            <tr>
                <td>||</td>
                <td>Or</td>
                <td>$a || $b</td>
                <td>Return TRUE if either $a or $b is true</td>
            </tr>
        </tbody>
    </table>
    <h2>String Operators</h2>
    <table class="alt">
        <tbody>
            <tr>
                <th>Operator</th>
                <th>Name</th>
                <th>Example</th>
                <th>Explanation</th>
            </tr>
            <tr>
                <td>.</td>
                <td>Concatenation</td>
                <td>$a . $b</td>
                <td>Concatenate both $a and $b</td>
            </tr>
            <tr>
                <td>.=</td>
                <td>Concatenation and Assignment</td>
                <td>$a .= $b</td>
                <td>First concatenate $a and $b, then assign the concatenated string to $a, e.g. $a = $a . $b</td>
            </tr>
        </tbody>
    </table>
    <h2>Array Operator</h2>
    <p>The array operators are used in case of array. Basically, these operators are used to compare the values of arrays.</p>
    <table class="alt">
        <tbody>
            <tr>
                <th>Operator</th>
                <th>Name</th>
                <th>Example</th>
                <th>Explanation</th>
            </tr>
            <tr>
                <td>+</td>
                <td>Union</td>
                <td>$a + $y</td>
                <td>Union of $a and $b</td>
            </tr>
            <tr>
                <td>==</td>
                <td>Equality</td>
                <td>$a == $b</td>
                <td>Return TRUE if $a and $b have same key/value pair</td>
            </tr>
            <tr>
                <td>!=</td>
                <td>Inequality</td>
                <td>$a != $b</td>
                <td>Return TRUE if $a is not equal to $b</td>
            </tr>
            <tr>
                <td>===</td>
                <td>Identity</td>
                <td>$a === $b</td>
                <td>Return TRUE if $a and $b have same key/value pair of same type in same order</td>
            </tr>
            <tr>
                <td>!==</td>
                <td>Non-Identity</td>
                <td>$a !== $b</td>
                <td>Return TRUE if $a is not identical to $b</td>
            </tr>
            <tr>
                <td>&lt;&gt;</td>
                <td>Inequality</td>
                <td>$a &lt;&gt; $b</td>
                <td>Return TRUE if $a is not equal to $b</td>
            </tr>
        </tbody>
    </table>
    <h2>TypeOf</h2>
    <p>The type operator instanceof is used to determine whether an object, its parent and its derived class are the same type or not. Basically, this operator determines which certain class the object belongs to. It is used in object-oriented programming.</p>
    <h2>Execution Operators</h2>
    <table class="alt">
        <tbody>
            <tr>
                <th>Operator</th>
                <th>Name</th>
                <th>Example</th>
                <th>Explanation</th>
            </tr>
            <tr>
                <td>``</td>
                <td>backticks</td>
                <td>echo `dir`;</td>
                <td>Execute the shell command and return the result.<br>
                    Here, it will show the directories available in current folder.</td>
            </tr>
        </tbody>
    </table>
    <?php
    $a = 50;
    echo $a += 50; // $a = $a + 50;

    $fname = "Test";
    $lname = "Xyz";
    echo "Full name" . $fname . " " . $lname;
    // echo $a;
    echo 10 == 10.00;
    echo "<br>=========== spaceship START========== <br>";
    echo 8 <=> 10;
    echo "<br>=========== spaceship END========== <br>";

    $marks = 41;
    if ($marks > 50) {
        echo "Pass";
    } else {
        echo "try again";
        # code...
    }
    echo ($marks > 50) ? "Pass" : "Try again";
    ?>
</body>

</html>