<?php
namespace app\subclasses;


use app\classes\DClass;
use app\classes\T1Class;
use app\SuperClass;
use app\Table;

class D1Class extends SuperClass
{
    /**
     * @inheritdoc
     */
    public function belongs(Table $table)
    {
        return ((new T1Class())->belongs($table) && (new DClass())->belongs($table));
    }

    /**
     * @inheritdoc
     */
    public function getPrompt()
    {
        return 'D1';
    }
}