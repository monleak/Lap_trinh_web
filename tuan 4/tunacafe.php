<html>
<head>
    <title> Tuna Cafe </title>
</head>
<body>
<font size=4 color="blue">
    Welcome to the Tuna Café Survey!
</font>
<form action="tunaresults.php" method=post>
    <?php
    $menu = array('Tuna Casserole', 'Tuna Sandwich', 'Tuna Pie', 'Grilled Tuna', 'Tuna Surprise');
    $bestseller = 2;
    print 'Please indicate all your favorite dishes.<br>';
    for ($i=0; $i< count($menu); $i++) {
        echo "<input type=\"checkbox\" name=\"prefer[]\" value=$i> $menu[$i]";
        if ($i== $bestseller) {
            print '<font color="red"> Our Best Seller!!!! </font>';
        }
        print '<br>';
    }
    ?>
    <br>
    <input type="submit" value="Click To Submit">
    <input type="reset" value="Erase and Restart">
</form>
</body>
</html>