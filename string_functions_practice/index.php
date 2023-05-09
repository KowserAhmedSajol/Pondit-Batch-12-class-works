<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Function practice</title>
</head>
<body>
    <h1 style="text-align: center;">String Function practice</h1><hr>
    <!-- Test Starts -->
    <h3>Echo</h3><hr>
    <?php
    echo "Hello world!";
    ?>
    <hr>
    <!-- Test Ends -->
     <!-- Test Starts -->
     <h3>explode(), count(), implode() Function</h3><hr>
    <?php
    $str = "Hello world. It's a beautiful day.";
    $name = explode(" ",$str);
    echo "After Explode Counter is : ".count($name);
    echo "<br>";
    echo "<h5>Emploded Values</h5>";
    for($i=0; $i<count($name);$i++){
        echo $name[$i];
        echo "<br>";
    }
    echo "<h5>Imploded with comma</h5>";
    echo implode(",",$name);
    ?>
    <hr>
    <!-- Test Ends -->
     <!-- Test Starts -->
     <h3>htmlentities() Function</h3><hr>
    <?php
    $str = '<a href="https://www.w3schools.com">Go to w3schools.com</a>';
    echo htmlentities($str);
    ?>
    <hr>
    <!-- Test Ends -->
     <!-- Test Starts -->
     <h3>md5(), sha1(), similar_text() Function</h3><hr>
    <?php
    $str = "sojol";
    echo "md5() = ".md5($str)."<br>";
    echo "sha1() = ".sha1($str)."<br>";
    echo "md5_file() = ".md5_file("test.txt")."<br>";
    echo similar_text("Hello Sojol","Hello Sajol")."<br>";
    ?>
    <hr>
    <!-- Test Ends -->
     <!-- Test Starts -->
     <h3>str_pad(), str_repeat(), str_replace()  Function</h3><hr>
    <?php
    $str = "Hi Hello";
    echo "StrPad :- ".str_pad($str,20,":",STR_PAD_BOTH)."<br>";
    echo "StrRepeat :- ".str_repeat($str,10)."<br>";
    echo "StrReplace :- ".str_replace("Hello","Sojol",$str)."<br>";
    echo "StrWordCount :- ".str_word_count($str)."<br>";
    echo "str_split :- <br>";
    print_r(str_split("Hello"))
    ?>
    <hr>
    <!-- Test Ends -->
</body>
</html>