<?php
namespace app\subclasses;


use app\classes\MClass;
use app\classes\UClass;
use app\SuperClass;
use app\Table;

class MUClass extends SuperClass
{
    /**
     * @inheritdoc
     */
    public function belongs(Table $table)
    {
        return ((new MClass())->belongs($table) && (new UClass())->belongs($table));
    }

    /**
     * @inheritdoc
     */
    public function getPrompt()
    {
        return 'MU';
    }
}