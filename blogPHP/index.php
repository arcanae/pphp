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

        a {
            align-self: flex-end;
        }

        input,textarea {
            margin-bottom: 1em;
            color: black;
        }

        body {
            background: url("stripe.jpg");
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
<main>
    <a href="admin.php">Admin</a>
    <h2>Arcanae's blog</h1>

    <?php
        $open = scandir("blogPHP/BlogFolder");
        
        foreach($open as $key => $value) {
            if ($key === 0 OR $key === 1) {}
            else {
            //echo "<a href=blogPHP/BlogFolder/".$value.">".$value."</a>"."</br>"

            echo '<article>';
            echo '<p class="area">';
            $handle = fopen("blogPHP/BlogFolder/".$value, "r");
            $read = fread($handle, filesize("blogPHP/BlogFolder/".$value));
            $read = htmlspecialchars($read);
            $read = str_replace("\n", "</br>", $read);
            echo $read;
            echo "</p>";
            echo '</article>';
            }
        }

    ?>
    </main>
</body>
</html>