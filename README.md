Static Members
==============

This project reproduces the issue when using static members in PHP threads.
For some reason, the static members of a class is not accessible when accessed
in thread context (e.g: \Thread::run() method).

## Sample Code

```php
require 'MyClass.php';
require 'MyThread.php';

var_dump(MyClass::$data); // prints the array properly

$thread = new MyThread();

$thread->start() && $thread->join();
```

## Building the PHP Docker Images

Run the below code to create an image with PHP 5.6 with pthreads enabled.

    $ docker build --rm -t pthreads:php56 .

Run the below code to create an image with PHP 7 with pthreads enabled.

    $ docker build --rm -f Dockerfile.php7 -t pthreads:php7 .

## Running the sample code

    $ ./php56 sample.php

    $ ./php7 sample.php

## Issue tracking

* [GitHub](https://github.com/composer/composer/issues/5482) - As the issues was found using the composer autoloader inside the thread
* [PHP Bugs](https://bugs.php.net/bug.php?id=72528)
