# WTF is going on with exec() in my php-fpm docker container

```docker-compose up``` and going to http://localhost:8080/test.php will run ```exec('sh test.sh > /dev/null 2>&1 &');```
The log will show something like this:
~~~
fpm_1  | [19-Jun-2019 20:05:26] ALERT: oops, unknown child (578) exited with code 0. Please open a bug report (https://bugs.php.net).
~~~
It is not a bug - https://bugs.php.net/bug.php?id=71989

Running exec() jobs like this works for now if you don't mind the warning.
These exec() processes are childen of the php-fpm master process. They don't block the worker or die with it.

But you probably should use a [job queue](https://www.google.com/search?q=php+job+queue).
