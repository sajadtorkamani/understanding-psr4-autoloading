<?php

namespace App\Utils;

class Logger
{
    public function info(string $msg): void
    {
        echo "INFO: $msg";
    }

    public function error(string $msg): void
    {
        echo "ERROR: $msg";
    }
}
