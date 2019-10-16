<?php
namespace MyFramework\DB;
class MyClass {
    static function myName() {
        return __METHOD__;
    }
}
print MyClass::myName();

$data = '$1a2';
$data = utf8_encode ($data);
echo $data;
$count = strlen($data);
echo $count;
?>