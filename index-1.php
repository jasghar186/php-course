<?php

    declare(strict_types=1);
    /* Variables Scope 
    *** Scope of variable is place in script where they can be 
    *** referenced or used 
    *** we have 3 scopes in PHP
    *** 1: Local 2: Global 3: Static 
    *** Globals variables can be accessed within a function
    *** just type global keyword before the variable name
    *** Also PHP stores all global keywords inside $_GLOBALS[index] ***/

    // $x = 'asghar';
    // function custom_function() {
    //     global $x; // First access the variable then use it
    //     echo $x;
    // }
    // custom_function();

    // echo '<br />';

    /* When a function is executed all its variables are deleted
    *** but sometimes we do not want to delete the variables and keep its data
    *** for that purpose we use STATIC keyword when we declare the variable */

    // function static_variable() {
    //     static $x = 0;
    //     $x++;
    //     echo $x;
    // }
    // static_variable();
    // static_variable();
    // static_variable();


    /*
    *** echo has no return value while print have return value of 1
    *** echo is marginally faster than print
    *** echo and print can be used with or without brackets, echo(), print()
    ***/

    // Floating point numbers also called double

    // echo '<br />';

    // Classes and objects are main concepts in OOP
    // class Car {
    //     public $model; // Property/ variable of class

    //     // $this will reference to the class

    //     public function __construct($model /* the order of parameters define how the parameters should be used when class is called*/) {
    //         $this->model = $model;
    //     }

    //     public function message() {
    //         return 'Value passes in class is '.$this->model.'';
    //     }
    // }

    // $car = new Car('volvo');
    // echo $car->message();

    // echo '<br />';

    /* str_word_count() function returns the word count in a string
    *** str_rev() reverses a string
    */

    /* str_pos(string, word) searches for specific text inside a string 
    *** and returns the text index. if no match is found false returned */

    /* str_replace(word to be replaced, word to be replaced with, string); */


    /* php has following pre defined constants for integers
    PHP_INT_MAX (the largest integer supported)
    PHP_INT_MIN (the smalles integer supported)
    PHP_INT_SIZE (Size of integer in bytes) */

    // function integer_predefined_vars() {
    //     echo PHP_INT_MAX;
    //     echo '<br />';
    //     echo PHP_INT_MIN;
    //     echo '<br />';
    //     echo PHP_INT_SIZE;
    // }
    // integer_predefined_vars();

    // echo '<br />';

    /* PHP has the following predefined constants for floats (from PHP 7.2):
    PHP_FLOAT_MAX - The largest representable floating point number
    PHP_FLOAT_MIN - The smallest representable positive floating point number
    PHP_FLOAT_DIG - The number of decimal digits that can be rounded into a float and back without precision loss
    PHP_FLOAT_EPSILON - The smallest representable positive number x, so that x + 1.0 != 1.0
    */


    // A numeric value greater than PHP_FLOAT_MAX is considered infinity
    // The pi() function returns the value of PI:
    // The abs() function returns the absolute (positive) value of a number:
    // The round() function rounds a floating-point number to its nearest integer:
    // echo round(0.1);

    // echo '<br />';

    /*
    const are always case-sensitive
    define() has has a case-insensitive option.
    const cannot be created inside another block scope, like inside a function or inside an if statement.
    define can be created inside another block scope.
    define() constants are already global
    */

    // define('GREETINGS', 'Junaid learning PHP');
    // echo GREETINGS;

    /* PHP has 9 pre defined constants that change the value
    *** dependinh on where they are used and there for they are called 
    *** Magic Constants 
    *** These magic constants are written with double underscores at start and at end
    *** except for the className::class constant
    *** __CLASS__, __DIR__, __FILE__, __FUNCTION__, __LINE__, __METHOD__, __NAMESPACE__,
    *** __TRAIT__, 
    *** Magic constants are case insensitive
    */


    /* Operators are used to perform operations on variables and values
    *** There are following operators in PHP
    *** Arthmetic operator (+, - , * ,/, %, **)
    *** Assignment operator (=)
    *** Comparison operator (==, === , != , <>, !== , < , <=, >=, <=>)
    *** Increment/ Decrement operator ($x++, $x--, ++$x, --$x)
    *** Logical operator (AND, OR, XOR, &&, ||, !)
    *** String operator (. , .=)
    *** Array operator 
    *** Conditional operator (?:. ??) 
    *** Ternary operator also called as conditional expression */

    // echo '<br />';

    // $a = null;
    // $b = 'asghar';
    // echo $a ?? $b;

    /* in PHP we have following conditional statements
    *** if, if else, if else if, switch
    ***
    if (condition) {
    code to be executed if this condition is true;
    } elseif (condition) {
    code to be executed if first condition is false and this condition is true;
    } else {
    code to be executed if all conditions are false;
    } */


    /** 
     * PHP Loops
     * While
     * Do while
     * do {
     *  Code to be executed
     * } while (condition is true)
     * for
     * foreach */

    /**
     * Break statement is used to jump out of a loop
     * Continue breaks one iteration if a condition met and continue with next iteration
     */

    /**
     * In PHP, arguments are usually passed by value, which means that a copy of the value is used
    * in the function and the variable that was passed into the function cannot be changed.
    * When a function argument is passed by reference, changes to the argument also change the variable
    * that was passed in. To turn a function argument into a reference, the & operator is used: 
    */

    //  echo '<br />';
    //  function add_five(&$value) {
    //     $value += 5;
    //   }
      
    //   $num = 2;
    //   add_five($num);
    //   echo $num;

    //   echo '<br />';

    /**
     * By using ... in front of function parameter the function accepts variable number of arguments
     * This is called variadic function
     * The variadic function arguments becomes an array
     * You can only have 1 argument with variable length and it has to be the last argument function myFamily($lastname, ...$firstname) 
     */
    // function sumMyNumbers(...$x) {
    //     $n = 0;
    //     $len = count($x);
    //     for($i = 0; $i < $len; $i++) {
    //       $n += $x[$i];
    //     }
    //     return $n;
    //   }
      
    //   $a = sumMyNumbers(5, 2, 6, 2, 7, 7, 1);
    //   echo $a;

    //   function myFamily($lastname, ...$firstname) {
    //     $txt = "";
    //     $len = count($firstname);
    //     for($i = 0; $i < $len; $i++) {
    //       $txt = $txt."Hi, $firstname[$i] $lastname.<br>";
    //     }
    //     return $txt;
    //   }
      
    // $a = myFamily("Doe", "Jane", "John", "Joey");
    // echo $a;

    /**
    * In PHP there are 3 type of arrays
    * Indexed array
    * Associate array
    * Multidimensional array
    * arrays more than three levels deep are hard to manage for most people
    */

    /**
    * sort() sort array elements in assending order
    * rsort() sort array elements in descending order
    * asort() sort associate array in ascending order based on the value
    * ksort() sort associate array in ascending order based on the key
    * arsort() reverse sort associate array based on value
    * krsort() reverse sort associate array based on key
    */


    /* Super globals were introduced in PHP 4.1.0
    * Super globals are always available in all scopes
    * $GLOBALS (used to access global variables in the script in any scope)
    * $_SERVER (hold information about script location, path, and headers)
    * $_REQUEST (used to collect data after submitting a form)
    * $_POST (used to collect data after submitting a form with post method, also used to pass variables)
    * $_GET (used to collect data after submitting form with get method)
    * $_FILES
    * $_ENV
    * $_COOKIE
    * $_SESSION
    */

    /**
     * Use htmlspecialchars() to convert special characters into entities to prevent cross site scripting attacks
     * Always remove extra space, unnecessary characters, new lines from user inputs
     * Always remove backslashes from user input using stripslashes() function
     * use $_SERVER["REQUEST_METHOD"] to check the submission method of the form
     * The simple and easiest way to validate an email is PHP filter_var($email, FILTER_VALIDATE_EMAIL) function
     */

    //  print_r($_SERVER["REQUEST_METHOD"]);
    // echo '<br />';

    /**
     * PHP date(format, timestamp) is used to format a date or time
     * format: specifies the format of the timestamp
     * timestamp: specifies a timestamp default is current 
     * Timestamp is sequence of characters denoting the date and time at which a certain event occured
     * d - Represents the day of the month (01 to 31)
     * m - Represents a month (01 to 12)
     * Y - Represents a year (in four digits)
     * l (lowercase 'L') - Represents the day of the week
     * H - 24-hour format of an hour (00 to 23)
     *  h - 12-hour format of an hour with leading zeros (01 to 12)
     *  i - Minutes with leading zeros (00 to 59)
     *  s - Seconds with leading zeros (00 to 59)
     *  a - Lowercase Ante meridiem and Post meridiem (am or pm)
     * By default the date method returns time according to location of server
     * mktime(hour, minute, second, month, day, year)
     * strtotime() converts a date string to a time strtotime(10:30PM April 15 2014)
     */
    // date_default_timezone_set("America/New_York");
    // echo date('d/D');

    /**
     * Include or require statement takes all the code/ text/ html from 1 file and copies it to the file
     * where include/ require is used
     * @require will produce fatal error and stop the script
     * @include will only give warning and continue with script execution
     * Use require when the file is required by the application.
     * Use include when the file is not required and application should continue when file is not found.
     */


    /**
     * Manipulating TXT files
     * readfile(filename) is used to read contents of a file
     * fopen() function opens a file and gives more options to manipulate a file 
     * than readfile() function
     * fopen(filename, mode in which file should open)
     * r	Open a file for read only. File pointer starts at the beginning of the file
     * a	Open a file for write only. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
     * x	Creates a new file for write only. Returns FALSE and an error if file already exists
     * r+	Open a file for read/write. File pointer starts at the beginning of the file
     * w+	Open a file for read/write. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
     * a+	Open a file for read/write. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
     * x+	Creates a new file for read/write. Returns FALSE and an error if file already exists
     * 
     * fread(filename, filesize)
     * fclose() is used to close the open file, if left open will run around server and take resources
     * fgets() reads only the first line of the file
     * feof() is used to check if end of file is reached
     * fgetc() reads each character of file until end of file is reached
     * fwrite(name of file, string to be written) is used to write on a file
     * file_exists(filename) checks if a file is already exists
     */

     echo '<br />';
    //  echo readfile('x.csv');
    // $file = fopen('x.csv', 'r') or die('unable to open file');
    // echo fread($file, filesize('x.csv'));
    // echo  fgets($file);
    // while(!feof($file)) {
    //   echo '<pre>';
    //   print_r(explode(',', fgets($file)));
    //   echo '</pre>';
    // }
    // fclose($file);


    // $file = fopen('test.txt', 'a');
    // fwrite($file, 'gets');
    // fwrite($file, 'off');
    // fclose($file);


    // PHP upload files
    // Check if image file is a actual image or fake image
  //   if(isset($_POST["submit"])) {
  //     $target_dir = 'uploads/';
  //     $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
  //     $uploadOk = 1;
  //     $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  //     $fileSize = $_FILES['fileToUpload']['size'];
  //     echo $fileSize / 1000 . ' ' . 'KB' . '<br />';
  //     $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  //     if($check !== false) {
  //       echo "File is an image - " . $check["mime"] . ".";
  //       $uploadOk = 1;
  //     } else {
  //       echo "File is not an image.";
  //       $uploadOk = 0;
  //     }
  //   }
  //   ?>
  <!-- //   <form action="<?php// htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" enctype="multipart/form-data">
  //     Select image to upload:
  //     <input type="file" name="fileToUpload" id="fileToUpload">
  //     <input type="submit" value="Upload Image" name="submit">
  // </form> -->


<?php
/**
 Next part of course is in second index.php file
 This file is going to be renamed as index-1.php
 */