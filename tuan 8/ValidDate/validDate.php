<?php
$date = $_POST["date"];
$month='[0-1][[:digit:]]';
$day='[0-3][[:digit:]]';
$year='2[[:digit:]]{3}';
if (preg_match("/^$month\/$day\/$year$/", $date ) ){
    list($mon, $day, $year) = explode( '/', $date );
    if ( $mon >= 1 && $mon <= 12 ) {
        $check=0;
        if($day == 31
            && ($mon!=1 && $mon!=3 && $mon!=5 && $mon!=7 && $mon!=8 && $mon!=10 && $mon!=12)){
                print "Illegal day specifed Day=$day";
                $check=1;
                exit;
        }
        if($mon==2 && $day >= 30){
            print "Illegal day specifed Day=$day";
            $check=1;
            exit;
        }
        if($check==0){
            print ("valid date format= $date");
        }
    }else{
        print "Illegal month specifed Mon=$mon";
    }
} else {
    print ("Invalid date format= $date");
}
?>