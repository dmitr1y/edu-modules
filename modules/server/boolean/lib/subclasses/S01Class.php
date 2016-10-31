<?php
    namespace app\subclasses;


    use app\classes\SClass;
    use app\subclasses\T01Class;
    use app\SuperClass;
    use app\Table;

    class S01Class extends SuperClass
    {
        /**
         * @inheritdoc
         */
        public function belongs(Table $table)
        {
            return ((new T01Class())->belongs($table) && (new SClass())->belongs($table));
        }

        /**
         * @inheritdoc
         */
        public function getPrompt()
        {
            return 'S01';
        }
    }