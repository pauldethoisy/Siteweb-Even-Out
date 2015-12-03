<!DOCTYPE html>
<html>
    
   
    <head>
     
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Mon Profil</title>
        <link rel="stylesheet" href="mon_profil.css">
    </head>
    <body>

        <?php include("menu.php"); ?>
       
        <?php include("en_tete.php"); ?>

        
        <div id="photo">
        <fieldset>
            <legend class = "titre1">Photo de Profil</legend>
        </fieldset>
        </div>
        <div id="formulaire">
        <form method="post" action="mon_profil.php">
            <fieldset>
                
                
                
                
                
                <legend class = "titre1">Coordonnées</legend>
                <label for="pseudo">Prénom </label>:<input type="text" name="Prénom" id="pseudo"/><br/>
                <br/>
                <label for="nom"> Nom </label>:<input type="text" name="nom" id="pseudo"/><br/>
                <br/>
                <label for="sexe"> Sexe :</label>
            
                <select name="sexe" id="sexe">
                
                    <option value="female">Femme</option>
                    <option value="male">Homme</option>

                </select><br/>
                <br/>
                
            
                <label for="mail"> Email</label>:<input type="email" name="email" id="mail" /><br/>
                <br/>
                <label for="number"> Téléphone</label>:<input type="tel" name="téléphone" id="téléphone"/><br/>
                <br/>
                <label for="date"> Date de naissance </label>:<input type="date" name="date de naissance"><br/>
                <br/>
                <label for="ville">Ville </label>:<input type="text" name="Ville" id="ville"/><br/>
                <br/>
                <label for="pays">Pays </label>:<input type="text" name="pays" id="pays"/><br/>
                <br/>
                <label for="description"> Votre description </label><br/>
                <br/>
                <textarea name="description" id="description"></textarea><br/>
                <br/>            
                <label for="preference"> Vos préférences</label>
                <br/>
            

                <li><h2>Evènements:</h1></li><br/>
                                    
                <input class="Sport" type="checkbox" name="Sport" id="Sport" /> 
                <label for="Sport">Sport</label>
            
                <input class="Cinéma" type="checkbox" name="Cinéma" id="Cinéma" /> 
                <label for="Cinéma">Cinéma</label>
                            
                <input class="Bars/Brasserie/café" type="checkbox" name="Bars/Brasserie/café" id="Bars/Brasserie/café" /> 
                <label for="Bars/Brasserie/café">Bars/Brasserie/café</label>
                            
        
                <input class="Salon/Foire/Brocantes" type="checkbox" name="Salon/Foire/Brocantes" id="Salon/Foire/Brocantes" /> 
                <label for="Salon/Foire/Brocantes">Salon/Foire/Brocantes</label>
                           
            
                <br/>                            
                     
           
                <input class="Art/Culuture" type="checkbox" name="Art/Culuture" id="Art/Culuture" /> 
                <label for="Art/Culuture">Art/Culuture</label>

                <input class="Visites" type="checkbox" name="Visites" id="Visites" /> 
                <label for="Visites">Visites</label>
                             
                <input class="Conférence/Colloquium" type="checkbox" name="Conférence/Colloquium" id="Conférence/Colloquium" /> 
                <label for="Conférence/Colloquium">Conférence/Colloquium</label>
                    
                    
            
                <input class="Evenements gastronomique" type="checkbox" name="Evenements gastronomique" id="Evenements gastronomique" /> 
                <label for="Evenements gastronomique">Evènements gastronomique</label>
                    
                <br/>

            
                <input class="Soirées" type="checkbox" name="Soirées" id="Soirées" /> 
                <label for="Soirées">Soirées</label>
            
                <input class="Festival/Concert" type="checkbox" name="Festival/Concert" id="Festival/Concert" /> 
                <label for="Festival/Concert">Festival/Concert</label>
                    
                <input class="Spectacle" type="checkbox"   name="Spectacle" id="Spectacle" /> 
                <label for="Spectacle">Spectacle</label>
            
                <input class="Théâtre" type="checkbox" name="Théâtre" id="Théâtre" /> 
                <label for="Théâtre">Théâtre</label> 
            
                <input class="Enfants/Famille" type="checkbox" name="Enfants/Famille" id="Enfants/Famille" /> 
                <label for="Enfants/Famille">Enfants/Famille</label> 
                    
            
                <br/>
            
            
            
                <li><h2>Sport:</h2></li><br/>
                           
            
                <input class="Equipe" type="checkbox" name="Equipe" id="Equipe" /> 
                <label for="Equipe">Equipe</label>
                           
                <input class="Extrème" type="checkbox" name="Extrème" id="Extrème" /> 
                <label for="Extrème">Extrème</label>
            
                <input class="Art Martiaux" type="checkbox" name="Art Martiaux" id="Art Martiaux" /> 
                <label for="Art Martiaux">Art Martiaux</label>
           
                <input class="Artistique" type="checkbox" name="Artistique" id="Artistique" /> 
                <label for="Artistique">Artistique</label>
                            
            
                <br/>
                            
                            
            
                <li><h2>Film:</h2></li><br/>
            
            
                <input class="Comédie" type="checkbox" name="Comédie" id="Comédie" /> 
                <label for="Comédie">Comédie</label> 
                            
            
                <input class="Action" type="checkbox" name="Action" id="Action" /> 
                <label for="Action">Action</label>    
            
            
                <input class="Romantique" type="checkbox" name="Romantique" id="Romantique" /> 
                <label for="Romantique">Romantique</label>
            
           
                <input class="Science Fiction" type="checkbox" name="Science Fiction" id="Science Fiction" /> 
                <label for="Science Fiction">Science Fiction</label>
            
           
                <input class="Romantique" type="checkbox" name="Aventure" id="Romantique" /> 
                <label for="Romantique">Romantique</label>
            
            
                <li><h2>Musique:</h2></li><br/>
            
                <input class="Jazz" type="checkbox" name="Jazz" id="Jazz" /> 
                <label for="Jazz">Jazz</label> 
            
            
                <input class="Rock" type="checkbox" name="Rock" id="Rock" /> 
                <label for="Rock">Rock</label> 
            
            
                <input class="Classique" type="checkbox" name="Classique" id="Classique" /> 
                <label for="Classique">Classique</label> 
            
            
                <input class="Techno" type="checkbox" name="Techno" id="Techno" /> 
                <label for="Techno">Techno</label>
            
            
                <input class="Rap/R&B" type="checkbox" name="Rap/R&B" id="Rap/R&B" /> 
                <label for="Rap/R&B">Rap/R&amp;B</label>
            
            
                <input class="House" type="checkbox" name="House" id="House" /> 
                <label for="House">House</label>
                    
            
            
                <li><h2>Restaurants:</h2></li><br/>
            
            
                <input class="Culinaires" type="checkbox" name="Culinaires" id="Culinaires" /> 
                <label for="Culinaires">Culinaires</label> 
            
            
                <input class="Asiatique" type="checkbox" name="Asiatique" id="Asiatique" /> 
                <label for="Asiatique">Asiatique</label> 
            
            
                <input class="Français" type="checkbox" name="Français" id="Français" /> 
                <label for="Français">Français</label> 
            
            
                <input class="Italien" type="checkbox" name="Italien" id="Italien" /> 
                <label for="Italien">Italien</label>
            
            <input class="Fast food" type="checkbox" name="Fast food" id="Fast food" /> 
            <label for="Fast food">Fast food</label>
            
            <input class="Autres" type="checkbox" name="Autres" id="Autres" /> 
            <label for="Autres">Autres</label>
                    
            
            
            
            <li><h2>Enfant/Famille:</h2></li><br/>
            
            <input class="Parc d'attraction" type="checkbox" name="Parc d'attraction" id="Parc d'attraction" /> 
            <label for="Parc d'attraction">Parc d'attraction</label> 
            
            <input class="Aquarium" type="checkbox" name="Aquarium" id="Aquarium" /> 
            <label for="Aquarium">Aquarium</label>
                            
            <input class="Pique-nique" type="checkbox" name="Pique-nique" id="Pique-nique" /> 
            <label for="Pique-nique">Pique-nique</label>
        
        
        </fieldset>

    </form>
    </div>
	
	
                      
                 
    
    
              <p>
                  
                <br/>
            
 <a href="Formulaire_secondaire.php"> <div class="envoyerins" > <input type="submit" value="Envoyer" />  </div> </a> 

            </p>
            
	<?php include("PiedPage.php"); ?>



</body>
</html>
