<?php
include "header.php";
?>

<h3>Closure::call()</h3>
<b>Example - Pre PHP 7</b>
<pre>
   class A {
      private $x = 1;
   }

   // Define a closure Pre PHP 7 code
   $getValue = function() {
      return $this->x;
   };

   // Bind a clousure
   $value = $getValue->bindTo(new A, 'A'); 

   print($value());
</pre>
Output:
<pre>
<?php
   class A {
      private $x = 1;
   }

   // Define a closure Pre PHP 7 code
   $getValue = function() {
      return $this->x;
   };

   // Bind a clousure
   $value = $getValue->bindTo(new A, 'A'); 

   print($value());
?>
</pre>

<b>Example 1 - PHP 7+</b>
<pre>
   class A {
      private $x = 1;
   }

   // PHP 7+ code, Define
   $value = function() {
      return $this->x;
   };

   print($value->call(new A));
</pre>
Output:
<pre>
<?php
   class B {
      private $x = 1;
   }

   // PHP 7+ code, Define
   $value = function() {
      return $this->x;
   };

   print($value->call(new B));
?>
</pre> <hr/>
<b>Example 2 - PHP 7+</b>
<br/>
<pre>
   $closure = function(){
       return $this->value . "\n";
   };
   
   $a = new class { public $value = "Hello"; };
   $b = new class { public $value = "World"; };
   
   echo $closure->call($a); // Output: "Hello"
   echo $closure->call($b); // Output: "World"
</pre>
Output:
<pre>
<?php
   $closure = function(){
       return $this->value . "\n";
   };
   
   $a = new class { public $value = "Hello"; };
   $b = new class { public $value = "World"; };
   
   echo $closure->call($a); // Output: "Hello"
   echo $closure->call($b); // Output: "World"
?>
</pre>
<hr/>

<b>Example 3 - PHP 5 and 7+</b>
<pre>
/*Closure Call*/
class Foo{
    private $foo = ' bar';
}

$getFooCallback = function(){
    return $this->foo;
};

//PHP 5 style
$binding = $getFooCallback->bindTo(new Foo, 'Foo');
echo $binding(). PHP_EOL;

//PHP 7 style
echo $getFooCallback->call(new Foo). PHP_EOL;
</pre>
Output: 
<?php
/*Closure Call*/
class Foo{
    private $foo = ' bar';
}

$getFooCallback = function(){
    return $this->foo;
};

//PHP 5 style
$binding = $getFooCallback->bindTo(new Foo, 'Foo');
echo $binding(). PHP_EOL;
echo "<br/>";
//PHP 7 style
echo $getFooCallback->call(new Foo). PHP_EOL;
?>

<p style="text-align:center"><a href="index.php">Back to main menu</a></p>

</section>
</body>