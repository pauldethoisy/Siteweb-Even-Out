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

        <div class="creer">
            <section>
                <article>
                    <fieldset>  
                        <legend> Créer un évènement </legend>

                        <img src="Icones/information.png"  class="information" alt="Informations"/><br/>
                        <h1>Description</h1>
                        
                        <form method="post" action="traitement.php">
                             <p class="remplir">
                                Remplissez:
                            </p>
            					
                            <p>
                                <label for="nom">Nom de l'évènement:<strong><abbr title="obligatoire">*</abbr></strong></label><input type="text" name="nom" class="nom" placeholder="Ex: Marathon de Paris" size="30" autofocus required/>
                            </p>

                            <div class="concerne">
                                Public concerné (par tranche d'âge):
                                <p>
                                    <label for="min">Minimum </label><input class="min" type="range" min="0" max="122"/><label for="min">ans</label>
                                    (Code en JS à intégrer pour afficher les valeurs)
                                </p>
                                <p>
                                    <label for="max">Maximum </label><input class="max" type="range" min="0" max="122"/><label for="max">ans</label>
                                    (Code en JS à intégrer pour afficher les valeurs)
                                </p>
                            </div>

                            <p>
                                <label for="duree">Durée de l'évènement:<strong><abbr title="obligatoire">*</abbr></strong></label><input type="text" name="duree" id="duree" maxlenght="2" placeholder="Ex: 02" required/><label for="duree">h</label><input type="text" name="dureemin" id="dureemin" maxlenght="2" placeholder="Ex: 30" required/><label for="dureemin">min</label>
                            </p>

                            <p>
                                <label>Description de l'évènement:<strong><abbr title="obligatoire">*</abbr></strong></label><textarea id="description" name="description" required>A propos de l'organisation de l'évènement ...</textarea>
                            </p>

                            <h3>Choix du lieu:</h3>

                            <p>
                                <label for="type">Type de lieu:<strong><abbr title="obligatoire">*</abbr></strong></label>
                                <select name="type" id="type">
                                    <option selected>Choisir</option>
                                    <option value="salle">Salle</option>
                                    <option value="scene">Scène</option>
                                    <option value="terrain">Terrain</option>
                                    <option value="parc/jardin">Parc/Jardin</option>
                                    <option value="foret">Forêt</option>
                                    <option value="rue">Rue</option>
                                </select>
                            </p>

                            <p>
                        	    <label for="quantite">Nombre de lieu(x) différent(s):<strong><abbr title="obligatoire">*</abbr></strong></label><input class="quantite" type="number" min="1" max="100" required/>
                            </p>

                            <h4>Lieu 1</h4>

                            <p>
                                <label for="lieu">Nom du lieu:<strong><abbr title="obligatoire">*</abbr></strong></label><input type="text" name="lieu" id="lieu" placeholder="Ex: Rues de Paris" size="30" required/>
                            </p>

                            <div class="adresse">
                                Adresse du lieu:
                                <p>
                                    <label for="numero">Numéro d'adresse</label><input type="text" name="numero" id="numero" maxlenght="7" placeholder="Ex: 1" size="30"/><br/>
                                    <label for="numero">Adresse<strong><abbr title="obligatoire">*</abbr></strong></label><input type="text" name="adresse" id="adresse" placeholder="Ex: Place de l'opéra" size="30" required/><br/>
                                    <label for="numero">Code postal<strong><abbr title="obligatoire">*</abbr></strong></label><input type="text" name="postal" id="postal" maxlenght="5" placeholder="Ex: 75009" size="30" required/>
                                </p>
                            </div>

                            <div class="date">
                                <p>Date:</p>
                                <p>
                            	    <input type="checkbox" id="date_debut" checked required/><label for="date_debut">De début<strong><abbr title="obligatoire">*</abbr></strong></label>
                                    <br/>(Calendrier à coder)
                                </p>
                                <p>
                                    <input type="checkbox" id="date_debut/fin"/><label for="date_debut/fin">De fin</label>
                                    <br/>(Calendrier à coder)
                                </p>
                            </div>

                            <div class="heure">
                                Heure:
                                <p>
                                    <input type="checkbox" id="heure_debut" checked required/><label for="heure_debut">De début<strong><abbr title="obligatoire">*</abbr></strong></label>
                                    <br/>(Calendrier à coder)
                                </p>
                                <p>
                                    <input type="checkbox" id="heure_debut/fin"/><label for="heure_debut/fin">De fin</label>                                        
                                    <br/>(Calendrier à coder)
                                </p>
                            </div>

                            <div class="participants">
                                Nombre minimum/maximum de participants:
                                <p>
                                    <label for="partmin">Minimum </label><input type="number" id="partmin" step="1" min="0" max="100000000"/>
                                </p>
                                <p>
                                    <label for="partmax">Maximum </label><input type="number" id="partmax" step="1" min="0" max="100000000"/>
                                </p>
                            </div>

                            <h3>Tarifs:</h3>

                            <p>
                                <label for="partenaire">Nombre de vendeurs partenaires de l'évènement: </label><input type="number" id="partenaires" min="0" max="9"/>
                            </p>
                                
                            <h4>Vendeurs</h4>

                            <p>
                                <label for="vendeur">Nom du vendeur: </label><input type="text" name="vendeur" id="vendeur" placeholder="Ex: Vendeur 1" size="30"/>
                            </p>
                            <p>
                                <label for="site">Site web officiel: </label><input type="url" id="site" placeholder="Ex: www.sitefactice.fr"/>
                            </p>

                            <h4>Prix</h4>

                            <div id="prix">
                                Type de prix:<strong><abbr title="obligatoire">*</abbr></strong>
                                <p>
                                    <input type="radio" name="prix" id="gratuit" checked/><label for="gratuit">Gratuit</label><br/>
                                    <input type="radio" name="prix" id="payant"/><label for="payant">Payant</label>
                                </p>
                            </div>

                            <p>
                                <label for="plein">Plein tarif</label><input type="text" name="plein" id="plein" maxlenght="6" placeholder="Ex: 60"/><label for="plein">€</label><br/>
                                <label for="plein-description">Description du tarif:</label><textarea id="plein-description" name="plein-description">Ex: A partir de 18 ans.</textarea>
                            </p>
                            </p>
                            <p>
                                <label for="reduit">Tarif réduit</label><input type="text" name="reduit" id="reduit" maxlenght="6" placeholder="Ex: 40"/><label for="reduit">€</label><br/>
                                <label for="reduit-description">Description du tarif:</label><textarea id="reduit-description" name="reduit-description">Ex: Jusqu'à 18 ans.</textarea>
                            </p>
                            <p>
                                <label for="special">Tarif spécial</label><input type="text" name="special" id="special" maxlenght="6" placeholder="Ex: 50"/><label for="special">€</label><br/>
                                <label for="special-description">Description du tarif:</label><textarea id="special-description" name="reduit-description">Ex: Pour les membres de la carte fidélité uniquement.</textarea>
                            </p>

                            <h3>Sponsors</h3>

                            <p>
                                <label for="sponsor">Nom du sponsor: </label><input type="text" name="sponsor" id="sponsor" placeholder="Ex: Sponsor 1" size="30"/>
                            </p>
                            <p>
                                <label for="image">Insérer une image: au format .jpg , .jpeg , .png ou .gif) </label><input type="file" id="image"/>
                            </p>

                            <p><input type="submit" value="Envoyer" class="envoyer"></p>
                        </form>
                    </fieldset>
                </article>
            </section>
        </div>
    </body>
</html>
