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

    * {
        color: white;
    }
        body {
            background: url("../stripe.jpg");
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        form {
            border: 3px solid white;
            width: 66%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        input {
            color: black;
        }

        button {
            color: black;
            width: 32%;
            margin-top: 0.5em;
        }

        fieldset {
            padding: 0;
            width: 35%;
            border: none;
            display: flex;
            flex-direction: column;
        }

        .marg {
            margin-bottom: 0.7em;
        }
    </style>

        <form action="create.php" method="POST">
            <fieldset>
            <label for="user">Username:</label>
            <input class='marg' type="text" name="user" placeholder="Username">
            </fieldset>
            <fieldset>
            <label for="pass">Password:</label>
            <input type="password" name="pass">
            </fieldset>
            <fieldset>
            <button class='marg'>Sign Up</button>
            </fieldset>
        </form>
</body>
</html>