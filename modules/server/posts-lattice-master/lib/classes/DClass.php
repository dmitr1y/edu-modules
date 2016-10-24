<?php
namespace app\classes;

use app\SuperClass;
use app\Table;

class DClass extends SuperClass
{
    /**
     * Examples: x+y, 0, 1
     * @inheritdoc
     */
    public function belongs(Table $table)
    {
        if ((new CClass())->belongs($table)) return true;
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

        $rec = function ($available_sets, $i, $k) use ($count_line, $truth_table, &$rec) {
            $count_sets = count($available_sets);
            for ($j = 0; $j < $count_sets; $j++) {
                if ($k < $count_line) {
                    if ($truth_table[$available_sets[$j]][$i] == 1) {
                        $tmp_sets = $available_sets;
                        unset($tmp_sets[$j]);
                        $k = $rec(array_values($tmp_sets), $i + 1, $k + 1);
                    }
                }
            }
            return $k;
        };

        return ($rec($sets, 0, 0) == $count_line);

    }

    /**
     * @inheritdoc
     */
    public function getPrompt()
    {
        return 'D';
    }
}