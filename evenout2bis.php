<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="even2bien.css"/>
        <title> Even'Out</title>
    </head>
    
    <body>
      
      <?php include("menu.php") ?>
      <?php include("en_tete.php") ?>
        <!--  <nav>
    <ul id="menu"> 
        <span class="evt"><li> <a href="Evènement.html"> <h2>Evènements </h2> </a> </li></span>
        <li> <a href="agenda.html"> <h2> Agenda </h2> </a> </li> 
        <li> <a href="creer.html"> <h2>Créer un évènement</h2> </a></li>
        <li> <a href="forum.html"> <h2>Forum</h2> </a> </li>
        <li> <a href="mon_compte.html"> <h2> Mon compte</h2> </a> </li>
    </ul>
</nav> 
        
                
                
                <img id="even" src="even.png" width="150" height="150">
            </ul>
        </nav>
        
        <header class ="fond">
            
        
                <img id="paris" src="paris.jpg" width="1333" height="407">
                
                
            
        </header> -->
    
            
        
        <div id="searchbar">  <!-- Code pour la barre de recherche -->
                <form action="search"  method="get" class="formulaire">
                    
                    <input id="search" type="text" placeholder="Rechercher un évènement"/>
                    <input id="search-btn" type="submit" value="rechercher"/>
                    
                     
                </form>
         </div>
        
        
        <div class="recherche">
            <a href="recherche.html"> recherche avancée</a>
        </div>
            
            
            <p>Envie de sortir? <br/>
Even'Out vous informe et vous guide dans votre choix d'évènements.<br/>
Soyez organisé en organisant vos sorties et vos déplacements entre amis.</p>
            
            <section>
            <fieldset class="nouveau">
                
            <legend class="titre1"> Nouveautés</legend>
                <img src="marathon.jpg"  class="marathon" alt="marathon"/>
                
                <img src="cinema.jpg" class="cinema" alt="cinema"/>
                <img src="johny.jpg" class="johny" alt="johny"/>
                 <span id="course">Marathon de Paris 2015 </span> 
                <span id= "vin"> Film</span>
                <span id="hallyday">Concert de Johny Hallyday</span>
                
                
                
               
            
        
            <ul id="pagination">
                <li class="previous"> << Précédent</li>
                <li class="active">1</li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">6</a></li>
                <li><a href="#">7</a></li>
                <li class="next"><a href="#">Suivant »</a></li>
            </ul>
            
                </fieldset>
               
                
               </section>
            
            <section>
                
            <fieldset  class="choix">
                
                <legend class="moment"> Sélection du moment</legend>
                <img src="hallo.jpg" class="hallo" alt="hallo"/>
                <img src="pic1.jpg" class="pic1" alt="pic"/>
                <img src="pic2.jpeg" class="pic2" alt="pic2"/>
                <img src="pic3.jpg" class="pic3" alt="pic3"/>
                <img src="carnaval.jpg" class="carnaval" alt="carnaval"/>
                <img src="jeu.jpg" class="jeu" alt="jeu"/>
                <img src="ski.jpg" class="ski" alt="ski"/>
                
                <span id="halloween">Ou sortir pour Halloween</span>
                <span id="grand">Les grands piques-niques de la rentrée</span>
                <span id="activité">Activité pour enfant en hiver</span>
                
                
            <ul id="page">
                <li class="previous"> << Précédent</li>
                <li class="active">1</li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">6</a></li>
                <li><a href="#">7</a></li>
                <li class="next"><a href="#">Suivant »</a></li>
            </ul>
                
                
                
            </fieldset>
            </section>
            
	
            <!--<footer>
                 <ul id="fin"> 
                <span class="fi"><li> <a href="#"> <h2>Nous connaitre </h2> </a> </li></span>
                <li> <a href="#"> <h2> Nous suivre</h2> </a> </li> 
                <li> <a href="#"> <h2>Contact</h2> </a</li>
                <li> <a href="#"> <h2>Aide en ligne </h2> </a> </li>
              
            </ul>
            
            </footer>-->
         
        <?php include("PiedPage.php") ?>
    
            
    </body>
</html>
