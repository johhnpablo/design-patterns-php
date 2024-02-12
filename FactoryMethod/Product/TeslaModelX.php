<?php 

namespace FactoryMethod\Product;

class TeslaModelX implements ProductCar
{
    public function acelerar(): void
    {
        echo "Acelerando Tesla modelo X\n";
    }

    public function frear(): void
    {
        echo "Freando Tesla Modelo X\n";
    }
    public function trocarMarcha(): void
    {
        echo"Trocando marcha Tesla Modelo X\n";
    }
}