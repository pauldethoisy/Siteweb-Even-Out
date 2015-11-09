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
                <article>
                    <fieldset>  
                        <legend> Créer un évènement </legend>
                        
                        <img src="Icones/information.png"  class="information" alt="Informations"/><br/>
                        <h1>Description</h1>
                        
                        <form method="post" action="traitement.php">
                            <div class="remplir">
                                Remplissez:
                            </div>
                            
                            <h3>Informations sur l'évènement:</h3>

                            <div id="nom_evenement">
                                <label for="nom">Nom de l'évènement:<strong><abbr title="obligatoire">*</abbr></strong></label><input type="text" name="nom" id="nom" placeholder="Ex: Marathon de Paris" size="30" autofocus required/>
                            </div>

                            <div id="concerne">
                                <h5>Public concerné (par tranche d'âge):</h5>
                                <p>
                                    <label for="min">Minimum </label><input id="min" type="range" min="0" max="122"/><label for="min">ans</label>
                                    (JS à intégrer pour afficher les valeurs)
                                </p>
                                <p>
                                    <label for="max">Maximum </label><input id="max" type="range" min="0" max="122"/><label for="max">ans</label>
                                    (JS à intégrer pour afficher les valeurs)
                                </p>
                            </div>

                            <div id="duree_evenement">
                                <label for="duree">Durée de l'évènement:<strong><abbr title="obligatoire">*</abbr></strong></label><input type="text" name="duree" id="duree" maxlenght="2" placeholder="Ex: 02" required/><label for="duree">h</label><input type="text" name="dureemin" id="dureemin" maxlenght="2" placeholder="Ex: 30" required/><label for="dureemin">min</label>
                            </div>

                            <div id="description_evenement">
                                <label>Description de l'évènement:<strong><abbr title="obligatoire">*</abbr></strong></label><textarea id="description" name="description" required>A propos de l'organisation de l'évènement ...</textarea>
                            </div>

                            <h3>Choix du lieu:</h3>

                            <div id="type_lieu">
                                <label for="type">Type de lieu:<strong><abbr title="obligatoire">*</abbr></strong></label>
                                <select name="type" id="type">
                                    <option selected>Choisir</option>
                                    <option value="salle">Salle</option>
                                    <option value="scene">Scène</option>
                                    <option value="terrain">Terrain</option>
                                    <option value="parc/jardin">Parc/Jardin</option>
                                    <option value="foret">Forêt</option>
                                    <option value="rue">Rue</option>
                                </select>
                            </div>

                            <div id="quantite_lieu">
                        	    <label for="quantite">Nombre de lieu(x) différent(s):<strong><abbr title="obligatoire">*</abbr></strong></label><input type="number" id="quantite" min="1" max="100" required/>
                            </div>

                            <h4>Lieu 1</h4>

                            <div id="nom_lieu">
                                <label for="lieu">Nom du lieu:<strong><abbr title="obligatoire">*</abbr></strong></label><input type="text" name="lieu" id="lieu" placeholder="Ex: Rues de Paris" size="30" required/>
                            </div>

                            <div id="adresse_lieu">
                                <h5>Adresse du lieu:</h5>
                                <p>
                                    <label for="numero">Numéro d'adresse</label><input type="text" name="numero" id="numero" maxlenght="7" placeholder="Ex: 1" size="30"/><br/>
                                    <label for="adresse">Adresse<strong><abbr title="obligatoire">*</abbr></strong></label><input type="text" name="adresse" id="adresse" placeholder="Ex: Place de l'opéra" size="30" required/><br/>
                                    <label for="postal">Code postal<strong><abbr title="obligatoire">*</abbr></strong></label><input type="text" name="postal" id="postal" maxlenght="5" placeholder="Ex: 75009" size="30" required/>
                                </p>
                            </div>

                            <div id="date">
                                <h5>Date:</h5>
                                <p>
                            	    <input type="checkbox" id="date_debut" checked required/><label for="date_debut">De début<strong><abbr title="obligatoire">*</abbr></strong></label>
                                    <br/>(Calendrier à coder)
                                </p>
                                <p>
                                    <input type="checkbox" id="date_fin"/><label for="date_fin">De fin</label>
                                    <br/>(Calendrier à coder)
                                </p>
                            </div>

                            <div id="heure">
                                <h5>Heure:</h5>
                                <p>
                                    <input type="checkbox" id="heure_debut" checked required/><label for="heure_debut">De début<strong><abbr title="obligatoire">*</abbr></strong></label>
                                    <select name="heures1" id="heures1">
                                        <option selected>Choisir</option>
                                        <option value="00">00</option>
                                        <option value="01">01</option>
                                        <option value="02">02</option>
                                        <option value="03">03</option>
                                        <option value="04">04</option>
                                        <option value="05">05</option>
                                        <option value="06">06</option>
                                        <option value="07">07</option>
                                        <option value="08">08</option>
                                        <option value="09">09</option>
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
                                    </select>
                                    h
                                    <select name="minutes1" id="minutes1">
                                        <option selected>Choisir</option>
                                        <option value="00">00</option>
                                        <option value="01">01</option>
                                        <option value="02">02</option>
                                        <option value="03">03</option>
                                        <option value="04">04</option>
                                        <option value="05">05</option>
                                        <option value="06">06</option>
                                        <option value="07">07</option>
                                        <option value="08">08</option>
                                        <option value="09">09</option>
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
                                        <option value="31">31</option>
                                        <option value="32">32</option>
                                        <option value="33">33</option>
                                        <option value="34">34</option>
                                        <option value="35">35</option>
                                        <option value="36">36</option>
                                        <option value="37">37</option>
                                        <option value="38">38</option>
                                        <option value="39">39</option>
                                        <option value="40">40</option>
                                        <option value="41">41</option>
                                        <option value="42">42</option>
                                        <option value="43">43</option>
                                        <option value="44">44</option>
                                        <option value="45">45</option>
                                        <option value="46">46</option>
                                        <option value="47">47</option>
                                        <option value="48">48</option>
                                        <option value="49">49</option>
                                        <option value="50">50</option>
                                        <option value="51">51</option>
                                        <option value="52">52</option>
                                        <option value="53">53</option>
                                        <option value="54">54</option>
                                        <option value="55">55</option>
                                        <option value="56">56</option>
                                        <option value="57">57</option>
                                        <option value="58">58</option>
                                        <option value="59">59</option>
                                    </select>
                                    min
                                </p>

                                <p>
                                    <input type="checkbox" id="heure_debut/fin"/><label for="heure_debut/fin">De fin</label>
                                    <select name="heures2" id="heures2">
                                        <option selected>Choisir</option>
                                        <option value="00">00</option>
                                        <option value="01">01</option>
                                        <option value="02">02</option>
                                        <option value="03">03</option>
                                        <option value="04">04</option>
                                        <option value="05">05</option>
                                        <option value="06">06</option>
                                        <option value="07">07</option>
                                        <option value="08">08</option>
                                        <option value="09">09</option>
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
                                    </select>
                                    h
                                    <select name="minutes2" id="minutes2">
                                        <option selected>Choisir</option>
                                        <option value="00">00</option>
                                        <option value="01">01</option>
                                        <option value="02">02</option>
                                        <option value="03">03</option>
                                        <option value="04">04</option>
                                        <option value="05">05</option>
                                        <option value="06">06</option>
                                        <option value="07">07</option>
                                        <option value="08">08</option>
                                        <option value="09">09</option>
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
                                        <option value="31">31</option>
                                        <option value="32">32</option>
                                        <option value="33">33</option>
                                        <option value="34">34</option>
                                        <option value="35">35</option>
                                        <option value="36">36</option>
                                        <option value="37">37</option>
                                        <option value="38">38</option>
                                        <option value="39">39</option>
                                        <option value="40">40</option>
                                        <option value="41">41</option>
                                        <option value="42">42</option>
                                        <option value="43">43</option>
                                        <option value="44">44</option>
                                        <option value="45">45</option>
                                        <option value="46">46</option>
                                        <option value="47">47</option>
                                        <option value="48">48</option>
                                        <option value="49">49</option>
                                        <option value="50">50</option>
                                        <option value="51">51</option>
                                        <option value="52">52</option>
                                        <option value="53">53</option>
                                        <option value="54">54</option>
                                        <option value="55">55</option>
                                        <option value="56">56</option>
                                        <option value="57">57</option>
                                        <option value="58">58</option>
                                        <option value="59">59</option>
                                    </select>
                                    min
                                </p>
                            </div>

                            <div class="participants">
                                <h5>Nombre minimum/maximum de participants:</h5>
                                <p>
                                    <label for="partmin">Minimum </label><input type="number" id="partmin" step="1" min="0" max="100000000"/>
                                </p>
                                <p>
                                    <label for="partmax">Maximum </label><input type="number" id="partmax" step="1" min="0" max="100000000"/>
                                </p>
                            </div>

                            <h3>Tarifs:</h3>

                            <p>
                                <label for="partenaire">Nombre de vendeurs partenaires de l'évènement: </label><input type="number" id="partenaires" min="0" max="9"/>
                            </p>
                                
                            <h4>Vendeurs</h4>

                            <p>
                                <label for="vendeur">Nom du vendeur: </label><input type="text" name="vendeur" id="vendeur" placeholder="Ex: Vendeur 1" size="30"/>
                            </p>
                            <p>
                                <label for="site">Site web officiel: </label><input type="url" id="site" placeholder="Ex: www.sitefactice.fr"/>
                            </p>

                            <h4>Prix</h4>

                            <div id="prix">
                                Type de prix:<strong><abbr title="obligatoire">*</abbr></strong>
                                <p>
                                    <input type="radio" name="prix" id="gratuit" checked/><label for="gratuit">Gratuit</label><br/>
                                    <input type="radio" name="prix" id="payant"/><label for="payant">Payant</label>
                                </p>
                            </div>

                            <p>
                                <label for="plein">Plein tarif</label><input type="text" name="plein" id="plein" maxlenght="6" placeholder="Ex: 60"/><label for="plein">€</label><br/>
                                <label for="plein-description">Description du tarif:</label><textarea id="plein-description" name="plein-description">Ex: A partir de 18 ans.</textarea>
                            </p>
                            </p>
                            <p>
                                <label for="reduit">Tarif réduit</label><input type="text" name="reduit" id="reduit" maxlenght="6" placeholder="Ex: 40"/><label for="reduit">€</label><br/>
                                <label for="reduit-description">Description du tarif:</label><textarea id="reduit-description" name="reduit-description">Ex: Jusqu'à 18 ans.</textarea>
                            </p>
                            <p>
                                <label for="special">Tarif spécial</label><input type="text" name="special" id="special" maxlenght="6" placeholder="Ex: 50"/><label for="special">€</label><br/>
                                <label for="special-description">Description du tarif:</label><textarea id="special-description" name="reduit-description">Ex: Pour les membres de la carte fidélité uniquement.</textarea>
                            </p>

                            <h3>Sponsors</h3>

                            <p>
                                <label for="sponsor">Nom du sponsor: </label><input type="text" name="sponsor" id="sponsor" placeholder="Ex: Sponsor 1" size="30"/>
                            </p>
                            <p>
                                <label for="image">Insérer une image: au format .jpg , .jpeg , .png ou .gif) </label><input type="file" id="image"/>
                            </p>

                            <p><input type="submit" value="Envoyer" class="envoyer"></p>

                        </form>
                    </fieldset>
                </article>
            </section>
        </div>
    </body>
</html>
