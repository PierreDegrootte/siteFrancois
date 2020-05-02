<?php
    session_start();
?>


<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="styleFormulaire.css">
        <link rel="stylesheet" href="style.css">
        <?php 
            include 'fonction.php'; 
            Menu();
        ?>
    <head>

    <body>
        <div class="marge"></div>

        <div class="container">
            <input type="radio" class="login-radio" name="login_registration" id="login" checked>
            <input type="radio" class="reg-radio" name="login_registration" id="signUp">

            <div class="login">
                <h1 class="title">Connexion</h1>
                <form action="connexion.php" method="POST">
                    <div class="input-control">
                        <label for="email">Adresse mail</label>
                        <div class="espace"></div>
                        <input type="text" id="loginConnexion" name="loginConnexion" placeholder="Entrez votre adresse mail" required>
                    </div>

                    <div class="input-control">
                        <label for="password">Mot de passe</label>
                        <div class="espace"></div>
                        <input type="password" id="motDePasseConnexion" name="motDePasseConnexion" placeholder="Entrez votre mot de passe" required>
                    </div>

                    <div class="input-control">
                        <button type="submit" id="connexion" name="connexion">Se connecter</button>
                    </div>
                </form>

                <?php
                    if(isset($_POST['connexion']))
                    {
                        $login=$_POST['loginConnexion'];
                        $mdp=$_POST['motDePasseConnexion'];
                        
                        Connexion($login,$mdp);
                    }
		        ?>

                <div class="footer">
                    <div><label for="signUp"><span>Inscription</span></label></div>
                </div>
            </div>
            <div class="register">
                <h1 class="title">Inscription</h1>
                <form action="" method="POST">
                    <div class="input-control">
                        <label for="name">Adresse mail valide</label>
                        <div class="espace"></div>
                        <input type="text" id="loginInscription" name="loginInscription" placeholder="Entrez une adresse mail valide" required>
                    </div>
                    <div class="input-control">
                        <label for="password2">Mot de passe</label>
                        <div class="espace"></div>
                        <input type="password" placeholder="Entrez votre mot de passe" id="motDePasseInscription1" name="motDePasseInscription1" required>
                    </div>
                    <div class="input-control">
                        <label for="password2">Confirmation mot de passe</label>
                        <div class="espace"></div>
                        <input type="password" placeholder="Confirmez votre mot de passe" id="motDePasseInscription2" name="motDePasseInscription2" required>
                    </div>
                    <div class="input-control">
                        <button type="submit" class="sing-up" id="inscription" name="inscription">S'inscrire</button>
                    </div>
                </form>
                <div class="footer">
                    <div><label for="login"><span class="sign-in">Connexion</span></label></div>
                </div>
            </div>

            <?php
                if((isset($_POST['inscription'])) && ($_POST['motDePasseInscription1'] == $_POST['motDePasseInscription2']))
                {
                    $login=$_POST['loginInscription'];
                    $mdp=$_POST['motDePasseInscription1'];
                    $mdp1=$_POST['motDePasseInscription2'];
                        
                    Inscription($login,$mdp);
                }
                else
                {
                    echo "<script type='text/javascript'>";
                    echo "alert('Veuillez recommencer l'inscription en suivant les instructions.')";  
                    echo "</script>"; 
                }
		    ?>
        </div>

        <div class="marge"></div>

        <div class="infoConnexion">
            <p>
                <?php 
                    $login = $_SESSION['login']; 
                    if ($login != NULL)
                    {
                ?>
                        Tu es connecté avec le compte associé à cette adresse mail :
                <?php  
                        echo $login; 
                    }
                    else
                    {
                ?> 
                        Tu es connecté avec aucun compte 
                <?php  
                    }
                ?>    
            </p>
        </div>
    </body>

    <?php
        Footer();
    ?>
</html>