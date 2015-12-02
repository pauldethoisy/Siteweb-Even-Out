<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Connexion</title>
        
    </head>
    
    <body>
       <?php include("menu.php") ?>
       <?php include("en_tete.php") ?>
    
    <form method="post" action="traitement.php">
            <p>
                <label for="Nom">Nom:</label>
                <input type="text" name="Nom" id="Name"/>
                <br/>
                <label for="Prenom">Prénom:</label>
                <input type="text" name="Prénom" id="Name"/>
                <br/>
                <label for="Date de naissance">Date de naissance:</label>
                <select type="number" name="jour" id="jour" required>
                    <option value="01">01</option>
                    <option value="02">02</option>
                    <option value="03">03</option>
                    <option value="04">04</option>
                    <option value="05">05</option>
                    <option value="06">06</option>
                    <option value="07">07</option>                               <option value="08">08</option>
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
                </select>
                <select type="month" name="mois" id="mois"/ required>
                    <option value="01">janvier</option>
                    <option value="02">février</option>
                    <option value="03">mars</option>
                    <option value="04">avril</option>
                    <option value="05">mai</option>
                    <option value="06">juin</option>
                    <option value="07">juillet</option>
                    <option value="08">août</option>
                    <option value="09">septembre</option>
                    <option value="10">octobre</optio
                    <option value="11">novembre</option>
                    <option value="12">décembre</option>
                </select>
                <select type="number" name="année" id="année"/ required>
                    <option value="1990">1990</option>
                    <option value="1991">1991</option>
                    <option value="1992">1992</option>
                    <option value="1993">1993</option>
                    <option value="1994">1994</option>
                    <option value="1995">1995</option>
                    <option value="1996">1996</option>
                    <option value="1997">1997</option>
                    <option value="1998">1998</option>
                    <option value="1999">1999</option>
                    <option value="2000">2000</option>
                </select>
                </br>    
                <label for="Mail">Mail:</label>
                <input type="email" name="Mail" id="Mail" required/>
                <br/>
                <label for="Identifiant">Identifiant:</label>
                <input type="text" name="Identifiant" id="Identifiant" required/>
                <br/>
                <label for="Mot de passe">Mot de passe:</label>
                <input type="password" name="Mot de passe" id="Mot de passe" required/>
                <br/>
                <label for="Confirmation du mot de passe">Confirmer le mot de passe:</label>
                <input type="password" name="Confirmer le mot de passe" id="Confirmer le mot de passe" required/>
            </p>
            <p>
                <input type="checkbox" name="conditions d'utilisation" id="conditions d'utilisation"/> 
                <label for="conditons d'utilisation">J'accepte les conditions d'utilisations</label>
            </br>
            <input type="submit" value="S'inscrire"/>
            </p>
        </form>
    
    </body>
    
    <?php include("PiedPage.php") ?>
     
</html> 
