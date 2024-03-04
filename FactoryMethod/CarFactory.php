<?php
namespace FactoryMethod;
use FactoryMethod\Product\ProductCar;

interface CarFactory
{
    public function createCar(string $carModel) : ProductCar
    {

    }
}
