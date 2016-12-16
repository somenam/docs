<?php

class Db
{

    public $db = null;
    private $result = null;

    // Подключение к базе
    public function __construct()
    {
        
        $config = include ROOT.'/config/db.php';
        //var_dump($config);exit;
        $this->db = new mysqli($config['host'], $config['username'], $config['password'], $config['dbname']);
        $this->db->set_charset("utf8");
    }

    // Обработка запроса
    public function query($query)
    {
        if (!$this->db) {
            return false;
        }

        if (is_object($this->result)) {
            $this->result->free();
        }

        $this->result = $this->db->query($query);

        // Возврат данных
        $data = false;
        if (is_object($this->result)) {
            while ($row = $this->result->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        } else if ($this->result == FALSE) {
            return false;
        } else {
            return $this->db->affected_rows;
        }
    }

    public function escape_string($text)
    {
        return $this->db->real_escape_string($text);
    }

}
