
<!DOCTYPE html >
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="recherche.css"/>
        <title> Even'Out</title>
    </head>
     <body>
    <?php include("menu.php") ?>
        
    <?php include("en_tete.php") ?>
         <!--<nav>
             <ul id="menu"> 
                 <span class="evt">
                    <li> <a href="Evènement.html"> <h2>Evènements </h2> </a> </li></span>
                    <li> <a href="agenda.html"> <h2> Agenda </h2> </a> </li> 
                    <li> <a href="creer.html"> <h2>Créer un évènement</h2> </a></li>
                    <li> <a href="forum.html"> <h2>Forum</h2> </a> </li>
                    <li> <a href="mon_compte.html"> <h2> Mon compte</h2> </a> </li>
            </ul>
         </nav>
        
         <img id="even" src="even.png" width="150" height="150">
         
         </ul>
    
    
    <header class ="fond">
             
        <img id="paris" src="paris.jpg" width="1333" height="407">
                
    </header>-->
        
    <div id="searchbar">  <!-- Code pour la barre de recherche -->
                
        <form action="search"  method="get" class="formulaire">            
            <input id="search" type="text" placeholder="Rechercher un évènement">
            <input id="search-btn" type="submit" value="rechercher">
        </form>
            
    </div>
        
    <div class="recherche">   
        <a href="recherche.html"> recherche avancée</a>
    </div>

    <div id="formulaire">
        <fieldset class="recherchea">
            <legend class="titre1"> Recherche avancée</legend>
            <form method="post" action="traitement.php">    
                <label> Nom : </label>
                <input type="text" name="nom;" id="libelle"/><br/>
                
                <div id="Date">
                    <label for="date"> Du </label>
                    <input type="date" name="Du">
                
                    <label for ="date"> Au </label>
                    <input type="date" name="Au">
                </div>
                    
                <div id="Heure">    
                    <label for="time"> De </label>    
                    <input type="time" name="De">
                    
                    <label for ="time"> A </label>
                    <input type="time" name="A">
                </div>
            
                <br/>
                            
                <label for="price"> Prix </label> : <input type="range"><br/>
            
            
            
                <div id="type_evenement">
                
                
                    <label> Type d'évènements : </label>
                
                
                    <select name="categorie" id="categorie">
                    
                        <optgroup label="Arts/Culture"> 
                            <option value="exposition"> Exposition </option>
                            <option value="promenade"> Promenade</option>
                        </optgroup>
                        
                        <optgroup label="Art scénique">
                            <option value="spectacle"> Spectacle </option>
                            <option value="théâtre"> Théâtre </option>
                            <option value="concert"> Concert </option>
                            <option value="festival"> Festival</option>
                        </optgroup>
                       
                        <optgroup label="Gastronomie">
                            <option value="food"> Evènement gastronomique </option>
                        </optgroup>
                        
                        <optgroup label="Loisir">
                            <option value="Cinéma"> Cinéma </option>
                            <option value="Sport"> Evènements sportifs </option>
                            <option value="Shopping"> Mode </option>
                            <option value="salon_foire_brocante"> Salon/Foire/Brocante </option>
                            <option value="soirée"> Soirée </option>
                            <option value="sport"> Sport </option>

                        </optgroup>
                        
                        <optgroup label="Enfant/Famille">
                        </optgroup>
    
                    </select>    
                
                </div>
            
            
            
                <div id="type_lieux">
                
                    <label> Type de lieux  : </label>
                    <select name="categoriel" id="categoriel">
                        <optgroup label="Arts/Culture"> 
                            <option value="musée"> Musée </option>
                            <option value="Parc_jardin"> Parc/Jardin</option>
                        </optgroup>
                    
                        <optgroup label="Art scénique">
                            <option value="spectacle"> Salle de spectacle </option>
                            <option value="théâtre"> Théâtre </option>
                            <option value="concert"> Salle de concert </option>
                            <option value="festival"> Festival</option>
                        </optgroup>
                    
                        <optgroup label="Gastronomie">
                            <option value="Restaurant"> Restaurant </option>
                            <option value="Bar"> Bar </option>
                        </optgroup>
                    
                        <optgroup label="Loisir">
                            <option value="Cinéma"> Salle de cinéma </option>
                            <option value="Sport"> Stade/Gymnase </option>
                            <option value="Shopping"> Magasins </option>
                            <option value="salon_foire_brocante"> Espace de salon </option>
                            <option value="soirée"> Club </option>
                    
                        </optgroup>
                    
                        <optgroup label="Enfant/Famille">
                            <option value="Parc"> Parc d'attraction </option>
                            <option value="aquarium"> Aquarium </option>
                        </optgroup>
                
                    </select>           
            
                </div>
                
                
            
                <div id="departement">
                    
                    <label for="departement"> Département </label>
                    <select name="departement" id="departements">
                        <option value="01">01 Ain</option>
                        <option value="02">02 Aisne</option>
                        <option value="03">03 Allier</option>
                        <option value="04">04 Alpes de Haute Provence</option>
                        <option value="05">05 Hautes Alpes</option>
                        <option value="06">06 Alpes Maritimes</option>
                        <option value="07">07 Ardèche</option>
                        <option value="08">08 Ardennes</option>
                        <option value="09">09 Ariège</option>
                        <option value="10">10 Aube</option>
                        <option value="11">11 Aude</option>
                        <option value="12">12 Aveyron</option>
                        <option value="13">13 Bouches du Rhône</option>
                        <option value="14">14 Calvados</option>
                        <option value="15">15 Cantal</option>
                        <option value="16">16 Charente</option>
                        <option value="17">17 Charente Maritime</option>
                        <option value="18">18 Cher</option>
                        <option value="19">19 Corrèze</option>
                        <option value="2A">2A Corse du Sud</option>
                        <option value="2B">2B Haute-Corse</option>
                        <option value="21">21 Côte d'Or</option>
                        <option value="22">22 Côtes d'Armor</option>
                        <option value="23">23 Creuse</option>
                        <option value="24">24 Dordogne</option>
                        <option value="25">25 Doubs</option>
                        <option value="26">26 Drôme</option>
                        <option value="27">27 Eure</option>
                        <option value="28">28 Eure et Loir</option>
                        <option value="29">29 Finistère</option>
                        <option value="30">30 Gard</option>
                        <option value="31">31 Haute Garonne</option>
                        <option value="32">32 Gers</option>
                        <option value="33">33 Gironde</option>
                        <option value="34">34 Hérault</option>
                        <option value="35">35 Ille et Vilaine</option>
                        <option value="36">36 Indre</option>
                        <option value="37">37 Indre et Loire</option>
                        <option value="38">38 Isère</option>
                        <option value="39">39 Jura</option>
                        <option value="40">40 Landes</option>
                        <option value="41">41 Loir et Cher</option>
                        <option value="42">42 Loire</option>
                        <option value="43">43 Haute Loire</option>
                        <option value="44">44 Loire Atlantique</option>
                        <option value="45">45 Loiret</option>
                        <option value="46">46 Lot</option>
                        <option value="47">47 Lot et Garonne</option>
                        <option value="48">48 Lozère</option>
                        <option value="49">49 Maine et Loire</option>
                        <option value="50">50 Manche</option>
                        <option value="51">51 Marne</option>
                        <option value="52">52 Haute Marne</option>
                        <option value="53">53 Mayenne</option>
                        <option value="54">54 Meurthe et Moselle</option>
                        <option value="55">55 Meuse</option>
                        <option value="56">56 Morbihan</option>
                        <option value="57">57 Moselle</option>
                        <option value="58">58 Nièvre</option>
                        <option value="59">59 Nord</option>
                        <option value="60">60 Oise</option>
                        <option value="61">61 Orne</option>
                        <option value="62">62 Pas de Calais</option>
                        <option value="63">63 Puy de Dôme</option>
                        <option value="64">64 Pyrénées Atlantiques</option>
                        <option value="65">65 Hautes Pyrénées</option>
                        <option value="66">66 Pyrénées Orientales</option>
                        <option value="67">67 Bas Rhin</option>
                        <option value="68">68 Haut Rhin</option>
                        <option value="69">69 Rhône</option>
                        <option value="70">70 Haute Saône</option>
                        <option value="71">71 Saône et Loire</option>
                        <option value="72">72 Sarthe</option>
                        <option value="73">73 Savoie</option>
                        <option value="74">74 Haute Savoie</option>
                        <option value="75">75 Paris</option>
                        <option value="76">76 Seine Maritime</option>
                        <option value="77">77 Seine et Marne</option>
                        <option value="78">78 Yvelines</option>
                        <option value="79">79 Deux Sèvres</option>
                        <option value="80">80 Somme</option>
                        <option value="81">81 Tarn</option>
                        <option value="82">82 Tarn et Garonne</option>
                        <option value="83">83 Var</option>
                        <option value="84">84 Vaucluse</option>
                        <option value="85">85 Vendée</option>
                        <option value="86">86 Vienne</option>
                        <option value="87">87 Haute Vienne</option>
                        <option value="88">88 Vosges</option>
                        <option value="89">89 Yonne</option>
                        <option value="90">90 Territoire de Belfort</option>
                        <option value="91">91 Essonne</option>
                        <option value="92">92 Hauts de Seine</option>
                        <option value="93">93 Seine Saint Denis</option>
                        <option value="94">94 Val de Marne</option>
                        <option value="95">95 Val d'Oise</option>
                    
                    </select>
                
                </div>
            
                <br/>
            
            
            
                <div id="public">
                
                
                    <label> Type de public : </label><br/>
                
                
                    <input type="radio" name="age" value="Tout public" id="Tout public" /> <label for="Tout public">Tout public</label>
                    <input type="radio" name="age" value="enfant" id="enfant" /> <label for="enfant">Enfant</label>
                    <input type="radio" name="age" value="mineur" id="mineur" /> <label for="mineur">Mineur</label>
                    <input type="radio" name="age" value="majeur" id="majeur" /> <label for="majeur">Majeur</label><br/>
               
            
                </div>
            
            
                <div id="prive public">
            
                
                    <input type="radio" name="public" value="privé" id="privé" /> <label for="privé">Evènements privés</label>
                
                
                    <input type="radio" name="public" value="public" id="public" /> <label for="public">Evènements publics</label><br/>
            
            
                </div>
              
                <br>
                    
                    
                <input id="search-btn" type="submit" value="Rechercher"/>
                    
                    
            </form>
                
        </fieldset>
        
    </div>
           
    
    <?php include("PiedPage.php") ?>
    <!--<footer>
                 
        
        <ul id="fin"> 
            <span class="fi"><li> <a href="#"> <h2>Nous connaitre </h2> </a> </li></span>
            <li> <a href="#"> <h2> Nous suivre</h2> </a> </li> 
            <li> <a href="#"> <h2>Contact</h2> </a></li>
            <li> <a href="#"> <h2>Aide en ligne </h2> </a> </li>
        </ul>
                
    </footer>-->


    </body>
</html>
