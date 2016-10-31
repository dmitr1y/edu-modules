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
            if ((new CClass())->belongs($table)) return true;
            $vector = $table->getVector();
            $count_vector = count($vector);
            $truth_table = $table->getTruthTable();
            $count_line = count($truth_table[0]);
            
            for ($i = 0; $i < $count_line; $i++) {
                $eq = 0;
                $noeq = 0;
                for ($j = 0; $j < $count_vector; $j++) {
                    if ($vector[$j] == $truth_table[$j][$i]) {
                        $eq++;
                    } else { 
                        $noeq++; 
                    }
                }
//echo '<pre>'; var_dump($k, $count_vector);
                if ($eq == $count_vector || $noeq == $count_vector) return true;
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