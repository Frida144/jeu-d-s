<?php
//Class Des 
class Des {
    //ATTRIBUTS
    private ?int $nbrface;
    private ?int $score;

    //CONSTRUCTEUR
    public function __construct(?int $nbrface = null, ?int $score = null) {
        $this->nbrface = $nbrface;
        $this->score = $score;
}
    //GETTERS et SETTERS
    public function getNbrface(): ?int {
        return $this->nbrface;
    }
    public function setNbrface(?int $newNbrface):self{
        $this->nbrface = $newNbrface;
        return $this;
    }
    /**
     * Get the value of score
     *
     * @return int
     */
    public function getScore(): int {
        return $this->score;
    }
    /**
     * Set the value of score
     *
     * @param int $score
     *
     * @return self
     */
    public function setScore(int $score): self {
        $this->score = $score;
        return $this;
    }
    //METHOD
    //Retourne un nombre aléatoire entre 1 et 6 (inclus)
    public function lancer(): int {
        return rand(1, 6);
    }


}
