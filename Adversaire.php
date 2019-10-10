<?php
include_once 'header.php';
require_once 'humans.php';
require_once 'Elfe.php';
$aragon = new humans('Aragon', 400, 150, 200);
$Arathorn = new humans('Arathorn', 180, 300, 100);
$Sam = new humans('Sam', 200, 45, 200);
$legolas = new Elfe('Legolas', 300, 200, 200);
if ($_GET['Choice']==$aragon->getName()){
    echo "<div class= choix>";
    echo "Vous avez choisi"." ".$aragon->name(). " ". "et voici son attaque de "." ".$aragon->getAttak();
    echo"</div>";
}
if ($_GET['Choice']==$Arathorn->getName()){
    echo"<div class= choix>";
    echo "Vous avez choisi"." ".$Arathorn->name(). " ". "et voici son attaque de "." ".$Arathorn->getAttak();
    echo"</div>";
}
if ($_GET['Choice']==$Sam->getName()) {
    echo"<div class= choix>";
    echo "Vous avez choisi" . " " . $Sam->name() . " " . "et voici son attaque de " . " " . $Sam->getAttak();
    echo"</div>";

}
$choix=$_GET['Choice'];
if (!empty($_POST['Submit'])) {
    header('refresh:3; Combat.php?Choice=' . $_GET['Choice'] ."& ". 'ChoiceAdversaire='.$_POST['ChoiceAdversaire']);
}
?>

    <form method="post" action="">
        <h2 class="optionHeros"> Choisi maintenant celui que tu veux battre!</h2>
        <div class="field">
            <div class="control">
                <div class="select is-primary">

                    <select name="ChoiceAdversaire">
                        <option value="Choix">Choisi l'adversaire!</option>
                        <option value="ChoixAra"><?php echo $aragon->getName(); ?></option>
                        <option value="ChoixAratho"><?php echo $Arathorn->getName(); ?></option>
                        <option value="ChoixSamSam"><?php echo $Sam->getName() ;?></option>
                        <option value="ChoixLegolas"><?php echo $legolas->getName() ;?></option>
                    </select>

                </div>
            </div>
        </div>
        <div class="Save">
            <input class="button" type="submit" name="Submit" value="Lance le Combat">
        </div>
    </form>


