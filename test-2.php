<h3>Example 10</h3>
<pre>
$a = array(0, 1, 2 => array(3, 4));
$a[3] = array(4, 5);
echo count($a, 1);

$a = array(0, 1, 2 => array(3, 4));
$a[3] = array(4, 5);
echo count($a, 1);
-------------------------------------------------------------
$food = array('fruits' => array('orange', 'banana', 'apple'),
              'veggie' => array('carrot', 'collard', 'pea'));
// recursive count
echo count($food, COUNT_RECURSIVE); // output 8
// normal count
echo count($food); // output 2
</pre>
output:
<pre>
<?php
$a = array(0, 1, 2 => array(3, 4));
$a[3] = array(4, 5);
echo count($a, 1). "<br/>";
print_r($a);

$food = array('fruits' => array('orange', 'banana', 'apple'),
              'veggie' => array('carrot', 'collard', 'pea'));
// recursive count
echo count($food, COUNT_RECURSIVE). "<br/>"; // output 8
// normal count
echo count($food); // output 2
?>
</pre><hr/>

<?php
print_r( array_combine(array("A","B","C"), array(1,2,3)));
?>