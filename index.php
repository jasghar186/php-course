<?php
declare(strict_types=1);
/**
 * A cookie is used to identify a user
 * Cookie is a small file that the server embeds on the users computer
 * A cookie is created with setcookie function
 * setcookie(name, value, expire, path, domain, secure, httponly);
 * Only the name parameter is required all others are optional
 * we use global function $_COOKIE to retrive value of cookie
   The set cookie function must appear before the HTML tag
 * To delete a cookie use setcookie function with expiration date of past
 * first set a test cookie and use count($_COOKIE['name']) > 0 to check if cookies are enabled or not
 */

//  setcookie('customcookie', 'junaid chee', time() + 10, '/');

 /**
  * To remove session variables use
  * session_unset() (remove all sessions) 
  * session_destroy() (destroy the session)
  */
//  session_start();

//  $_SESSION['name'] = 'junaid';
//  echo '<pre>';
//  print_r($_SESSION);
//  echo '</pre>';
 

/**
 * PHP filters
 * filter_var(variable to check, type of check to use) filters and sanitize the data
 * filter_var(0, filter_validate_int) will return not valid if int is 0
 * FILTER_VALIDATE_IP used to validate ip address
 * FILTER_SANITIZE_EMAIL sanitize 
 * FILTER_VALIDATE_EMAIL validate email
 * FILTER_SANITIZE_URL sanitize url
 * FILTER_VALIDATE_URL validate url 
 * FILTER_FLAG_QUERY_REQUIRED (the third parameter in the filter_var can be a filter_flag or a function to apply extra conditions to validate data)
 * FILTER_FLAG_STRIP_HIGH flag is used to filter ASCII value > 127 from string ÆØÅ
 */

//  $int = 122;
// $min = 1;
// $max = 200;

// if (filter_var($int, FILTER_VALIDATE_INT,
// array(
//     "options" => array("min_range"=>$min, "max_range"=>$max)
// )) === false) {
//   echo("Variable value is not within the legal range");
// } else {
//   echo("Variable value is within the legal range");
// }
// $str = "<h1>Hello WorldÆØÅ!</h1>";

// $newstr = filter_var($str, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
// echo $newstr;

// $x = 0;
// // $x = filter_var($x, FILTER_SANITIZE_STRING);
// if(!filter_var($x, FILTER_VALIDATE_INT) === false) {
//     echo 'value is int';
// }else {
//     echo 'not';
// }
// echo $x;

/**
 * To pass a callback function use a string including function name
 */

/**
 * json_encode() is used to encode a value to json format
 * json_decode() used to decode a json object into php object or associate array
 */

/**
 * An Exception is an object that describes an error or unexpected behaviour of php script
 * Exceptions are a good way to stop a function when it comes across data that it cannot use.
 * throw statement allows to throw exception in user defined function or method
 * After throwing exception the code following it will not be executed
 * to avoid this behaviour we use try{}catch{} statement
 * try {
 * code that can throw exceptions
 *  } catch(Exception $e) {
 *  code that runs when an exception is caught
 *  }
 * The try...catch...finally statement can be used to catch exceptions. Code in the finally block will always run regardless of whether an exception was caught. If finally is present, the catch block is optional.
 * The Exception Object contains information about the error or unexpected behaviour that the function encountered.
 * new Exception(message, code, previous)
 */


/**
 * A class is template for objects and objects is an instance of class
 * A class is defined by class keyword followed by name of the class and then curly braces
 * All properties and methods go inside the class
 * objects of class are created using @new keyword
 * $this refers to the current object and only available inside object and methods
 * we can use instanceof keyword to check if an object is instance of a class
 * __construct() allows to initialize an objects properties upon object creation
 * __destruct() function is called when the object is destructed
 * Access modifier controls where properties or methods can be accessed/ used
 * @public: this property or method can be accessed from everywhere - this is default
 * @protected: the property and method can be access within class or derived classes
 * @private: the property and method can be access within the class only
 */

Class Junaid {
  // Properties 
  public $color;
  public $name;
  private $animal;

  function __construct($name, $color, $animal) {
    $this->name = $name;
    $this->color = $color;
    $this->animal = $animal;
  }
  function __destruct() {
    echo 'Name: '.$this->name.'<br />';
    echo 'Color:'.$this->color.'<br />';
    echo 'Color:'.$this->animal.'<br />';
  }
 
}

