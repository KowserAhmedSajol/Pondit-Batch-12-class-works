<?php 



// class A {
//     public $p1 = "Public";
//     private $p2 = "Private";
//     protected $p3 = "Protected";
// }
// class B extends A {
//     public function accessProtectedProperty()
//     {
//         return $this->p3;
//     }
// }
// $classA = new A;
// echo $classA->p1;
// $classB = new B;
// echo $classB->accessProtectedProperty();



trait DB {
    function connect()
    {
        return "You are allowed to connect to DB";
    }
}
trait Notification {
    function sent($name, $message, $con)
    {
        return "Hi ".$name." Your Message is : ".$message." Now ".$con."<hr>";
    }
}
class Student {
    private $name = array(
        array("Sojol",85),
        array("rajib",86),
        array("Faruk",76),
        array("Rimon",92),
        );
    function getName()
    {
        return $this->name;
    }
}
class Employee extends Student {
    use DB,Notification;
}

$employee = new Employee;
$names = $employee->getName();


echo $employee->sent($employee->getName()[0][0], "You are Welcome to join our team Because you scored ".$employee->getName()[0][1],$employee->connect());


echo $employee->sent($employee->getName()[2][0], "You are Welcome to join our team Because you scored ".$employee->getName()[2][1],$employee->connect());