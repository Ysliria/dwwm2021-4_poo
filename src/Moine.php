<?php
namespace App;

class Moine extends Personnage
{
    /** @var int points de magie */
    private int $mp = 10;

    /**
     * @return int
     */
    public function getMp(): int
    {
        return $this->mp;
    }
}