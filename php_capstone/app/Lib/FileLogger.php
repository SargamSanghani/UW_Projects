<?php

namespace App\Lib;
use App\Lib\Interfaces\ILogger;

class FileLogger implements ILogger {

    private $fh;

    public function __construct($fh) {
        $this->fh = $fh;
    }

    public function write($event) {

        fputs($this->fh, $event . "\n");

        fclose($this->fh);

    }

}