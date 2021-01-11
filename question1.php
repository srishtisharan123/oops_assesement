<?php
/*
Answer  Description

Method chaining means how two or more methods ar chained together
to obtain the final result.
The main concept in method chaining is returning thre class instance
from each method that needs to be changed. We can do this by returning
$this from class methods.In the below example see we have returned $this
from each methods that needs to be chained.We have to setter functions
for name and age so after creatinf instance of class instead of calling
those setter functions separately we invoked them in a chained fashion
and set both name and age parameters in a single statement.


By doing method chaining following things are achieved:
=>It reduces amount of code.
=>Improves readbility of code.
=>We can achieve a lot or say invoke more than one function in a single 
statement */
?>
<?php
class student{
    private $name;
    private $age;
    public function setname($name)
    {
        $this->name=$name;
        return $this;
    }
    public function setage($age)
    {
        $this->age=$age;
        return $this;
    }
    public function display(){
        echo "Hello My name is ",$this->name." and my age is ".$this->age." years".PHP_EOL;
    }

}
$ob=new student();
$ob->setname("Maria")->setage(30)->display();
?>