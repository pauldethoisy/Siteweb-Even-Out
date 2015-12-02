<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" /> <!--Clavier et caractères Latin européen-->
        <link rel="stylesheet" href="info_event2.css" /> 
        <title>Even Out</title>
    </head>

    <body>
    	<?php include("menu.php") ?>
        
        <?php include("en_tete.php") ?>
	    
	    <!-- <nav>
            <ul id="menu"> 
                <span class="evt"><li> <a href="Evènement.html"> <h2>Evènements </h2> </a> </li></span>
                <li> <a href="agenda.html"> <h2> Agenda </h2> </a> </li> 
                <li> <a href="creer.html"> <h2>Créer</h2> </a></li>
                <li> <a href="forum.html"> <h2>Forum</h2> </a> </li>
                <li> <a href="en_tête_de_page.html"> <h2> Mon compte</h2> </a> </li>
                <img id="even" src="C:\Users\anis\Desktop\info_even\even.png" width="110" height="110">
            </ul>
        </nav> -->
        
		<div id="searchbar">  <!-- Code pour la barre de recherche -->
               
        <form action="search"  method="get" class="formulaire">                    
                   
            <input id="search" type="text" placeholder="Rechercher un évènement"/>                  
            <input id="search-btn" type="submit" value="rechercher"/>         
            
        </form>
    </div>
        
        
        <div class="recherche">
            <a href="recherche.html"> recherche avancée</a>
        </div>
        <header class ="fond">
             <!-- photo du site -->
        
                <img id="paris" src="C:\Users\anis\Desktop\info_even\paris.jpg" width="1333" height="407">
				
			                     
            
        </header>
	 <!-- fin du haut page -->
               
	<h1> 007 Spectre, le dernier James Bond </h1> 

	         <div class="les-images" >
      
                    <img src="C:\Users\anis\Desktop\spectre007.jpg"  alt="affiche James Bond spectre" title="007 spectre" class="photo1" />
                    <img src="C:\Users\anis\Desktop\affiche1.jpg"  alt="affiche Bond spectre" title="007 spectre" class="photo2" />
					<img src="C:\Users\anis\Desktop\red007.jpg"  alt="tapis rouge spectre" title="007 spectre" class="photo3" />
            </div>    

			
			
    <!-- les boutons --> 
    <a href="" class="button" ><span class="participer"> Y participer?</span></a> 
	<a href=""> </a>
	
	<p class="prix"> Gratuit / Prix </p>
    <p class="inviteramis">+ Inviter des amis</p>	

	

	
	<!-- Où et quand -->
	<div class="où-quand">
	<h3><em>Où et Quand ?</em></h3> <br/> 
	Sorti le 10 novembre<br/> 
	Séance de 19h30- 22h15<br/> 
	UGC Ciné Cité Les Halles<br/> 
	<br/>
	Adresse : 7, place de la Rotonde 75001 Paris 1er arrondissement<br/>  
	Public : 10ans et +<br/>  
	Nombre maximum de participants : 150 personnes<br/> 
	</div>	

	
	
	
	
<!-- DEBUT onglet descriptif et commentaires-->
   
 
 <div id="comm">
  <ul id="onglets">
    <li class="active"><a href="C:\Users\anis\Desktop\le site\info_event1.html">Descriptif</a></li>
	<li><a "Descriptif.html">Commentaires</a></li>    
  </ul>
</div>



<!-- Reservation lien-->

<div class="reserve" >
         <p>Si vous souhaitez réserve votre place voici le lien: <br/>   
           <a href="https://www.ugc.fr/reservationAccueil.html?id=330171124930&part=all" target="_blank">
           https://www.ugc.fr/reservationAccueil.html?id=330171124930&part=all 
		 </p>   
	  
	</div>


	
 <div class="sponsors" >
 <p> Les sponsors de l'événement </p>

 </div>
	
	
	
<!-- utiliser du php -->
	
	<div class="les-commentaires" >
      <form method="post" action="traitement.php">
   <p>
	 <label for="commentaires"> <h4> Commentaires : </h4> </label> <textarea name="commentaires" id="commentaires"" rows="10" cols="60" />
       Donne ton avis :)! </textarea>
   </p>   
	  </form>
	</div>
	
	
	
	
	
<!-- DEBUT onglet descriptif et commentaires-->

 <div id="menu">
  <ul id="onglets">
    
    <li class="active"><a href="C:\Users\anis\Desktop\le site\info_event1.html">Descriptif</a></li>
	<li><a Commentaires.html">Commentaires</a></li>
    
    
    
  </ul>
</div>

<!-- FIN onglet descriptif et commentaires -->
	 
	 
	 <?php include("PiedPage.php") ?>
	 
            <!-- <footer>
			
                <ul id="fin"> 
				<link rel="stylesheet" href="V1.css" />
                <span class="fi"><li> <a href="#"> <h2>Nous connaitre </h2> </a> </li></span>
                <li> <a href="#"> <h2> Nous suivre</h2> </a> </li> 
                <li> <a href="#"> <h2>Contact</h2> </a</li>
                <li> <a href="#"> <h2>Aide en ligne </h2> </a> </li>
              
                </ul>
            
            </footer>-->
            
	    </body>
</html>
