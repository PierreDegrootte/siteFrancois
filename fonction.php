<?php
    Function Menu()
    {
?>
    <title>Bugatti voiture d'exception</title>
    <link rel="icon" type="image/png" href="favicon.png" />
    <center><div class="banniere"><img src="banniere.png" alt="banniere"></div></center>
    <nav class="nav" role="navigation">
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="modelesMythiques.php">Modèles mythiques</a></li>
            <li><a href="modelesPopulaires.php">Modèles les plus populaires</a></li>
            <li><a href="voitureNoire.php">La voiture noire</a></li>
            <li><a href="telechargement.php">Fonds d'écran</a></li>
            <li><a href="connexion.php">Connexion</a></li>
        </ul>
    </nav>
<?php 
    }
?>                  

<?php
    Function Footer()
    {
?>
    <nav class="nav" role="navigation">
        <ul>
            <li><a href="https://www.facebook.com/francois.degrootte.1"><img src="facebook.png" alt="compte facebook" style="max-width: 70px; height:auto; display:block"></a></li>
            <div class="espaceFooter"></div>
            <li><a href="https://www.instagram.com/bugatti_voiture_d.exception/"><img src="insta.png" alt="compte instagram" style="max-width: 70px; height:auto; display:block"></a></li>
        </ul>
    </nav>
<?php 
    }
?>

<?php
    Function Connexion($login,$mdp)
    {
        try
        {
            $db = new PDO('mysql:host=localhost;dbname=bugatti;charset=utf8','root','');
        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }
            
        if (isset($login) AND isset($mdp))
        {
    
            $verif = $db->prepare('SELECT COUNT(*) FROM utilisateur WHERE mdp = :password AND login = :pseudo'); // Je compte le nombre d'entrée ayant pour mot de passe et login ceux rentrés
            $verif->bindValue(':password', $mdp, PDO::PARAM_STR);
            $verif->bindValue(':pseudo', $login, PDO::PARAM_STR);
            $verif->execute();
            $donnees = $verif->fetchColumn();
            $verif->closeCursor();
                
            if($donnees == 1) // On a trouvé un membre avec ce couple mdp, login 
            { 
                session_start();
                $_SESSION['login'] = $login;
                $_SESSION['mdp'] = $mdp;
                header('Location:connexion.php');
            }
            else 
            { // Personne n'existe dans la table avec ce couple mdp, login
                echo "<script type='text/javascript'>";
                echo "alert('Login ou mot de passe invalide, veuillez ressayer.')";  
                echo "</script>";  
            }
        }
    }

    Function Inscription($login, $mdp)
    {
        try
        {
            $db = new PDO('mysql:host=localhost;dbname=bugatti;charset=utf8','root','');
        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }   

        if(isset($login) AND isset($mdp))
        {
            $new = $db->query("INSERT INTO utilisateur (login, mdp) VALUES ('$login','$mdp')");
            header('Location:connexion.php');
        }
    }
?>
    