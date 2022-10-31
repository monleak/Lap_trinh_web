<html>
<head>
    <title>Coin Flip!</title>
<body>
<font size="4" color = "blue">Please Pick heads or tails</font>
<form action="GotFlip.php" method="post">
    <?php
    print "<input type=\"radio\" Name=\"pick\" value=0 > heads";
    print "<input type=\"radio\" Name=\"pick\" value=1 > tails";
    print "<br>";
    ?>
    <input type="submit" value="submit">
    <input type="reset" value="restart">
</form>
</body>
</head>
</html>