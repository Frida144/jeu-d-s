<?php
//Class Joueur 
class Joueur {
    //ATTRIBUTS
    private ?string $nom;
    private ?int $valeurLance;
    private ?Des $des;

    //CONSTRUCTEUR
    public function __construct( ?string $nom = null, ?int $valeurLance = null, ?Des $des = null) {
        $this->nom = $nom;
        $this->valeurLance = $valeurLance;
        $this->des = $des;
    }
    //GETTERS et SETTERS
    public function getNom():string{
        return $this->nom;
    }
    public function setNom(string $newNom):self{
        $this->nom = $newNom;
        return $this;
    }

    /**
     * Get the value of valeurLance
     *
     * @return ?int
     */
    public function getvaleurLance(): ?int {
        return $this->valeurLance;
    }
    /**
     * Set the value of valeurLance
     *
     * @param ?int $newValeurLance
     * @return self
     */
    public function setvaleurLance(?int $newValeurLance):self{
        $this->valeurLance = $newValeurLance;
        return $this;
    }
    
    /**
     * Get the value of Des
     *
     * @return Des
     */
    public function getWeapon(): Des {
        return $this->des;
    }

    /**
     * Set the value of des
     *
     * @param Des $des
     *
     * @return self
     */
    public function setWeapon(Des $des): self {
        $this->des = $des;
        return $this;
    }
    //METHOD
    //Une méthode lancerDes() -> appeler la méthode lancer()de la classe Des.
    public function lancerDes(): int {
        return $this->des->lancer();
    }
}
