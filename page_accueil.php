<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="accueil.css"/>
        <script type="text/javascript" src="projet.js"></script>
        <title> Even'Out</title>
    </head>
    
    <body>
        
        <?php include("menu.php"); ?>
       
        <?php include("en_tete.php"); ?>
      
        
        
        
            <article id="contenu">
                
           <p> <span id="sortir">Envie de sortir?</span> <br/>
Even'Out vous informe et vous guide dans votre choix d'évènements.<br/>
Soyez organisé en organisant vos sorties et vos déplacements entre amis.</p>
            
            <section>
                <fieldset class="nouveau">
                
                    <legend class="titre1"> Nouveautés</legend>
                        <img src="image/marathon.jpg"  class="marathon" alt="marathon"/>
                
                        <img src="image/cinema.jpg" class="cinema" alt="cinema"/>
                        <img src="image/johny.jpg" class="johny" alt="johny"/>
                            <span id="course"> Marathon de Paris 2015 </span> 
                            <span id= "film"> Film</span>
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
                        <img src="image/hallo.jpg" class="hallo" alt="hallo"/>
                        <img src="image/pic1.jpg" class="pic1" alt="pic"/>
                        <img src="image/pic2.jpeg" class="pic2" alt="pic2"/>
                        <img src="image/pic3.jpg" class="pic3" alt="pic3"/>
                        <img src="image/carnaval.jpg" class="carnaval" alt="carnaval"/>
                        <img src="image/jeu.jpg" class="jeu" alt="jeu"/>
                        <img src="image/ski.jpg" class="ski" alt="ski"/>
                
                        <span id="halloween">Ou sortir pour Halloween</span>
                        <span id="grand">Les grands piques-niques de la rentrée</span>
                        <span id="activite">Activité pour enfant en hiver</span>
                
                
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

</article>
            
	<?php include("pied.php"); ?>
            
    
            
    </body>
</html>
