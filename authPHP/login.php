<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="auth.php" method="POST">
        <input type="text" name="user" placeholder="Username">
        <input type="password" name="pass">
        <input type="submit" value="Sign In">
    </form>

    <main>
        <h2>Actual Users / Passwords</h2>
        <?php

        $source = file_get_contents("auth.json");
        $data = json_decode($source);

        foreach ($data as $key => $value) {
        $ver_user = htmlspecialchars($data[$key]->user);
        $ver_pass = htmlspecialchars($data[$key]->password);
        echo "<p>".$ver_user." / ".$ver_pass."</p>";
        }

        ?>
    </main>
</body>

</html>