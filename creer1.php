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
                <fieldset>  
                    <legend> Créer un évènement </legend>
                        <p><img src="Icones/parametres.png" id="icone1" alt="Accessibilité"/></p>
                        <p><br/><h1>Paramétrages</h1></p>
                        
                        <form method="post" action="traitement.php">
                        <h2>Sélectionnez:</h2>

                        <h3>Accessibilité</h3>

                        <div id="type_acces">
                            <h5>Le type d'accès:</h5>
                            <div class="bouton3">
                                <input id="public" type="checkbox" name="public"/> <label for="public">Accès public (tout le monde)</label>
                            </div>
                            <div class="bouton4">
                            <input id="prive" type="checkbox" name="prive"/> <label for="prive">Accès privé (utilisateurs invités uniquement)</label>
                            </div>
                        </div>
                        <div id="droit_accès">
                            <h5>Le droit d'accès:</h5>
                            <div class="bouton3">
                                <input id="majeurs" type="checkbox" name="majeurs"/> <label for="majeurs">Majeurs uniquement</label>
                            </div>
                            <div class="bouton4">
                                <input id="mineurs" type="checkbox" name="mineurs"/> <label for="mineurs">Mineurs uniquement</label>
                            </div>
                            <div class="bouton5">
                                <input id="monde" type="checkbox" name="monde"/> <label for="monde">Tout le monde (mineurs et majeurs)</label>
                            </div>
                        </div>

                        <h3>Caractéristiques</h3>

                        <div id="type_evenement">
                            <h5>Le(s) type(s) d'évènement(s):</h5>
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

                        <div id="public_concerne">
                            <h5>Le public concerné:</h5>
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

                        <div id="suivant">
                            <a href="creer2.php">Suivant</a>
                        </div>
                </fieldset>
            </section>
        </div>
    </body>
</html>
