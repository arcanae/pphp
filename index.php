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
        form {
            width: 20%;
            display: flex;
            flex-direction: column;
        }
    </style>

    <form action="blogPHP/create-file.php" method="POST">

        <input type="text" name="title" placeholder="Title">
        <textarea name="text"></textarea>
        <button>Submit</button>
    </form>

    <h1 style="text-align: center">MY POSTS</h1>

    <?php
        $open = scandir("blogPHP/BlogFolder");
        
        foreach($open as $key => $value) {
            if ($key === 0 OR $key === 1) {}
            else {
            echo "<a href=blogPHP/BlogFolder/".$value.">".$value."</a>"."</br>";
            }
        }

    ?>
</body>
</html>