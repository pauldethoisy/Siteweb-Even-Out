<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="Inscription_Connexion.css"/>
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
        
            <section class="Conect">   <h1>Connexion</h1>
                        <form method="post" action="traitement.php">
                           <p><br/><br/>
                            
                            <div class="Mailco" > 
                                
                            <label>Adresse mail</label> : <input type="email" name="adresse mail" id required />        
                            </div>
                            
                           </p>
                            
                           <p>
                               
                           <div class="Mdp" > 
                               
        <label>Mot de passe</label> : <input type="text" name="mot de passe" id required />
                               
                           </div>  
                           </p>
                
                            
                           <p>
                               
                           <div class="Rc" > Rester connecté <input type="radio" name="restr connecté" value="restr connecté" id="restr connecté" />
                               
                           </div>
                           </p>
    
                            <p>
                              <br/>
                             <div class="envoyerco">   <input type="submit" value="Connexion" /></div>
                           
                            </p>
                         </form>
        
                    
        
        </section>
        <section class= "Inscrip"> <h1>Inscription</h1>
                  <form method="post"action="traitement.php">
                      
                      <p><br/> <div class="PSDO" >    <label>Pseudo :   </label>
                           <input type="text" name="pseudo" id required class="pseu" ></div>
                  </p>
                 
                  <p> <div class="Mail" > <label>Adresse mail</label> : <input type="email" name="adresse mail" id required />
                  </p>
                
                  <p>
        <label>Mot de passe</label> : <input type="text" name="mot de passe" id required class="mdp" />
                 </p>
            
                 <p>
        <label>Confirmation</label> : <input type="text" name="confirmation du mot de passe"id required class="Conf" />
                  </p>
                      
                  <p>
       <label for="Date">Date de naissance</label>
       <select name="Jour" id="Jour">
           <option value="1">1</option>
           <option value="2">2</option>
           <option value="3">3</option>
           <option value="4">4</option>
           <option value="5">5</option>
           <option value="6">6</option>
           <option value="7">7</option>
           <option value="8">8</option>
           <option value="9">9</option>
           <option value="10">10</option>
           <option value="11">11</option>
           <option value="12">12</option>
           <option value="13">13</option>
           <option value="14">14</option>
           <option value="15">15</option>
           <option value="16">16</option>
           <option value="17">17</option>
           <option value="18">18</option>
           <option value="19">19</option>
           <option value="20">20</option>
           <option value="21">21</option>
           <option value="22">22</option>
           <option value="23">23</option>
           <option value="24">24</option>
           <option value="25">25</option>
           <option value="26">26</option>
           <option value="27">27</option>
           <option value="28">28</option>
           <option value="29">29</option>
           <option value="30">30</option>
           <option value="31">31</option> </br>
     </select>
           <label for="Mois">Mois</label>
           <select name="Mois" id="Mois">
           <option value="1">1</option>
           <option value="2">2</option>
           <option value="3">3</option>
           <option value="4">4</option>
           <option value="5">5</option>
           <option value="6">6</option>
           <option value="7">7</option>
           <option value="8">8</option>
           <option value="9">9</option>
           <option value="10">10</option>
           <option value="11">11</option>
           <option value="12">12</option>
          
       </select>
        <label for="Année">Année</label>   
        <select name="Année" id="Année">         <option value="1935" selected>1935</option>
<option value="1936" >1936</option>
<option value="1937" >1937</option>
<option value="1938" >1938</option>
<option value="1939" >1939</option>
<option value="1940" >1940</option>
<option value="1941" >1941</option>
<option value="1942" >1942</option>
<option value="1943" >1943</option>
<option value="1944" >1944</option>
<option value="1945" >1945</option>
<option value="1946" >1946</option>
<option value="1947" >1947</option>
<option value="1948" >1948</option>
<option value="1949" >1949</option>
<option value="1950" >1950</option>
<option value="1951" >1951</option>
<option value="1952" >1952</option>
<option value="1953" >1953</option>
<option value="1954" >1954</option>
<option value="1955" >1955</option>
<option value="1956" >1956</option>
<option value="1957" >1957</option>
<option value="1958" >1958</option>
<option value="1959" >1959</option>
<option value="1960" >1960</option>
<option value="1961" >1961</option>
<option value="1962" >1962</option>
<option value="1963" >1963</option>
<option value="1964" >1964</option>
<option value="1965" >1965</option>
<option value="1966" >1966</option>
<option value="1967" >1967</option>
<option value="1968" >1968</option>
<option value="1969" >1969</option>
<option value="1970" >1970</option>
<option value="1971" >1971</option>
<option value="1972" >1972</option>
<option value="1973" >1973</option>
<option value="1974" >1974</option>
<option value="1975" >1975</option>
<option value="1976" >1976</option>
<option value="1977" >1977</option>
<option value="1978" >1978</option>
<option value="1979" >1979</option>
<option value="1980" >1980</option>
<option value="1981" >1981</option>
<option value="1982" >1982</option>
<option value="1983" >1983</option>
<option value="1984" >1984</option>
<option value="1985" >1985</option>
<option value="1986" >1986</option>
<option value="1987" >1987</option>
<option value="1988" >1988</option>
<option value="1989" >1989</option>
<option value="1990" >1990</option>
<option value="1991" >1991</option>
<option value="1992" >1992</option>
<option value="1993" >1993</option>
<option value="1994" >1994</option>
<option value="1995" >1995</option>
<option value="1996" >1996</option>
<option value="1997" >1997</option>
<option value="1998" >1998</option>
<option value="1999" >1999</option>
<option value="2000" >2000</option>
<option value="2001" >2001</option>
<option value="2002" >2002</option>
<option value="2003" >2003</option>
<option value="2004" >2004</option>
<option value="2005" >2005</option>
<option value="2006" >2006</option>
<option value="2007" >2007</option>
<option value="2008" >2008</option>
</select>
          
                  </p>
                      
                 
    
    
              <p>
                  
                <br/>
            
<div class="envoyerins" >  <input type="submit" value="Connexion" /></div>

            </p>
            
            
            
            
            
            </form>
            
        
        </section>
           <footer>
                 <ul id="fin"> <!-- en tete  -->
                <span class="fi">
                <li> <a href="#"> <h2>Nous connaitre </h2> </a> </li></span>
                <li> <a href="#"> <h2> Nous suivre</h2> </a> </li> 
                <li> <a href="#"> <h2>Contact</h2> </a</li>
                <li> <a href="#"> <h2>Aide en ligne </h2> </a> </li>
            
                
            </ul>
                    
            
            </footer>     
                    
      
    </body>
</html>
