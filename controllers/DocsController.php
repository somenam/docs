<?php

require_once ROOT.'/models/Docs.php';

class DocsController
{

    public function actionIndex()
    {
        $model = new Docs();
        $docs = $model->getSize();
        return View::render('docs_list_view', $docs);
    }

    public function actionView()
    {
        return true;
    }

}
