<?php
namespace app\subclasses;


use app\classes\T0Class;
use app\classes\KClass;
use app\SuperClass;
use app\Table;

class K0Class extends SuperClass
{
    /**
     * @inheritdoc
     */
    public function belongs(Table $table)
    {
        return ((new KClass())->belongs($table) && (new T0Class())->belongs($table));
    }

    /**
     * @inheritdoc
     */
    public function getPrompt()
    {
        return 'K0';
    }
}