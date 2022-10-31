<?php
$first = $_GET["firstName"];
$middle = $_GET["middleName"];
$last = $_GET["lastName"];
print ("Hi $first! You got full name is $last $middle $first.<br>");
if($first == $last){
    print ("$first and $last are equal");
}
if($first < $last){
    print ("$first is less than $last");
}
if($first > $last){
    print ("$first is greater than $last");
}
print ("<br>");
$grade1 = $_GET["grade1"]; $grade2 = $_GET["grade2"];
$final = (2*$grade1+3*$grade2)/5;
if ($final > 89) {
    printf ("Your final grade is %.1f. You got an A. Congratulation",$final);
    $rate = "A";
} elseif ($final > 79) {
    printf ("Your final grade is %.1f. You got an B",$final);
    $rate = "B";
} elseif ($final > 69) {
    printf ("Your final grade is %.1f. You got an C",$final);
    $rate = "C";
} elseif ($final > 59) {
    printf ("Your final grade is %.1f. You got an D",$final);
    $rate = "D";
} elseif ($final >= 0) {
    printf ("Your final grade is %.1f. You got an F",$final);
    $rate = "F";
} else {
    print ("Illegal average less than 0 average=$final");
    $rate = "Illegal";
}
print ("<br>");
switch ($rate){
    case "A": print ("Exellent!");break;
    case "B": print ("Good!");break;
    case "C": print ("Not bad!");break;
    case "D": print ("Nprmal!");break;
    case "F": print ("You have to try again!");break;
    default:
        print ("Illegal grade");
}
?>
