<?php 
class Student {
    public $name, $address, $University, $phoneNumber, $studentInfo, $email;
    
    function setName($name){
        
        $this->name = $name;
        return $this;
        
    }
    function setAddress($address){
        $this->address = $address;
        return $this;
    }
    function setUniversity($University){
        $this->University = $University;
        return $this;
    }
    function setphoneNumber($phoneNumber){
        $this->phoneNumber = $phoneNumber;
        return $this;
    }
    function setEmail($email){
        $this->email = $email;
        return $this;
    }
    function setStudent(){
        $this->studentInfo = [
            'Name' => $this->name,
            'Address' => $this->address,
            'University' => $this->University,
            'phoneNumber' => $this->phoneNumber,
            'email' => $this->email
        ];
        return $this->studentInfo;
    }
    function getStudent(){
        return $this->studentInfo;
    }


}

$studentObj = new Student;
$studentObj->setName("Kowser Ahmed Sajol")
           ->setAddress("Narayanganj")
           ->setUniversity("Green University of Bangladesh")
           ->setphoneNumber("01894255377")
           ->setEmail("kowsersojol@gmail.com")
           ->setStudent();
// $studentObj->setAddress("Narayanganj");
echo "<pre>";
var_dump($studentObj->setStudent()) ;
echo "</pre>";

$arrays = $studentObj->getStudent();
foreach($arrays as $key=>$array){
    echo "<hr>".$key." => ".$array;
}
?>


















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP class 2</title>
</head>
<body>
    <hr>
    <a href="publicPrivate.php">Public Private Protected</a>
</body>
</html>


<!-- Trait ki?
php by default single inheritence support kore. tai ai problem ta solve korte trait introduced hoy. 











-->