<?php
include "header.php";
?>

<h3>Return type declarations</h3>
<pre>
   declare(strict_types = 1);
   function returnIntValue(int $value): int {
      return $value;
   }
   print(returnIntValue(5));
</pre>
Output: <i>5</i> <br/><br/>
<pre>
   declare(strict_types = 1);
   function returnIntValue(int $value): int {
      return $value + 1.0;
   }
   print(returnIntValue(5));
</pre>
Output: <i>Fatal error: Uncaught TypeError: Return value of returnIntValue() must be of the type integer, float returned...</i>

<p style="text-align:center"><a href="index.php">Back to main menu</a></p>

</section>
</body>