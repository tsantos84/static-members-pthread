<?php

require 'MyClass.php';
require 'MyThread.php';

var_dump(MyClass::$data); // prints the array properly

$thread = new MyThread();

$thread->start() && $thread->join();
