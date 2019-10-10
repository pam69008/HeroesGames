<?php

class humans
{
    /**propriété de l'humain
     * *
     * */
    private $name;
    private $attaque;
    private $defense;
    private $vie;

    public function __construct(string $name, int $attaque, int $defense, int $vie)
    {
        $this->name = $name;
        $this->attaque = $attaque;
        $this->defense = $defense;
        $this->vie = $vie;
    }

    /** declarer le nom du personnage */

    public function name()
    {
        return $this->name;
    }

    public function getName()
    {
        return $this->name;
    }

    /** fonction attaque */

    public function getAttak()
    {
        return $this->attaque;
    }

    /** fonction degat attaque  */
    public function degat($attak)
    {
        $life = $this->GetVie();
        $def = $this->GetBouclier();
        if ($attak < $def) {
            $def = $this->SetBouclier($def - $attak);

        } else {
            $attak = $attak - $def;
            $this->SetBouclier(0);
            $this->SetVie($life - $attak);
        }
        if ($this->vie <= 0) {
            $this->mort($this->vie);
        } else {

            echo $this->name . " " . " Apres l'attaque son bouclier est de : " . $this->defense . " et une vie de : " . $this->vie." " . $this->name. ' à besoin de se régénerer';
            return $this;
        }
    }

    /**fonction defense */
    public function GetBouclier()
    {
        return $this->defense;

    }

    public function SetBouclier($bouclier)
    {
        $this->defense = $bouclier;
        return $this;
    }
/** Vie  */
    public function SetVie($life)
    {
        $this->vie = $life;
        return $this;
    }

    public function GetVie()
    {
        return $this->vie;
    }

    /**fonction pour savoir si le personnage est dead */

    public function mort($life)
    {
        if ($life <= 0) {
            echo "$this->name est mort";
        } else {
            echo "$this->name à besoin de se régénerer";
        }
    }

}

