<?php

namespace Johnpablo\DesignPatternsPhp\Prototype;

class BookPhpPrototype extends BookPrototype
{
    public function __construct()
    {
        $this->setSubject('PHP');
    }

    public function __clone()
    {
        echo "Livro PHP Clonado \n";
    }
}
