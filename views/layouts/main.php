<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="author" content="reskwer">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
        <script type='text/javascript' src="/assets/js/script.js"></script>
        <link rel="stylesheet" href="/assets/css/style.css">
    </head>
    <body>
        <div id="main">
            <div id="header">
                <?if(isset($_SESSION['isGuest'])):?>
                <a href="/site/logout">Выйти</a>
                <? endif;?>
                <div style='width:100px;height:20px;background-color:black;position:relative;' 
                    onmousedown='hook(event)' onmouseout='hook(event)'>
                    <div style="width: 90%; height: 20px;background: red;margin:0 auto;">
                        
                    </div>
                </div>
            </div>
            <br>
            <div id="conteiner">
                <?= $content; ?>
            </div>
            <br>
            <footer>
                Andrew Sosljuk 2016 © Все права защищены
            </footer>
        </div>

    </body>
</html>