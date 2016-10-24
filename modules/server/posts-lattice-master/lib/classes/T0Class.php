<?php
namespace app\classes;

use app\SuperClass;
use app\Table;

class T0Class extends SuperClass
{
    /**
     * @inheritdoc
     */
    public function belongs(Table $table)
    {
        return (array_shift($table->getVector()) == 0) ? true : false;
    }

    /**
     * @inheritdoc
     */
    public function getPrompt()
    {
        return 'T0';
    }
}