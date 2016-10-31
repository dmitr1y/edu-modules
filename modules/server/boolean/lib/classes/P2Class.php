<?php
    namespace app\classes;

    use app\SuperClass;
    use app\Table;

    class P2Class extends SuperClass
    {
        /**
         * @inheritdoc
         */
        public function belongs(Table $table)
        {
         //   return (!((new SClass())->belongs($table) || (new MClass())->belongs($table) ||
         //       (new T0Class())->belongs($table) || (new T1Class())->belongs($table) ||
         //       (new LClass())->belongs($table)));
              return true;
        }

        /**
         * @inheritdoc
         */
        public function getPrompt()
        {
            return 'P2';
        }
    }	