<?php
$first = $_POST["s1"];
$second = $_POST["s2"];
print ("First=$first Second=$second<br>");
if ($first == $second) {
    print ("$first and $second are equal");
}
if ($first < $second) {
    print ("$first is less than $second");
}
if ($first > $second) {
    print ("$first is greater than $second");
}
?>
