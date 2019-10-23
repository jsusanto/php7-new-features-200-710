<?php
include "header.php";
?>

<h3>Null Calescing Operator</h3>
<pre>
// fetch the value of $_GET['user'] and returns 'not passed'
// if username is not passed
$username = $_GET['username'] ?? 'not passed';
print($username);
print("<br/>");

// Equivalent code using ternary operator
$username = isset($_GET['username']) ? $_GET['username'] : 'not passed';
print($username);
print("<br/>");
// Chaining ?? operation
$username = $_GET['username'] ?? $_POST['username'] ?? 'not passed';
print($username);
</pre>

<hr>
<pre>
$array = ['foo' => 'bar'];

//PHP5 style
$message = isset($array['foo']) ? $array['foo'] : 'not set';
echo $message.PHP_EOL;

//PHP7 style
$message = $array['foo'] ?? 'not set';
echo $message.PHP_EOL;
</pre>
Output:
<pre>
<?php
$array = ['foo' => 'bar'];

//PHP5 style
$message = isset($array['foo']) ? $array['foo'] : 'not set';
echo $message.PHP_EOL;

//PHP7 style
$message = $array['foo'] ?? 'not set';
echo $message.PHP_EOL;
?>
</pre>

<p style="text-align:center"><a href="index.php">Back to main menu</a></p>

</section>
</body>