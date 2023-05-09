<!-- 
<_--------------Home Work---------------



 Ekta Form thakbe ,
 input nibo 2 ta number ,
 









<_-------------------------------------------
######class = Template or blue print of. can be called user defined data type.
object = instance of a class 
PHP data types are used to hold different types of data or values. PHP supports 8 primitive data types that can be categorized further in 3 types:
* Scalar Types (predefined)
* Compound Types (user-defined)
* Special Types.

######PHP Data Types: Scalar Types
It holds only single value. There are 4 scalar data types in PHP.

* boolean
* integer
* float
* string
PHP Data Types: Compound Types
It can hold multiple values. There are 2 compound data types in PHP.

* array
* object
PHP Data Types: Special Types
There are 2 special data types in PHP.
* resource
* NULL

######Casing
Camel case = firstName used for function and property
pascal case = FirstName used for class/method
snake case = first_name vule jabo lagbe na.
Upper case = FIRSTNAME  used for constant.


###### OOP kno use kori?
Data security, reuse korte pari,  







-->

<?php 











// making a calculator
echo "<hr/>";
class Calculator{
    private $num1=0;
    private $num2=0;
    public $operators = ["Summation"=> "+" ];
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

$obj->setNumber1(20);
$obj->setNumber2(10);
$obj->showNumber1();
$obj->showNumber2();
// echo "Number one is = ".$obj->num1;
// echo "<br>";
// echo "Number two is = ".$obj->num2;

echo "<br>";
echo "<h1> Summation is = ".$obj->sum()."</h1>";
echo "<h1> Subtraction is = ".$obj->sub()."</h1>";
echo "<h1> Multiplication is = ".$obj->mul()."</h1>";
echo "<h1> Division is = ".$obj->div()."</h1>";
echo "<h1> Result is => ".$obj->result()."</h1>";












