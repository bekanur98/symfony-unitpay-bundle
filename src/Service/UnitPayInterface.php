<?php


namespace ActionM\UnitPayBundle\Service;


interface UnitPayInterface
{
    public function getName(): string;

    //Get info of payments
    public function getPaymentInfo(): UnitPayInterface;

}