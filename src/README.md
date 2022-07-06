# laravel extension transfer

提供给数据传输对象使用

````php
     class TestTransfer extends TransferAbstract {
         /**
          * @desc
          * @return array
          */
        protected function toArrayUnderline() : array {
            return ['user_name' => 'jack'];
        }

        /**
         * @desc
         * @return array
         */
        protected function toArrayHump() : array {
            return ['userName' => 'jack'];
        }
     }
````
