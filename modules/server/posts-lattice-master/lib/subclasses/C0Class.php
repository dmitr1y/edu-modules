<?php
namespace app\subclasses;


use app\classes\T0Class;
use app\classes\CClass;
use app\SuperClass;
use app\Table;

class C0Class extends SuperClass
{
    /**
     * @inheritdoc
     */
    public function belongs(Table $table)
    {
        return ((new CClass())->belongs($table) && (new T0Class())->belongs($table));
    }

    /**
     * @inheritdoc
     */
    public function getPrompt()
    {
        return 'C0';
    }
}