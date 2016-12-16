<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DumpController
 *
 * @author Andrey
 */
class DumpController
{

    public function actionIndex()
    {
        global $db;
        //$f = $db->query("INSERT INTO `docs` (`name`,`rows`,`columns`,`descr`) VALUES ('Таблица1',50,20,'писание1')");

//        
//        
//        //        for ($i = 0; $i < 50; $i++) {
//            for ($j = 0; $j < 20; $j++) {
//                $db->query("INSERT INTO `cells` (`row`,`column`,`doc_id`) VALUES (".$i.",".$j.",1)");
//            }
//        }
        
        
        
//        $cells = $db->query("SELECT * FROM `cells`");
//        $t = time();
//        foreach ($cells as $cell) {
//            $db->query("INSERT INTO `items` (`date`,`cell_id`) VALUES (".$t.",".$cell['id'].")");
//            $last = mysqli_insert_id($db->db);
//            
//            $db->query("UPDATE `cells` SET `item_id`=".$last." WHERE `id`=".$cell['id']);
//        }
    }
}
