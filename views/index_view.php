<?if(isset($data['error'])):?>
<p style="color: red;"><?= $data['error'] ?></p>
<? endif;?>

<?if(isset($data['info'])):?>
<a href=<?=URL.'docs'?>>Документы</a>
<?else:?>
<form action="" method="POST">
    <p><input type="text" name="login" value=""></p>
    <p><input type="password" name="password" value=""></p>
    <p><input type="submit" value="отправить"></p> 
</form>
<? endif;?>

