<?php
namespace app;

abstract class SuperClass
{
    /**
     * @return string of prompt
     */
    abstract function getPrompt();

    /**
     *
     * @param Table $vector
     * @return bool true if table belongs to this class
     */
    abstract function belongs(Table $vector);
}