<?php
namespace app\subclasses;


use app\classes\MClass;
use app\classes\T1Class;
use app\SuperClass;
use app\Table;

class M1Class extends SuperClass
{
    /**
     * @inheritdoc
     */
    public function belongs(Table $table)
    {
        return ((new T1Class())->belongs($table) && (new MClass())->belongs($table));
    }

    /**
     * @inheritdoc
     */
    public function getPrompt()
    {
        return 'M1';
    }
}