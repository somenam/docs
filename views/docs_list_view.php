
<?if($data):?>
<div style="width: 500px;">
  <table class="table table-striped" border="1">
    <thead>
      <tr>
        <th>Имя</th>
        <th>Описание</th>
      </tr>
    </thead>
    <tbody>
        <? foreach($data as $item):?>
      <tr>
          <td><a href="docs/view?id=<?= $item['id'];?>">Таблица1</a></td>
        <td>Описание1</td>
      </tr>
      <? endforeach;?>
    </tbody>
  </table>
</div>
<?else:?>
<h2>Нет таблиц</h2>
<?endif;?>
