# PHP Tutorial Udemy

powerful, open source, widely used, fast, stable, cross-platform

- Php processes scripts on a web server, hence it is a server side language; unlike JS, HTML, CSS which are client side languages.

### How PHP works?

- PHP code in our device travels to the web server through the internet.
- Web server needs various components to run this script.
- First apache will intercept and retrieve the script file from our web server. apache will then parse the script and find php code within that script. apache has a php plugin built-in to execute the php script. It then sends the resulting file to the pc through internet and ultimately to the web browser.

### Variable Declaration:

- basic rules should be followed
    - start with $ , followed by name of the variable
    - start with letter or underscore
    - can’t start with number
    - can only contain alpha numeric
    - case sensitive

### Scope of variables:

- local scope: accessible inside a function scope only
- global scope: accessible outside a function scope only

**************Global************** Keyword: used to make a variable defined within a function accessible outside of the function scope:

note: php stores all the global variables in an array called $GLOBAL[index], where index = name of variable. $GLOBAL[v1] in the below code example.

```php
<? php
function test(){
	global $v1;
	echo $v1;
}
test();
echo $v1;  // can be used here outside of function scope as well
?>

```

**********Static variables:********** Used when we need to maintain the value of a local variable.

```php
<? php
function test1(){
	static $x =10;
	echo $x;
	$x++;
}
test1();  // will output 10
test1();  // will output 11

?>
```

### Echo vs print:

Echo allows multiple arguments in a single statement vs print doesn’t and echo is faster.

```php
<?php
    function test1(){
        $t1 = "hello";
        $t2 = "world";
        echo "<h2>".$t1. "</h2>";
        echo "<h1>".$t2 ."</h1>";}
        test1();
    ?>
```

you can use print instead of echo in the above example

### ********************Data Types:********************

- string
- number
    - integer
    - float
- array

```php
$array1 = array("hi", "hello");
var_dumb($array1); // outputs each value in an array
```

- null
- boolean
- Object

### Classes and Objects:

**************Class:************** It’s a blueprint of an object.

******Object:****** It’s an instance of a class.

example code for making a Person class and initiating 2 objects of type person.

```php
<?php
    class Person{
        public $first_name;
        public $last_name;
        public $age;

        public function __construct($first_name, $last_name,$age)
        {
            $this->first_name = $first_name;
            $this->last_name = $last_name;
            $this->age = $age;
        }
        public function hello(){
            return "I am ".$this->first_name . " " . $this->last_name . ", my age is ". $this->age. " ";
        }

    }
     // creating an object from above class    
    $p1 = new Person("anish","neupane",20);
    $p2 = new Person("manish", "Nepal", 10);

    echo $p1->hello();
    echo $p2->hello();
    ?>
```

### String Functions:

- str_word_count:

```php
echo str_word_count("HEllo world");
```

- strrev:

```php
echo strrev("HI");

```

- strpos:

```php
echo strpos("Hello world", "wor"); //outputs 6; count starting from 0
```

- str_replace:

```php
str_replace("what to replace", "with what to replace", "where to replace");
```

### PHP constants:

value can’t be changed and is automatically global. 

- Doesn’t require a dollar sign at the start.

syntax:

```php
define("Constant_name", "value", <true for case insensitive>);
```

### PHP operators:

- Arithmetic: +, -, /, *, %
- Assignment:  =
- Comparison: >, <
    - ==(checks value only)
    - ===(checks value and type)
    - <>,
    - ! ==
- Increment/Decrement:
    - pre-increment
    - post-increment
- Logical:
    - and, &&
    - or , ||
- String:
    - .   : concatenation
- Array:
    - Union of arrays: +
    - Equality: ==
    - Identity
    - Inequality etc.

### Conditional Statements:

- If:
    
    ```php
    if (condition){
    
    }
    else {
    
    }
    else if {
     
    }
    ```
    
- SWITCH:

