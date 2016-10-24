<?php
namespace app\subclasses;


use app\classes\MClass;
use app\classes\IMClass;
use app\SuperClass;
use app\Table;

class MImClass extends SuperClass
{
    /**
     * @inheritdoc
     */
    public function belongs(Table $table)
    {
        return ((new MClass())->belongs($table) && (new IMClass())->belongs($table));
    }

    /**
     * @inheritdoc
     */
    public function getPrompt()
    {
        return 'MIm';
    }
}