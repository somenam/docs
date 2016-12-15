<?php

class SiteController
{

    public function actionIndex()
    {
        if (isset($_POST)) {
            var_dump($_POST);
        }
        return View::render('index_view');
    }

}
