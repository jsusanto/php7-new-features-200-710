<?php
include "header.php";
?>

<h3>Array Constant</h3>
<pre>
define('ANIMALS', [
           'dog',
           'cat',
           'bird'
        ]);

echo ANIMALS[1]; // outputs "cat"
</pre>
Output:
<pre>
<?php
define('ANIMALS', [
    'dog',
    'cat',
    'bird'
]);

echo ANIMALS[1]; // outputs "cat"
?>
</pre>

<p style="text-align:center"><a href="../php-7-tutorial/index.php">Back to main menu</a></p>

</section>
</body>