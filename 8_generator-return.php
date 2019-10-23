<?php
include "header.php";
?>

<h3>Generator Return</h3>
<pre>
$gen = (function(){
    yield 1;
    yield 2;

    return 3;
})();

foreach ($gen as $val){
    echo $val, PHP_EOL;
}

echo $gen->getReturn(), PHP_EOL;
</pre>
Output:
<pre>
<?php
$gen = (function(){
    yield 1;
    yield 2;

    return 3;
})();

foreach ($gen as $val){
    echo $val, PHP_EOL;
}

echo $gen->getReturn(), PHP_EOL;
?>
</pre>

<p style="text-align:center"><a href="index.php">Back to main menu</a></p>

</section>
</body>