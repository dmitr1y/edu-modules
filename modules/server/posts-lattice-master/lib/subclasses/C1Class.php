<?php
namespace app\subclasses;


use app\classes\CClass;
use app\classes\T1Class;
use app\SuperClass;
use app\Table;

class C1Class extends SuperClass
{
    /**
     * @inheritdoc
     */
    public function belongs(Table $table)
    {
        return ((new T1Class())->belongs($table) && (new CClass())->belongs($table));
    }

    /**
     * @inheritdoc
     */
    public function getPrompt()
    {
        return 'C1';
    }
}