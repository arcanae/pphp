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
        }

        form {
            width: 20%;
            display: flex;
            flex-direction: column;
        }

        .area {
            color: white;
            height: 8em; 
            width: 100%; 
            background: transparent;
            border: none;
            resize: none;
            text-align: center;
        }

        button {
            color: black;
            margin-bottom: 1em;
        }

        main {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

       main>form {
           width: 66%;
           border: 0.1vh solid white;
       }

       main>form>button {
           width: 20%;
           align-self: center;
       }

    </style>

    <h2>Create an element</h2>

    <form action="blogPHP/create-file.php" method="POST">

        <input type="text" name="title" placeholder="Title">
        <textarea name="text" placeholder="Content"></textarea>
        <button>Submit</button>
    </form>
<main>
    <h2>MY POSTS</h1>

    <?php
        $open = scandir("blogPHP/BlogFolder");
        
        foreach($open as $key => $value) {
            if ($key === 0 OR $key === 1) {}
            else {
            //echo "<a href=blogPHP/BlogFolder/".$value.">".$value."</a>"."</br>"

        
            echo "<form action='blogPHP/delete.php' method='GET'>";
            echo "<input type='hidden' name='filename' value='".$value."'>";
            echo '<textarea class="area">';
            $handle = fopen("blogPHP/BlogFolder/".$value, "r");
            echo fread($handle, filesize("blogPHP/BlogFolder/".$value));
            echo "</textarea>";
            echo "<button>Delete</button>";
            echo "</form>";
            }
        }

    ?>
    </main>
</body>
</html>