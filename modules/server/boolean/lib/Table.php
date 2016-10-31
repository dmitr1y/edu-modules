<?php
    namespace app;

    use app\classes\CClass;
    use app\classes\DClass;
    use app\classes\IInfClass;
    use app\classes\IMClass;
    use app\classes\KClass;
    use app\classes\LClass;
    use app\classes\MClass;
    use app\classes\OInfClass;
    use app\classes\OMClass;
    use app\classes\P2Class;
    use app\classes\SClass;
    use app\classes\T1Class;
    use app\classes\T0Class;
    use app\classes\UClass;
    use app\subclasses\C0Class;
    use app\subclasses\C1Class;
    use app\subclasses\D01Class;
    use app\subclasses\D0Class;
    use app\subclasses\D1Class;
    use app\subclasses\I1mClass;
    use app\subclasses\K01Class;
    use app\subclasses\K0Class;
    use app\subclasses\K1Class;
    use app\subclasses\L01Class;
    use app\subclasses\L0Class;
    use app\subclasses\L1Class;
    use app\subclasses\M01Class;
    use app\subclasses\M0Class;
    use app\subclasses\M1Class;
    use app\subclasses\MI1mClass;
    use app\subclasses\MImClass;
    use app\subclasses\MO0mClass;
    use app\subclasses\MOmClass;
    use app\subclasses\MUClass;
    use app\subclasses\O0mClass;
    use app\subclasses\S01Class;
    use app\subclasses\SLClass;
    use app\subclasses\SMClass;
    use app\subclasses\SUClass;
    use app\subclasses\T01Class;
    use app\subclasses\U01Class;
    use app\subclasses\U0Class;
    use app\subclasses\U1Class;

    class Table
    {
        /**
         * @var array of values
         */
        private $vector;

        /**
         * @var array
         */
        private $truth_table;

        /**
         * @param array $vector
         */
        public function __construct(array $vector) {
            $this->setVector($vector);
        }

        /**
         * @param array $vector
         */
        public function setVector(array $vector) {
            $this->vector = $vector;
        }

        /**
         * @return array
         */
        public function getVector() {
            return $this->vector;
        }

        /**
         * @param array $table
         */
        public function setTruthTable(array $table) {
            $this->truth_table = $table;
        }

        /**
         * @return array
         */
        public function getTruthTable() {
            if(!isset($this->truth_table)) {
                $this->createTable();
            }
            return $this->truth_table;
        }

        /**
         * Creates table by vector
         */
        private function createTable()
        {
            $vars = 0;
            $tmp = 1;
            while ($tmp < count($this->vector)) {
                $tmp *= 2;
                $vars++;
            }
            $table = [];
            for ($i = 0; $i < $tmp; $i++) {
                $str = str_split(decbin($i));
                while (count($str) < $vars) {
                    array_unshift($str, '0');
                }
                array_push($table, $str);
            }
            $this->truth_table = $table;
        }

        /**
         * @return array
         */
        public function belongsAll()
        {
            $classes = [
                new T0Class(),
                new T1Class(),
                new MClass(),
                new LClass(),
                new SClass(),
                new P2Class(),
                new DClass(),
                new KClass(),
                new OInfClass(),
                new IInfClass(),
                new UClass(),
                new CClass(),
                new OMClass(),
                new IMClass(),
                new T01Class(),
                new C0Class(),
                new C1Class(),
                new D0Class(),
                new D1Class(),
                new D01Class(),
                new I1mClass(),
                new K0Class(),
                new K1Class(),
                new K01Class(),
                new L0Class(),
                new L1Class(),
                new L01Class(),
                new M0Class(),
                new M1Class(),
                new M01Class(),
                new MI1mClass(),
                new MImClass(),
                new MO0mClass(),
                new MOmClass(),
                new MUClass(),
                new O0mClass(),
                new S01Class(),
                new SLClass(),
                new SMClass(),
                new SUClass(),
                new T01Class(),
                new U0Class(),
                new U1Class(),
                new U01Class()
            ];

            $belongs_table = [];

            foreach ($classes as $class) {
                /**
                 * @var SuperClass $class
                 */
                $belongs_table[$class->getPrompt()] = $class->belongs($this) ? '+' : '-';
            }
            return $belongs_table;
        }
    }