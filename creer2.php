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
                        
                        <img src="Icones/information.png" id="information" alt="Informations"/><br/>
                        <h1>Informations</h1>
                        
                        <form method="post" action="traitement.php">
                            <h2>Remplissez:</h2>
                            
                            <h3>L'évènement:</h3>

                            <div id="nom_evenement">
                                <h5>Nom</h5>
                                <div class="label">
                                    <label for="nom">Nom de l'évènement:<strong><abbr title="obligatoire">*</abbr></strong></label>
                                </div>
                                <div class="input">
                                    <input type="text" name="nom" id="nom" placeholder="Ex: Marathon de Paris" size="30" autofocus required/>
                                </div>
                            </div>

                            <div id="date">
                                <h5>Date</h5>
                                <div class="bouton1">
                                    <input type="checkbox" id="date_debut" checked required/><label for="date_debut"> De début<strong><abbr title="obligatoire">*</abbr></strong>:</label>
                                </div>
                                <div class="input">
                                    (Calendrier à coder)
                                </div>
                                <div class="bouton2">
                                    <input type="checkbox" id="date_fin"/><label for="date_fin"> De fin:</label>
                                </div>
                                <div class="input">
                                    (Calendrier à coder)
                                </div>
                            </div>

                            <div id="heure">
                                <h5>Heure</h5>

                                <div class="bouton1">
                                    <input type="checkbox" id="debut" checked required/><label for="debut"> De début:<strong><abbr title="obligatoire">*</abbr></strong></label>
                                </div>
                                <div class="select">
                                    <select name="heures1" id="heures1">
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
                                </div>
                                <div class="bouton2">
                                    <input type="checkbox" id="fin"/><label for="fin"> De fin:</label>
                                </div>
                                <div class="select">
                                    <select name="heures2" id="heures2">
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
                                </div>
                            </div>

                            <div id="concerne">
                                <h5>Public concerné</h5>
                                <div class="label">
                                    <label for="min">Age minimum<strong><abbr title="obligatoire">*</abbr></strong>:</label>
                                </div>
                                <div class="input">
                                    <input type="text" name="min" id="min" id="duree" maxlenght="3" placeholder="Ex: 18" required/><label for="min"> ans</label>
                                </div>
                                <div class="label">
                                    <label for="max">Age maximum:</label>
                                </div>
                                <div class="input">
                                    <input type="text" name="max" id="max" id="duree" maxlenght="3" placeholder="Ex: 122"/><label for="max"> ans</label>
                                </div>
                            </div>

                            <div id="description_evenement">
                                <h5>Description<strong><abbr title="obligatoire">*</abbr></strong></h5>
                                <div class="textarea">
                                    <textarea id="description" name="description" required>A propos de l'organisation de l'évènement ...</textarea>
                                </div>
                            </div>

                            <h3>Le lieu:</h3>

                            <div id="type_lieu">
                                <div class="label">
                                    <label for="type">Type de lieu<strong><abbr title="obligatoire">*</abbr></strong>:</label>
                                </div>
                                <div class="select">
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
                            </div>

                            <div id="nom_lieu">
                                <div class="label">
                                    <label for="lieu">Nom du lieu<strong><abbr title="obligatoire">*</abbr></strong>:</label>
                                </div>
                                <br/>
                                <div class="input">
                                    <input type="text" name="lieu" id="lieu" placeholder="Ex: Rues de Paris" size="30" required/>
                                </div>
                            </div>

                            <div id="adresse_lieu">
                                <h5>Adresse du lieu</h5>
                                <div class="label">
                                    <label for="numero">Numéro d'adresse:</label>
                                </div>
                                <div class="input">
                                    <input type="text" name="numero" id="numero" maxlenght="7" placeholder="Ex: 1" size="30"/>
                                </div>
                                <div class="label">
                                    <label for="adresse">Adresse<strong><abbr title="obligatoire">*</abbr></strong>:</label>
                                </div>
                                <div class="input">
                                    <input type="text" name="adresse" id="adresse" placeholder="Ex: Place de l'opéra" size="30" required/>
                                </div>
                                <div class="label">
                                    <label for="postal">Code postal<strong><abbr title="obligatoire">*</abbr></strong>:</label>
                                </div>
                                <div class="input">
                                    <input type="text" name="postal" id="postal" maxlenght="5" placeholder="Ex: 75009" size="30" required/>
                                </div>
                            </div>

                            <div id="participants">
                                <h5>Capacité d'acceuil</h5>
                                <div class="label">
                                    <label for="partmax">Nombre maximum de participants:</label>
                                </div>
                                <div class="input">
                                    <input type="number" id="partmax" step="1" min="0" max="100000000"/>
                                </div>
                            </div>

                            <h3>Les Tarifs:</h3>


                            <div id="vendeurs">
                                <h5>Vendeurs partenaires</h5>
                                <div class="label">
                                    <label for="nb">Nombre de vendeurs: </label>
                                </div>
                                <div class="input">
                                    <input type="number" id="nb" min="0" max="9"/>
                                </div>
                                <div class="label">
                                    <label for="noms_vendeurs">Noms des vendeurs: </label>
                                </div>
                                <div class="input">
                                    <input type="text" name="noms_vendeurs" id="noms_vendeurs" placeholder="Ex: Vendeur 1, Vendeur 2, ..." size="30"/>
                                </div>
                                <div class="label">
                                    <label for="site">Sites web vendeurs: </label>
                                </div>
                                <div class="input">
                                    <input type="url" id="site" placeholder="Ex: www.sitefactice.fr"/>
                                </div>
                            </div>

                            <div id="type_prix">
                                <h5>Type de prix<strong><abbr title="obligatoire">*</abbr></strong></h5>
                                <div class="bouton4">
                                    <input type="radio" name="prix" id="gratuit" checked/><label for="gratuit"> Gratuit</label>
                                </div>
                                <div class="bouton5">
                                    <input type="radio" name="prix" id="payant"/><label for="payant"> Payant</label>
                                </div>
                            </div>

                            <div id="prix">
                                <h5>Prix<strong><abbr title="obligatoire">*</abbr></strong></h5>
                                <div class="label">
                                    <label for="faible">Prix faible:</label>
                                </div>
                                <div class="input">
                                    <input type="text" name="faible" id="faible" maxlenght="6" placeholder="Ex: 60"/><label for="faible"> €</label>
                                </div>
                                <div class="textarea2">
                                    <textarea id="faible_description" name="faible_description">Description du tarif:
