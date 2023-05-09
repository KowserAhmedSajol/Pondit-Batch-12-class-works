<?php
// phpinfo();
// echo "<pre>";
// print_r($_SERVER);
// echo "</pre>";
echo $_SERVER["SERVER_PORT"];
echo "&nbsp used for space";

function d($name)
{
    echo "<pre>";
    print_r($name);
    echo "</pre>";
}
function dd($var){
    d($var);
    die("all Other part is currently Stopped");
}
echo d($_SERVER);
// diff between include and include once, require and require once, include and requre.
// single quote-> Anything that enclosed with single quote.,
// double quote-> Anything that enclosed with single quote., here doc syntex, now doc syntex.
$var = 'Dhanmondi govt boy\'s high school';
echo $var;
//HW:
//variable interpolation
// what is the difference between double equal and Tripple Equal.