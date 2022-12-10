<?php
include_once("../Business/calcGreatCircle.php");
include("../AccessorLayer/getCities.php");

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Great Circle Calculator</title>
</head>
<body>
<H2>Great Circle Calculator</H2>
<?php
if (isset($_POST['city']) and isset($_POST['city2'])) {
    $a1=$_POST['city'];
    $a2=$_POST['city2'];
    $a3=  round( calculateGreatCircle(getLatLong($_POST['city']),getLatLong($_POST['city2'])));

    echo  "The great circle distance between $a1 and $a2 is $a3 kilometers";
}
?>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    <H3>Choose the origin.</H3>
    <?php
    foreach ($returnArray as $value) {
    ?>

    <input type='RADIO' name='city'
                 value='<?php echo $value[0]; ?>'><?php echo  $value[0];  ?> <br>
    <?php

    }
?>

    <H3>Choose the destination.</H3>
    <?php
    foreach ($returnArray as $value) {
        ?>

        <input type='RADIO' name='city2'
               value='<?php echo $value[0]; ?>'><?php echo  $value[0];  ?> <br>
        <?php

    }
    ?>
    <br>
    <input type="SUBMIT" name="submitButton" value="Calculate Great Circle">

</form>
</body>
</html>
