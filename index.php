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
        }

        body {
            background: url("../stripe.jpg");
        }

        form {
            width: 20%;
            display: flex;
            flex-direction: column;
        }

        button {
            color: black;
        }
    </style>

    <h2>Create an element</h2>

    <form action="blogPHP/create-file.php" method="POST">

        <input type="text" name="title" placeholder="Title">
        <textarea name="text" placeholder="Content"></textarea>
        <button>Submit</button>
    </form>

    <h2>MY POSTS</h1>

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