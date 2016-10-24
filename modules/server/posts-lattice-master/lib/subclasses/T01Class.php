<?php
namespace app\subclasses;


use app\classes\T0Class;
use app\classes\T1Class;
use app\SuperClass;
use app\Table;

class T01Class extends SuperClass
{
    /**
     * @inheritdoc
     */
    public function belongs(Table $table)
    {
        return ((new T1Class())->belongs($table) && (new T0Class())->belongs($table));
    }

    /**
     * @inheritdoc
     */
    public function getPrompt()
    {
        return 'T01';
    }
}