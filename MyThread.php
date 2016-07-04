<?php

class MyThread extends \Thread
{
    public function run()
    {
        register_shutdown_function(function () {
            if (count(error_get_last())) {
                var_dump(error_get_last());
            }
        });
        
        var_dump(MyClass::$data); // this should print the array also but prints NULL
    }
}
