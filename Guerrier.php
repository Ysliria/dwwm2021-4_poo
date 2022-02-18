<?php

class Guerrier extends Personnage
{
    /** @var int point d'attaque */
    private int $atk = 10;

    /**
     * @return int
     */
    public function getAtk(): int
    {
        return $this->atk;
    }
}