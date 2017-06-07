<style>

    pre {
        font-size: 0.8em;
    }

    #but1 {
        color: black;
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
        color: black;
        margin-bottom: 0.7em;
    }

    #logincont {
        display: flex;
        width: 100%;
        height: 33vh;
        justify-content: flex-end;
    }

    #login {
        color: white;
        border: 3px solid white;
        display: flex;
        flex-direction: column;
        align-items:center;
        justify-content: center;
    }

</style>
    <section id="logincont">
    <form id="login" action="auth.php" method="POST">
        <fieldset>
        <label for="user">Username:</label>
        <input class='marg' type="text" name="user" placeholder="Username">
        </fieldset>
        <fieldset>
        <label for="pass">Password:</label>
        <input type="password" name="pass">
        </fieldset>
        <fieldset>
        <pre><a href="sign_up.php">Create an account</a></pre>
        <button id='but1' class='marg'>Sign In</button>
        </fieldset>
    </form>
    </section>