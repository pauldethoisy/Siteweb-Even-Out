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
                        <p><img src="Icones/accessibilite.png"  class="accessibilite" alt="Accessibilité"/></p>
                        <p><br/><h1>Accessibilité</h1></p>
                        
                        <form method="post" action="traitement.php">
                        <p class="selectionner">Sélectionnez:
                        <ol>
                            <li>Le type d'accès :</li><br/>
                            <input class="public" type="checkbox" name="public"/> <label for="public">Accès public (tout le monde)</label><br/>
                            <input class="prive" type="checkbox" name="prive"/> <label for="prive">Accès privé (utilisateurs invités uniquement)</label><br/>
                            <br/>
                            <li>Le droit d'accès:</li><br/>
                            <input class="majeurs" type="checkbox" name="majeurs"/> <label for="majeurs">Majeurs uniquement</label><br/>
                            <input class="mineurs" type="checkbox" name="mineurs"/> <label for="mineurs">Mineurs uniquement</label><br/>
                            <input class="monde" type="checkbox" name="monde"/> <label for="monde">Tout le monde (mineurs et majeurs)</label>
                        </ol>
                        </p>
                </fieldset>
            </section>
        </div>
    </body>
</html>
