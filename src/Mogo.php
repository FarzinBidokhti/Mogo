<?php

namespace Synon\Mogo;

class Mogo
{
    private $path;
    private $host;
    private $dbName;
    private $userName;
    private $password;

    public function __construct($host, $userName, $password, $dbName, $fileName)
    {
        $this->host     = $host;
        $this->path     = dirname(__FILE__) . '/' . $fileName . '.sql';
        $this->dbName   = $dbName;
        $this->userName = $userName;
        $this->password = $password;
    }

    public function export()
    {
        exec("mysqldump --user={$this->userName} --password={$this->password} --host={$this->host} {$this->dbName} --result-file={$this->path} 2>&1", $output);

        if(sizeof($output) > 0){
            return var_dump($output);
        }

        return "The $this->dbName exported succesfully :) \n";
    }
}
