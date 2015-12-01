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
                    <legend> Vérifiez le contenu de votre création </legend>
                        <p><img src="Icones/parametres.png" id="icone1" alt="Accessibilité"/></p>
                        <p><br/><h1>Aperçu</h1></p>
                        
                        <h2>Vérifiez:</h2>

                        <h3>Accessibilité</h3>

                        <div class="type_acces">
                            <h5>Le type d'accès:</h5>
                            <?php echo $acces = $accessibilite['acces']; ?>
                        </div>

                        <div class="droit_acces">
                            <h5>Le droit d'accès:</h5>
                            <?php echo $droits = $accessibilite['droits']; ?>
                        </div>

                        <h3>Caractéristiques</h3>

                        <div class="type_evenement">
                            <h5>Le(s) type(s) d'évènement(s):</h5>
                            <?php echo $_POST['bars_brasseries_cafes']; ?>
                            <?php echo $_POST['cinema']; ?>
                            <?php echo $_POST['clubbing']; ?>
                            <?php echo $_POST['conferences_colloqiums']; ?>
                            <?php echo $_POST['enfants_familles']; ?>
                            <?php echo $_POST['festivals']; ?>
                            <?php echo $_POST['marches_brocantes']; ?>
                            <?php echo $_POST['mode_shopping']; ?>
                            <?php echo $_POST['pique-niques']; ?>
                            <?php echo $_POST['restaurants']; ?>
                            <?php echo $_POST['salons_expositions']; ?>
                            <?php echo $_POST['scenes']; ?>
                            <?php echo $_POST['soirees']; ?>
                            <?php echo $_POST['sports']; ?>
                            <?php echo $_POST['visites']; ?>
                        </div>

                        <div class="public_concerne">
                            <h5>Le public concerné:</h5>
                            <?php echo $_POST['enfants']; ?>
                            <?php echo $_POST['filles']; ?>
                            <?php echo $_POST['garcons']; ?>
                            <?php echo $_POST['adolescents']; ?>
                            <?php echo $_POST['jeunes']; ?>
                            <?php echo $_POST['etudiants']; ?>
                            <?php echo $_POST['femmes']; ?>
                            <?php echo $_POST['hommes']; ?>
                            <?php echo $_POST['adultes']; ?>
                            <?php echo $_POST['actifs']; ?>
                            <?php echo $_POST['retraires']; ?>
                            <?php echo $_POST['seniors']; ?>
                        </div>

                        <h3>L'évènement</h3>

                        <div class="nom_evenement">
                            <h5>Nom:</h5>
                            <?php echo $_POST['nom']; ?>
                        </div>

                        <div class="date">
                            <h5>Date:</h5>
                            <?php echo $_POST['date_debut']; ?>
                            <?php echo $_POST['calendrier1']; ?>
                            <?php echo $_POST['date_fin']; ?>
                            <?php echo $_POST['calendrier2']; ?>
                        </div>

                        <div class="heure">
                            <h5>Heure:</h5>
                            <?php echo $_POST['heure_debut']; ?>
                            <?php echo $_POST['heures1']; ?>
                            <?php echo $_POST['minutes1']; ?>
                            <?php echo $_POST['heure_fin']; ?>
                            <?php echo $_POST['heures2']; ?>
                            <?php echo $_POST['minutes2']; ?>
                        </div>

                        <div class="concerne">
                            <h5>Public concerné:</h5>
                            <?php echo $_POST['age_min']; ?>
                            <?php echo $_POST['age_max']; ?>
                        </div>

                        <div class="description_evenement">
                            <h5>Description:</h5>
                            <?php echo $_POST['description']; ?>
                        </div>

                        <h3>Le lieu</h3>

                        <div class="types_lieu">
                            <h5>Type de lieu:</h5>
                            <?php echo $_POST['type_lieu']; ?>
                        </div>

                        <div class="noms_lieu">
                            <h5>Nom du lieu:</h5>
                            <?php echo $_POST['nom_lieu']; ?>
                        </div>

                        <div class="adresse_lieu">
                            <h5>Adresse du lieu:</h5>
                            <?php echo $_POST['numero_adresse']; ?>
                            <?php echo $_POST['adresse']; ?>
                            <?php echo $_POST['code_postal']; ?>
                        </div>

                        <div class="participants">
                            <h5>Capacité d'acceuil:</h5>
                            <?php echo $_POST['nb_participants_max']; ?>
                        </div>

                        <h3>Les Tarifs</h3>

                        <div class="vendeurs">
                            <h5>Vendeurs partenaires:</h5>
                            <?php echo $_POST['nom_vendeur_principal']; ?>
                            <?php echo $_POST['site_vendeur']; ?>
                            <?php echo $_POST['logo_vendeur']; ?>
                        </div>

                        <div class="types_prix">
                            <h5>Type de prix:</h5>
                            <?php echo $_POST['type_prix']; ?>
                        </div>

                        <div class="prix">
                            <h5>Prix:</h5>
                            <?php echo $_POST['prix_faible']; ?>
                            <?php echo $_POST['faible_description']; ?>
                            <?php echo $_POST['prix_fort']; ?>
                            <?php echo $_POST['fort_description']; ?>
                        </div>

                        <h3>La galerie</h3>

                        <div class="images">
                            <h5>Images:</h5>
                            <?php echo $_POST['galerie_image']; ?>
                        </div>

                        <div class="videos">
                            <h5>Vidéos:</h5>
                            <?php echo $_POST['galerie_video']; ?>
                        </div>

                        <div class="musiques">
                            <h5>Musiques:</h5>
                            <?php echo $_POST['galerie_musique']; ?>
                        </div>

                        <h3>Les sponsors</h3>

                        <div class="sponsors">
                            <h5>Noms:</h5>
                            <?php echo $_POST['noms_sponsor']; ?>
                        </div>

                        <div class="image_sponsor">
                            <h5>Logos:</h5>
                            <?php echo $_POST['logos_sponsors']; ?>
                        </div>

                        <div class="bouton_envoi">
                            <input type="submit" value="Envoyer" name="envoyer "class="envoyer">
                        </div>
                </fieldset>
            </section>
        </div>
    </body>
</html>
