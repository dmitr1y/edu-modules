<?php
    namespace app\subclasses;


    use app\classes\IMClass;
    use app\classes\T1Class;
    use app\SuperClass;
    use app\Table;

    class I1mClass extends SuperClass
    {
        /**
         * @inheritdoc
         */
        public function belongs(Table $table)
        {
            return ((new T1Class())->belongs($table) && (new IMClass())->belongs($table));
        }

        /**
         * @inheritdoc
         */
        public function getPrompt()
        {
            return 'I1m';
        }
    }