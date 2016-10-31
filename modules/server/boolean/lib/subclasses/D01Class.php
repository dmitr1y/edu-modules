<?php
    namespace app\subclasses;


    use app\classes\DClass;
    use app\subclasses\T01Class;
    use app\SuperClass;
    use app\Table;

    class D01Class extends SuperClass
    {
        /**
         * @inheritdoc
         */
        public function belongs(Table $table)
        {
            return ((new T01Class())->belongs($table) && (new DClass())->belongs($table));
        }

        /**
         * @inheritdoc
         */
        public function getPrompt()
        {
            return 'D01';
        }
    }