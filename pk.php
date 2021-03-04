<?php 
//if (isset($g=$_POST['submit'])){
$a=$_POST['username'];
echo "Your username is: ",$a;
$b=$_POST['email'];
echo "</br>";
echo " Your emailID is: ",$b;
$c=$_POST['gender'];
switch($c){
  case "male":
    echo "</br>";
    echo "Your gender is MALE";
    break;
  case "female":
    echo "</br>";
    echo "Your gender is FEMALE";
    break;
  case "others":
    echo "</br>";
    echo "You belongs to other gender";
    break;
}
$d=$_POST['address'];
echo "</br>";
echo "Your address is: ",$d;

 ?>