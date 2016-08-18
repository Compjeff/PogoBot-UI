<?php

$options = [
    ['label'=>'Player info', 'page'=>'player_info.php', 'click'=>'showPlayerInfo();'],
    ['label'=>'Eggs', 'page'=>'eggs.php', 'click'=>'showEggs();']
];
$current = basename($_SERVER['SCRIPT_NAME']);

?>

<div class="btn-group btn-group-sm pull-right">
    <?php foreach($options as $item): ?>
    <button class="btn <?php echo $item['page']==$current ? 'btn-primary' : 'btn-default'; ?>"
            <?php $item['page']==$current && print('disabled'); ?>
            <?php $item['page']==$current || print('onclick="'.$item['click'].'"'); ?>>
        <?php echo htmlentities($item['label']); ?>
    </button>
    <?php endforeach; ?>
</div>
<div class="clearfix"></div>
