<p id="update"></p>
<p><?= $data['doc']['name']?></p>

<p><?= $data['doc']['descr']?></p>

<div id="url"><?=URL?></div>


<form method="post" action="" id="form_id">
    <input type="text" id="name" style="width: 80%" name="name" value="" /><br/>
    <input type="hidden" name="docid" id="docid" value="<?= $data['doc']['id']?>" /><br/>
    <input type="hidden" id="colcord" name="colcord" value="" /><br/>
    <input type="button" id="tableid" value="send" style="display: none;" onclick="AjaxFormRequest('result_div_id', 'form_id', 'form.php')" />
</form>

<button id="save">Сохранить</button>
<br><br>


<div class="tbl">
    <div class="row hdr" style="min-height: 20px;">
        <div class="thead"  style="float: left; width: 60px;border: 1px solid black;min-height: 20px;background: gray;"></div>
        <? foreach($data['rows'][0] as $cell):?>
        <div class="thead"  style="float: left; width: 60px;border: 1px solid black;min-height: 20px;background: gray;"><?= $cell['column'] + 1 ?></div>
        <? endforeach;?>
        <div style="clear: both"></div>
    </div>


    <?php
    foreach ($data['rows'] as $key => $row) {
        ?>  
        <div class="row str" style="min-height: 20px;">
            <div class="rowcol" style="float: left; width: 60px;border: 1px solid black;min-height: 20px;background: gray;"><?= $key+1 ?></div>
            <? foreach($row as $cell):?>
            <div class="cel cel<?= $cell['column'] ?>" data-id="<?= $cell['row'] ?>,<?= $cell['column'] ?>" style="float: left; width: 60px;border: 1px solid black;height: 20px;overflow-x: hidden;overflow-y: hidden;"><?= $cell['value'] ?></div>
            <? endforeach;?>
        </div>
        <div style="clear: both"></div>
        <?php
    }
    ?>

</div>

<!--<script type="text/javascript">
    
    $(document).ready(function () {
        alert("Из шляпы достали кролика!");

    });

</script>-->


