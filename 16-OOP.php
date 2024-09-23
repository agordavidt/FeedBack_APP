<?php 
/** ---------------------- Object Oriented Programming ----------- */

/**
 * OOP consists of classes that can hold "properties" and "methods".  Objects can be created from classes.
 * 
 */

 class User {
    // Properties are attributes that belong to a class

    // Access Modifiers: public, private, protected
    // public - can be accessed from anywhere
    // private - can only be accessed from inside the class
    // protected - can only be accessed from inside the class and by any inheriting classes
    public $name;
    public $email;
    public $password;

    // A constructor is a method taht runs when an object is created
    public function __construct($name, $email, $password) {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }


    // Method is a function that belongs to a class
    function set_name($name){
        $this->name = $name;        
    }

    function getj_name(){
        return $this->name;
    }

 }


 // Instatiate a user object
 $user1 = new User('John', 'malujoh@gmail.com', 'jhildlii');
 //$user1->set_name('David');
 //$user1->email = "davidagort@gmail.com";
 // var_dump($user1);
 echo $user1->email;
 echo $user1->name;



 // Inheritance
 class Employee extends User {
    public $title;
    public function __construct( $name, $email, $password, $title) {
        parent::__construct($name, $email, $password);
        $this->title = $title;
    }
    public function get_title(){
        return $this->title;
    }

}

$employee1 = new Employee('Mary','maryreal@gmail.com', '4598gracemary', 'realtor');

echo $employee1->get_title();









?>


