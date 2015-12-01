<?php
 /*
$connect = mysqli_connect("localhost", "root", "root", "EvenOut");
if (!$connect) {
    printf("Ã‰chec de la connexion : %s\n", mysqli_connect_error());
    exit();
 */
$dsn='mysql:host=localhost;dbname=EvenOut';
$user='root';
$password='root';

try{
    $connect = new PDO($dsn, $user, $password);
}
//Vérifer la connection
catch (Exeption $e){
    die('Erreur : ' . $e->getMessage());
}

function update_evenements($nom,$acces,$id) {
    global $connect;
    $update = $connect->prepare("update evenements set nom = '$nom', acces = '$acces' where id='$id'");
    /*
    mysqli_query($connect, "update evenements set nom = '$nom', acces = '$acces' where id='$id'") or die("MySQL Erreur : " . mysqli_error());
    */
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
                        if (isset($_POST['action']) && $_POST['action'] == "save") {
                            if(!empty ($_POST[id])) {
                                update_evenements($_POST[nom],$_POST[acces],$_POST[id]);
                            } else {
                                insert_evenements($_POST[nom],$_POST[acces]);
                            }
                        }

                        if (isset($_POST['action']) && $_POST['action'] == "modifier") {
                            try {
                            $update->execute(array($nom => $_POST['nom'],
                                $acces => "$_POST['acces']",
                                $id => "$_POST['id']"
                                ));
                            }
                           /*
                            if($_POST['action']=="modifier") {
                                $result = select_one_event($_POST['id']);
                                $event = mysqli_fetch_assoc($result);
                                $nom = $event['nom'];
                                $acces = $event['acces'];
                                $id = $event['id'];
                            }
                            */
                    ?>
                    
                    <legend> Créer un évènement </legend>
                        
                        <img src="Icones/modifier.png" class="icone" alt="Modifier"/><br/>
                        <h1>Modifications</h1>
                        
                        <form method="POST" action="apercu2.php">
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
                                    <input type="radio" name="acces" id="public" value="public" autofocus/> <label for="public">Évènement public (accessible par tout le monde)</label>
                                </div>
                                <div class="bouton4">
                                    <input type="radio" name="acces" id="prive" value="prive"/> <label for="prive">Évènement privé (accessible aux utilisateurs invités uniquement)</label>
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
                        <img src="Icones/apercu.png" class="icone" alt="Aperçu"/><br/>
                        <h1>Aperçu</h1>
                        <h2>Vérifiez:</h2>
                        <h3>Accessibilité</h3>

                    <?php
                            if ($event = mysqli_fetch_assoc($result)) {
                    ?>

                        <div class="nom_evenement">
                            <h5>Nom de l'évènement:</h5>
                    <?php
                                $nom = $event['nom'];
                                $libelle_evenement = $_POST['nom'];
                                if ($libelle_evenement == $nom)
                                    echo $nom;
                                else 
                                    echo $libelle_evenement;
                    ?>
                        </div>

                        <div class="type_acces">
                            <h5>Type d'accès:</h5>
                    <?php
                                $accessibilite = $_POST['acces'];
                                if ($accessibilite == "public")
                                    echo "Évènement public (accessible par tout le monde)";
                                else 
                                    echo "Évènement privé (accessible aux utilisateurs invités uniquement)";
                    ?>
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