```php
switch(variable){
	case "case1":
			task 1;
	case "case2":
			task 2;
.
.
.
	default:
		task default;
}
```

### LOOPS:

- while:

```php
while (){
 
}
```

- do while:

```php
do {

}while();

```

- for:

```php
for(counter; test_condition; increment/decrement){

}
```

- foreach:

```php
$days = array("sun", "mon", "tues");

foreach ($days as $day){
	echo "$day"."day"." ";
}
```

### PHP Functions:

function <function_name> (){

return <return_variable>;

}

### PHP Arrays:

- Indexed array:

```php
$arr1 = array(1, 2, 3);

echo count($arr1);
```

- Associative arrays: key value pair

```php
$arr1 = array("John"=>10, "bill"=>20);
```

- Multi-dimensional array:

```php
$a1 = array(
array(1, 2, 3),
array("One", "Two", "Three")
)
```

### Sort array:

sort()

```php
$sorted_array = sort($arrayname); // outputs a sorted array
```

- rsort(): reverse sort
- asort() & arsort(): sort on associative array using value and not the keys
- ksort() & krsort(): sort on associative array using keys rather than values

### Super Global Variables:

These are variables which are always available for use. For eg the $GLOBAL[’index’] array variable which stores the information of all the global variables is an example of super global variable.

```php
<?php

echo $_SERVER['PHP_SELF']; // outputs the current location of php file
echo $_SERVER['SERVER_NAME']; // outputs the server it is hosted on.
?>
```

### FORMS:

validate form data using php

```php
<form action="send.php" method="post">
```

- GET:
    - only to send non-sensitive data.
    - sends array variables through the url parameters.
- POST:
    - passes variables using HTTP Post method.
    - information is embedded withing the body of the HTTP request.
    - No limit to amount of data that can be sent.
    

place both files in same directory. forms.php and send.php

forms.php

```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="send.php" method="POST">
    <br>
    First Name: <input type="text" name="fname"><br> <br>
    E-mail: <input type="email" name="email">
    <input type="submit">
</form>
    
</body>
</html>
```

send.php

```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    First Name: <?php echo $_POST['fname'] ;   //$_POST is a superglobal variable
    echo "<br>";
    echo "Email: ". $_POST['email'];
    ?>
</body>
</html>
```

using this the data that is inputted in the forms is passed to the send.php file and displayed over there.

### Simple php script to display data in form into the same page:

steps involved:

- Make the form using plain html.
- Initialize variables to store data from each input field in the form.
- In a php script write function to validate data:
    - remove unnecessary spaces.
    - Remove slashes.
    - Remove any html special characters for security reasons and to avoid code injection.
- Write an if clause to validate each data if the method is post.

