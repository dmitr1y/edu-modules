<?php
    namespace app\subclasses;


    use app\classes\LClass;
    use app\subclasses\T01Class;
    use app\SuperClass;
    use app\Table;

    class L01Class extends SuperClass
    {
        /**
         * @inheritdoc
         */
        public function belongs(Table $table)
        {
            return ((new T01Class())->belongs($table) && (new LClass())->belongs($table));
        }

        /**
         * @inheritdoc
         */
        public function getPrompt()
        {
            return 'L01';
        }
    }