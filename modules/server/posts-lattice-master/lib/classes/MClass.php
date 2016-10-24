<?php
namespace app\classes;

use app\SuperClass;
use app\Table;

class MClass extends SuperClass
{
    /**
     * @inheritdoc
     */
    public function belongs(Table $table)
    {
        $vector = $table->getVector();
        $count = count($vector);
        for ($i = 0; $i < $count; $i++) {
            if ($vector[$i] == 1) {
                for ($j = $i + 1; $j < $count; $j++) {
                    if ($vector[$j] == 0) {
                        return false;
                    }
                }
                return true;
            }
        }
        return true;
    }

    /**
     * @inheritdoc
     */
    public function getPrompt()
    {
        return 'M';
    }
}