<?php
    namespace app\classes;

    use app\SuperClass;
    use app\Table;

    class LClass extends SuperClass
    {
        /**
         * @inheritdoc
         */
        public function belongs(Table $table)
        {
            $values = [];
            $truth_table = $table->getTruthTable();
            $vector = $table->getVector();
            $count_vector = count($vector);
            $count_line = count($truth_table[0]);
            for ($i = 0; $i < $count_vector; $i++) {

                $line_values = [];
                array_push($line_values, '0');
                for ($t = 0; $t < $count_line; $t++) {
                    for ($j = 0; $j < $count_line; $j++) {
                        if ($truth_table[$i][$j] == '1') {
                            $k = $j+1;
                            $tmp_key = (string)$k;
                            while ((strlen($tmp_key) != ($t + 1)) && ($k != $count_line)) {
                                if ($truth_table[$i][$k] == '1') {
                                    $tmp_key .= ($k+1);
                                }
                                $k++;
                            }
                            if (!in_array($tmp_key, $line_values))
                                array_push($line_values, $tmp_key);
                        }
                    }
                }

                $find_key = '0';
                $find_val = 0;
                $tmp_val = 0;
                foreach ($line_values as $value) {
                    if (!array_key_exists($value, $values)) {
                        $find_key = $value;
                    } else {
                        $tmp_val += (int)$values[$value];
                    }
                }

                if ($tmp_val % 2 != (int)$vector[$i]) {
                    $find_val = 1;
                }

                $values[$find_key] = $find_val;
            }
            foreach ($values as $key => $value) {
                if ($key > 10 && $value == 1)
                    return false;
            }
            return true;
        }

        /**
         * @inheritdoc
         */
        public function getPrompt()
        {
            return 'L';
        }
    }