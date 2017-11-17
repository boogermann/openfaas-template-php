<?php

class Handler
{
    public function handle(string $_data): void {
        $_version = phpversion();
        echo 'PHP Version : '. $_version ."\n". 'Data : '. $_data. "\n\n";
    }
}
