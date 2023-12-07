<?php 
class Simple{
    public function __construct(){
        echo "MyClass class has initialized! <br>";
    }
}

class Name{
    public $name;
    public function sayHi($name){
        echo "Hello All, I am $name <br>";
    }
}
class Factorial{
    public $number ;
    protected function __construct() {

        }
}
//task 1
$obj=new Simple();
echo PHP_EOL;
//task 2
$greet=new Name;
$greet->sayHi('aya');
?>