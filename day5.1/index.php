<?php
include 'Math.php';
$list = Math::ninel2();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border=1>
        <?php foreach ($list as $k => $v) { ?>
            <tr>
            <?php foreach ($v as $k => $vv) { ?>
                <td><?php echo $vv;?></td>
            <?php }?>
                
            </tr>
        <?php }?>
    </table>
</body>
</html>