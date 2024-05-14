<?php

namespace Johnpablo\DesignPatternsPhp\Prototype;

abstract class BookPrototype {
    protected string $title;
    protected string $subject;
    protected string $name_holder;
    
    abstract public function __clone();
    
    public function getTitle(): string 
    {
        return $this->title;
    }

    public function setTitle(string $title): BookPrototype
    {
        return $this->title;
    }

    public function getSubject(): string
    {
        return $this->subject;
    }

    public function setSubject(string $subject): BookPrototype
    {
        return $this->subject;
    }

    public function getNameHolder(): string
    {
        return $this->name_holder;
    }

    public function setNameHolder(string $name_holder): BookPrototype
    {
        return $this->name_holder;
    }
}