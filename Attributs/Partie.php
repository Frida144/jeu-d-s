<?php
//Class Partie
class Partie {
    //ATTRIBUTS
    private Joueur $joueur1;
    private Joueur $joueur2;
    private int $nbrTour;
    private int $scoreJ1;
    private int $scoreJ2;

    //CONSTRUCTEUR
    public function __construct(Joueur $joueur1, Joueur $joueur2, int $nbrTour, int $scoreJ1, int $scoreJ2 ) {
        $this->joueur1 = $joueur1;
        $this->joueur2 = $joueur2;
        $this->nbrTour = $nbrTour;
        $this->scoreJ1 = $scoreJ1;
        $this->scoreJ2 = $scoreJ2;
    }
    //GETTERS et SETTERS
    /**
     * Get the value of Joueur1
     *
     * @return Joueur
     */
    public function getJoueur1(): Joueur {
        return $this->joueur1;
    }

    /**
     * Set the value of Joueur1
     *
     * @param Joueur $joueur1
     *
     * @return self
     */
    public function setJoueur1(Joueur $joueur1): self {
        $this->joueur1 = $joueur1;
        return $this;
    }

    /**
     * Get the value of Joueur2
     *
     * @return Joueur
     */
    public function getJoueur2(): Joueur {
        return $this->joueur2;
    }

    /**
     * Set the value of Joueur2
     *
     * @param Joueur $joueur2
     *
     * @return self
     */
    public function setJoueur2(Joueur $joueur2): self {
        $this->joueur2 = $joueur2;
        return $this;
    }

    /**
     * Get the value of NbrTour
     *
     * @return int
     */
    public function getNbrTour(): int {
        return $this->nbrTour;
    }

    /**
     * Set the value of NbrTour
     *
     * @param int $nbrTour
     *
     * @return self
     */
    public function setNbrTour(int $nbrTour): self {
        $this->nbrTour = $nbrTour;
        return $this;
    }

    /**
     * Get the value of ScoreJ1
     *
     * @return int
     */
    public function getScoreJ1(): int {
        return $this->scoreJ1;
    }

    /**
     * Set the value of ScoreJ1
     *
     * @param int $scoreJ1
     *
     * @return self
      */
    public function setScoreJ1(int $scoreJ1): self {
        $this->scoreJ1 = $scoreJ1;
        return $this;
    }

    /**
      * Get the value of ScoreJ2
      *
      * @return int
      */
    public function getScoreJ2(): int {
        return $this->scoreJ2;
    }

    /**
      * Set the value of ScoreJ2
      *
      * @param int $scoreJ2
      *
      * @return self
      */
    public function setScoreJ2(int $scoreJ2): self {
        $this->scoreJ2 = $scoreJ2;
        return $this;
    }

//METHOD
    //Lance le jeu (5 tours) et affiche le gagnant avec son nom
    public function lancerPartie(): void {
        for ($tour = 1; $tour <= $this->nbrTour; $tour++) {
            $this->joueur1->setvaleurLance($this->joueur1->lancerDes());
            $this->joueur2->setvaleurLance($this->joueur2->lancerDes());
            $lance1 = $this->joueur1->getvaleurLance();
            $lance2 = $this->joueur2->getvaleurLance();

            if ($lance1 > $lance2) {
                $this->scoreJ1 += 2;
            } elseif ($lance1 == $lance2) {
                $this->scoreJ1 += 1;
                $this->scoreJ2 += 1;
            } else {
                $this->scoreJ2 += 2;
            }
            echo "Tour $tour : " . $this->joueur1->getNom() . " fait $lance1, "
                . $this->joueur2->getNom() . " fait $lance2\n";
        }

        if ($this->scoreJ1 == $this->scoreJ2) {
            echo "Égalité avec " . $this->scoreJ1 . " points chacun !\n";
            return;
        }
        $winner = $this->scoreJ1 > $this->scoreJ2 ? $this->joueur1 : $this->joueur2;
        $score = max($this->scoreJ1, $this->scoreJ2);
        echo "Le gagnant est " . $winner->getNom() . " avec " . $score . " points !\n";
    }
}