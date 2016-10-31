<?php
    namespace app\subclasses;


    use app\classes\MClass;
    use app\subclasses\T01Class;
    use app\SuperClass;
    use app\Table;

    class M01Class extends SuperClass
    {
        /**
         * @inheritdoc
         */
        public function belongs(Table $table)
        {
            return ((new T01Class())->belongs($table) && (new MClass())->belongs($table));
        }

        /**
         * @inheritdoc
         */
        public function getPrompt()
        {
            return 'M01';
        }
    }