<?php
/*Answer Description
DEfinition:
Dependency injection is  process in which an object receives other 
objects that it depends on.These other object is called dependencies
The injection refers to passing of dependency (a service) into the
object(a client) that would use it.

Example:
The author's information passed to the Question constructor has
 nothing to do inside Question's scope. The name of an author 
 should be inside the Author class because it has nothing to do 
 with the question, itself.
The Author class is tightly coupled with the Question class. 
If we add a new parameter to Author's constructor, we then have 
to modify every class where we create an Author object - a tedious 
and long process, especially in large applications.
*/

?>

class Author {
    private $firstName;
    private $lastName;
 
    public function __construct($firstName, $lastName) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }
 
    public function getFirstName() {
        return $this->firstName;
    }
 
    public function getLastName() {
        return $this->lastName;
    }
}
 
class Question {
    private $author;
    private $question;
    public function __construct($question, $authorFirstName, $authorLastName) {
        $this->author = new Author($authorFirstName, $authorLastName);
        $this->question = $question;
    }
 
    public function getAuthor() {
        return $this->author;
    }
 
    public function getQuestion() {
        return $this->question;
    }
}

<?php
/*
We have overcome this issue in the below mentioned code as we have 
inserted the dependencies through dependent's class constructor.i.e 
Question class constructor.Have a look at the code we will understand that
we have passed a variable of author class type instead of passing 
all the data members of author class.Now even if we modify ou author
class code add or remove parameters we dont have to do modifiaction in
dependent class as above.

*/
?>
class Author {
    private $firstName;
    private $lastName;
     
    public function __construct($firstName, $lastName) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }
 
    public function getFirstName() {
        return $this->firstName;
    }
 
    public function getLastName() {
        return $this->lastName;
    }
}

class Question {
    private $author;
    private $question;
 
    public function __construct($question, Author $author) {
        $this->author = $author;
        $this->question = $question;
    }
 
    public function getAuthor() {
        return $this->author;
    }
 
    public function getQuestion() {
        return $this->question;
    }
}