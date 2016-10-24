<?php
namespace app\subclasses;


use app\classes\MClass;
use app\subclasses\I1mClass;
use app\SuperClass;
use app\Table;

class MI1mClass extends SuperClass
{
    /**
     * @inheritdoc
     */
    public function belongs(Table $table)
    {
        return ((new MClass())->belongs($table) && (new I1mClass())->belongs($table));
    }

    /**
     * @inheritdoc
     */
    public function getPrompt()
    {
        return 'MI1m';
    }
}