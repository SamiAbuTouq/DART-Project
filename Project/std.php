<?php 

# comment
// comment
/* Multiline comment */


echo "sami abu touq","<br>"."sami",'<br>';
print("print statement With parentheses").('<br>');
echo("echo statement With parentheses"),('<br>');
print "abu obida"." Dana"." Rami"." Salem<br>";

print "abu obida"," Dana"," Rami","sasa"," Salem<br>";
echo "abu obida"," Dana"." Rami"," Salem<br>";


define("DELAY", 3);  // Define a constant named DELAY with the value of 3 
//sleep(3);        // Pause the script execution for 60 seconds
print "This Text will be printed after 3 seconds delay".'<br>';

echo "<br>","<br>"."<br>"."<br>";

$intVar=5;
$strVar="string";
$DELAY=7; // a variable named $DELAY and its different than the constant DELAY that  have a value = 3
print "\$DELAY = $DELAY"." This is a variable and it can be reassigned and their values can be changed throughout the script"."<br>"; 
print "DELAY =".DELAY." This is a constant and it cann't be reassigned and their values are constant throughout the script"."<br>"; 


echo "<br>"."<br>"."<br>"."<br>";

echo 5/2 ,"  ". 7/2 ." --> int/int != int <br>";   
//echo 7/2."int/int != int <br>";   // error 
//echo 7/2 ."int/int != int <br>";  // working! --> the space is inportant or you can use ,



// A call to isset() will return true if a variable exists and has a value other than NULL
// A variable can be set back to the unassigned state, with the unset() function
if (isset($intVar)) print "variable exists and has a value other than NULL".'<br>';
unset($intVar);
if (!isset($intVar))  print "The variable has been set back to the unassigned state".'<br>';


setcookie("name","value",time()+3600);
setcookie("name","",time()-3600);

echo "<br>"."<br>"."<br>"."<br>";
echo "STRING OPERATIONS"."<br>";    






?>