<?php

/*Exercise 08
**2pts
**Turn in: pool_php_d09/ex_08/index.php
**Restrictions: None
**We are going to ask the user to enter his name, instead of retrieving it from the URL.
**Create a page index.php that will offer a form field of type “text” with attribute “name” so that the user can enter
**his name.
**You will also add a button to validate the form containing the text “Submit”.
**Once the user has validated, the same page must greet him with the name entered.
**When a greeting is displayed, the form is not displayed.
*/



//php ouvert, pour créer la condition
if(isset($_POST["name"])){

    echo "Hello " . $_POST["name"];
} 
else{ //accolade OUVRANTE, suivie de balise fermante php, pour prendre tout le HTML dans le ELSE (voir ligne 31)
?> <!-- php termine, donc code HTML commence (voir syntaxe début de commentaire "<--!" )-->

<!DOCTYPE html> <!-- création du fichier code HTML pour création du formulaire et du bouton-->
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<br>
<header>FORMULAIRE</header>
<form method="post" action="index.php" type="text" name="name">
   Enter your Name : <input type="text" name="name"><br>
    <input type="submit" name="Submit" value="Submit"><br>
    
    </form>
    </body>
</html>

<?php //balises php ouvrantes, pour récupérer tout le HTML dans le ELSE ligne 7
} // accolade fermante qui refermer le ELSE du 7

?> <!--balise php fermante, retour au HTML simple-->



