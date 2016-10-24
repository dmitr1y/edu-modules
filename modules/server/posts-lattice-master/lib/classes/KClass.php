<?php
namespace app\classes;

use app\SuperClass;
use app\Table;

class KClass extends SuperClass
{
    /**
     * Examples: xy, 0, 1
     * @inheritdoc
     */
    public function belongs(Table $table)
    {
        $sknf = 0;
        $vector = $table->getVector();
        $count = count($vector);
        for ($i = 0; $i < $count; $i++) {
            if ($vector[$i] == 0) {
                $sknf++;
            }
        }
        return ($sknf != 1);
    }

    /**
     * @inheritdoc
     */
    public function getPrompt()
    {
        return 'K';
    }
}