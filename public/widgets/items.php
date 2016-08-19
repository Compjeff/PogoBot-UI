<?php
$args = json_decode($_POST['args'], true);

$player = $args['player'];

$items = $args['items'];

$totalItems = 1;
foreach($items as $itemId => $itemCount) {
    $totalItems += $itemCount;
}

include __DIR__ . '/menu_player.php';
?>

<h3>
    Items
    &dash;
    <small>
    <?php echo $totalItems; ?> / <?php echo $player['max_item_storage']; ?>
    </small>
</h3>

<div class="row">
    <div class="col-md-3">
        <div class="info-item">
            <label>Pokeball</label>
            <?php echo empty($items['1']) ? 0 : $items['1']; ?>
        </div>
    </div>
    <div class="col-md-3">
        <div class="info-item">
            <label>Greatball</label>
            <?php echo empty($items['2']) ? 0 : $items['2']; ?>
        </div>
    </div>
    <div class="col-md-3">
        <div class="info-item">
            <label>Ultraball</label>
            <?php echo empty($items['3']) ? 0 : $items['3']; ?>
        </div>
    </div>
    <div class="col-md-3">
        <div class="info-item">
            <label>Masterball</label>
            <?php echo empty($items['4']) ? 0 : $items['4']; ?>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-3">
        <div class="info-item">
            <label>Portion</label>
            <?php echo empty($items['101']) ? 0 : $items['101']; ?>
        </div>
    </div>
    <div class="col-md-3">
        <div class="info-item">
            <label>Super portion</label>
            <?php echo empty($items['102']) ? 0 : $items['102']; ?>
        </div>
    </div>
    <div class="col-md-3">
        <div class="info-item">
            <label>Hyper portion</label>
            <?php echo empty($items['103']) ? 0 : $items['103']; ?>
        </div>
    </div>
    <div class="col-md-3">
        <div class="info-item">
            <label>Max portion</label>
            <?php echo empty($items['104']) ? 0 : $items['104']; ?>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-3">
        <div class="info-item">
            <label>Revive</label>
            <?php echo empty($items['201']) ? 0 : $items['201']; ?>
        </div>
    </div>
    <div class="col-md-3">
        <div class="info-item">
            <label>Max Revive</label>
            <?php echo empty($items['202']) ? 0 : $items['202']; ?>
        </div>
    </div>
    <div class="col-md-3">
        <div class="info-item">
            <label>Lucky Egg</label>
            <?php echo empty($items['301']) ? 0 : $items['301']; ?>
        </div>
    </div>
    <div class="col-md-3">
        <div class="info-item">
            <label>Lure module</label>
            <?php echo empty($items['501']) ? 0 : $items['501']; ?>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-3">
        <div class="info-item">
            <label>Incense</label>
            <?php echo empty($items['401']) ? 0 : $items['401']; ?>
        </div>
    </div>
    <div class="col-md-3">
        <div class="info-item">
            <label>Spicy Incense</label>
            <?php echo empty($items['402']) ? 0 : $items['402']; ?>
        </div>
    </div>
    <div class="col-md-3">
        <div class="info-item">
            <label>Cool Incense</label>
            <?php echo empty($items['403']) ? 0 : $items['403']; ?>
        </div>
    </div>
    <div class="col-md-3">
        <div class="info-item">
            <label>Floral Incense</label>
            <?php echo empty($items['404']) ? 0 : $items['404']; ?>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-3">
        <div class="info-item">
            <label>Razz Berry</label>
            <?php echo empty($items['701']) ? 0 : $items['701']; ?>
        </div>
    </div>
    <div class="col-md-3">
        <div class="info-item">
            <label>Bluk Berry</label>
            <?php echo empty($items['702']) ? 0 : $items['702']; ?>
        </div>
    </div>
    <div class="col-md-3">
        <div class="info-item">
            <label>Nanab Berry</label>
            <?php echo empty($items['703']) ? 0 : $items['703']; ?>
        </div>
    </div>
    <div class="col-md-3">
        <div class="info-item">
            <label>Wepar Berry</label>
            <?php echo empty($items['704']) ? 0 : $items['704']; ?>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-3">
        <div class="info-item">
            <label>Pinap Berry</label>
            <?php echo empty($items['705']) ? 0 : $items['705']; ?>
        </div>
    </div>
    <div class="col-md-3">
        <div class="info-item">
            <label>X Attack</label>
            <?php echo empty($items['602']) ? 0 : $items['602']; ?>
        </div>
    </div>
    <div class="col-md-3">
        <div class="info-item">
            <label>X Defense</label>
            <?php echo empty($items['603']) ? 0 : $items['603']; ?>
        </div>
    </div>
    <div class="col-md-3">
        <div class="info-item">
            <label>X Miracle</label>
            <?php echo empty($items['604']) ? 0 : $items['604']; ?>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-3">
        <div class="info-item">
            <label>Incubator</label>
            <?php echo (empty($items['901']) ? 0 : $items['901']) + (empty($items['902']) ? 0 : $items['902']); ?>
        </div>
    </div>
    <div class="col-md-3">
        <div class="info-item">
            <label>Pokemon Storage Upgrade</label>
            <?php echo empty($items['1001']) ? 0 : $items['1001']; ?>
        </div>
    </div>
    <div class="col-md-3">
        <div class="info-item">
            <label>Item Storage Upgrade</label>
            <?php echo empty($items['1002']) ? 0 : $items['1002']; ?>
        </div>
    </div>
    <div class="col-md-3">
        <div class="info-item">
            <label>Camera</label>
            1
        </div>
    </div>
</div>
