<?php
    namespace app\subclasses;


    use app\classes\UClass;
    use app\subclasses\T01Class;
    use app\SuperClass;
    use app\Table;

    class U01Class extends SuperClass
    {
        /**
         * @inheritdoc
         */
        public function belongs(Table $table)
        {
            return ((new T01Class())->belongs($table) && (new UClass())->belongs($table));
        }

        /**
         * @inheritdoc
         */
        public function getPrompt()
        {
            return 'U01';
        }
    }