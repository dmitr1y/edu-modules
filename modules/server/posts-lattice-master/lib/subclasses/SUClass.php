<?php
namespace app\subclasses;


use app\classes\SClass;
use app\classes\UClass;
use app\SuperClass;
use app\Table;

class SUClass extends SuperClass
{
    /**
     * @inheritdoc
     */
    public function belongs(Table $table)
    {
        return ((new SClass())->belongs($table) && (new UClass())->belongs($table));
    }

    /**
     * @inheritdoc
     */
    public function getPrompt()
    {
        return 'SU';
    }
}