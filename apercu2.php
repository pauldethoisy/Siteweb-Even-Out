<?php
$connect = mysqli_connect("localhost", "root", "root", "EvenOut");
if (!$connect) {
    printf("Ã‰chec de la connexion : %s\n", mysqli_connect_error());
    exit();
}   
function update_evenements($nom,$acces,$id) {
    global $connect;
    mysqli_query($connect, "update evenements set nom = '$nom', acces = '$acces' where id='$id'") or die("MySQL Erreur : " . mysqli_error());
}

function insert_evenements($nom,$acces) {
    global $connect;
    mysqli_query($connect, "insert into evenements (nom,acces) values ('$nom', '$acces')") or die("MySQL Erreur : " . mysqli_error());
}    

function select_evenements() {
    global $connect;
    $result=mysqli_query($connect,"select * from evenements") or die("MySQL Erreur : " . mysqli_error());
    return $result;
}
function select_one_event($id) {
    global $connect;
     $result=mysqli_query($connect,"select * from evenements where id=".$id) or die("MySQL Erreur : " . mysqli_error());
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
                                update_evenements($_GET[nom],$_GET[acces],$_GET[id]);
                            } else {
                                insert_evenements($_GET[nom],$_GET[acces]);
                            }
                        }

                       if (isset($_GET['action']) && $_GET['action'] == "modifier") {
                            $nom = "";
                            $acces = "";
                            $id = "" ;

                           /*
                            if($_GET['action']=="modifier") {
                                $result = select_one_event($_GET['id']);
                                $event = mysqli_fetch_assoc($result);
                                $nom = $event['nom'];
                                $acces = $event['acces'];
                                $id = $event['id'];
                            }
                            */
                    ?>
                    
                    <legend> Créer un évènement </legend>
                        
                        <img src="Icones/information.png" id="information" alt="Informations"/><br/>
                        <h1>Informations</h1>
                        
                        <form method="get" action="apercu2.php">
                            <h2>Remplissez:</h2>
                            
                            <h3>L'évènement:</h3>

                            <div class="nom_evenement">
                                <h5>Nom</h5>
                                <div class="label">
                                    <label for="nom">Nom de l'évènement:<strong><abbr title="obligatoire">*</abbr></strong></label>
                                </div>
                                <div class="input">
                                    <input type="text" name="nom" id="nom" placeholder="Ex: Marathon de Paris" size="30" value="<?php echo $nom; ?>" autofocus required/>
                                </div>
                            </div>
                            <div class="type_acces">
                                <h5>Le type d'accès</h5>
                                <div class="bouton3">
                                    <input type="radio" name="acces" id="public" value="Accès public (tout le monde)" autofocus/> <label for="public">Accès public (tout le monde)</label>
                                </div>
                                <div class="bouton4">
                                    <input type="radio" name="acces" id="prive" value="Accès privé (utilisateurs invités uniquement)"/> <label for="prive">Accès privé (utilisateurs invités uniquement)</label>
                                </div>
                        </div>
                            <div class="bouton_envoi">
                                <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                                <input type="hidden" name="action" value="save"/>
                                <input type="submit" value="Envoyer" name="envoyer "class="envoyer">
                            </div>
                        </div>
                    </form>
                        
                    <?php
                        } else {
                            $result=select_evenements();
                    ?> 
                    <legend> Vérifiez le contenu de votre création </legend>
                        <p><img src="Icones/parametres.png" id="icone1" alt="Accessibilité"/></p>
                        <p><br/><h1>Aperçu</h1></p>
                        
                        <h2>Vérifiez:</h2>

                        <h3>Accessibilité</h3>

                    <?php
                            while ($event = mysqli_fetch_assoc($result)) {
                    ?>

                        <div class="nom_evenement">
                            <h5>Nom de l'évènement:</h5>
                    <?php echo $nom = $event['nom']; ?>
                        </div>

                        <div class="type_acces">
                            <h5>Type d'accès:</h5>
                    <?php echo $_GET['acces']; ?>
                        </div>
                    <?php
                            }
                            mysqli_free_result($result);
                    ?>

                        <a href="apercu2.php?action=modifier">modifier</a>
                        
                    <?php 
                        }
                    ?>
                        
                </fieldset>
            </section>
        </div>
    </body>
</html>

