<?php
    namespace app\subclasses;


    use app\classes\LClass;
    use app\classes\T1Class;
    use app\SuperClass;
    use app\Table;

    class L1Class extends SuperClass
    {
        /**
         * @inheritdoc
         */
        public function belongs(Table $table)
        {
            return ((new T1Class())->belongs($table) && (new LClass())->belongs($table));
        }

        /**
         * @inheritdoc
         */
        public function getPrompt()
        {
            return 'L1';
        }
    }