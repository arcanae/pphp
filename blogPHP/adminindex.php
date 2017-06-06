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
            height: 80%; 
            width: 95%; 
            text-align: center;
            align-self: center;
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

        main>article{
           border: 0.1vh solid white;
           width: 66%;
           display: flex;
           flex-direction: column;
           align-items: center;
        }

       main>article>form>div>input {
           margin-right: 1em;
       }

       div {
           display: flex;
           justify-content: center;
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
        $open = scandir("BlogFolder");
        
        foreach($open as $key => $value) {
            if ($key === 0 OR $key === 1) {}
            else {
            //echo "<a href=blogPHP/BlogFolder/".$value.">".$value."</a>"."</br>"

            echo '<article>';
            echo '<p class="area">';
            $handle = fopen("BlogFolder/".$value, "r");
            $read = fread($handle, filesize("BlogFolder/".$value));
            $read = htmlspecialchars($read);
            $read = str_replace("\n", "</br>", $read);
            echo $read;
            echo "</p>";
            echo "<form action='blogPHP/delete.php' method='GET'>";
            echo "<input type='hidden' name='filename' value='".$value."'>";
            echo "<div>";
            echo "<input type='submit' name='action' value='Delete'>";
            echo "<input type='submit' name='action' value='Edit'>";
            echo "</div>";
            echo "</form>";
            echo '</article>';
            }
        }

    ?>
    </main>
</body>
</html>