<?php
    namespace app\subclasses;


    use app\classes\T0Class;
    use app\classes\MClass;
    use app\SuperClass;
    use app\Table;

    class M0Class extends SuperClass
    {
        /**
         * @inheritdoc
         */
        public function belongs(Table $table)
        {
            return ((new MClass())->belongs($table) && (new T0Class())->belongs($table));
        }

        /**
         * @inheritdoc
         */
        public function getPrompt()
        {
            return 'M0';
        }
    }