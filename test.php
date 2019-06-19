<?php
    phpinfo();
    exec('sh test.sh > /dev/null 2>&1 &');
    // these don't seem to do anything
    // exec('nohup setsid sh test.sh > /dev/null 2>&1 & disown');