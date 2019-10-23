<?php
include "header.php";
?>

<h3>Throwable Interface</h3>
<pre>
//Error as Throwable
try{
    helloworld();
}catch(Throwable $t){
    echo "Throwable: ". $t->getMessage(). PHP_EOL;
}

//Exception as Throwable
try{
    throw new Exception("Bla");
}catch (Throwable $t){
    echo "Throwable: ". $t->getMessage(). PHP_EOL;
}

//Error
try{
    helloworld();
}catch (Error $e){
    echo "Error: ". $e->getMessage(). PHP_EOL;
} catch(Exception $e){
    echo "Exception: ". $e->getMessage(). PHP_EOL;
}

//Exception
try{
    throw new Exception("Bla");
} catch(Error $e){
    echo "Error: ". $e->getMessage(). PHP_EOL;
} catch(Exception $e){
    echo "Exception: ". $e->getMessage(). PHP_EOL;
}

//Type error
try{
    function add(int $a, int $b):int {
    }
    echo add(array(), array());
}catch(TypeError $t){
    echo "Type error: ". $t->getMessage(). PHP_EOL;
}
</pre>
Output:
<pre>
<?php
//Error as Throwable
try{
    helloworld();
}catch(Throwable $t){
    echo "Throwable: ". $t->getMessage(). PHP_EOL;
}

//Exception as Throwable
try{
    throw new Exception("Bla");
}catch (Throwable $t){
    echo "Throwable: ". $t->getMessage(). PHP_EOL;
}

//Error
try{
    helloworld();
}catch (Error $e){
    echo "Error: ". $e->getMessage(). PHP_EOL;
} catch(Exception $e){
    echo "Exception: ". $e->getMessage(). PHP_EOL;
}

//Exception
try{
    throw new Exception("Bla");
} catch(Error $e){
    echo "Error: ". $e->getMessage(). PHP_EOL;
} catch(Exception $e){
    echo "Exception: ". $e->getMessage(). PHP_EOL;
}

//Type error
try{
    function add(int $a, int $b):int {
    }
    echo add(array(), array());
}catch(TypeError $t){
    echo "Type error: ". $t->getMessage(). PHP_EOL;
}
?>
</pre>

<p style="text-align:center"><a href="index.php">Back to main menu</a></p>

</section>
</body>