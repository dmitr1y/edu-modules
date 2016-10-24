<?php
namespace app\classes;

use app\SuperClass;
use app\Table;

class T1Class extends SuperClass
{
    /**
     * @inheritdoc
     */
    public function belongs(Table $table)
    {
        return (array_pop($table->getVector()) == 1) ? true : false;
    }

    /**
     * @inheritdoc
     */
    public function getPrompt()
    {
        return 'T1';
    }
}