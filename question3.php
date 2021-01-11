
<?php
/*Answer Description
Multiple inheritance means one child class has more than one parent
In php multiple inheritance is not possible through class but is
possible through interface or trait.

Reason: While extending two or more classes at same time there may
be scenario that both class has same method name which can cause
ambiguity error while calling that method from child class 
object.
As compiler will not know to call which mclass method as both have same name.
Here interface comes in picture because in interface there is no method
implementation/method body only method definition is there.So even if
two interfaces have same function name it wont cause error as there is
a single implementation in child class.There is no point of ambiguity,
In below example we have done the same interface i1 and i2  both
have functions fun2(). But in child class there is sinfle implementation
for fun2() so at time of invoking that function there is no error
and program executes successfully.



*/
?>

<?php
interface i1
{

    public function fun1();


    function fun2();

}

interface i2
{
    public function fun2();

}


//multiple inheritance through interface

//fun2() is availabel in both interface i1 and i2.Class demo2 
// but there is no ambiguity because there is only one
// implementation of fun2() in class demo2.
class demo2 implements i1,i2{

    function fun1()
   {
       echo "fun1 implemented in demo2".PHP_EOL;
   }

   function fun2(){

       echo "fun2 implemented in demo2".PHP_EOL;
   }


   function fun3(){

    echo "Class demo2 own method".PHP_EOL;
}

}

$ob=new demo2();
$ob->fun1();
$ob->fun2();
$ob->fun3();

?>