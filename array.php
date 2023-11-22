<?php
$one2Ten = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$first = $one2Ten[0];
$second = $one2Ten[1];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>first ele.</h2>
    <?php echo $first; ?>

    <h2>add ele. </h2>
    <?php $one2Ten[10] = 11;
    print_r($one2Ten);
    ?>

</body>

</html>