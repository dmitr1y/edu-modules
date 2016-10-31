<?php
    namespace app\subclasses;


    use app\classes\LClass;
    use app\classes\T0Class;
    use app\SuperClass;
    use app\Table;

    class L0Class extends SuperClass
    {
        /**
         * @inheritdoc
         */
        public function belongs(Table $table)
        {
            return ((new LClass())->belongs($table) && (new T0Class())->belongs($table));
        }

        /**
         * @inheritdoc
         */
        public function getPrompt()
        {
            return 'L0';
        }
    }