<?php
//! Object Oriented Programming

/*
From PHP5 onwards you can write PHP in either a procedural or object oriented way. OOP consists of classes that can hold "properties" and "methods". Objects can be created from classes.
*/

class User
{
    //* Properties are attributes that belong to a class

    //* Access modifiers: public, private, protected
    //* public - can be accessed from anywhere
    //* private - can be accessed from inside the class
    //* protected - can be accessed from inside the class and inheriting classes

    public $name;
    public $email;
    public $password;

    //* A constructor is a function or a method that runs when an object is created
    public function __construct($name, $email, $password)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    //* Method is a function tha belongs to a class
    function set_name($name)
    {
        $this->name = $name;
    }

    function get_name()
    {
        return $this->name;
    }
}

//? Instantiate a user object
$user1 = new User('Serge', 'serge@gmail.com', 'password');
$user2 = new User('Beast', 'beast@gmail.com', 'beast');

// echo $user1->email;
// echo $user2->name;

// $user1->set_name('Beast');
// $user2->set_name('Serge');

// // var_dump($user2);
// echo $user1->get_name();
// echo $user2->get_name();

//? Inheritance

class Employee extends User
{
    public function __construct($name, $email, $password, $title)
    {
        parent::__construct($name, $email, $password);
        $this->title = $title;
    }

    public function get_title()
    {
        return  $this->title;
    }
}

$employee1 = new Employee('Batman', 'bat@gmail.com', '007', 'Manager');

echo $employee1->get_title();
