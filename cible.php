<?php

if ((htmlspecialchars($_POST['pass'])) == "password") {
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Le boss final des internet</title>
    </head>
 
    <body>
 
    <!-- L'en-tête -->
    
    <header>
       <h1>Le boss final des internet</h1>
    </header>
    
    <!-- Le corps -->
    
    <main>

    <h1>WARNING ! browser ERROR</h1>

    <p><strong>Ah c'est con !!!</strong><br/>Cette page a été optimisée pour Internet Explorer sur Macintoch et ne peut donc pas s'afficher sur votre appareil. 
    </p>
     
    <p><a href="index.php" title="Revenir à la page précédente">Come back</a></p>
    
    </main>
    
    <!-- Le pied de page -->
    
    <footer id="pied_de_page">
        <p>Copyright 2017 - Renaud BERNARD</p>
    </footer>
    
    </body>
</html>

<?php
} else {
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Le boss final des internet</title>
    </head>
 
    <body>
 
    <!-- L'en-tête -->
    
    <header>
       <h1>Le boss final des internet</h1>
    </header>
    
    <!-- Le corps -->
    
    <main>

    <p>Access denied !</p>
    <p><a href="index.php" title="Revenir à la page précédente">Come back</a></p>
      
    </main>
    
    <!-- Le pied de page -->
    
    <footer id="pied_de_page">

        <p>Copyright 2017 - Renaud BERNARD</p>
    </footer>
    
    </body>
</html>
<?
};

