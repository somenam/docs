<?php

class Docs extends Model
{

    public function getList()
    {
         return $this->db->query("SELECT * FROM `doc`");
    }

}
