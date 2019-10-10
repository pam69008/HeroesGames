<?php
include_once 'header.php';
require_once 'humans.php';
require_once 'Elfe.php';
$date = date('d-m-Y');
$aragon = new humans('Aragon', 400, 150, 200);
$Arathorn = new humans('Arathorn', 180, 300, 100);
$Sam = new humans('Sam', 200, 45, 200);
 if (!empty($_POST['SubmitInput'])){
   header('Location: Adversaire.php?Choice=' . $_POST['Choice']);

}
?>
<html xmlns="http://www.w3.org/1999/html">
    <h2> Bienvenue dans l'arène opposant différentes races</h2>
    <p class="Intro">Bienvenue à toi , aujourd'hui le  <?php echo $date;?> vous allez accéder à
        differents combats et c'est à vous de les génerer!</p>
    <form action="index.php" method="post">
        <h2 class="optionHeros"> Choisi ici ton Héros!</h2>
        <div class="field">
            <div class="control">
                <div class="select is-primary">
                    <select name =" Choice">
                        <option name="Choix">Choisi ton Héro!</option>
                        <option name="ChoixAragon"><?php echo $aragon->getName(); ?></option>
                        <option name="ChoixArathorn"><?php echo $Arathorn->getName(); ?></option>
                        <option name="ChoixSam"><?php echo $Sam->getName() ?></option>
                    </select>
                </div>
            </div>
        </div>
        <div class="Save">
            <input class="button" type="submit" name="SubmitInput" value="Sauvegarde ton héros" >
        </div>
    </form>
    </body>
    </html>


