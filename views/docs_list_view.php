kонтент списка доков
<table border="1" bordercolor="black" class="table table-striped">
        <thead>
            <tr>
                <th width="150">Название</th>
                <th width="150">Владелец</th>
            </tr>
        </thead>
        <? foreach($data as $item):?>
        <tr>
            <td><?= $item['col']; ?></td>
            <td><?= $item['field1']; ?></td>
        </tr>
        <? endforeach;?>

    </table>