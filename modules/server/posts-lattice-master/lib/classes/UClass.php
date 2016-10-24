<?php
namespace app\classes;

use app\SuperClass;
use app\Table;

class UClass extends SuperClass
{
    /**
     * @inheritdoc
     */
    public function belongs(Table $table)
    {
        $vector = $table->getVector();
        $count_vector = count($vector);
        $truth_table = $table->getTruthTable();
        $count_line = count($truth_table[0]);
        for ($i = 0; $i < $count_line; $i++) {
            $k = 0;
            for ($j = 0; $j < $count_vector; $j++) {
                if ($vector[$j] == $truth_table[$j][$i]) {
                    $k++;
                }
            }
            if ($k == $count_vector) return true;
        }
        return false;
    }

    /**
     * @inheritdoc
     */
    public function getPrompt()
    {
        return 'U';
    }
}