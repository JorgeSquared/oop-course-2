<?php

class BattleResult
{
    private bool $usedJediPower;

    private Ship $winningShip;

    private Ship $losingShip;

    public function __construct(bool $usedJediPower, Ship $winningShip = null, Ship $losingShip = null)
    {
        $this->usedJediPower = $usedJediPower;
        $this->winningShip = $winningShip;
        $this->losingShip = $losingShip;
    }

    public function getWinningShip(): Ship
    {
        return $this->winningShip;
    }

    public function getLosingShip(): Ship
    {
        return $this->losingShip;
    }

    public function wereJediPowersUsed(): bool
    {
        return $this->usedJediPower;
    }

    public function isThereAWinner()
    {
        return $this->getWinningShip() !== null;
    }
}