// $apple = new Junaid('Junaid', 'black', 'horse'); // here $name is instance of class juanid
// $apple->name = 'cat'; // will overwrite the name value to cat because $name in class have public modifier
// echo $apple instanceof Junaid;

/**
 * Inheritence in oop is when a class is derived from another class
 * derived class will inherit all the public and protected properties and methods from parent class
 * in addition it can have its own properties and methods
 * An inherited class is defined by using keyword @extends
 * use final keyword to prevent class inheritence
 * final class Fruit (now we cannot extends fruit class)
 * final function get_message() now we cannot access this method outside class 
 */

class Fruit {
  const DATA = 'This is some constant data';

  function __construct($fruit) {
    $this->fruit = $fruit;
  }

  // function __destruct() {
  //   echo 'Fruit name is '.$this->fruit.'';
  // }
  function get_name() {
      echo 'Fruit name is '.$this->fruit.'';
      echo '<br />';
      echo self::DATA;
  }
}

class subFruit extends Fruit {
  // Here I can also use the properties and methods of parent class Fruit
  function __construct($fruit, $color) {
    parent::__construct($fruit);
    // $this->fruit = $fruit; //This is from parent class
    $this->color = $color; // This is property of subfruit class
  }
  // function __destruct() {
  //   echo 'The color of '.$this->fruit.' is red';
  // }
  function getFruit() {
    echo 'The color of '.$this->fruit.' is '.$this->color.'';
  }
}

$fruitIns = new Fruit('banana'); // instence of class
echo  Fruit::DATA;
echo '<br />';
$subFruit = new subFruit('kiwi','green');
$subFruit->getFruit();
echo '<br />';
$fruitIns->get_name();

/**
 * Class constants are useful when we need to defined constant data in class
 * a constant cannot be changed once is declared
 * its a good practice to write constant names in all uppercase
 * we can access a class constant using class name followed by scope resolution operator followed by constant name
 * we can also access the contant within the class using self keyword followed by scope resolution operator followed by constatn name
 */

/**
 * Scope Resolution operator ::
 */

/**
 * An Abstract class is a class that contains atleast 1 abstract method 
 * An Abstract class and methods are when the parent class has atleast 1 abstract method, but needs
 * its child classes to fill out the tasks
 * Abstract class is defined by keyword abstract
 * When a child class is inherited from an abstract class we should consider following practices
 * 1) child class or method should have same name as the parent abstract method
 * 2) The access modifier should be same or less restrictive
 * 3) The number of arguments should be same
 */

abstract class Car {
  public $name;
  public function __construct($name) {
    $this->name = $name;
  }
  // : string ; this defines the return value type
  abstract public function intro() : string;
}
class Audi extends Car {
  public function intro() : string {
    return "Choose German quality! I'm an $this->name!";
  }
}
$xx = new Audi('junaid');
echo $xx->intro();

/**
 * Interface allows to specify what method a class show implement
 * Interface makes it easy to use variety of diffrent classes the same way. when one or more classes use the
 * same interface, it is called polymorphism
 * Interface are similar to abstract classes the only diffrence is that
 * 1: Interface cannot have properties while abstract classes do
 * 2: No need to specify the abstract keyword
 * 3: Method cannot be defined in the class
 * 4: Method should be public while in abstract we can have public or protected
 */

 echo '<br />';

interface Animal {
  public function animal() : string;
}
class subAnimal implements Animal {
  public function animal() : string {
    return 'made sound';
  }
}

$xy = new subAnimal;
echo $xy->animal();


// Traits in OOP
/**
 * PHP only support single inheritence
 * a child class can only inherit from 1 single parent but what if we need to inherit from multiple classes
 * Traits solve this problem
 * Traits are used to declare method that can be used in multiple classes. Traits can have methods and abstract
 * methods and support all access modifiers. Traits are declared with keyword Trait
 * To use a trait in class use the keyword @use
 * We can make multiple traits like this (use message1, message2;)
 */

echo '<br />';
trait Sample {
  function sampleTrait() {
    echo 'oop is fun';
  }
}

class SampleClass {
  use Sample;
}

$a = new SampleClass;
echo $a->sampleTrait();