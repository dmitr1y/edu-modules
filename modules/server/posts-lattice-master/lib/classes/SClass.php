<?php
namespace app\classes;

use app\SuperClass;
use app\Table;

class SClass extends SuperClass
{
    /**
     * @inheritdoc
     */
    public function belongs(Table $table)
    {
        $tmp_vector = array_reverse(array_map(function ($val) {
            return ($val + 1) % 2;
        }, $table->getVector()));
        return ($tmp_vector == $table->getVector()) || (new CClass())->belongs($table);


    }

    /**
     * @inheritdoc
     */
    public function getPrompt()
    {
        return 'S';
    }
}