(Ex: A partir de 18 ans.)
                                    </textarea>
                                </div>
                                <div class="label">
                                    <label for="fort">Prix fort:</label>
                                </div>
                                <div class="input">
                                    <input type="text" name="fort" id="fort" maxlenght="6" placeholder="Ex: 40"/><label for="fort"> €</label>
                                </div>
                                <div class="textarea2">
                                    <textarea id="fort_description" name="fort_description">Description du tarif:
(Ex: Jusqu'à 18 ans.)
                                    </textarea>
                                </div>
                            </div>

                            <h3>La galerie:</h3>

                            <div id="images">
                                <h5>Images</h5>
                                <div class="label">
                                    <label for="image">Insérer une image:</label>
                                </div>
                                <div class="input">
                                    <input type="file" name="image" id="image"/>
                                </div>
                                <div class="label2">
                                    <label for"logo">(formats .JPG, .JPEG, .PNG ou .GIF)</label>
                                </div>
                            </div>

                            <div id="videos">
                                <h5>Vidéos</h5>
                                <div class="label">
                                    <label for="video">Insérer une vidéo:</label>
                                </div>
                                <div class="input">
                                    <input type="file" name="video" id="video"/>
                                </div>
                                <div class="label2">
                                    <label for"logo">(formats .AVI, .MOV, .MP4, .MPEG ou .WMV)</label>
                                </div>
                            </div>

                            <div id="musiques">
                                <h5>Musiques</h5>
                                <div class="label">
                                    <label for="musique">Insérer une musique:</label>
                                </div>
                                <div class="input">
                                    <input type="file" name="musique" id="musique"/>
                                </div>
                                <div class="label2">
                                    <label for"logo">(formats .MP3, .ACC, .WMA, ou .OGG)</label>
                                </div>
                            </div>

                            <h3>Les sponsors:</h3>

                            <div id="nom_sponsor">
                                <h5>Noms</h5>
                                <div class="label">
                                    <label for="sponsor">Noms des sponsors:</label>
                                </div>
                                <div class="input">
                                    <input type="text" name="sponsor" id="sponsor" placeholder="Ex: Sponsor 1, Sponsor 2, ..." size="30"/>
                                </div>
                            </div>

                            <div id="image_sponsor">
                                <h5>Logos</h5>
                                <div class="label">
                                    <label for="logo">Insérer un logo:</label>
                                </div>
                                <div class="input">
                                    <input type="file" id="logo"/>
                                </div>
                                <div class="label2">
                                    <label for"logo">(formats .JPG, .JPEG, .PNG ou .GIF)</label>
                                </div>

                            <div class="bouton_envoi">
                                <input type="submit" value="Envoyer" class="envoyer">
                            </div>

                        </form>
                    </fieldset>
                </article>
            </section>
        </div>
    </body>
</html>