```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$name = $website = $position = $experience = $estatus = $comments = "";

//
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $name = validate($_POST['name']);
    $website = validate($_POST['website']);
    $position = validate($_POST['position']);
    $experience = validate($_POST['experience']);
    $estatus = validate($_POST['estatus']);
    $comments = validate($_POST['comments']);
}

//function to validate inputted data
function validate($data){
    $data = trim($data);   // remove unnecessary spaces
    $data = stripslashes($data);  //remove unnecessary slashes
    $data = htmlspecialchars($data);  //remove any special chars for security
    return $data;
}
?>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" name="employment" method="post" >

<table width='600' border="0" cellspacing='1' cellpadding='1'>

    <tr>
        <td> <h2>Employment Application </h2></td>
        <td></td>
    </tr>

    <tr>
        <td>Name</td>
        <td><input type="text" name="name" maxlength="50"></td>
    </tr>
    <tr>
        <td>Website</td>
        <td><input type="text" name="website" maxlength="50"></td>
    </tr>
    <tr>
        <td>Position</td>
        <td>
            <select name="position" id="">
                <option value="Accountant">Accountant</option>
                <option value="Receptionist"> Receptionist</option>
                <option value="Admin"> Admin</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>Experience Level</td>
        <td> <select name="experience" id="">
            <option value="Entry Level">Entry</option>
            <option value="Medium Level">Medium</option>
            <option value="Experienced">Experienced</option>
        </select><td>
    </tr>
    <tr>
        <td>
            Employment Status
        </td>
        <td>
            <input type="radio" name="estatus" value="Employed" checked/> Employed
            <input type="radio" name="estatus" value="Unemployed" /> Unemployed
            <input type="radio" name="estatus" value="Student" /> Student
        </td>
    </tr>
    <tr>
        <td>Additional Comments: </td>
        <td><textarea name="comments" id="" cols="45" rows="5"></textarea></td>
    </tr>

    <tr>
        <td></td>
        <td><input type="submit" name="submit" value="Submit"/>  <input type="reset" name="reset" value="Reset"/></td>
    </tr>
</table>

</form>    

<?php
//$name = $website = $position = $experience = $estatus = $comments = "";
    echo "Name:        ".$name."<br>";
    echo "Website:     ".$website."<br>";
    echo "Position:    ".$position."<br>";
    echo "Experience:  ".$experience."<br>";
    echo "Employement: ".$estatus."<br>";
    echo "Comments: "."<br>".$comments."<br>";
?>
</body>
</html>
```

************Improving validation:************

by editing the above code in if block to the follow, we can check if the form data is valid or not.

```php
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    // Validation for empty name
    if (empty($_POST['name'])){
        echo "<span class=\"error\">Error: First Name Required </span>";
    }
    // validation for empty website
    elseif(empty($_POST['website'])){
        echo "<span class=\"error\"> Error: Website Required!! </span>";
    }

	// To make sure name only contains letters
    elseif(!preg_match("/^[a-zA-Z]*$/", $_POST['name'])){
        echo "<span class=\"error\"> Error: Name must be letter only!! </span>";
    }
// to make sure website in in correct format.
    elseif (!preg_match('/^(https?:\/\/)?([a-z0-9-]+\.)+[a-z]{2,6}([\/?#].*)?$/i', $_POST['website'])){
        
        echo "<span class=\"error\"> Error: Website format incorrect!! </span>";
    }
    else {

        $name = validate($_POST['name']);
        $website = validate($_POST['website']);
        $position = validate($_POST['position']);
        $experience = validate($_POST['experience']);
        $estatus = validate($_POST['estatus']);
        $comments = validate($_POST['comments']);
    }
}
```

### Practise:

1. BMI Calculator:

```php
<!DOCTYPE html>
<html>
<head>
    <title>BMI Calculator</title>
    <style>
        label {
            display: block;
            margin-bottom: 10px;
        }
        input[type="text"] {
            width: 200px;
        }
    </style>
</head>
<body>
    <h1>BMI Calculator</h1>
    <?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (empty($_POST['height'])){
        echo "Enter Height";
    }
    elseif (empty($_POST['weight'])){
        echo "Enter Weight";
    }
    else {    
        $height = $_POST['height'];
        $weight = $_POST['weight'];
    }
    // Calculate BMI
    $bmi = $weight / (($height/100) ** 2);

    // Determine BMI category
    if ($bmi < 18.5) {
        $category = 'Underweight';
    } elseif ($bmi < 25) {
        $category = 'Normal weight';
    } elseif ($bmi < 30) {
        $category = 'Overweight';
    } else {
        $category = 'Obese';
    }
}
?>
    <form method="post">
        <label>Height (in cm): <input type="text" name="height"></label>
        <label>Weight (in kg): <input type="text" name="weight"></label>
        <input type="submit" value="Calculate BMI">
    </form>

    <?php if (isset($bmi)):  // check if $bmi is NULL or not
        echo "<br>";  
        echo "Your BMI is: ". round($bmi, 1);
        echo "<br>";
        echo  "You are: ". $category;
    endif ?>
</body>
</html>
```