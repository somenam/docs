<?if(isset($data['error'])):?>
<p style="color: red;"><?= $data ?></p>
<? endif;?>

<?if(isset($data['info'])):?>
<a href="docs">Документы</a>
<?else:?>
<form action="" method="POST">
    <p><input type="text" name="login" value=""></p>
    <p><input type="password" name="password" value=""></p>
    <p><input type="submit" value="отправить"></p> 
</form>
<? endif;?>

