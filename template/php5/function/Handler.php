<?php

class Handler
{
    public function handle($_data)
    {
        $_version = phpversion();
        echo 'PHP Version : '. $_version ."\n". 'Data : '. $_data. "\n\n";
    }
}
