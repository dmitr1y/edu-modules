<?php
namespace app\classes;

use app\SuperClass;
use app\Table;

class IMClass extends SuperClass
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
        $sets = [];
        for ($i = 0; $i < $count_vector; $i++) {
            if ($vector[$i] == 1) {
                array_push($sets, $i);
            }
        }
        $sets_count = count($sets);
        if ($sets_count < 2) return false;
        for ($i = 0; $i < $count_line; $i++) {
            $k = 0;
            for ($j = 0; $j < $sets_count; $j++) {
                if ($truth_table[$sets[$j]][$i] == 1) {
                    $k++;
                }
            }
            if ($k > 1) return true;
        }
        return false;
    }

    /**
     * @inheritdoc
     */
    public function getPrompt()
    {
        return 'Im';
    }
}