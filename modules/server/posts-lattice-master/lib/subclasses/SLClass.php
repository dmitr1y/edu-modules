<?php
namespace app\subclasses;


use app\classes\SClass;
use app\classes\LClass;
use app\SuperClass;
use app\Table;

class SLClass extends SuperClass
{
    /**
     * @inheritdoc
     */
    public function belongs(Table $table)
    {
        return ((new SClass())->belongs($table) && (new LClass())->belongs($table));
    }

    /**
     * @inheritdoc
     */
    public function getPrompt()
    {
        return 'SL';
    }
}