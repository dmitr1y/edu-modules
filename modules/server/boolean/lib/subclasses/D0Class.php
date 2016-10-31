<?php
    namespace app\subclasses;


    use app\classes\T0Class;
    use app\classes\DClass;
    use app\SuperClass;
    use app\Table;

    class D0Class extends SuperClass
    {
        /**
         * @inheritdoc
         */
        public function belongs(Table $table)
        {
            return ((new DClass())->belongs($table) && (new T0Class())->belongs($table));
        }

        /**
         * @inheritdoc
         */
        public function getPrompt()
        {
            return 'D0';
        }
    }