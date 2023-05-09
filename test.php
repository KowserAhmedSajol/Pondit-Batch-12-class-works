<?php































echo "<h1>string functions :-</h1> <br>";
echo "<h4> echo, explode => list, html entity decode, htmlentities, implode,join, lcfirst, md5, sha1, sha1_file moneyformat, nl2br, str_pad, str_repeat, str_replace, strlen, strpos,strrev strlower, strupper, substr, trim, ucfirst </h4>";

echo "<hr>";
$cars = array(
    array("Volvo", 22, 18),
    array("BMW", 15, 13),
    array("Saab", 5, 2),
    array("Land Rover", 17, 15)
);
for ($i = 0; $i <= 3; $i++) {
    echo $cars[$i][0] . ": In stock: " . $cars[$i][1] . ", sold: " . $cars[$i][2] . ".<br>";
}
echo (pi());
echo "<br />";
echo "What is the difference between type casting and type juggling? <br>";
echo "isset and empty, array key exist, var_dump, print_r <br>";
$name =  "Kowser Ahmed Sajol";
$a = 2;
$b = 3;
function calculation($num1 = 10, $num2 = 100, $operator = "+")
{
    if ($operator == "*") {
        $headline = "Multiplication";
        $result = $num1 * $num2;
    } else if ($operator == "+") {
        $headline = "Summation";
        $result = $num1 + $num2;
    } else if ($operator == "-") {
        $headline = "substraction";
        $result = $num1 - $num2;
    } else if ($operator == "/") {
        $headline = "vag";
        $result = $num1 / $num2;
    }
    echo $headline . "<br />";
    echo $num1 . " " . $operator . " " . $num2 . " = " . $result . "<br />";
    echo "<hr />";
}
// class 
function myfunction($number)
{
    echo "My function is working. YAY <hr>";
    echo $number . " er Namta: <br>";
    for ($i = 1; $i <= 10; $i++) {
        echo $number . "*" . $i . " = " . $number * $i . "<br>";
    }
}
function myfunction2($value)
{
    return $value;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice</title>
</head>

<body>
    <?php
    $res1 = myfunction2(2);
    $res2 = myfunction2(9);
    var_dump($res1 + $res2);
    ?>
    <h1>Hello From PHP</h1>
    <h2>Myself <?php echo $name; ?></h2>
    <h4><?php $c = readline('Enter a string: '); ?></h4>
    <form action="index.php" method="post">
        <label for="num1">Enter number One:</label><br>
        <input type="text" placeholder="number 1" id="num1" name="num1"> <br><br>
        <label for="num2">Enter number Two:</label><br>
        <input type="text" placeholder="number 2" id="num2" name="num2"> <br><br>
        <button type="submit" name="submit">Submit</button>
    </form>
    <?php
    if (isset($_POST["submit"])) {
        echo $a . " + " . $b . " = " . $a . "" . $b . "<br />";
        echo $a . " + " . $b . " = " . $a . "" . $b . "<br />";
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        calculation($num1, $num2, "*");
        echo "<br />";
        calculation($num1, $num2, "-");
        echo "<br />";
        calculation($num1, $num2, "+");
        echo "<br />";
        calculation($num1, $num2, "/");
        echo "<br />";
    }
    echo "<hr />";
    for ($i = 1; $i <= 100; $i++) {
        myfunction($i);
        echo "<hr />";
    }
    echo "<h1>Kottheke elo era?</h1>";
    ?>
</body>

</html>