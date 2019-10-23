<?php
include "header.php";
?>

<h3>Spaceship Operator</h3>
<strong>Example 1</strong>
<pre>
   //integer comparison
   print( 1 <=> 1);print("&lt;br/>");
   print( 1 <=> 2);print("&lt;br/>");
   print( 2 <=> 1);print("&lt;br/>");
   print("&lt;br/>");
   //float comparison
   print( 1.5 <=> 1.5);print("&lt;br/>");
   print( 1.5 <=> 2.5);print("&lt;br/>");
   print( 2.5 <=> 1.5);print("&lt;br/>");
   print("&lt;br/>");
   //string comparison
   print( "a" <=> "a");print("&lt;br/>");
   print( "a" <=> "b");print("&lt;br/>");
   print( "b" <=> "a");print("&lt;br/>");
</pre>
Output:
<pre>
<?php
   //integer comparison
   print( 1 <=> 1);print("<br/>");
   print( 1 <=> 2);print("<br/>");
   print( 2 <=> 1);print("<br/>");
   print("<br/>");
   //float comparison
   print( 1.5 <=> 1.5);print("<br/>");
   print( 1.5 <=> 2.5);print("<br/>");
   print( 2.5 <=> 1.5);print("<br/>");
   print("<br/>");
   //string comparison
   print( "a" <=> "a");print("<br/>");
   print( "a" <=> "b");print("<br/>");
   print( "b" <=> "a");print("<br/>");
?>
</pre>

It's basically equal to the following function &lt; PHP 7
<pre>
    usort($values, function($a, $b) {
        if($a == $b){
            return 0;
        }
        return ($a < $b) ? -1 : 1;
    });
</pre>
<hr/>
<strong>Example 2</strong>
<pre>
$array = [ 
   "1 <=> 1" => 1 <=> 1,
   "1 <=> 2" => 1 <=> 2,
   "2 <=> 1" => 2 <=> 1
];
var_dump($array);   
</pre>
Output:
<pre>
<?php
$array = [ 
   "1 <=> 1" => 1 <=> 1,
   "1 <=> 2" => 1 <=> 2,
   "2 <=> 1" => 2 <=> 1
];
var_dump($array);
?>
</pre>

<p style="text-align:center"><a href="index.php">Back to main menu</a></p>

</section>
</body>