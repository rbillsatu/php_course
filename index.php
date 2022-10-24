<?php 
print "Hello World"; #This is a sinle line comment.  
echo "<br>";
// This is also a single line comment
echo 'Hello World'; #More commonly used than print
echo "<br>";
/* This
* is
* how
* you 
* do 
* multiline
* comments
*/

echo 5 + "7"; // prints out 12
echo "<br>";

/* $name = expression; */

$user_name = "Pokemon4Lyfe";
$age = 25;
$age_in_dog_years = $age/7;
$this_class_is_fun = true;

$numbers = [1,3,4,5];  // an array
$fruits = array('apple','orange'); // array using the array function

echo $fruits[1];
echo "<br>";
print_r($numbers); // shows info
echo "<br>";

var_dump($numbers); //show index and data type
echo "<br>";

$colors = [
    1 => 'red',
    2 => 'blue',
    3 => 'green'
];  // 

echo $colors[3];

$person = [
    'first_name' => 'Ryan',
    'last_name' => 'Bills',
    'email' => 'rbills@atu.edu'
];
echo "<br>";
echo $person['first_name'];

"1" + 1 == 2;

// $age = (int) "21";
echo "<br>";
echo $user_name[0];  # Prints out first position of username
echo "<br>";
echo $user_name[5];  # Prints out o
echo "<br>";
// 5+"2 turtle doves"; // Prints 7 turtle doves
5 . "2 turtle doves"; // Prints 52 turtle doves.  The . tells php to not convert to integer

strlen($user_name); # length is 12
//str.substring($user_name,1,3); // 2nd letter to the 4th letter

# If Conditions...
$age = 10;
if($age>=18){
    echo "You are good to vote!";
}
else {
    echo "Sorry! Can't vote yet.";
}
echo "<br>";

$posts = ['First Post'];

$first_post = !empty($posts) ? $posts[0] : 'No Posts';  // new way of writing if/else statements
// if $posts is not empty then assign the value No Posts, otherwise, it prints the first value $posts[0]
echo $first_post;

echo "<br>";

$string = "Hello World!";
echo strlen($string);
echo "<br>";
echo strrev($string);
echo "<br>";

function registerUser(){
    $x = 10;                    // $x is a local variable
    echo 'User Regeristered';
}

registerUser();

function registeredUser($email){
    echo $email.' registered';
}
echo "<br>";
registerUser($posts[0]);

?>