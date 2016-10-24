<?php
namespace app\subclasses;


use app\classes\KClass;
use app\subclasses\T01Class;
use app\SuperClass;
use app\Table;

class K01Class extends SuperClass
{
    /**
     * @inheritdoc
     */
    public function belongs(Table $table)
    {
        return ((new KClass())->belongs($table) && (new T01Class())->belongs($table));
    }

    /**
     * @inheritdoc
     */
    public function getPrompt()
    {
        return 'K01';
    }
}