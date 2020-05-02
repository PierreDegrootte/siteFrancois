<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="styleFormulaire.css">
        <?php
            include "fonction.php";
            Menu();
        ?>
    </head>

    <body>
        <div class="marge"></div>

        <div class="infoConnexion"><p>Clique sur les images que tu souhaites télécharger :</p></div>

        <table>
            <tbody>
                <tr>
                    <td><a href="fond1.jpg" download="Fond d'écran n°1"><img src="fond1.jpg" alt="Fond d'écran n°1"></a></td>
                    <td><a href="fond2.jpg" download="Fond d'écran n°2"><img src="fond2.jpg" alt="Fond d'écran n°2"><td>
                </tr>
                <tr>
                    <td><a href="fond3.jpg" download="Fond d'écran n°3"><img src="fond3.jpg" alt="Fond d'écran n°3"></td><
                    <td><a href="fond4.jpg" download="Fond d'écran n°4"><img src="fond4.jpg" alt="Fond d'écran n°4"></td>
                </tr>
                <tr>
                    <td><a href="fond5.png" download="Fond d'écran n°5"><img src="fond5.png" alt="Fond d'écran n°5"></td><
                    <td><a href="fond6.jpg" download="Fond d'écran n°6"><img src="fond6.jpg" alt="Fond d'écran n°6"></td>
                </tr>
            </tbody>
        </table>

        <div class="marge"></div>
    </body>

    <?php
        Footer();
    ?>
</html>