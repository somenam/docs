<?php

require_once ROOT.'/models/Docs.php';

class DocsController
{

    public function actionIndex()
    {
        $model = new Docs();
        $docs = $model->getList();
        return View::render('docs_list_view', $docs);
    }

    public function actionView()
    {
        $model = new Docs();
        $doc = $model->getOne($_GET['id']);
        return View::render('docs_view', $doc);
    }

    public function actionUpdate()
    {
        //return  json_encode($_POST);
        $model = new Docs();
        $doc = $model->update();
        return true;
    }

}
