<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
    <?php
    $x=1;
    function tr($x) {
        for ($j = 1; $j <= 10; $j++) {
            echo '<td>'.$x.'</td>';                
            $x++;
        }
    }
    
    for ($i = 1; $i <= 10; $i++) {
        echo   "<tr>".tr($x)."</tr>";
        $x += 10;
    }

    ?>
    </table>
</body>
</html>