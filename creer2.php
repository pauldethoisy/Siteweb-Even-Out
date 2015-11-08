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
                        <p>
                            <img src="Icones/parametres.png"  class="parametres" alt="Paramètres"/><br/>
                            <h1>Paramètres</h1>
                        </p>
                        
                        <form method="post" action="traitement.php">
                        <p class="selectionner">Sélectionnez:</p>
                        <ol>
                            <li>Le(s) type(s) d'évènement(s) :</li><br/>
                            <input class="bars/brasseries/cafés" type="button" name="bars/brasseries/cafés" value="Bars/Brasseries/Cafés">
                            <input class="cinema" type="button" name="cinema" value="Cinéma">
                            <input class="clubbing" type="button" name="clubbing" value="Clubbing">
                            <input class="conferences/colloqium" type="button" name="conferences/colloqium" value="Conferences/Colloqium">
                            <input class="enfants/familles" type="button" name="enfants/familles" value="Enfants/Familles">
                            <input class="festivals" type="button" name="festivals" value="Festivals">
                            <input class="marches/brocantes" type="button" name="marches/brocantes" value="Marchés/Brocantes">
                            <input class="mode/shopping" type="button" name="mode/shopping" value="Mode/Shopping">
                            <input class="pique-niques" type="button" name="pique-niques" value="Pique-niques">
                            <input class="restaurants" type="button" name="restaurants" value="Restaurants">
                            <input class="salons/expositions" type="button" name="salons/expositions" value="Salons/Expositions">
                            <input class="scenes" type="button" name="scenes" value="Scènes">
                            <input class="soirees" type="button" name="soirees" value="Soirées">
                            <input class="sports" type="button" name="sports" value="Sports">
                            <input class="visites" type="button" name="visites" value="Visites"><br/>
                            <br/>
                            <li>Le public concerné:</li><br/>
                            <input class="enfants" type="button" name="enfants" value="Enfants">
                            <input class="filles" type="button" name="filles" value="Filles">
                            <input class="garcons" type="button" name="garcons" value="Garçons">
                            <input class="adolescents" type="button" name="adolescents" value="Adolescents">
                            <input class="jeunes" type="button" name="jeunes" value="Jeunes">
                            <input class="etudiants" type="button" name="etudiants" value="Étudiants">
                            <input class="femmes" type="button" name="femmes" value="Femmes">
                            <input class="hommes" type="button" name="hommes" value="Hommes">
                            <input class="adultes" type="button" name="adultes" value="Adultes">
                            <input class="actifs" type="button" name="actifs" value="Actifs">
                            <input class="retraites" type="button" name="retraites" value="Retraités">
                            <input class="seniors" type="button" name="seniors" value="Séniors">
                        </ol>
                </fieldset>
            </section>
        </div>
    </body>
</html>
