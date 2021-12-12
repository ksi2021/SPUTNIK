<?php

class DB
{
    private $config;
    private $dbconn3;
    public function __construct()
    {
        $this->config = json_decode(file_get_contents('config.json'));
        $this->dbconn3 = pg_connect("host={$this->config->host} port=5432 dbname={$this->config->dbname}
                                     user={$this->config->username} password={$this->config->password}");
    }

    public function getData()
    {
        $result = pg_query($this->dbconn3, 'SELECT * FROM "Numbers"');
        return pg_fetch_all($result);
    }

    public function addData($data)
    {
        if($this->getData())
        {
            if(count($this->getData()) >= 100)
            {
                return 0;
            }
        }
        $result = pg_query($this->dbconn3, 'INSERT INTO "Numbers" (number) VALUES('.$data.')');
    }
}