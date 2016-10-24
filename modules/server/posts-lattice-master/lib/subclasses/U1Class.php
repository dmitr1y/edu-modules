<?php
namespace app\subclasses;


use app\classes\UClass;
use app\classes\T1Class;
use app\SuperClass;
use app\Table;

class U1Class extends SuperClass
{
    /**
     * @inheritdoc
     */
    public function belongs(Table $table)
    {
        return ((new T1Class())->belongs($table) && (new UClass())->belongs($table));
    }

    /**
     * @inheritdoc
     */
    public function getPrompt()
    {
        return 'U1';
    }
}