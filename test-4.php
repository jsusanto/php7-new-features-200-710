<pre>
$dsn = 'mysql:host=localhost;dbname=exam';
$user = 'admin';
$pass = 'admin1234';
$pdo = new PDO($dsn, $user, $pass);
try{
    $cmd = 'INSERT INTO users (id, name, email) VALUES(:id, :name, :email)';
    $stmt = $pdo->prepare($cmd);
	$stmt->bindValue('id', 1);
	$stmt->bindValue('name', 'anna');
	$stmt->bindValue('email', 'alpha@example.com');
	$stmt->execute();
	echo "success";
}catch(PDOException $e){
    echo "Failure!";
    throw $e;
}
</pre>
output: <br/>
<?php
$dsn = 'mysql:host=localhost;dbname=exam';
$user = 'admin';
$pass = 'admin1234';
$pdo = new PDO($dsn, $user, $pass);
try{
    $cmd = 'INSERT INTO users (id, name, email) VALUES(:id, :name, :email)';
    $stmt = $pdo->prepare($cmd);
	$stmt->bindValue('id', 1);
	$stmt->bindValue('name', 'anna');
	$stmt->bindValue('email', 'alpha@example.com');
	$stmt->execute();
	echo "success";
}catch(PDOException $e){
    echo "Failure!";
    throw $e;
}
?>
<hr/>
<pre>
class A
{
    public $one = '';
    public $two = '';
   
    //Constructor
    public function __construct()
    {
        //Constructor
    }
   
    //print variable one
    public function echoOne()
    {
        echo $this->one."\n";
    }

    //print variable two   
    public function echoTwo()
    {
        echo $this->two."\n";
    }
}

//Instantiate the object
$a = new A();

//Instantiate the reflection object
$reflector = new ReflectionClass('A');

//Now get all the properties from class A in to $properties array
$properties = $reflector->getProperties();

$i =1;
//Now go through the $properties array and populate each property
foreach($properties as $property)
{
    //Populating properties
    $a->{$property->getName()}=$i;
    //Invoking the method to print what was populated
    $a->{"echo".ucfirst($property->getName())}()."\n";
	
	echo ucfirst($property->getName()). "<br/>";
   
    $i++;
}
</pre>
Output: <br/>
<?php
class A
{
    public $one = '';
    public $two = '';
   
    //Constructor
    public function __construct()
    {
        //Constructor
    }
   
    //print variable one
    public function echoOne()
    {
        echo $this->one."\n";
    }

    //print variable two   
    public function echoTwo()
    {
        echo $this->two."\n";
    }
}

//Instantiate the object
$a = new A();

//Instantiate the reflection object
$reflector = new ReflectionClass('A');

//Now get all the properties from class A in to $properties array
$properties = $reflector->getProperties();

$i =1;
//Now go through the $properties array and populate each property
foreach($properties as $property)
{
    //Populating properties
    $a->{$property->getName()}=$i;
    //Invoking the method to print what was populated
    $a->{"echo".ucfirst($property->getName())}()."\n";
	
	echo ucfirst($property->getName()). "<br/>";
   
    $i++;
}
?>
<hr/>
<pre>
class Foo {
    public    $foo  = 1;
    protected $bar  = 2;
    private   $baz  = 3;
}

$foo = new Foo();

$reflect = new ReflectionClass($foo);
$props   = $reflect->getProperties(ReflectionProperty::IS_PUBLIC | ReflectionProperty::IS_PROTECTED);

foreach ($props as $prop) {
    print $prop->getName() . "\n";
}

var_dump($props);
</pre>
Output: <br/>
<?php
class Foo {
    public    $foo  = 1;
    protected $bar  = 2;
    private   $baz  = 3;
}

$foo = new Foo();

$reflect = new ReflectionClass($foo);
$props   = $reflect->getProperties(ReflectionProperty::IS_PUBLIC | ReflectionProperty::IS_PROTECTED);

foreach ($props as $prop) {
    print $prop->getName() . "\n";
}

var_dump($props);
?>
<hr/>
<pre>
try{
    class MyException extends Exception { };
    try{
		throw new MyException;
    } catch(Exception $e){
        echo "1: ";
		throw $e;
    } catch(MyException $e){
		echo "2: ";
		throw $e;
    }
}catch(Exception $e){
    echo get_class($e);
}
</pre>
Output: <br/>
<?php
try{
    class MyException extends Exception { };
    try{
		throw new MyException;
    } catch(Exception $e){
        echo "1: ";
		throw $e;
    } catch(MyException $e){
		echo "2: ";
		throw $e;
    }
}catch(Exception $e){
    echo get_class($e);
}
?>
<hr/>
<pre>
$string = 'Good Luck!';
$start = 10;
var_dump(substr($string, $start));

echo '1'. (print '2') + 3;

echo "<br/>";

$data = '$la2';
$count = strlen('$data');
echo $count;
</pre>
Output: <br/>
<?php
$string = 'Good Luck!';
$start = 10;
var_dump(substr($string, $start));

echo '1'. (print '2') + 3;

echo "<br/>";

$data = '$la2';
$count = strlen('$data');
echo $count;
?>
<hr/>
<pre>
$a = [1 => 'Apple', 3 => 'Cactus', 5 => 'Elderflower'] + 
     ['Banana', 'Dragon Fruit', 'Fig'];
echo count($a);
print_r($a);
</pre>
Output: <br/>
<?php
$a = [1 => 'Apple', 3 => 'Cactus', 5 => 'Elderflower'] + 
     ['Banana', 'Dragon Fruit', 'Fig'];
echo count($a);
print_r($a);
?>
<hr/>
<pre>
class Test{
	public $var = 1;
}
function addMe(Test $t){
    $t->var++;
}
$t = new Test();
addMe($t);
echo $t->var;
</pre>
Output: <br/>
<?php
class Test{
	public $var = 1;
}
function addMe(Test $t){
    $t->var++;
}
$t = new Test();
addMe($t);
echo $t->var;
?>
<hr/>
<textarea rows="10" cols="40" style="border:none;">
$xml = <<< XML
<?xml version="1.0" encoding="utf-8"?>
<books>
 <book>Patterns of Enterprise Application Architecture</book>
 <book>Design Patterns: Elements of Reusable Software Design</book>
 <book>Clean Code</book>
</books>
XML;
</textarea>
<pre>
$dom = new DOMDocument;
$dom->loadXML($xml);
$books = $dom->getElementsByTagName('book');
foreach ($books as $book) {
    echo $book->nodeValue, PHP_EOL;
}
</pre>
Output:<br/>

<?php
$xml = <<< XML
<?xml version="1.0" encoding="utf-8"?>
<books>
 <book>Patterns of Enterprise Application Architecture</book>
 <book>Design Patterns: Elements of Reusable Software Design</book>
 <book>Clean Code</book>
</books>
XML;

$dom = new DOMDocument;
$dom->loadXML($xml);
$books = $dom->getElementsByTagName('book');
foreach ($books as $book) {
    echo $book->nodeValue, PHP_EOL;
}
?>
<hr/>
<?php
class Number{
	private $v = 0;
	public function __construct($v){ $this->v = $v; }
	public function mul(){
		return function ($x) { return $this->v * $x; };
	}
}



$one = new Number(1);
$two = new Number(2);
$double = $two->mul()->bindTo($one);
echo "result : ". $double(5);
?>