<form methode"post" action " ">
    <label> Email </label>
    <input type="email" name="email" />
    <label> Mot de passe</label>
    <input type="password" name="pass" />
    <input type="submit" value="envoyer" />
</form>

<?php 
    if(isset($_POST['email']))
        {
        if (isset($_post['pass']))
        
        {
        echo "ok";}
        else{
        echo "mot de passe invalide";
            }
        } 
    else
        {
            echo "email invalid";
        }
    ?>