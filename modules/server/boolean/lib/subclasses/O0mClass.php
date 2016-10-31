<?php
    namespace app\subclasses;


    use app\classes\OMClass;
    use app\classes\T0Class;
    use app\SuperClass;
    use app\Table;

    class O0mClass extends SuperClass
    {
        /**
         * @inheritdoc
         */
        public function belongs(Table $table)
        {
            return ((new OMClass())->belongs($table) && (new T0Class())->belongs($table));
        }

        /**
         * @inheritdoc
         */
        public function getPrompt()
        {
            return 'O0m';
        }
    }