<?php
$connect = mysqli_connect("localhost", "root", "root", "EvenOut");
if (!$connect) {
    printf("Ã‰chec de la connexion : %s\n", mysqli_connect_error());
    exit();
}   
function update_accessibilites($acces,$droits,$id) {
    global $connect;
    mysqli_query($connect, "update users set acces = '$acces', droits = '$droits' where id='$id'") or die("MySQL Erreur : " . mysqli_error());
}

function insert_accessibilites($acces,$droits) {
    global $connect;
    mysqli_query($connect, "insert into accessibilites (acces,droits) values ('$acces', '$droits')") or die("MySQL Erreur : " . mysqli_error());
}    

function select_accessibilites() {
    global $connect;
    $result=mysqli_query($connect,"select * from accessibilites") or die("MySQL Erreur : " . mysqli_error());
    return $result;
}
function select_one_accessibilite($id) {
    global $connect;
     $result=mysqli_query($connect,"select * from accessibilites where id=".$id) or die("MySQL Erreur : " . mysqli_error());
     return $result;
}
?>

<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="creer.css"/>
        <title> Even'Out</title>
    </head>
    
    <body>
        
        <?php include("menu.php") ?>
        
        <?php include("entete.php") ?>
        
        <div class="apercu">
            <section>
                <fieldset>   
                    <?php
                    /*try{
                        $connect = new PDO("mysql:host=local_host;dbname=EvenOut", "root", "root");
                    }

                    //Vérifer la connection
                    catch (Exeption $e){
                        die('Erreur : ' . $e->getMessage());
                    }*/
                    
                    $connect = mysqli_connect("localhost", "root", "root", "EvenOut");
                    if (!$connect) {
                        printf("Ã‰chec de la connexion : %s\n", mysqli_connect_error());
                        exit();
                    }

                        if (isset($_GET['action']) && $_GET['action'] == "save") {
                            if(!empty ($_GET[id])) {
                                update_accessibilites($_GET[acces],$_GET[droits],$_GET[id]);
                            } else {
                                insert_accessibilites($_GET[acces],$_GET[droits]);
                            }
                        }

                       if (isset($_GET['action']) && $_GET['action'] == "modifier") {
                            $acces = "";
                            $droits = "";
                            $id = "" ;

                            if($_GET['action']=="modifier") {
                                $result = select_one_accessibilite($_GET['id']);
                                $accessibilite = mysqli_fetch_assoc($result);
                                $acces = $accessibilite['acces'];
                                $droits = $accessibilite['droits'];
                                $id = $accessibilite['id'];
                            }
                    ?>
                    
                    <legend> Créer un évènement </legend>
                    <p><img src="Icones/parametres.png" id="icone1" alt="Accessibilité"/></p>
                    <p><br/><h1>Paramétrages</h1></p>
                      
                    <form method="get" action="apercu.php">
                        <h2>Sélectionnez:</h2>

                        <h3>Accessibilité:</h3>

                        <div class="type_acces">
                            <h5>Le type d'accès</h5>
                            <div class="bouton3">
                                <input type="radio" name="acces" id="public" value="<?php echo $acces; ?>"/> <label for="public">Accès public (tout le monde)</label>
                            </div>
                            <div class="bouton4">
                                <input type="radio" name="acces" id="prive" value="<?php echo $acces; ?>"/> <label for="prive">Accès privé (utilisateurs invités uniquement)</label>
                            </div>
                        </div>
                        <div class="droit_acces">
                            <h5>Le droit d'accès</h5>
                            <div class="bouton3">
                                <input type="radio" name="droits" id="majeurs" value="<?php echo $droits; ?>"/> <label for="majeurs">Majeurs uniquement</label>
                            </div>
                            <div class="bouton4">
                                <input type="radio" name="droits" id="mineurs" value="<?php echo $droits; ?>"/> <label for="mineurs">Mineurs uniquement</label>
                            </div>
                            <div class="bouton5">
                                <input type="radio" name="droits" id="monde" value="<?php echo $droits; ?>"/> <label for="monde">Tout le monde (mineurs et majeurs)</label>
                            </div>
                            </div>
                                <input type="hidden" name="action" value="save"/>
                            <div class="bouton_envoi">
                                <input type="submit" value="Envoyer" name="envoyer "class="envoyer">
                            </div>
                        </div>
                    </form>
                        
                    <?php
                        } else {
                            $result=select_users();
                    ?> 
                    <legend> Vérifiez le contenu de votre création </legend>
                        <p><img src="Icones/parametres.png" id="icone1" alt="Accessibilité"/></p>
                        <p><br/><h1>Aperçu</h1></p>
                        
                        <h2>Vérifiez:</h2>

                        <h3>Accessibilité</h3>

                    <?php
                            while ($accessibilite = mysqli_fetch_assoc($result)) {
                    ?>

                        <div class="type_acces">
                            <h5>Le type d'accès:</h5>
                    <?php echo $acces = $accessibilite['acces']; ?>
                        </div>

                        <div class="droit_acces">
                            <h5>Le droit d'accès:</h5>
                    <?php echo $droits = $accessibilite['droits']; ?>
                        </div>

                    <?php 
                            }
                            mysqli_free_result($result);
                    ?>
 
                        <a href="index2.php?action=modifier">modifier</a>
                        
                    <?php 
                        }
                    ?>
                        
                </fieldset>
            </section>
        </div>
    </body>
</html>
