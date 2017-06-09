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

        #logout {
            width: 40%;
            margin: 0;
            margin-top: 0.5em;
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

       main>p {
           text-align: center;
       }
    </style>
 <?php 
 session_start();
 if (isset($_SESSION['user'])) {
    echo "Welcome ".$_SESSION['user'].".";
    echo "<form action=\"authPHP/logout.php\" method=\"POST\">";
    echo "<input id=\"logout\" type=\"submit\" name=\"logout\" value=\"Log Out\">";
    echo "</form>";
 } else {
    include("authPHP/login.php"); 
 }
 ?>
<?php
if (isset($_SESSION['user'])) {
   echo '<h2>Create an element</h2>';

   echo '<form action="blogPHP/create-file.php" method="POST">';

   echo '    <input type="text" name="title" placeholder="Title">';
   echo '    <textarea name="text" placeholder="Content"></textarea>';
   echo '    <input type="hidden" name="user" value="'.$_SESSION['user'].'">';
   echo '    <button>Submit</button>';
   echo '</form>';
}    
 ?>   
<main>
<?php
if (isset($_SESSION['user'])) {
    echo "<h1>POSTS</h1>";
}
else {
    echo "<h1>Arcanae's Golden Book</h1>";
}
    echo '<p>Welcome</br></br>Hey! Take a bit of your time to log and leave me a message !</p>'; 
?>
    <?php
    if (file_exists('blogPHP/BlogFolder')) {
        $open = scandir("blogPHP/BlogFolder");

        foreach($open  as $key => $value) {
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
            echo "<form action='blogPHP/delete.php' method='GET'>";
            echo "<input type='hidden' name='filename' value='".$value."'>";
            echo "<div>";
            if (isset($_SESSION['user']) && $_SESSION['user'] == "arcanae") {
            echo "<input type='submit' name='action' value='Delete'>";
            echo "<input type='submit' name='action' value='Edit'>";
            }
            echo "</div>";
            echo "</form>";
            echo '</article>';
            }
        }
    }
    ?>
    </main>
</body>
</html>