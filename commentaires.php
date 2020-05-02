<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="styleFormulaire.css">
        <link rel="stylesheet" href="style.css">
        <?php
            include "fonction.php";
            Menu();
        ?>
    </head>

    <body>
        <div class="marge"></div>

        <div class="container">
            <input type="radio" class="login-radio" name="login_registration" id="login" checked>
            <input type="radio" class="reg-radio" name="login_registration" id="signUp">

            <div class="login">
                <h1 class="title">Laissez votre avis</h1>
                <form action="commentaire.php" method="POST">
                    <div class="input-control">
                        <label for="text">Commentaire</label>
                        <div class="espace"></div>
                        <textarea id="commentaire" name="commentaire" placeholder="Rédigez votre commentaire" required rows="8" cols="60"></textarea>
                    </div>

                    <div class="input-control">
                        <button type="submit" id="publier" name="publier">Publier</button>
                    </div>
                </form>

                <?php
                    if(isset($_POST['publier']))
                    {
                        $login=$_POST['loginConnexion'];
                        $mdp=$_POST['motDePasseConnexion'];
                        
                        //Connexion($login,$mdp);
                    }
                ?>
            </div>
        </div>

        <div class="marge"></div>
    </body>
 
    <?php
        Footer();
    ?>
</html>