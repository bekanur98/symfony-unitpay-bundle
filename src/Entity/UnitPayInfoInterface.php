<?php


namespace ActionM\UnitPayBundle\Entity;


interface UnitPayInfoInterface
{
    const STATE_APPROVED = 1;
    const STATE_APPROVING = 2;
    const STATE_CANCELED = 3;
    const STATE_EXPIRED = 4;
    const STATE_FAILED = 5;
    const STATE_NEW = 6;

    //Get current state of payment
    public function getState(): int;

    //Get additional info of payment
    public function getAdditionalInfo(): array;

}