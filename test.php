<h3>Example 1</h3>
<pre>
class C {
    public $x = 1;
    function __construct() { ++$this->x; }
    function __invoke() { return ++$this->x; }
    function __toString() { return (string) --$this->x; }
}
$obj = new C();
echo $obj();

class a {
    function __construct() { }
    function __invoke() { echo("Invoked\n"); }
}

$a = new a();
$a();
</pre>
output:
<pre>
<?php
class C {
    public $x = 1;
    function __construct() { ++$this->x; }
    function __invoke() { return ++$this->x; }
    function __toString() { return (string) --$this->x; }
}
$obj = new C();
echo $obj(). "<br/>";

class aa {
    function __construct() { }
    function __invoke() { echo("Invoked\n"); }
}

$a = new aa();
$a();
?>
</pre><hr/>

<h3>Example 2</h3>
<pre>
class A { 
    protected $x = array(); 
    /* A */ 
    public function getX() { 
        /* B */ 
        return $this->x;
    }
}
/* C */ 
$a = new A(); 
/* D */
array_push($a->getX(), "one");
array_push($a->getX(), "two");
echo count($a->getX());
</pre>
Output:
<pre>
<?php
class A { 
    protected $x = array(); 
    /* A */ 
    public function getX() { 
        /* B */ 
        return $this->x;
    }
}
/* C */ 
$a = new A(); 
/* D */
array_push($a->getX(), "one");
array_push($a->getX(), "two");
echo count($a->getX());
?>
</pre>

<h3>Example 3</h3>
<pre>
echo 0x33, ' monkeys sit on ', 011, ' trees.';
</pre>
Output:
<pre>
<?php echo 0x33, ' monkeys sit on ', 011, ' trees.'; ?>
</pre>

<h3>Example 4</h3>
<pre>
preg_match('/^(\d{1,2}([a-z]+))(?:\s*)\S+(?=201[0-9])/', '21st March 2014', $matches);
</pre>
Output:
<pre>
<?php 
preg_match('/^(\d{1,2}([a-z]+))(?:\s*)\S+ (?=201[0-9])/', '21st March 2014', $matches); 
print_r($matches);
?>
</pre>

<h3>Example 5</h3>
<pre>
$a = array('a', 'b', 'c');
$a = array_keys(array_flip($a));
</pre>
Output:
<pre>
<?php
$a = array('a', 'b', 'c');
$a = array_keys(array_flip($a));
print_r($a);
?>
</pre>

<h3>Example 6</h3>
<pre>
$input = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
$rand_keys = array_rand($input, 2);
echo $input[$rand_keys[0]] . "\n";
echo $input[$rand_keys[1]] . "\n";
</pre>
Output:
<pre>
<?php
$input = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
$rand_keys = array_rand($input, 2);
echo $input[$rand_keys[0]] . "\n";
echo $input[$rand_keys[1]] . "\n";
?>
</pre>

<h3>Example 7</h3>
<pre>
preg_match('/^\d+(?:\.[0-9]+)?$/', $test);
</pre>
Output:
<pre>
<?php
$test = 1000.23;
if( preg_match('/^\d+(?:\.[0-9]+)?$/', $test) ){
    echo "yes";
}else{
    echo "no";
}
?>
</pre>

<h3> Example 8</h3>
<pre>
abstract class cA {
      protected function __construct() { }
      public static function A(){ return "Hello World"; }
      abstract static function B();
}

class cB extends cA {
    static function B(){echo "ok";}
}

echo cB::A();

class BB extends AAA {}

echo get_class(BB::get_self());  // AAA
echo get_class(BB::get_static()); // BB
echo get_class(AAA::get_self()); // AAA
echo get_class(AAA::get_static()); // AAA

abstract class Base { 
    protected function __construct() { }
    public static function create() {  return new static;}   
}
class Item extends Base { 
    public static function action() { echo __CLASS__; }
}
$item = Item::create();
$item->action(); // outputs "Item"
</pre>
Output:
<pre>
<?php
abstract class cA {
      protected function __construct() { }
      public static function A(){ return "Hello World"; }
      abstract static function B();
}

class cB extends cA {
    static function B(){echo "ok";}
}

echo cB::A(). "<br/>";

class AAA {
    public static function get_self() {
        return new self();
    }

    public static function get_static() {
        return new static();
    }
}

class BB extends AAA {}

echo get_class(BB::get_self()). "<br/>";  // AAA
echo get_class(BB::get_static()). "<br/>"; // BB
echo get_class(AAA::get_self()). "<br/>"; // AAA
echo get_class(AAA::get_static()). "<br/>"; // AAA

abstract class Base { 
    protected function __construct() { }
    public static function create() {  return new static;}   
}
class Item extends Base { 
    public static function action() { echo __CLASS__; }
}
$item = Item::create();
$item->action(); // outputs "Item"
?>
</pre>

<h3> Example 9</h3>
<pre>
for ($i=0; $i<1.02; $i+=0.17) {
    $myArr[$i] = $i;
    echo $i. " === ". $myArr[$i].  "<br/>";
}
print_r($myArr);
echo count($myArr);
</pre>
Output:
<pre>
<?php
for ($i=0; $i<1.02; $i+=0.17) {
    $myArr[$i] = $i;
    echo $i. " === ". $myArr[$i].  "<br/>";
}
print_r($myArr);
echo count($myArr);
?>
</pre>