<?php
namespace app\subclasses;


use app\classes\MClass;
use app\classes\OMClass;
use app\SuperClass;
use app\Table;

class MOmClass extends SuperClass
{
    /**
     * @inheritdoc
     */
    public function belongs(Table $table)
    {
        return ((new MClass())->belongs($table) && (new OMClass())->belongs($table));
    }

    /**
     * @inheritdoc
     */
    public function getPrompt()
    {
        return 'MOm';
    }
}