<?php
include "header.php";
?>
<h3>Scalar Type Declarations</h3>
<pre>
declare(strict_types=1);
function sum(int ...$ints) {
  return array_sum($ints);
}
print(sum(2, 3, 4));
</pre>

<h3>Coercive mode</h3>
<h4>Example 1</h4>
<pre>
function sum(int ...$ints) {
  return array_sum($ints);
}
print(sum(2, '3', 4.1));
</pre>
<h4>Example 2</h4>
<pre>
//declare(string_types=1);
function add(int $a, int $b){
    return $a + $b;
}

var_dump(add(1,2));
var_dump(add("1", "2"));
</pre>
<b>Output:</b>
<?php
//declare(string_types=1);
function add(int $a, int $b){
    return $a + $b;
}

var_dump(add(1,2));
var_dump(add("1", "2"));
?>

<p style="text-align:center"><a href="../php-7-tutorial/index.php">Back to main menu</a></p>

</section>
</body>