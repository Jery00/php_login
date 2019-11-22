<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/param.css">
    <script type="text/javascrypt" src="js/bootstrap.min.js"></script>

    <title>Bienvenue dans mon application</title>
</head>
<body>
        <center>
            Bienvenue dans mon application <br><br>

            <?php

                if(isset($_GET["p"]))
                {
                    echo($_GET["p"]."<br><br>");
                }
               
            ?>

            <form action="controler.php" method="post">
                <label>Login</label>
                <br>
                <input type="text" placeholder="Entrez le pseudo" name="txt_login" required><br><br>

                <label>Password</label>
                <br>
                <input type="password" placeholder="Entrez le mot de passe" name="txt_mdp" required><br><br>

                <button type="submit" id="btn_login" class="btn btn-primary">Connect</button>
            </form>
        </center>
</body>
</html>
