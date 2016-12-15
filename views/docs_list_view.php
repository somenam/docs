<div class="tbl">
    <div class="row hdr" style="min-height: 20px;">
        <?php for ($i = 0; $i < 20; $i++) { ?>
        <div class="cel cel<?= $i?>" data-id="{0,<?= $i?>}" style="float: left; width: 60px;border: 1px solid black;min-height: 20px;">0,<?= $i?></div>
        <?php }?>
        <div style="clear: both"></div>
    </div>
    <?php for ($i = 1; $i < 50; $i++) { ?>
    <div class="row str" style="min-height: 20px;">
        <?php for ($j = 0; $j < 20; $j++) { ?>
        <div class="cel cel<?= $i?>" data-id="{<?= $i?>,<?= $j?>}" style="float: left; width: 60px;border: 1px solid black;min-height: 20px;"><?= $i?>,<?= $j?></div>
        <?php }?>
        <div style="clear: both"></div>
    </div>
    <?php }?>
    
</div>