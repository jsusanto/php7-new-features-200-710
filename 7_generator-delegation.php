<?php
include "header.php";
?>

<h3>Generator Delegation</h3>
<pre>
function gen()
{
    yield 1;
    yield 2;
    yield from gen2();
}

function gen2(){
    yield 3;
    yield 4;
}

foreach(gen() as $val){
    echo $val, PHP_EOL;
}
</pre>
Output:
<pre>
<?php
function gen()
{
    yield 1;
    yield 2;
    yield from gen2();
}

function gen2(){
    yield 3;
    yield 4;
}

foreach(gen() as $val){
    echo $val, PHP_EOL;
}
?>
</pre>

<p style="text-align:center"><a href="index.php">Back to main menu</a></p>

</section>
</body>