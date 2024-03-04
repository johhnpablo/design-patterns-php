<?php

namespace FactoryMethod;
use mysql_xdevapi\Exception;
use FactoryMethod\Product\{ProductCar, DodgeCharger, DodgeDart};
class DodgeFactory implements CarFactory
{
    public function createCar(string $carModel ): ProductCar
    {
        if ($carModel == 'chager') {
            return new DodgeCharger();
        } elseif ($carModel == 'dart') {
            return new DodgeDart();
        } else {
            throw new Exception("Modelo de carro\" {$carModel}\" não existe no sistema."  );
        }
    }
}