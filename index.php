<?php
include "header.php";
/* 
 * Jeffry Susanto, October 3rd 2019
 * What's new on PHP 7 
*/
/*
 * In PHP 7, a new feature, Scalar type declarations, has been introduced. Scalar type declaration has two options -
 * coercive - coercive is default mode and need not to be specified.
 * strict - strict mode has to explicitly hinted.
*/
?>
    <h3>1. Scalar type declarations</h3>
    <p>In PHP 7, a new feature, <b>Scalar type declarations</b>, has been introduced. Scalar type declaration has two options -
        <ul>
            <li>coercive - coercive is default mode and need not to be specified.</li>
            <li>strict - strict mode has to explicitly hinted.</li>
        </ul>
    </p>
    Example: <a href="1_scalar-type-declarations.php">scalar-type-declarations.php</a>
    <br/><br/>

    <h3>2. null coalescing operator (??)</h3>
    <p>It is used to replace the ternary operation in conjunction with isset() function.<br/>
    The Null coalescing operator returns its first operand if it exists and is not NULL; otherwise it returns its second operand.
    </p>
    Example: <a href="2_null-coalescing-operator.php">null-coalescing-operator.php</a>
    <br/><br/>

    <h3>3. Return type declarations</h3>
    <p>Return type declaration specifies the type of value that a function should return.<br/>
    Here are the types: 
    <ul>
        <li>interfaces (PHP 5.0)</li>
        <li>self (PHP 5.0)</li>
        <li>array (PHP 5.1)</li>
        <li>callable (PHP 5.4)</li>
        <li>bool (PHP 7)</li>
        <li>float (PHP 7)</li>
        <li>int (PHP 7)</li>
        <li>string (PHP 7)</li>
    </ul>
    </p>
    Example: <a href="3_return-type-declarations.php">return-type-declarations.php</a>
    <br/><br/>

    <h3>4. spaceship operator</h3>
    <p>It is used to compare two expressions.<br/>
    It returns -1, 0 or 1 when first expression is respectively less than, equal to, or greater than second expression.</p>
    Example: <a href="4_spaceship-operator.php">spaceship-operator.php</a>
    <br/><br/>

    <h3>5. Closure::call()</h3>
    <p><b>Closure::call()</b> method is added as a shorthand way to temporarily bind an object scope to a closure and invoke it. <br/> 
    It is much faster in performance as compared to bindTo of PHP 5.6.</p>
    Example: <a href="5_closure-call.php">closure-call.php</a>
    <br/><br/>
   
    <h3>6. Constant arrays using define()</h3>
    <p>Array constants can now be defined with define(). In PHP 5.6, they could only be defined with const.</p>
    Example: <a href="6_array-constant.php">array-constant.php</a>
    <br/><br/>
    
    <h3>7. Generator delegation</h3>
    <p>Generators can now delegate to another generator, Traversable object or array automatically, <br/>
    without needing to write boilerplate in the outermost generator by using the yield from construct.</p>
    Example: <a href="7_generator-delegation.php">generator-delegation.php</a>
    <br/><br/>

    <h3>8. Generator return</h3>
    Example: <a href="8_generator-return.php">generator-return.php</a>
    <br/><br/>

    <h3>9. Throwable interface</h3>
    <p>It's actually a new feature as well as the backward compatibility.<br/>
    in PHP 7, errors and exceptions implement both throwable interface
    </p>
    Example: <a href="9_throwable-interface.php">throwable-interface.php</a>
    <br/><br/>

    <h3>10. Dirname levels</h3>
    Example: <a href="10_dirname-levels.php">dirname-levels.php</a>
    <br/><br/>
    
    <h3>11. Integer division</h3>
    Example: <a href="11_integer-division.php">integer-division.php</a>
    <br/><br/>
    </div>
</section>
</body>