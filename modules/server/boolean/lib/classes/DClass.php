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

            $func = function($vars, $table) use ($count_vector, $vector, &$func){ 
                $ret = true;
                for ($i = 0; $i < $count_vector; $i++) {
                    $check = false;
                    $k = 0;
                        for ($j = 0; $j < $vars; $j++) {
                            if ($table[$i][$j] == 0) $k++;
                        }

                    if (($vector[$i] == 1 && $k == $vars) || ($vector[$i] == 0 && $k < $vars)) {
                        $fail = 0;
                        for ($j = 0; $j < $vars; $j++) {
                            $tmp = $table;
                            // удаляем j столбец
                            for ($m = 0; $m < $count_vector; $m++) {
                                unset($tmp[$m][$j]);
                                $tmp[$m] = array_values($tmp[$m]);
                            }
                            if ($func($vars-1, $tmp)) {
                                return true;
                            } else {
                                $fail++;
                            }
                        }
                        if ($fail == $vars) {
                            $ret = false;
                        }
                    }
                }

                return $ret;
            };
            // var_dump($func($count_line, $truth_table)); exit;

            
            return $func($count_line, $truth_table);

        }

        /**
         * @inheritdoc
         */
        public function getPrompt()
        {
            return 'D';
        }
    }