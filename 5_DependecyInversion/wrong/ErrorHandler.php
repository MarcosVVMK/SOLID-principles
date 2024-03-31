<?php

class ErrorHandler
{
    public function error($errno, $errstr, $errfile, $errline)
    {
        $this->log('Error: ' . $errstr);
    }

    public function exception(Exception  $exception)
    {
        $this->log('Error: ' . $exception->getMessage());
    }

    public function log()
    {
        //... write error to file
    }
}