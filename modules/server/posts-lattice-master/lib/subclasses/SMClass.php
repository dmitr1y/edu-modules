<?php
namespace app\subclasses;


use app\classes\SClass;
use app\classes\MClass;
use app\SuperClass;
use app\Table;

class SMClass extends SuperClass
{
    /**
     * @inheritdoc
     */
    public function belongs(Table $table)
    {
        return ((new SClass())->belongs($table) && (new MClass())->belongs($table));
    }

    /**
     * @inheritdoc
     */
    public function getPrompt()
    {
        return 'SM';
    }
}