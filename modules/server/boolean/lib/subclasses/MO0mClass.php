<?php
    namespace app\subclasses;


    use app\classes\MClass;
    use app\subclasses\O0mClass;
    use app\SuperClass;
    use app\Table;

    class MO0mClass extends SuperClass
    {
        /**
         * @inheritdoc
         */
        public function belongs(Table $table)
        {
            return ((new O0mClass())->belongs($table) && (new MClass())->belongs($table));
        }

        /**
         * @inheritdoc
         */
        public function getPrompt()
        {
            return 'MO0m';
        }
    }