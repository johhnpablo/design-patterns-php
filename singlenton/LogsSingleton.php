<?php

namespace Singleton;

class LogsSingleton
{
    //@var self $instancia Instância da classe de logs.
    protected static LogsSingleton $instancia;

    public function gravarLog(array $data) : void
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
}