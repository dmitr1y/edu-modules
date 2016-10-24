<?php
namespace app\classes;

use app\SuperClass;
use app\Table;

class CClass extends SuperClass
{
    /**
     * @inheritdoc
     */
    public function belongs(Table $table)
    {
        $vector = $table->getVector();
        $count_vector = count($vector);
        $nulls = 0;
        $ones = 0;
        for ($i = 0; $i < $count_vector; $i++) {
            if ($vector[$i] == 0) {
                $nulls++;
            } else {
                $ones++;
            }
        }

        return ($nulls == $count_vector || $ones == $count_vector);
    }

    /**
     * @inheritdoc
     */
    public function getPrompt()
    {
        return 'C';
    }
}