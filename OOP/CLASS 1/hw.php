<?php 
if(isset($_POST['submit'])){
    
    
    $inputNumber1 = intval($_POST["number1"]);
    $inputNumber2 = intval($_POST["number2"]);



    class Calculator{
        private $num1=0;
        private $num2=0;
        function showNumber1()
        {
            echo "<h2>Number one is = ".$this->num1."</h2>"; 
        }
        function showNumber2()
        {
            echo "<h2>Number two is = ".$this->num2."</h2>"; 
        }
        function setNumber1($number)
        {
            $this->num1 = $number;
        }
        function setNumber2($number)
        {
            $this->num2 = $number;
        }
        public function sum()
        {
            return $this->num1  + $this->num2;
        }
        public function sub()
        {
            return $this->num1  - $this->num2;
        }
        public function mul()
        {
            return $this->num1  * $this->num2;
        }
        public function div()
        {
            return $this->num1  / $this->num2;
        }
        public function result(){
            $result = "<br> sum is = ".$this->sum()."<br>Sub is = ".$this->sub()."<br> Mul is = ".$this->mul()."<br>Div is = ".$this->Div()."<br>";
            return $result;
        }
    }
    $obj = new Calculator();
    
    $obj->setNumber1($inputNumber1);
    $obj->setNumber2($inputNumber2);
    // echo "Number one is = ".$obj->num1;
    // echo "<br>";
    // echo "Number two is = ".$obj->num2;


}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomeWork User Input</title>
    <style>
        .button {
            padding: 15px 30px;
            background-color: #0099cc;
            border:none;
            color: white;
            border-radius: 20px;
            font-size: 16px;
            transition: 1s;
        }
        .button:hover {
            border-radius: 0px;
            padding: 18px 35px;
            font-size: 18px;
            color: #8cff1a;
            background-color: #3d0066;
        }
    </style>
</head>

<body>
    <form action="hw.php" method="post">
        Input First Number <br>
        <input name="number1" type="text"><br>
        Input Second Number <br>
        <input name="number2" type="text"><br><br>
        <input class="button" name="submit" type="submit" value="Submit">
    </form>


    <div>
        <?php 
        if(isset($_POST['submit'])){ 
                    
            $obj->showNumber1();
            $obj->showNumber2();    
            echo "<br>";
            echo "<h1> Summation is = ".$obj->sum()."</h1>";
            echo "<h1> Subtraction is = ".$obj->sub()."</h1>";
            echo "<h1> Multiplication is = ".$obj->mul()."</h1>";
            echo "<h1> Division is = ".$obj->div()."</h1>";
            echo "<h1> Result is => ".$obj->result()."</h1>";

        }
        
        
        
        
        
        ?>
    </div>






</body>

</html>