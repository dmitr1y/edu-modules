<?php
    namespace app\subclasses;


    use app\classes\T0Class;
    use app\classes\UClass;
    use app\SuperClass;
    use app\Table;

    class U0Class extends SuperClass
    {
        /**
         * @inheritdoc
         */
        public function belongs(Table $table)
        {
            return ((new UClass())->belongs($table) && (new T0Class())->belongs($table));
        }

        /**
         * @inheritdoc
         */
        public function getPrompt()
        {
            return 'U0';
        }
    }