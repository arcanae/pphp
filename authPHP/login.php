<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>


<style>

    * {
        color: white;
    }

    input {
        color: black;
    }

    button {
        color: black;
        width: 32%;
    }

    fieldset {
        width: 35%;
        border: none;
        display: flex;
        flex-direction: column;
    }

    section {
        display: flex;
        width: 100%;
        height: 33vh;
        align-items: center;
        justify-content: center;
    }

    form {
        border: 3px solid white;
        width: 66%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    body {
        background: url("../stripe.jpg");
        height: 100vh;
    }

</style>

<body>
    <section>
    <form action="auth.php" method="POST">
        <fieldset>
        <label for="user">Username:</label>
        <input type="text" name="user" placeholder="Username">
        </fieldset>
        <fieldset>
        <label for="pass">Password:</label>
        <input type="password" name="pass">
        </fieldset>
        <fieldset>
        <button>Sign In</button>
        </fieldset>
    </form>
    </section>

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