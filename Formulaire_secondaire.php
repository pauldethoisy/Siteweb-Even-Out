
<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="Formulaire_secondaire.css"/>
        <title> Even'Out</title>
    </head>
    
    <body>
    <?php include("menu.php") ?>
        
    <?php include("en-tete.php") ?>
       
       <!-- <nav>
            <ul id="menu"> 
                <li> <a href="Evènement.html"> <h2>Evènements </h2> </a> </li>
                <li> <a href="agenda.html"> <h2> Agenda </h2> </a> </li> 
                <li> <a href="creer.html"> <h2>Créer un évènement</h2> </a></li>
                <li> <a href="forum.html"> <h2>Forum</h2> </a> </li>
                <li> <a href="mon_compte.html"> <h2> Mon compte</h2> </a> </li>
            </ul>
        </nav> 
        
        <header class ="fond">
            
        
                <img id="paris" src="paris.jpg" width="1223" height="450">
                <img id="even" src="even.png" width="150" height="150">
                
            
        </header> -->
    
            
        
        <div id="searchbar">  <!-- Code pour la barre de recherche -->
                <form action="" class="formulaire">
                    
                    <input class="champ" type="search" placeholder="mots-clefs"/>
                    <input class="bouton" type="button" value="" />
                     
                </form>
         </div>
        
        
        <div class="recherche">
            <a href="recherche.html"> recherche avancée</a>
        </div>

        <div class="creer">
            <section>
                <fieldset>  
                <form method="post" action="traitement.php">
                    <h1> Préférences  </h1>
                    
                    
                    <div class="Mom"> <aside><br/><h2> Moments</h2>
                        <p>  
            <input class="Matin" type="checkbox" name="Matin" id="Matin" /> <label for="Matin">Matin</label> 
                        </p>
                        <p>
             <input class="Après-midi" type="checkbox" name="Après-midi" id="Après-midi" /> <label for="Après-midi">Après-midi</label> 
                        </p>
                        <p>
             <input class="Soir" type="checkbox" name="Soir" id="Soir" /> <label for="Soir">Soir</label> 
                        </p>
                        <p>
              <input class="Nuit" type="checkbox" name="Nuit" id="Nuit" /> <label for="Nuit">Nuit</label> 
                        </p>
                       </aside>
                        </div>
                    
                <div class="Lx"> <br/>   <h2>Lieux </h2>
                    
                    <div id="Pays">
                        <label>Pays</label>:
                        <input type="texte" name="pays" id="Pay" size="20" />          </div>
                    
                    <p>
                    
                    <div id="Région">
                        <label>Région</label>:
                        <input type="texte" name="Région" id="Reg" size="20"/>          </div>
                    </p>   
                    <p>
                     <div id="Département">
                        <label>Département</label>:
                        <input type="texte" name="Département" id="Dep" size="20" />          </div>
                    </p>
                    <p>
                    
                      <div id="Ville">
                        <label>Ville</label>:
                        <input type="texte" name="Ville" id="Vi" size="20"/>          </div>
                    
                    </p>
                    <p>
                    
                      <div id="code postal">
                        <label>Code postal</label>:
                        <input type="number"  name="Code postale" id="CP"  />          </div>
                    </p>
                           </div>
                 
        <br/>
          <h2>Evènements:</h1> 
                    
                    <p>
                    <br/>
                        <input class="Sport" type="checkbox" name="Sport" id="Sport" /> <label for="Sport">Sport</label>
                    
                            <input class="Cinéma" type="checkbox" name="Cinéma" id="Cinéma" /> <label for="Cinéma">Cinéma</label>
                    
                            <input class="Bars/Brasserie/café" type="checkbox" name="Bars/Brasserie/café" id="Bars/Brasserie/café" /> <label for="Bars/Brasserie/café">Bars/Brasserie/café</label>
                            <input class="Salon/Foire/Brocantes" type="checkbox" name="Salon/Foire/Brocantes" id="Salon/Foire/Brocantes" /> <label for="Salon/Foire/Brocantes">Salon/Foire/Brocantes</label>
                            
                    </p>
                        
                           
                    <p>
                    <br/>
                                  
                     <input class="Art/Culuture" type="checkbox" name="Art/Culuture" id="Art/Culuture" /> <label for="Art/Culuture">Art/Culuture</label>
                           
                             <input class="Visites" type="checkbox" name="Visites" id="Visites" /> <label for="Visites">Visites</label>
                            
                             <input class="Conférence/Colloquium" type="checkbox" name="Conférence/Colloquium" id="Conférence/Colloquium" /> <label for="Conférence/Colloquium">Conférence/Colloquium</label>
                    
                     <input class="Evenements gastronomique" type="checkbox" name="Evenements gastronomique" id="Evenements gastronomique" /> <label for="Evenements gastronomique">Evènements gastronomique</label>
                
                    </p>
                    <p>
                    <br/>
                            
                    
                          <input class="Soirées" type="checkbox" name="Soirées" id="Soirées" /> <label for="Soirées">Soirées</label>
                    
                          <input class="Festival/Concert" type="checkbox" name="Festival/Concert" id="Festival/Concert" /> <label for="Festival/Concert">Festival/Concert</label>
                    
                            <input class="Spectacle" type="checkbox"   name="Spectacle" id="Spectacle" /> <label for="Spectacle">Spectacle</label>
                    
                     <input class="Théâtre" type="checkbox" name="Théâtre" id="Théâtre" /> <label for="Théâtre">Théâtre</label> 
                    
                            <input class="Enfants/Famille" type="checkbox" name="Enfants/Famille" id="Enfants/Famille" /> <label for="Enfants/Famille">Enfants/Famille</label> 
                
                    </p>
                            <br/>
        
                            <h2>Sport:</h2><br/>
        
                            <input class="Equipe" type="checkbox" name="Equipe" id="Equipe" /> <label for="Equipe">Equipe</label>
                            <input class="Extrème" type="checkbox" name="Extrème" id="Extrème" /> <label for="Extrème">Extrème</label>
                            <input class="Art Martiaux" type="checkbox" name="Art Martiaux" id="Art Martiaux" /> <label for="Art Martiaux">Art Martiaux</label>
                             <input class="Artistique" type="checkbox" name="Artistique" id="Artistique" /> <label for="Artistique">Artistique</label>
                            
                            <br/>
                            <br/>
                            
                             <h2>Film:</h2><br/>
        
                            <input class="Comédie" type="checkbox" name="Comédie" id="Comédie" /> <label for="Comédie">Comédie</label> 
                            <input class="Action" type="checkbox" name="Action" id="Action" /> <label for="Action">Action</label>    
                            <input class="Romantique" type="checkbox" name="Romantique" id="Romantique" /> <label for="Romantique">Romantique</label>
                            <input class="Science Fiction" type="checkbox" name="Science Fiction" id="Science Fiction" /> <label for="Science Fiction">Science Fiction</label>
                              <input class="Historique" type="checkbox" name="Historique" id="Historique" /> <label for="Historique">Historique</label>
                            
                            <br/>
                            <br/>
        
                            <h2>Musique:</h2><br/>
        
                            <input class="Jazz" type="checkbox" name="Jazz" id="Jazz" /> <label for="Jazz">Jazz</label> 
                             <input class="Rock" type="checkbox" name="Rock" id="Rock" /> <label for="Rock">Rock</label> 
                             <input class="Classique" type="checkbox" name="Classique" id="Classique" /> <label for="Classique">Classique</label> 
                            <input class="Techno" type="checkbox" name="Techno" id="Techno" /> <label for="Techno">Techno</label>
                             <input class="Rap/R&B" type="checkbox" name="Rap/R&B" id="Rap/R&B" /> <label for="Rap/R&B">Rap/R&amp;B</label>
                             <input class="House" type="checkbox" name="House" id="House" /> <label for="House">House</label>
                    
                              <br/>
                              <br/>
        
                            <h2>Restaurants:</h2>                                   <br/>
        
                            <input class="Culinaires" type="checkbox" name="Culinaires" id="Culinaires" /> <label for="Culinaires">Culinaires</label> 
                             <input class="Asiatique" type="checkbox" name="Asiatique" id="Asiatique" /> <label for="Asiatique">Asiatique</label> 
                             <input class="Français" type="checkbox" name="Français" id="Français" /> <label for="Français">Français</label> 
                            <input class="Italien" type="checkbox" name="Italien" id="Italien" /> <label for="Italien">Italien</label>
                             <input class="Fast food" type="checkbox" name="Fast food" id="Fast food" /> <label for="Fast food">Fast food</label>
                             <input class="Autres" type="checkbox" name="Autres" id="Autres" /> <label for="Autres">Autres</label>
                    
                               <br/>
                            <br/>
        
                         <h2>Enfant/Famille:</h2>   <br/>
                            <input class="Parc d'attraction" type="checkbox" name="Parc d'attraction" id="Parc d'attraction" /> <label for="Parc d'attraction">Parc d'attraction</label> 
                            <input class="Aquarium" type="checkbox" name="Aquarium" id="Aquarium" /> <label for="Aquarium">Aquarium</label>
                            <input class="Pique-nique" type="checkbox" name="Pique-nique" id="Pique-nique" /> <label for="Pique-nique">Pique-nique</label>
        
                                <br/>
                            </form>
                    
                    
                </fieldset>
            </section>
        </div>
            
     <?php include("PiedPage.php") ?>
     <!--<footer>
                 <ul id="fin"> 
                <span class="fi">
                <li> <a href="#"> <h2>Nous connaitre </h2> </a> </li></span>
                <li> <a href="#"> <h2> Nous suivre</h2> </a> </li> 
                <li> <a href="#"> <h2>Contact</h2> </a</li>
                <li> <a href="#"> <h2>Aide en ligne </h2> </a> </li>
            
                
            </ul>
                    
            
            </footer>     
                    
                      
               
     

    </body>
</html> -->


