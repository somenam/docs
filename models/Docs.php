<?php

class Docs extends Model
{

    public function getlist()
    {
        return $this->db->query("SELECT * FROM `docs`");
    }

    public function getOne($id, $check = FALSE)
    {
        $table = array();
        $doc = $this->db->query("SELECT * FROM docs WHERE id=".$id);
        if(!$check) {
            $table['doc'] = $doc[0];
        }
        
        for ($i = 0; $i < $doc[0]['rows']; $i++) {

            $row = $this->db->query("SELECT cells.id, cells.row, cells.column, items.value FROM cells JOIN items ON cells.item_id = items.id WHERE row=".$i." AND doc_id=".$doc[0]['id']." ORDER BY `column` ASC");
            if ($check) {
                $table['rows'][$i] = $row;
            } else {
                $table['rows'][$i] = $row;
            }
        }
        return $table;
    }
    
    public function getColumns($id)
    {
        $doc = $this->db->query("SELECT * FROM cells JOIN items ON cells.item_id = items.id WHERE doc_id=".$id);
        
       
        return $doc;
    }

    public function update()
    {
        $t = time();
        $arr = explode(",", $_POST['col']);
        $col = $this->db->query("SELECT * FROM `cells` WHERE `doc_id`=".$_POST['id']." AND `row`=".$arr[0]." AND `column`=".$arr[1]);
        $this->db->query("INSERT INTO `items` (`value`,`date`,`cell_id`) VALUES ('".$_POST['text']."',".$t.",".$col[0]['id'].")");
        $last = mysqli_insert_id($this->db->db);
        $this->db->query("UPDATE `cells` SET `item_id`=".$last." WHERE `id`=".$col[0]['id']);
        return TRUE;
    }

    protected function parseCol()
    {
        return explode(",", $_POST['col']);
    }

}
