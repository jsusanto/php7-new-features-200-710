<?php
include "mystring.php";
print ",";
print strlen("Hello World");
?>
<hr/>
<?php
$text = 'This is text';
$text1 = <<<'TEXT'
$text
TEXT;

$text2 = <<<TEXT
$text1
TEXT;

echo $text2;
?>
<hr/>
stream_context_get_options — Retrieve options for a stream/wrapper/context <br/>
<?php
$params = array("method" => "POST");

stream_context_set_default(array("http" => $params));

var_dump(stream_context_get_options(stream_context_get_default()));
?>
<hr/>
<?php
$world = 'world';
echo <<<'TEXT'
hello $world
TEXT;
?>
<hr/>
<?php
echo md5(rand(), TRUE);
?>
