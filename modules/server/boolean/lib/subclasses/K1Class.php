<?php
    namespace app\subclasses;


    use app\classes\KClass;
    use app\classes\T1Class;
    use app\SuperClass;
    use app\Table;

    class K1Class extends SuperClass
    {
        /**
         * @inheritdoc
         */
        public function belongs(Table $table)
        {
            return ((new T1Class())->belongs($table) && (new KClass())->belongs($table));
        }

        /**
         * @inheritdoc
         */
        public function getPrompt()
        {
            return 'K1';
        }
    }