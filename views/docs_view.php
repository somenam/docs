
<div class="tbl">
    <div class="row hdr" style="min-height: 20px;">
        <? foreach($data['rows'][0] as $cell):?>
        <div class="cel cel<?= $cell['column'] ?>" data-id="{0,<?= $cell['column'] ?>}" style="float: left; width: 60px;border: 1px solid black;min-height: 20px;">0,<?= $cell['column'] ?></div>
        <? endforeach;?>
        <div style="clear: both"></div>
    </div>


    <?php
    foreach ($data['rows'] as $key => $row) {
        if ($key == 0) {
            continue;
        }
        ?>  
        <div class="row str" style="min-height: 20px;">
            <? foreach($row as $cell):?>
            <div class="cel cel<?= $cell['column'] ?>" data-id="{<?= $cell['row'] ?>,<?= $cell['column'] ?>}" style="float: left; width: 60px;border: 1px solid black;min-height: 20px;"><?= $cell['row'] ?>,<?= $cell['column'] ?></div>
            <? endforeach;?>
        </div>
    <div style="clear: both"></div>
        <?php
    }
    ?>

</div>


