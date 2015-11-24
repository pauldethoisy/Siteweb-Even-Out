<?php
require 'model.php';
?>
<!DOCTYPE HTML>
<html>
    <head>        
        <title>Exemple simple de site en PHP </title>
    </head>
    <body>
        <h1>Liste des utilisateurs</h1>
        <?php
      if (isset($_GET['action']) && $_GET['action'] == "save") {
            if(!empty ($_GET[id])) {
                update_users($_GET[nom],$_GET[prenom],$_GET[id]);
            } else {
                insert_users($_GET[nom],$_GET[prenom]);
            }
        }

       if (isset($_GET['action']) && $_GET['action'] == "ajouter" || isset($_GET['action']) && $_GET['action'] == "modifier") {
            $nom = "";
            $prenom = "";
            $id = "" ;

            if($_GET['action']=="modifier") {
                $result = select_one_user($_GET['id']);
                $user = mysqli_fetch_assoc($result);
                $nom = $user['nom'];
                $prenom = $user['prenom'];
                $id = $user['id'];
            }
            include 'Views/addOrModifyUserView.php';
        } else {
            $result=select_users();
            include 'Views/listUsersView.php';
        } ?>
    </body>
</html>