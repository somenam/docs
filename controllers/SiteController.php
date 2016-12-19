<?php

class SiteController
{

    public function actionIndex()
    {
        $data = array();
        if (isset($_SESSION['isGuest'])) {
            $data['info'] = TRUE;
                return View::render('index_view', $data);
            
            
        }
        if (isset($_POST['login']) && isset($_POST['password'])) {
            if ($_POST['login'] == 'admin' && $_POST['password'] == 'admin') {
                $_SESSION['isGuest'] = false;
                header('Location: /docs', true, 303);
            } else {
                $data['error'] = 'Неверный логин или пароль';
                return View::render('index_view', $data);
            }
        }
        return View::render('index_view');
    }

    public function actionLogout()
    {
        $_SESSION = array();
        session_destroy();
        header('Location: /', true, 303);
    }

}
