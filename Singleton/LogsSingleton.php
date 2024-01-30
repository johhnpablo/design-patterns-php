<?php

namespace Singleton;

class LogsSingleton
{
    //@var self instance Instância da classe de logs.
    protected static LogsSingleton $instace;

    private function __construct()
    {
        //code
    }
    public function logRecord(array $data) : void
    {
        $nameFile = 'logs.text';
        $previousLogs = [];
        if (filesize($nameFile) > 0) {
            $contentFile =  file_get_contents($nameFile);
            $previousLogs =  json_decode($contentFile, true);
        }
        $previousLogs [] = $data;
        $file = fopen($nameFile, 'w');
        fwrite($file, json_encode($previousLogs));
        fclose($file);
    }

    public static function getInstance(): self
    {
        if (empty(self::$instace)){
            self::$instace = new self();
        }
        return self::$instace;
    }
}

