<?php
include_once 'header.php';
require_once 'humans.php';
require_once 'Elfe.php';
$aragon = new humans('Aragon', 400, 150, 200);
$Arathorn = new humans('Arathorn', 180, 400, 100);
$Sam = new humans('Sam', 200, 45, 200);
$legolas = new Elfe('Legolas', 300, 200, 200);
if ($_GET['ChoiceAdversaire']=='ChoixAra'){
    echo "<div class= choix>";
    echo "Vous attaquez"." ".$aragon->name(). " ". "avec son attaque de "." ".$aragon->getAttak();
    echo"</div>";
}
if ($_GET['ChoiceAdversaire']=='ChoixAratho'){
    echo"<div class= choix>";
    echo "Vous attaquez"." ".$Arathorn->name(). " ". "avec son attaque de "." ".$Arathorn->getAttak();
    echo"</div>";
}
if ($_GET['ChoiceAdversaire']=='ChoixSamSam'){
    echo"<div class= choix>";
    echo "Vous attaquez" . " " . $Sam->name() . " " . "avec son attaque de " . " " . $Sam->getAttak();
    echo"</div>";

}
if ($_GET['ChoiceAdversaire']=='ChoixLegolas'){
    echo "<div class= choix>";
    echo "Vous attaquez" . " " . $legolas->name() . " " . "avec son attaque de " . " " . $legolas->getAttak();
    echo "</div>";
}
//possibilité de combat  avec perso Arathon
//possibilité une contre Aragon
if ($_GET['Choice']==$Arathorn->getName()& $_GET['ChoiceAdversaire']=='ChoixAra'){
    echo"<div class = choix>";
    $aragon->degat($Arathorn->getAttak());
}
//possibilité 2 contre Sam
if ($_GET['Choice']==$Arathorn->getName()& $_GET['ChoiceAdversaire']=='ChoixSamSam'){
    echo"<div class = choix>";
    $Sam->degat($Arathorn->getAttak());

}
//possibilité 3 contre Legolas
if ($_GET['Choice']==$Arathorn->getName()& $_GET['ChoiceAdversaire']=='ChoixLegolas'){
    echo"<div class = choix>";
    $legolas->degat($Arathorn->getAttak());

}
//possibilité de combat  avec perso aragon
//possibilité une contre Arathon
if ($_GET['Choice']==$aragon->getName()& $_GET['ChoiceAdversaire']=='ChoixAratho'){
    echo"<div class = choix>";
    $Arathorn->degat($aragon->getAttak());
}
//possibilité 2 contre Sam
if ($_GET['Choice']==$aragon->getName()& $_GET['ChoiceAdversaire']=='ChoixSamSam'){
    echo"<div class = choix>";
    $Sam->degat($aragon->getAttak());

}
//possibilité 3 contre Legolas
if ($_GET['Choice']==$aragon->getName()& $_GET['ChoiceAdversaire']=='ChoixLegolas'){
    echo"<div class = choix>";
    $legolas->degat($aragon->getAttak());

}
//possibilité avec sam
//possibilité une contre Arathon
if ($_GET['Choice']==$Sam->getName()& $_GET['ChoiceAdversaire']=='ChoixAratho'){
    echo"<div class = choix>";
    $Arathorn->degat($Sam->getAttak());
}
//possibilité 2 contre aragon
if ($_GET['Choice']==$Sam->getName()& $_GET['ChoiceAdversaire']=='ChoixAra'){
    echo"<div class = choix>";
    $aragon->degat($Sam->getAttak());

}
//possibilité 3 contre Legolas
if ($_GET['Choice']==$Sam->getName()& $_GET['ChoiceAdversaire']=='ChoixLegolas'){
    echo"<div class = choix>";
    $legolas->degat($Sam->getAttak());

}





?>


</body>