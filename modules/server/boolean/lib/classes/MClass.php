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
            $truth_table = $table->getTruthTable();
            $vector = $table->getVector();
            $count_vector = count($vector);
            $count_line = count($truth_table[0]); // кол-во переменных
            for ($i = 0; $i < $count_vector; $i++) {
            	for ($j = $i+1; $j < $count_vector; $j++) {
            		$check = false;
            		$m = 0;
            		for ($k = 0; $k < $count_line; $k++) {
            			if ($truth_table[$i][$k] <= $truth_table[$j][$k]) {
            				$m++;
            			}
            		}
            		if ($m == $count_line){
            			if ($vector[$i] > $vector[$j]){
//var_dump($i, $j, $vector); exit;
                                	return false;	
                                }
            			
            		} 

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