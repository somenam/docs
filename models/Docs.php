<?php

class Docs extends Model
{

    public function getlist()
    {
        return $this->db->query("SELECT * FROM `docs`");
    }

    public function getOne($id)
    {
        $table = array();
        $doc = $this->db->query("SELECT * FROM `docs` WHERE `id`=".$id);
        $table['doc'] = $doc[0];
        for ($i = 0; $i < $doc[0]['rows']; $i++) {
            $table['rows'][$i] = $this->db->query("SELECT * FROM `cells` WHERE `row`=".$i." AND `doc_id`=".$doc[0]['id']." ORDER BY `column` ASC");
        }
        return $table;
    }

}
