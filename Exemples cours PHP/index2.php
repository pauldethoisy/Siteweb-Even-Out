<?php
$connect = mysqli_connect("localhost", "root", "root", "app_exemple");
if (!$connect) {
    printf("Ã‰chec de la connexion : %s\n", mysqli_connect_error());
    exit();
}   
function update_users($nom,$prenom,$id) {
    global $connect;
    mysqli_query($connect, "update users set nom = '$nom', prenom = '$prenom' where id='$id'") or die("MySQL Erreur : " . mysqli_error());
}

function insert_users($nom,$prenom) {
    global $connect;
    mysqli_query($connect, "insert into users (nom,prenom) values ('$nom', '$prenom')") or die("MySQL Erreur : " . mysqli_error());
}    

function select_users() {
    global $connect;
    $result=mysqli_query($connect,"select * from users") or die("MySQL Erreur : " . mysqli_error());
    return $result;
}
function select_one_user($id) {
    global $connect;
     $result=mysqli_query($connect,"select * from users where id=".$id) or die("MySQL Erreur : " . mysqli_error());
     return $result;
}
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
            } ?>

        <form action="index2.php" method="get">
		Nom : <input type="text" name="nom" value="<?php echo $nom; ?>"/>
		Prenom : <input type="text" name="prenom" value="<?php echo $prenom; ?>"/>
            <input type="hidden" name="id" value="<?php echo $id; ?>"/>
            <input type="hidden" name="action" value="save"/>
            <input type="submit"/>
        </form>

            <?php

        } else {
            $result=select_users();
            ?>
        <table>
                <?php                
                while($user = mysqli_fetch_assoc($result)) {
                    ?>
            <tr>
                <td>
                            <?php echo $user['nom']; ?>
                </td>
                <td>
                            <?php echo $user['prenom']; ?>
                </td>
                <td>
                            <?php echo '<a href="index2.php?action=modifier&id='.$user['id'].'">modifier</a>'; ?>
                </td>
            </tr>
                    <?php }
                mysqli_free_result($result); ?>

        </table>
        <a href="index2.php?action=ajouter">ajouter</a>
            <?php } ?>
    </body>
</html>