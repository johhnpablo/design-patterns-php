<?php

namespace FactoryMethod;
use FactoryMethod\Product\{ProductCar, TeslaModelS, TeslaModelX}
class TeslaFactory implements CarFactory
{
    public function createCar(string $carModel): ProductCar
    {
        if ($carModel == 'model_x') {
            return new TeslaModelX();
        } else if ($carModel == 'model_s') {
            return new TeslaModelS();
        } else {
            throw	new	\Exception("Modelo	de	carro	\"{$modeloCarro}\"	não	existe	no	sistema.");
    }
}