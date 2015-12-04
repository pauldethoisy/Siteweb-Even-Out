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
            <article>
                <fieldset>
        <?php
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

            if($_GET['action']=="modifier") {
                $result = select_one_event($_GET['id']);
                $event = mysqli_fetch_assoc($result);
                $nom = $event['nom'];
                $acces = $event['acces'];
                $id = $event['id'];
            } ?>

                    <legend> Modifications </legend>
                        
                        <h2>Remplissez les zones à modifier:</h2>
                        
                        <form method="get" action="apercu4.php">
                            
                            <div class="parametrages">
                                <img src="Icones/parametres.png" class="icone" alt="Accessibilité"/><br/>
                                <h1>Paramétrages</h1>

                                <h3>Accessibilité:</h3>

                                <div class="type_acces">
                                    <h5>Le type d'accès</h5>
                                    <div class="bouton3">
                                        <input type="radio" name="acces" id="public" value="public" checked/> <label for="public">Évènement public (accessible par tout le monde)</label>
                                    </div>
                                    <div class="bouton4">
                                    <input type="radio" name="acces" id="prive" value="prive"/> <label for="prive">Évènement privé (accessible aux utilisateurs invités uniquement)</label>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="informations">
                                <img src="Icones/information.png" class="icone" alt="Informations"/><br/>
                                <h1>Informations</h1>
                                <h3>L'évènement:</h3>
                                <div class="type_evenement">
                                    <h5>Le(s) type(s) d'évènement(s)</h5>
                                     <div class="boutons">
                                        <input id="bars_brasseries_cafes" type="button" name="bars_brasseries_cafes" value="Bars/Brasseries/Cafés">
                                        <input id="cinema" type="button" name="cinema" value="Cinéma">
                                        <input id="clubbing" type="button" name="clubbing" value="Clubbing">
                                        <input id="conferences_colloqiums" type="button" name="conferences_colloqiums" value="Conferences/Colloqiums">
                                        <input id="enfants_familles" type="button" name="enfants_familles" value="Enfants/Familles">
                                        <input id="festivals" type="button" name="festivals" value="Festivals">
                                        <input id="marches_brocantes" type="button" name="marches_brocantes" value="Marchés/Brocantes">
                                        <input id="mode_shopping" type="button" name="mode_shopping" value="Mode/Shopping">
                                        <input id="pique-niques" type="button" name="pique-niques" value="Pique-niques">
                                        <input id="restaurants" type="button" name="restaurants" value="Restaurants">
                                        <input id="salons_expositions" type="button" name="salons_expositions" value="Salons/Expositions">
                                        <input id="scenes" type="button" name="scenes" value="Scènes">
                                        <input id="soirees" type="button" name="soirees" value="Soirées">
                                        <input id="sports" type="button" name="sports" value="Sports">
                                        <input id="visites" type="button" name="visites" value="Visites">
                                    </div>
                                </div>
                                <div class="nom_evenement">
                                    <h5>Nom</h5>
                                    <div class="label">
                                        <label for="nom">Nom de l'évènement:<strong><abbr title="obligatoire">*</abbr></strong></label>
                                    </div>
                                    <div class="input">
                                        <input type="text" name="nom" id="nom" value="<?php echo $nom; ?>" size="30" autofocus required/>
                                    </div>
                                </div>
                                <div class="date">
                                    <h5>Date</h5>
                                    <div class="bouton1">
                                        <input type="checkbox" name="date_debut" id="date_debut" checked required/><label for="date_debut"> De début<strong><abbr title="obligatoire">*</abbr></strong>:</label>
                                    </div>
                                    <div class="input">
                                        (Calendrier à coder)
                                    </div>
                                    <div class="bouton2">
                                        <input type="checkbox" name="date_fin" id="date_fin"/><label for="date_fin"> De fin:</label>
                                    </div>
                                    <div class="input">
                                        (Calendrier à coder)
                                    </div>
                                </div>
                                <div class="heure">
                                    <h5>Heure</h5>
                                    <div class="bouton1">
                                        <input type="checkbox" name"heure_debut" id="heure_debut" checked required/><label for="heure_debut"> De début:<strong><abbr title="obligatoire">*</abbr></strong></label>
                                    </div>
                                    <div class="input">
                                        <input type="text" name="heure1" id="heure1" placeholder="00" size="3" required/>
                                        h
                                        <input type="text" name="minutes1" id="minutes1" placeholder="00" size="3" required/>
                                        min
                                    </div>
                                    <div class="bouton2">
                                        <input type="checkbox" name="heure_fin" id="heure_fin"/><label for="heure_fin"> De fin:</label>
                                    </div>
                                    <div class="input">
                                        <input type="text" name="heure1" id="heure1" placeholder="00" size="3" required/>
                                        h
                                        <input type="text" name="minutes1" id="minutes1" placeholder="00" size="3" required/>
                                        min
                                    </div>
                                </div>
                                <div class="description_evenement">
                                    <h5>Description<strong><abbr title="obligatoire">*</abbr></strong></h5>
                                    <div class="textarea">
                                        <textarea id="description" name="description" required>A propos de l'organisation de l'évènement :</textarea>
                                    </div>
                                </div>
                                <div class="photo_principale">
                                    <h5>Photo principale de l'évènement</h5>
                                    <p>Cette photo s'affichera en haut de la page de votre évènement.</p>
                                    <div class="label">
                                        <label for="url_photo_principale">Insérez une photo ou une image:</label>
                                    </div>
                                    <div class="input">
                                        <input type="file" name="url_photo_principale" id="url_photo_principale"/>
                                    </div>
                                    <div class="label2">
                                        <label for="url_photo_principale">(formats: .JPG, .JPEG, ou .PNG)</label>
                                    </div>
                                </div>
                                <div class="site_officiel">
                                    <h5>Siteweb de l'évènement</h5>
                                    <div class="label">
                                        <label for="url_site_evenement">Site officiel: </label>
                                    </div>
                                    <div class="input">
                                        <input type="url" name="url_site_evenement" id="url_site_evenement" placeholder="Ex: www.sitefactice.fr"/>
                                    </div>
                                </div>
                                <div class="email_evenement">
                                    <h5>Email officiel</h5>
                                    <div class="label">
                                        <label for="url_email_evenement">Email de l'évènement: </label>
                                    </div>
                                    <div class="input">
                                        <input type="url" name="url_email_evenement" id="url_email_evenement" placeholder="Ex: prenom.nom@exemple.com"/>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="public_concerne">
                                <img src="Icones/publics.png" class="icone" alt="Public concerné"/><br/>
                                <h1>Clientèle ciblée</h1>
                                <h3>Le public concerné:</h3>
                                <div class="droit_acces">
                                    <h5>Droit d'accès</h5>
                                    <div class="bouton3">
                                        <input type="radio" name="droits" id="majeurs"/> <label for="majeurs">Majeurs uniquement</label>
                                    </div>
                                    <div class="bouton4">
                                        <input type="radio" name="droits" id="monde"/> <label for="monde">Tout le monde (mineurs et majeurs)</label>
                                    </div>
                                </div>
                                <div class="type_public">
                                    <h5>Type de public</h5>
                                    <div class="boutons">
                                        <input id="enfants" type="button" name="enfants" value="Enfants">
                                        <input id="filles" type="button" name="filles" value="Filles">
                                        <input id="garcons" type="button" name="garcons" value="Garçons">
                                        <input id="adolescents" type="button" name="adolescents" value="Adolescents">
                                        <input id="jeunes" type="button" name="jeunes" value="Jeunes">
                                        <input id="etudiants" type="button" name="etudiants" value="Étudiants">
                                        <input id="femmes" type="button" name="femmes" value="Femmes">
                                        <input id="hommes" type="button" name="hommes" value="Hommes">
                                        <input id="adultes" type="button" name="adultes" value="Adultes">
                                        <input id="actifs" type="button" name="actifs" value="Actifs">
                                        <input id="retraites" type="button" name="retraites" value="Retraités">
                                        <input id="seniors" type="button" name="seniors" value="Séniors">
                                    </div>
                                </div>
                                <div class="droit_acces">
                                    <h5>Tranche d'âge</h5>
                                    <div class="label">
                                        <label for="age_min">Age minimum<strong><abbr title="obligatoire">*</abbr></strong>:</label>
                                    </div>
                                    <div class="input">
                                        <input type="text" name="age_min" id="age_min" maxlenght="3" placeholder="Ex: 18" required/><label for="age_min"> ans</label>
                                    </div>
                                    <div class="label">
                                        <label for="age_max">Age maximum:</label>
                                    </div>
                                    <div class="input">
                                        <input type="text" name="age_max" id="age_max" maxlenght="3" placeholder="Ex: 122"/><label for="age_max"> ans</label>
                                    </div>
                                </div>
                            </div>

                            <div class="localisation">
                                <img src="Icones/localisation.png" class="icone" alt="Localisation"/><br/>
                                <h1>Situer l'évènement</h1>
                                <h3>Le lieu:</h3>
                                <div class="types_lieux">
                                    <div class="label">
                                        <label for="type_lieu">Type de lieu<strong><abbr title="obligatoire">*</abbr></strong>:</label>
                                    </div>
                                    <div class="select">
                                        <select name="type_lieu" id="type_lieu">
                                            <option selected>Choisir</option>
                                            <option value="salle">Salle</option>
                                            <option value="scene">Scène</option>
                                            <option value="terrain">Terrain</option>
                                            <option value="parc/jardin">Parc/Jardin</option>
                                            <option value="foret">Forêt</option>
                                            <option value="rue">Rue</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="noms_lieux">
                                    <div class="label">
                                        <label for="nom_lieu">Nom du lieu:<strong><abbr title="obligatoire">*</abbr></strong>:</label>
                                    </div>
                                    <div class="input">
                                        <input type="text" name="nom_lieu" id="nom_lieu" placeholder="Ex: Rues de Paris" size="30" required/>
                                    </div>
                                </div>

                                <div class="adresse_lieu">
                                    <h5>Adresse du lieu</h5>
                                    <div class="label">
                                        <label for="numero_adresse">Numéro d'adresse:</label>
                                    </div>
                                    <div class="input">
                                        <input type="text" name="numero_adresse" id="numero_adresse" maxlenght="7" placeholder="Ex: 1" size="30"/>
                                    </div>
                                    <div class="label">
                                        <label for="adresse">Adresse<strong><abbr title="obligatoire">*</abbr></strong>:</label>
                                    </div>
                                    <div class="input">
                                        <input type="text" name="adresse" id="adresse" placeholder="Ex: Place de l'opéra" size="30" required/>
                                    </div>
                                    <div class="label">
                                        <label for="code_postal">Code postal<strong><abbr title="obligatoire">*</abbr></strong>:</label>
                                    </div>
                                    <div class="input">
                                        <input type="text" name="code_postal" id="code_postal" maxlenght="5" placeholder="Ex: 75009" size="30" required/>
                                    </div>
                                </div>

                                <div class="participants">
                                    <h5>Capacité d'acceuil</h5>
                                    <div class="label">
                                        <label for="nb_participants_max">Nombre maximum de participants:</label>
                                    </div>
                                    <div class="input">
                                        <input type="number" name="nb_participants_max" id="nb_participants_max" step="1" min="0" max="100000000"/>
                                    </div>
                                </div>
                            </div>

                            <div class="vente">
                                <img src="Icones/vendeurs.png" class="icone" alt="Vendeurs"/>
                                <h1>Différentes tarifications</h1>
                                <h3>Présentation du vendeur principal et de ses prix:</h3>
                                <div class="vendeurs">
                                    <h5>Vendeur partenaire</h5>
                                    <div class="info">
                                        <p>Pour plus de vendeurs, allez sur le site e l'évènement</p>
                                    </div>
                                    <div class="label">
                                    <label for="nom_vendeur_principal">Noms du vendeur principal: </label>
                                    </div>
                                    <div class="input">
                                        <input type="text" name="nom_vendeur_principal" id="nom_vendeur_principal" placeholder="Ex: Fnac ... " size="30"/>
                                    </div>
                                    <div class="label">
                                        <label for="url_site_vendeur">Siteweb du vendeur: </label>
                                    </div>
                                    <div class="input">
                                        <input type="url" name="url_site_vendeur" id="url_site_vendeur" placeholder="Ex: www.sitefactice.fr"/>
                                    </div>
                                    <div class="image_vendeur">
                                    <h5>Logo</h5>
                                    <div class="label">
                                        <label for="url_logo_vendeur">Insérez un logo:</label>
                                    </div>
                                    <div class="input">
                                        <input type="file" name="url_logo_vendeur" id="url_logo_vendeur"/>
                                    </div>
                                    <div class="label2">
                                        <label for="url_logo_vendeur">(format: .JPG, .JPEG, .PNG ou .GIF)</label>
                                    </div>
                                    </div>
                                </div>
                                <div class="types_prix">
                                    <h5>Type de prix<strong><abbr title="obligatoire">*</abbr></strong></h5>
                                    <div class="bouton4">
                                        <input type="radio" name="type_prix" id="gratuit" checked/><label for="gratuit"> Gratuit</label>
                                    </div>
                                    <div class="bouton5">
                                        <input type="radio" name="type_prix" id="payant"/><label for="payant"> Payant</label>
                                    </div>
                                </div>

                                <div class="prix">
                                    <h5>Prix<strong><abbr title="obligatoire">*</abbr></strong></h5>
                                    <div class="label">
                                        <label for="prix_faible">Prix faible:</label>
                                    </div>
                                    <div class="input">
                                        <input type="text" name="prix_faible" id="faible" maxlenght="6" placeholder="Ex: 60"/><label for="prix_faible"> €</label>
                                    </div>
                                    <div class="textarea2">
                                        <textarea id="faible_description" name="prix_faible_description">Description du tarif:
    (Ex: A partir de 18 ans.)
                                        </textarea>
                                    </div>
                                    <div class="label">
                                        <label for="prix_fort">Prix fort:</label>
                                    </div>
                                    <div class="input">
                                        <input type="text" name="prix_fort" id="prix_fort" maxlenght="6" placeholder="Ex: 40"/><label for="prix_fort"> €</label>
                                    </div>
                                    <div class="textarea2">
                                        <textarea id="fort_description" name="prix_fort_description">Description du tarif:
    (Ex: Jusqu'à 18 ans.)
                                        </textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="galerie">
                                <img src="Icones/galerie.png" class="icone" alt="Galerie multimédias"/><br/>
                                <h1>Galerie multimédias</h1>
                                <h3>La galerie photos:</h3>
                                <div class="images">
                                    <h5>Insérez une photo ou une image</h5>
                                    <div class="label">
                                        <label for="url_galerie_image">Formats acceptés: .JPG, .JPEG, .PNG ou .GIF</label>
                                    </div>
                                    <div class="choisir_fichier">
                                        <input type="file" name="url_galerie_image" id="url_galerie_image"/>
                                    </div>
                                </div>
                                <h3>La galerie vidéos:</h3>
                                <div class="videos">
                                    <h5>Insérez une vidéo</h5>
                                    <div class="label">
                                        <label for="url_galerie_video">Formats acceptés: .AVI, .MOV, .MP4, .MPEG ou .WMV</label>
                                    </div>
                                    <div class="choisir_fichier">
                                        <input type="file" name="url_galerie_video" id="url_galerie_video"/>
                                    </div>
                                </div>
                                <h3>La galerie de musiques:</h3>
                                <div class="musiques">
                                    <h5>Insérez une musique</h5>
                                    <div class="label">
                                        <label for="url_galerie_musique">Formats acceptés: .MP3, .ACC, .WMA, ou .OGG</label>
                                    </div>
                                    <div class="choisir_fichier">
                                        <input type="file" name="url_galerie_musique" id="url_galerie_musique"/>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="galerie">
                                <img src="Icones/partenaires.png" class="icone" alt="Partrenaires"/>
                                <h1>Collaboration:<br/>Organisateurs et sponsors</h1>
                                <h3>Les organisateurs:</h3>
                                <div class="sponsors">
                                    <h5>Noms</h5>
                                    <div class="label">
                                        <label for="noms_organisateurs">Noms des organisateurs:</label>
                                    </div>
                                    <div class="input">
                                        <input type="text" name="noms_organisateurs" id="noms_organisateurs" placeholder="Ex: Organisateur 1, Organisateur 2, ..." size="30"/>
                                    </div>
                                </div>
                                <div class="image_organisateur">
                                    <h5>Logos</h5>
                                    <div class="label">
                                        <label for="url_logos_organisateurs">Insérez un logo:</label>
                                    </div>
                                    <div class="input">
                                        <input type="file" name="url_logos_organisateurs" id="url_logos_sponsors"/>
                                    </div>
                                    <div class="label2">
                                        <label for="url_logos_organisateurs">(formats: .JPG, .JPEG, .PNG ou .GIF)</label>
                                    </div>
                                </div>
                                <h3>Les sponsors:</h3>
                                <div class="sponsors">
                                    <h5>Noms</h5>
                                    <div class="label">
                                        <label for="noms_sponsors">Noms des sponsors:</label>
                                    </div>
                                    <div class="input">
                                        <input type="text" name="noms_sponsors" id="noms_sponsors" placeholder="Ex: Sponsor 1, Sponsor 2, ..." size="30"/>
                                    </div>
                                </div>
                                <div class="image_sponsor">
                                    <h5>Logos</h5>
                                    <div class="label">
                                        <label for="url_logos_sponsors">Insérez un logo:</label>
                                    </div>
                                    <div class="input">
                                        <input type="file" name="url_logos_sponsors" id="url_logos_sponsors"/>
                                    </div>
                                    <div class="label2">
                                        <label for="url_logos_sponsors">(formats: .JPG, .JPEG, .PNG ou .GIF)</label>
                                    </div>
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
                                $libelle_evenement = $_GET['nom'];
                                $nom = $event['nom'];
                                if ($libelle_evenement == $nom)
                                    echo $nom;
                                else 
                                    echo $libelle_evenement;
                    ?>
                        </div>

                        <div class="type_acces">
                            <h5>Type d'accès:</h5>
                    <?php
                                $accessibilite = $_GET['acces'];
                                if ($accessibilite == "public")
                                    echo "Évènement public (accessible par tout le monde)";
                                else 
                                    echo "Évènement privé (accessible aux utilisateurs invités uniquement)";
                    ?>
                        </div>

                    <?php   }
                            mysqli_free_result($result);
                            echo '<a href="apercu4.php?action=modifier&id='.$event['id'].'"><div class="bouton_envoi"><input type="submit" value="Modifier" name="modifier "class="modifier"></a>';
                            echo '<a href="page_accueil_co.php"><input type="submit" value="Envoyer" name="envoyer "class="envoyer"></div></a>';
                        } 
                    ?>
                        </fieldset>
                </article>
            </section>
        </div>
        
    <?php include("PiedPage.php") ?>
    
    </body>
</html>