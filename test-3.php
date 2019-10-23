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
<hr/>
<?php
$text = 'This is text';

$text1 = <<<'TEXT'
$text
TEXT;

$text2 = <<<TEXT
$text1
TEXT;

echo "$text1";

echo "$text2";
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
$array = ["Sue","Mary","John","Anna"];
print_r(  $array[array_rand($array)] );
?>

<?php
$input = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
$rand_keys = array_rand($input, 2);
echo $input[$rand_keys[0]] . "\n";
echo $input[$rand_keys[1]] . "\n";
?>
<hr/>

<?php
trait MyTrait{
    private $abc = 1;
    public function increment(){
        $this->abc++;
    }
    public function getValue(){
        return $this->abc;
    }
}

class MyClass2 {
    use MyTrait;
    public function incrementBy2(){
        $this->increment();
        $this->abc++;
    }
}

$c = new MyClass2;
$c->incrementBy2();
var_dump($c->getValue());
?>
<hr/>