<?php

class Docs extends Model
{

    public function getSize()
    {
         return $this->db->query("SELECT * FROM `size`");
    }

}
