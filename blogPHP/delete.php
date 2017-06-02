<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <style>
     *{
            color:white;
        }

        input,textarea {
            margin-bottom: 1em;
            color: black;
        }

        body {
            background: url("../stripe.jpg");
            display: flex;
            height: 100vh;
        }

        form {
            width: 66%;
            display: flex;
            flex-direction: column;
            margin: auto;
            align-self: center;
        }

        button {
            color: black;
            margin-bottom: 1em;
            align-self: center;
            width: 20%;
        }

        input {
            align-self: center;
            width: 24%;
        }

        textarea {
            height: 8em;
        }

        div {
           display: flex;
           justify-content: center;
       }

       div>input{
           margin-right:1em;
       }
    </style>
<?php 
$tosupr = $_GET['filename'];
$todo = $_GET['action'];
$content = file_get_contents("BlogFolder/". $_GET['filename']);

if ($todo === 'Delete') {
unlink("BlogFolder/".$tosupr);

echo "<script>";
echo "location.href = '../index.php';";
echo "</script>";
}

if ($todo === 'Edit') {
    echo  '<form action="modif.php" method="POST">';
    echo "<input type='hidden' name='filename' value='".$tosupr."'>";
    echo  '<input type="text" name="title" value="'.str_replace(".txt","",$tosupr).'" placeholder="Title">';
    echo  '<textarea name="text">'.$content.'</textarea>';
    echo "<div>";
    echo "<input type='submit' name='action' value='Cancel'>";
    echo "<input type='submit' name='action' value='Modify'>";
    echo "</div>";
    echo  '</form>';
}

?>
</body>
</html>