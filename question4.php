<?php

/*Answer Description
Traits contain methods that can be used in different classes.It can 
contain both methods as well as abstract methods.Traits are declared
using trait keyword.
Trait are used to achieve multiple inheritance.In the below example 
we have defined two traits and used them in demo class.
Some limitation of traits:
=>If two traits insert the method with same name fatal error
is produced.
=>Traits can not be instantiated
*/
?>
<?php
trait trait1
{
    function f1()
    {
        echo "Trait1 function 1".PHP_EOL;
    }

}
trait trait2{
    function f2(){
        echo "trait2 function 2".PHP_EOL;
    }
}
class demo{
    use trait1,trait2;
}
$ob=new demo();
$ob->f1();
$ob->f2();
?>
<?php
/*Namespace are way of encapsulating items so that same name can be
used without name conflicts


Example:
namespace google;
class Search{
    public function query(){
        return 'searching google';
    }
}
 namespace yahoo{
     class Search{
         public function query(){
             return "searching Yahoo";
         }
     }
 }
 We can import namespaces into another namespace or class using the
 use keyword.
 */
 ?>