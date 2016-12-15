kонтент списка доков
<table border="1" bordercolor="black" class="table table-striped">
        <thead>
            <tr>
                <th width="150">колонок</th>
                <th width="150">строк</th>
            </tr>
        </thead>
        <? foreach($data as $item):?>
        <tr>
            <td><?= $item['col']; ?></td>
            <td><?= $item['row']; ?></td>
        </tr>
        <? endforeach;?>

    </table>