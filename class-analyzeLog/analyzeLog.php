<?php

class analyzeLog
{

    public $type;
    public $log;
    public $errorCodeCounts;
    /**
     * class analyzeLog
     *
     * @param string $type ['apache', 'mysql']
     * @param string $log ['/your/log/location/file.log']
     * @param int $errorCodeCounts
     */
    public function __construct($type, $log)
    {
        $this->log = file_get_contents($log);
        $this->type = $type;
        if ($type == 'apache' || $type == 'php') {
            preg_match_all('/AH\d{5}/', $this->log, $matches);
            $this->errorCodeCounts = array_count_values($matches);
        } elseif ($type == 'mysql') {
            //TODO
        }
    }

    public function showMostCommon()
    {

    }

    public function showFatal()
    {

    }

}