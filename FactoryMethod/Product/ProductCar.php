<?php 

namespace FactoryMethod\Product;

interface ProductCar 
{
  public function acelerar(): void;
  public function  frear(): void;

  public function trocarMarcha(): void;

}