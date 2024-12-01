<?php
class Calculation {

    public $a, $b, $c;

    function sum() {
        $this->c = $this->a + $this->b; 
        return $this->c;
    }

    function sub() {
        $this->c = $this->a - $this->b; 
        return $this->c;
    }
}

$ob1 = new Calculation();
$ob1->a = 20;
$ob1->b = 10;

echo "Sum for ob1: " . $ob1->sum();
echo "<br>";
echo "Sub for ob1: " . $ob1->sub();

echo "<br>";

$ob2 = new Calculation();
$ob2->a = 50;
$ob2->b = 50;

echo "Sub for ob2: " . $ob2->sub();
?>

<!-- Constructor -->
<?php
class Employee {

    public $name;
    public $salary;

    function __construct($n = "No name", $s = 0) {
        $this->name = $n;
        $this->salary = $s;
    }

    function info() {
        echo $this->name . " = " . $this->salary . "<br>";
    }
}

$person = new Employee("Yasir", 30000);
$person2 = new Employee();

$person->info();
$person2->info();
?>

<!-- Inheritance -->
<?php
class Teacher {

    public $name;
    public $salary;

    function __construct($n = "No name", $s = 0) {
        $this->name = $n;
        $this->salary = $s;
    }

    function info() {
        echo "<h3>Teacher Info:</h3>";
        echo "Name: " . $this->name . "<br>";
        echo "Salary: " . $this->salary . "<br>";
    }
}

class Headmaster extends Teacher {

    public $extra = 5000;

    function info() {
        $this->extra += $this->salary;
        echo "<h3>Headmaster Info:</h3>";
        echo "Name: " . $this->name . "<br>";
        echo "Salary: " . $this->extra;
    }
}

$t = new Teacher("Tanvir", 20000);
$t->info();

$t = new Headmaster("Tanvir", 20000);
$t->info();
?>

<!-- Access Modifier -->
<?php
class AccessPublic {
    public $name;

    public function __construct($n) {
        $this->name = $n;
    }

    public function info() {
        echo "Name: " . $this->name . "<br>";
    }
}

$t = new AccessPublic("Nirob");
$t->info();
?>

<!-- Method Overriding -->
<?php
class A {
    public $name = "Base Class";

    public function show($a, $b) {
        return $a + $b;
    }
}

class B extends A {
    public $name = "Derived Class";

    public function show($a, $b) {
        return $a - $b;
    }
}

$t = new B();
echo $t->show(10, 5);
?>

<!-- Abstract -->
<?php
abstract class C {
    abstract protected function show($a, $b);
}

class D extends C {
    public function show($a, $b) {
        return $a - $b;
    }
}

$t = new D();
echo $t->show(10, 5);
?>

<!-- Encapsulation -->
<?php
class User {

    private $id;
    private $name;
    private $email;

    public function setId($id) {
        $this->id = $id;
    }

    public function getId() {
        return $this->id;
    }
}

$ob = new User();
$ob->setId(5000);
echo $ob->getId();
?>

<!-- Interface -->
<?php
interface Mbank {
    public function save();
    public function update();
}

class MainBank implements Mbank {

    public function test() {
        return "Allah Mohan";
    }

    public function save() {
        return "Save";
    }

    public function update() {
        return "Update";
    }
}

$ob = new MainBank();
echo $ob->test();
?>