<?php
/* in the below example we have created an interface with 2methods
and in abstract class one method f1() is implemented and other have 
definition.
in concrete class 
*/
?>
<?php
interface A{
    function f1();
    function f2();
}
abstract class B implements  A{
function f1(){
    echo "f1 is implemented in abstract class".PHP_EOL;
    function f2(){}
}
}
class concrete extends B{
    function f2(){     
        echo "f2 is implemented in concrete class".PHP_EOL;
    }
}
$ob=new concrete();
$ob->f2();
$ob->f1();




?>